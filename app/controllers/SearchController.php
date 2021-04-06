<?php

namespace app\controllers;

class SearchController extends AppController {


    public function productAction(){
        $this->setMeta('Поиск товаров','Поисковик сайта Интернет Магазина Технопласт', 'Поисковик сайта Интернет Магазина Технопласт');
        if(!empty($_GET['q']) and $_GET['q'] != '') {
            $id = "%" . $_GET['q'] . "%";
            $id = htmlspecialchars($id);
            
            if( $parent = \R::findOne('parent_category', 'name LIKE ?', ["$id"])){
                $products = \R::findAll('product', 'parent_category_id LIKE ?', ["$parent->id"]);
                
                
            }elseif($category = \R::findOne('category', 'cat_name LIKE ?', ["$id"]))
            $products = \R::findAll('product', 'category_id LIKE ?', ["$category->id"]);
            else{
             $products = \R::findAll('product', 'title LIKE ?', ["$id"]);
            }

            $this->set(compact('products'));
        }
    }
}