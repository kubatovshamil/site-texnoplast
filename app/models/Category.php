<?php

namespace app\models;

class Category extends AppModel{

	private const LIKE_NAME = "cat_name LIKE ?";
	private const BY_ID = "id = ?";
	private const BY_CATEGORY_LINK = "category_link = ?";

	/**
     * @return Object
	*/
	public static function getLikeByName(String $name){
		return \R::findOne('category', self::LIKE_NAME, ["$name"]);
	}

 	/**
     * @return Object
  */
	public static function getById(int $id){
		return \R::findOne('category', self::BY_ID, [$id]);
	}

	/**
     * @return Object
  */
	public static function getByCategoryLink(String $name){
		return \R::findOne('category', self::BY_CATEGORY_LINK , [$name]);
	}

}
