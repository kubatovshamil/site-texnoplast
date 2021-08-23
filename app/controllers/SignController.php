<?php

namespace app\controllers;

use ishop\Validation;

class SignController extends AppController {


    public function indexAction(){
        $this->setMeta('Регистрация, вход','Интернет магазин - Регистрация, вход','Интернет магазин - Регистрация, вход');
        if(isset($_SESSION['user'])){
            header('Location: /');
        }
        if(isset($_POST['sign-add'])){
            if($this->signValidation()){
                $data = $_POST;
                if($data['user-password'] === $data['user-password2']){
                    $user = \R::dispense('users');
                    $user->surname = $_POST['surname'];
                    $user->name = $_POST['name'];
                    $user->username = $_POST['user-name'];
                    $user->password = sha1($_POST['user-password']);
                    $user->email = $_POST['email'];
                   $save =  \R::store($user);
                   if($save){
                       $success = "<strong>{$_POST['name']}</strong>, успешно зарегистрировались!";
                       $this->set(compact('success'));
                   }
                }
            }

        }

        if(isset($_POST['login'])){
            if($this->logInCheck($_POST)){
                $data = $_POST;
                $user = \R::findOne('users', 'username = ? and password = ?',[$data['user-name'], sha1($data['user-password'])]);
                if($user){
                    $_SESSION['user'] = $user->username;
                    setcookie('user', $user->username, time() + (86400 * 30));
                    header("Location: /");
                }
            }
        }

    }

    protected function signValidation(){
        if(!empty($_POST)) {
            $val = new Validation();
            $val->name('surname')->value($_POST['surname'])->min(4)->max(32)->required();
            $val->name('name')->value($_POST['name'])->min(3)->max(32)->required();
            $val->name('email')->value($_POST['email'])->pattern('email')->min(10)->max(40)->required();
            $val->name('user-name')->value($_POST['user-name'])->pattern('alpha')->min(3)->max(32)->required();
            $val->name('password')->value($_POST['user-password'])->customPattern('[A-Za-z0-9-.;_!#@]{5,25}')->required();
            $val->name('password2')->value($_POST['user-password2'])->customPattern('[A-Za-z0-9-.;_!#@]{5,25}')->required();
            if ($val->isSuccess()) {
                return true;
            }else{
            }
        }
    }


    protected function logInCheck($data){
        if(!empty($data)){
            $val = new Validation();
            $val->name('user-name')->value($data['user-name'])->pattern('alpha')->min(3)->max(32)->required();
            $val->name('password')->value($data['user-password'])->customPattern('[A-Za-z0-9-.;_!#@]{5,25}')->required();
            if ($val->isSuccess()) {
                return true;
            }
        }
    }


    public function outAction(){
        setcookie('user', $_SESSION['user'], -(time() + (86400 * 30)));
        $_SESSION = array();
        session_destroy();
        header("Location: /");
        die();
    }

}