<?php 

namespace app\models;

class Product extends AppModel{


    private const BYID = "select * from product ORDER BY RAND() LIMIT 9";
    private const SHAREBYID = "SELECT * FROM `product` WHERE share ='1'";
    private const BY_LIKE_PARENT_CATEGORY_ID = "parent_category_id LIKE ?";
    private const BY_LIKE_CATEGORY_ID = "category_id LIKE ?";
    private const BY_LIKE_TITLE = "title LIKE ?";
    /**
     * @return array 
     */
    public static function getAllById(){
        return \R::getAll(self::BYID);
    }

    /**
     * @return array 
     */
    public static function getShareById(){
        $share = \R::getAll(self::SHAREBYID);
        return $share;
    }

    /**
     * @return array
     */
    public static function getByLike(Object $obj){
        return \R::findAll('product', self::BY_LIKE_PARENT_CATEGORY_ID , ["$obj->id"]);
    }


    /**
     * @return array
     */
    public static function getByLikeId(Object $obj){
        return \R::findAll('product', self::BY_LIKE_CATEGORY_ID, ["$obj->id"]);
    }

    /**
     * @return array
     */
    public static function getByLikeTitle(String $name){
        return \R::findAll('product', self::BY_LIKE_TITLE, ["$name"]);
    }
    /**
     * @return Object
     */
    public static function getByLink(String $name){
        return \R::find('product','product_link = ?', [$name]);
    }
}