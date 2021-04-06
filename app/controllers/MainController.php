<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {


    public function indexAction(){
        $this->setMeta('Технопластик - Интернет-Магазин','Пластиковая тара. Купить оптом и в розницу пищевую упаковку, ящики, контейнеры, поддоны, Сотовый поликарбонат, Полимерный лист',
        'Пластиковая тара. Купить оптом и в розницу пищевую упаковку, ящики, контейнеры, поддоны, Сотовый поликарбонат, Полимерный лист, продажа пористой резины, продажа уплотнителя и продажа неопрена по выгодным ценам.');
        $product = \R::getAll('SELECT * FROM product WHERE id = 534 or id = 489 or id = 436 or id =  317 or id = 264 or id = 236 or id = 235 or id = 210 or id = 245');
        $shares = \R::getAll("SELECT * FROM `product` WHERE share ='1'");
        $this->set(compact('product','shares'));
    }


    public function categoryAction() {
        $category = \R::getAll('SELECT category.id, category.cat_name, category.parent_category_id,
        parent_category.name FROM category INNER JOIN parent_category ON(category.parent_category_id = parent_category.id)');
        $parent_category = [];
        foreach ($category as $item) {
            $parent_category[$item['parent_category_id']] = $item['name'];
        }
        $parent_category = array_unique($parent_category);

        $category = \R::findAll('category');

        $categoryArr = [];
        foreach ($parent_category as $key => $value){
            foreach ($category as $item){
                if($key == $item->parent_category_id){
                    $categoryArr[$key][$value][$item->id] = $item->cat_name;
                }
            }
        }
        $this->set(compact('categoryArr'));
    }
}