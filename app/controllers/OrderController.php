<?php

namespace app\controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use ishop\App;

class OrderController extends AppController {



    public function setOrder($order, $data){
      $order->fullname = $data['fullname'];
      $order->phone = $data['phone'];
      $order->email = $data['email'];
      $order->country = $data['country'];
      $order->zipcode = $data['index'];
      $order->city = $data['city'];
      $order->street = $data['street'];
      $order->building = $data['building'];
      $order->room = $data['room'];
      if(!empty($data['address'])){
        $order->address = $data['address'];
      }

      $order->sum = $_SESSION['totalSum'];
      $order->date = date('Y-m-d h:i:s');
      \R::store($order);
    }

    public function sendAction(){
        if(empty($_SESSION['cart'])){
            header("Location: /");
            die();
        }
        $order = \R::dispense('orders');
        $this->setOrder($order, $_POST);

        $order_id = \R::findOne('orders', 'fullname = ? and phone = ? and email = ? and date = ?',[$_POST['fullname'], $_POST['phone'], $_POST['email'], date('Y-m-d h:i:s')]);
        \R::ext('xdispence', function ($table_name){
            return \R::getRedBean()->dispense($table_name);
        });

        foreach ($_SESSION['cart'] as $item){
            $order_product = \R::xdispence('order_product');
            $order_product->order_id = $order_id->id;
            $order_product->product_id = $item['id'];
            $order_product->product_name = $item['title'];
            $price = floatval(preg_replace('/[^0-9]/', '', $item['price']));
            $order_product->price = $price;
            $order_product->quantity = $item['quantity'];
            $order_product->sum = 1000;;
            \R::store($order_product);
        }

        $mail = new PHPMailer(true);

          $mail->isSMTP();
          $mail->Host       = App::$app->getProperty("smtp_host");
          $mail->SMTPAuth   = true;
          $mail->Username   = App::$app->getProperty("mail_login");
          $mail->Password   = App::$app->getProperty("mail_pw");
          $mail->SMTPSecure = 'ssl';
          $mail->Port       = 465;
          $mail->setFrom('shamil.kubatov@mail.ru');
          $mail->addAddress('shamil.kubatov@mail.ru');

          $mail->isHTML(true);
          ob_start();
          require_once APP . '/views/mail/mail.php';
          $body = ob_get_clean();
          $mail->Subject = 'Заказ номер ' . $order_id->id;
          $mail->Body    = $body;
          $mail->CharSet = 'UTF-8';
          $mail->send();
          $order_id = $order_id->id;
          $this->set('order_id');
          unset($_SESSION['cart']);
          unset($_SESSION['total.Quantity']);
          unset($_SESSION['totalSum']);
    }

}
