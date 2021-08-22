<?php

namespace app\controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use ishop\App;

class OrderController extends AppController {


    public function sendAction(){

      $order = \R::dispense('orders');
      $this->setOrder($order);

      $order_id = \R::findOne('orders', 'fullname = ? and phone = ? and email = ? and date = ?',[$_POST['fullname'], $_POST['phone'], $_POST['email'], date('Y-m-d h:i:s')]);
      \R::ext('xdispence', function ($table_name){
          return \R::getRedBean()->dispense($table_name);
      });

      $this->loadingToOrdersProduct($order_id);

      $this->sendToEmail($order);

      $order_id = $order_id->id;
      
      $this->set('order_id');

      $this->deleteCart();
    }
  
    public function deleteCart(){
      unset($_SESSION['cart']);
      unset($_SESSION['total.Quantity']);
      unset($_SESSION['totalSum']);
    }

    public function loadingToOrdersProduct($order_id){
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
    }

    public function sendToEmail($order, String $template = 'mail'){
      try{
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = App::$app->getProperty("smtp_host");
        $mail->SMTPAuth = true;
        $mail->Username = App::$app->getProperty("mail_login");
        $mail->Password = App::$app->getProperty("mail_pw");
        $mail->SMTPSecure = App::$app->getProperty("smtp_security");
        $mail->Port = App::$app->getProperty("smtp_port");
        $mail->setFrom(App::$app->getProperty("mail_login"), $_POST['fullname']);
        $mail->addAddress(App::$app->getProperty("mail_login"), $_POST['fullname']);
        $mail->isHTML(true);
        ob_start();
        require_once APP . '/views/mail/'.  $template . '.php';
        $body = ob_get_clean();
        $mail->Subject = 'Сделан новый заказ под номером  №' . $order_id->id;
        $mail->Body = $body;
        $mail->CharSet = 'UTF-8';
        $mail->send();
      } catch(Exception $e){
        echo $e->getMessage();
      }
    }
    public function setOrder($order){
      $order->fullname = $_POST['fullname'];
      $order->phone = $_POST['phone'];
      $order->email = $_POST['email'];
      $order->country = $_POST['country'];
      $order->zipcode = $_POST['index'];
      $order->city = $_POST['city'];
      $order->street = $_POST['street'];
      $order->building = $_POST['building'];
      $order->room = $_POST['room'];

      if(!empty($_POST['address'])){
        $order->address = $_POST['address'];
      }

      $order->sum = $_SESSION['totalSum'];
      $order->date = date('Y-m-d h:i:s');
      \R::store($order);
    }

}
