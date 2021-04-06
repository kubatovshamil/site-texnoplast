<?php

function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function cheackFiles($arr, $type){
    if($arr > 0){
        echo 'Проблема :';
        switch ($arr){
            case 1:
                echo 'Размер файла превышает значение upload_max_filesize.';
                break;
            case 2:
                echo 'Размер файла превышает значение max_file_size.';
                break;
            case 3:
                echo 'Файл загружен только частично.';
                break;
            case 4:
                echo 'Файл не был загружен.';
                break;
            case 6:
                echo 'Не удалось загрузить файл: не указан временный каталог.';
                break;
            case 7:
                echo 'Загрузка потерпела неудачу: не удалось выполнить запись на диск.';
                break;
            case 8:
                echo 'Расширение PHP заблокировало загрузку файла.';
                break;
        }
        exit;
    }

    if ($type != 'image/png' and $type != 'image/jpeg')
    {
        echo 'Проблема: файл не является изображением PNG.';
        exit;
    }
}

function getCategory(){
    $parent = \R::findAll('parent_category');
    
    $arr = [];
    foreach($parent as $k => $v){
        $arr[$k] = [
            'name' => $v->name,
            'parent_link' => $v->parent_link
        ];
    }
    
    $category = \R::findAll('category');
    $newCategory = [];
    foreach($arr as $k => $v){
            $newCategory[$k] = [
                'name' => $v['name'],
                'parent_link' => $v['parent_link']
            ];
        foreach($category as $k2 => $v2){
            if(empty($newCategory[$k][$v2->id])){
                if($v2->parent_category_id == $k){
                    $newCategory[$k][$v2->id] = [
                        'category_name' => $v2->cat_name,
                        'category_link' => $v2->category_link
                    ];
                }
            }
        }
    }
    
    return $newCategory;


}





