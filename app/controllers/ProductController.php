<?php

namespace app\controllers;

use ishop\Paginator;

class ProductController extends AppController {


    public function catalogAction() {
        $id = key($_GET);
        $id = trim(str_replace("subcategory/","",$id));
        
        $content = \R::findOne('category', 'category_link = ?', [$id]);
            
        if(!$content){
            throw new \Exception("Нет такой страницы",404);
        }

        $pages = new Paginator('12', 'p');
        $id = $content->id;
        $total = $count = \R::count( 'product', 'category_id = ?', [$id]);
        $pages->set_total($total);
        $result = \R::findAll('product','category_id = ? '. $pages->get_limit(), [$id]);
        $pageLinks = $pages->page_links();
        $this->set(compact('result','pageLinks'));
        $this->setMeta('Подкатегория товаров', $content->content, $content->keywords);
    }


    public function parentAction(){
        
        

        $id = key($_GET);
        $id = trim(str_replace("category/","",$id));
        $content = \R::findOne('parent_category','parent_link = ?', [$id]);
        
        
         if(!$content){
            throw new \Exception("Нет такой страницы",404);
        }

        $this->setMeta('Категории товаров', $content->content, $content->keywords);
        $id = $content->id;
        $pages = new Paginator('12', 'p');
        $total = $count = \R::count( 'product', 'parent_category_id = ?', [$id]);
        $pages->set_total($total);
        $result = \R::findAll('product','parent_category_id = ? '. $pages->get_limit(), [$id]);
        $pageLinks = $pages->page_links();
        $this->set(compact('result','pageLinks'));
    }



    public function indexAction() {
        $this->setMeta('Каталог', 'Каталог товаров', 'Каталог товаров');
        $pages = new Paginator('12', 'p');
        $total = $count = \R::count( 'product');
        $pages->set_total($total);
        $result = \R::findAll('product',' '. $pages->get_limit());
        $pageLinks = $pages->page_links();
        $this->set(compact('result','pageLinks'));

    }
}






