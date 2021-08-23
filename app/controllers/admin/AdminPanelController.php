<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class AdminPanelController extends AppController {

    public $layout = 'template-admin';

    public function createAction() {
        if (isset($_SESSION['admin'])){
            $this->setMeta('Добавление товара');
            $category = \R::findAll('category');
            
            $this->set(compact('category'));
            $categoryInsert = \R::dispense('category');
            $product = \R::dispense('product');
            if (isset($_POST['submit'])) {
                cheackFiles($_FILES['file']['error'], $_FILES['file']['type']);
                $uploaded_file = WWW . '/img/product/' . $_FILES['file']['name'];
                if (is_uploaded_file($_FILES['file']['tmp_name'])) {
                    var_dump($uploaded_file);
                    if (!move_uploaded_file($_FILES['file']['tmp_name'], $uploaded_file)) {
                        echo 'Проблема: не удалось переместить файл в целевой каталог!.';
                        exit;
                    }
                } else {
                    echo 'Проблема: возможная атака через загрузку файла. Имя файла: ';
                    echo $_FILES['file']['name'];
                    exit;
                }
                if (isset($_POST['category'])) {
                    cheackFiles($_FILES['category_image']['error'], $_FILES['category_image']['type']);
                    $uploaded_file = WWW . '/img/category/' . $_FILES['category_image']['name'];
                    if (is_uploaded_file($_FILES['category_image']['tmp_name'])) {
                        if (!move_uploaded_file($_FILES['category_image']['tmp_name'], $uploaded_file)) {
                            echo 'Проблема: не удалось переместить файл в целевой каталог.';
                            exit;
                        }
                    } else {
                        echo 'Проблема: возможная атака через загрузку файла. Имя файла: ';
                        echo $_FILES['category_image']['name'];
                        exit;
                    }

                    $categoryInsert->cat_name = trim($_POST['category']);
                    $categoryInsert->cat_image = $_FILES['category_image']['name'];
                    $categorySave = \R::store($categoryInsert);
                }
                $count = array_keys($_POST)[count($_POST) - 2];
                $str = '';
                $arrStr = [];
                for ($i = 1; $i <= $count; $i++) {
                    if ($i % 2 == 0) {
                        $str = $_POST[$i - 1] . ":" . str_replace(";", ".", $_POST[$i]) . ";";
                        $arrStr[] = $str;
                    }
                }
                $insert = implode($arrStr);

                if (isset($_POST['category'])) {
                    $category = \R::findAll('category', 'cat_name = ?', [$_POST['category']]);
                    foreach ($category as $cat) {
                        $product->category_id = $cat->id;
                        $product->title = trim($_POST['product_name']);
                        $product->price = trim($_POST['price']);
                        $product->description = trim($_POST['desc']);
                        $product->img = $_FILES['file']['name'];
                        $product->product_link = trim($_POST['product_link']);
                        $product->feature = trim($insert, ";");
                        $save = \R::store($product);
                        header("Location:/admin/admin-panel/create");
                    }
                } else {
                    $category = \R::findOne('category', 'id = ?', [$_POST['select']]);
                    $product->category_id = trim($_POST['select']);
                    $product->parent_category_id = $category->parent_category_id;
                    $product->title = trim($_POST['product_name']);
                    $product->price = trim($_POST['price']);
                    $product->description = trim($_POST['desc']);
                    $product->img = $_FILES['file']['name'];
                    $product->product_link = trim($_POST['product_link']);
                    $product->feature = trim($insert, ";");
                    $save = \R::store($product);
                    header("Location:/admin/admin-panel/create");
                }
            }
        }else{
            header("Location:/");
        }
    }
}