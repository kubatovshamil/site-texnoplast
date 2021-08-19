<?php

namespace app\controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class OrderController extends AppController {

    public function sendAction(){
        if(empty($_SESSION['cart'])){
            header("Location: /");
            exit();
        }

        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $index = $_POST['index'];
        $city = $_POST['city'];
        $street = $_POST['street'];
        $delivery = $_POST['delivery'];
        $building = $_POST['building'];
        $room = $_POST['room'];

        $data = date('Y-m-d h:i:s');
        $order = \R::dispense('orders');
        $order->fullname = $fullname;
        $order->phone = $phone;
        $order->email = $email;
        $order->country = $country;
        $order->zipcode = $index;
        $order->city = $city;
        $order->street = $street;
        $order->building = $building;
        $order->room = $room;
        if(!empty($address)){
        $order->address = $address;
        }
        $order->sum = $_SESSION['totalSum'];
        $order->date = $data;
        \R::store($order);
        $order_id = \R::findOne('orders', 'fullname = ? and phone = ? and email = ? and date = ?',[$fullname, $phone, $email, $data]);
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
            $mail->Host       = 'smtp.mail.ru';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'your_mail@mail.ru';
            $mail->Password   = 'your_pw';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->setFrom('your_mail@mail.ru');
            $mail->addAddress('your_mail@mail.ru');

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
