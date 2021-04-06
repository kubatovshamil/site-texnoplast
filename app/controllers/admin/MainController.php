<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class MainController extends AppController{


    public function indexAction(){
        $this->layout = 'template-admin';
        if(isset($_POST['submit_admin'])) {
            $username = trim(htmlspecialchars($_POST['username']));
            $password = sha1(trim(htmlspecialchars($_POST['password'])));
            if(!empty($username) & !empty($password)) {
                $user = \R::find('users', 'username = ? and password = ? and role = ?',[$username, $password, 'admin']);
                if($user){
                    $_SESSION['admin'] = $username;
                    setcookie('admin', $username, time() + (86400 * 30));
                    header("Location: /admin/admin-panel/create");
                }else{
                    header("Location:/admin");
                }
                exit();
            }
        }
    }

    public function adminoutAction(){
        setcookie('user', $_SESSION['user'], -(time() + (86400 * 30)));
        $_SESSION = array();
        session_destroy();
        header("Location:/admin");
    }




}