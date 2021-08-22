<?php

namespace app\controllers;

use app\models\Product;
use app\models\ParentCategory;
use app\models\Category;

class MainController extends AppController {

    public function indexAction(){
        $product = Product::getAllById();

        $shares = Product::getShareById();

        $this->set(compact('product','shares'));

    }

    public function contactAction(){
        $this->setMeta('Контакты','Технопласт - инернет магазин, страница  о нас',
        'Технопласт - инернет магазин, страница  о нас');
    }

    public function searchAction(){

        if(!empty($_GET['q']) and $_GET['q'] != '') {
            $q = htmlspecialchars( "%" . $_GET['q'] . "%" );

            if( $parent = ParentCategory::getLikeName($q) ){
            	$products = Product::getByLike($parent);
            	$this->set(compact('products'));
            	die();
            }
            if($category = Category::getLikeByName($q) ){
     	       $products = Product::getByLikeId($category);
     	       $this->set(compact('products'));
     	   	}
     	   	else {
             $products = Product::getByLikeTitle($q);
             $this->set(compact('products'));
            }
        }
    }

	/**
	 */
	function __construct() {
	}
}
