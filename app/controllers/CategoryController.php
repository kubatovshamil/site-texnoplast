<?php

namespace app\controllers;

use ishop\Paginator;
use app\models\Category;
use app\models\Product;
use app\models\ParentCategory;


class CategoryController extends AppController {

    public function subCategoryAction() {
        $url = preg_replace("#(([A-Za-z0-9\-\*]+)/)#", "", key($_GET)); 
        if($product = Category::getByCategoryLink($url)){
            $this->set(compact('product'));
            $this->pagination($product, 'category_id = ?');
        }else{
            throw new \Exception("Нет такой страницы",404);
        }
    }


    public function parentCategoryAction(){
        $url = preg_replace("#(([A-Za-z0-9\-\*]+)/)#", "", key($_GET)); 
        $product = ParentCategory::getCategoryById($url);

        if($product){
            $this->set(compact('product'));
            $this->pagination($product, 'parent_category_id = ?');
        }else{
            throw new \Exception("Нет такой страницы",404);
        }
    }

    public function catalogAction() {
        $this->setMeta('Каталог', 'Каталог товаров', 'Каталог товаров');
        $pages = new Paginator('12', 'p');
        $total = \R::count( 'product');
        $pages->set_total($total);
        $result = \R::findAll('product',' '. $pages->get_limit());
        $pageLinks = $pages->page_links();
        $this->set(compact('result','pageLinks'));

    }


    public function pagination(Object $product, $query){
        $this->setMeta('Подкатегория товаров', $product->content, $product->keywords);
        $pages = new Paginator('12', 'p');
        $id = $product->id;
        $total = \R::count( 'product', $query , [$id]);
        $pages->set_total($total);
        $result = \R::findAll('product', $query . ' ' . $pages->get_limit(), [$id]);
        $pageLinks = $pages->page_links();
        $this->set(compact('result','pageLinks'));
    }
}






