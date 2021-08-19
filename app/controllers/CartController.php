<?php
namespace app\controllers;

use app\models\Product;
use app\models\Category;

class CartController extends AppController {

    public function productAction(){
        $id = preg_replace("#(([A-Za-z0-9\-\*]+)/)#", "", key($_GET)); 
        if($product =  Product::getByLink($id)){
            $this->setMetaProduct($product);
            $this->set(compact('product'));
        }else{
            throw new \Exception("Нет такого товара",404);
        }
    }


    public function setMetaProduct(Array $product){
        $id = 0; 
        foreach($product as $item){
            $id = $item->id;
        }
        $cat_id = $product[$id]['category_id'];
        $category = Category::getById($cat_id);
        if($category){
            $this->setMeta("Технопластик - товар", $category->content, $category->keywords);
        }
    }

    public function addAction(){
        $this->layout = 'empty';
        $id = $_GET['data'];
        $valueInp = (int) $_GET['value'];
        $product  = \R::findOne('product', 'id = ?',[$id]);
        $this->addToCart($product, $valueInp);
        $this->set(compact('product'));
    }


    public function updateAction(){
        $this->layout = 'empty';
    }

    public function updatecartAction(){
        $this->layout = 'empty';
    }


    public function changeAction(){
        $this->layout = 'empty';
        $id = $_GET['id'];
        $value = $_GET['value'];
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['totalSum'] -= $_SESSION['cart'][$id]['price'] * $_SESSION['cart'][$id]['quantity'];
            $_SESSION['totalSum'] += $_SESSION['cart'][$id]['price'] * $value;
            $_SESSION['total.Quantity'] -= $_SESSION['cart'][$id]['quantity'];
            $_SESSION['total.Quantity'] += $value;
            $_SESSION['cart'][$id]['quantity'] = $value;
        }
        $this->set(compact('id'));
    }

    public function addToCart($product, $valueInp){
        $product->price = (int) preg_replace("#[^\d]#", "", $product->price);
        if(!$product->price){
            $product->price = 0;
        }

        if(isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart'][$product->id]['quantity'] += $valueInp;
        }else {
            $_SESSION['cart'][$product->id] = [
                'id' => $product->id,
                'title' => $product->title,
                'img' => $product->img,
                'price' => $product->price,
                'quantity' => $valueInp
            ];
        }

        $_SESSION['total.Quantity'] = isset($_SESSION['total.Quantity'])? $_SESSION['total.Quantity'] += $valueInp : $valueInp;
        $_SESSION['totalSum'] = isset($_SESSION['totalSum']) ? $_SESSION['totalSum'] + $product->price * $valueInp : $product->price * $valueInp;
    }

    public function cartAction(){
        if(empty($_SESSION['cart'])){
            header('Location: /');
        }
    }


    public function deleteAction(){
        $this->layout = 'empty';
        $_SESSION = [];
        session_destroy();
    }

    public function deletecartAction(){
        $this->layout = 'empty';
        $id = $_POST['id'];
        
        $_SESSION['total.Quantity'] -= $_SESSION['cart'][$id]['quantity'];
        $_SESSION['totalSum'] -= $_SESSION['cart'][$id]['price'] * $_SESSION['cart'][$id]['quantity'];
        unset($_SESSION['cart'][$id]);
    }

    public function deleteidAction(){
        $this->layout = 'empty';
        $id = $_POST['id'];
        $_SESSION['total.Quantity'] -= $_SESSION['cart'][$id]['quantity'];
        $_SESSION['totalSum'] -= $_SESSION['cart'][$id]['price'] * $_SESSION['cart'][$id]['quantity'];
        unset($_SESSION['cart'][$id]);
    }


    public function removeAction(){
        $this->layout = 'empty';
    }

    public function lolAction(){
        $this->layout = 'empty';
    }

}