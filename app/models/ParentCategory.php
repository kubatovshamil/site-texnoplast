<?php

namespace app\models;

class ParentCategory extends AppModel{

	private const LIKE_NAME = "name LIKE ?";
	private const GETCATEGORIES = "SELECT category.id, category.cat_name, category.parent_category_id,
        parent_category.name FROM category INNER JOIN parent_category ON(category.parent_category_id = parent_category.id)";
    private const BY_PARENT_LINK = "parent_link = ?";

	/**
     * @return Array
  */
	public static function getCategories(){
		return \R::getAll(self::GETCATEGORIES);
	}

	/**
     * @return Object
  */
	public static function getLikeName(String $name){
		return \R::findOne('parent_category', self::LIKE_NAME, ["$name"]);
	}
	/**
     * @return Object
  */
	public static function getCategoryById(String $id){
		return \R::findOne('parent_category',self::BY_PARENT_LINK, [$id]);
	}



}
