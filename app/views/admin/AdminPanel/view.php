<?php
$feat = [];
$feature = [];
$i=0;
foreach ($products as $product) {
    $array = explode(";", $product->feature);
    foreach ($array as $item) {
        $arr = explode(":", $item);
        @$feat[$arr[0]] = $arr[1];
    }
    $feature[$i] = $feat;
    $i++;
}
for($i=1; $i<count($feature); $i++){
    if(count($feature[$i-1]) > count($feature[$i])){
        $count = count($feature[$i-1]);
        $keyArr = $i;
    }else{
        $count = count($feature[$i]);
        $keys = array_keys($feature[$i]);
    }
}
$mass =[];
foreach ($feature as $val){
    $mass[] = array_values($val);
}
?>
<div class="container">
    <div class="row">
        <div class="table-wrap" style="padding-top: 10px">
            <a class="btn btn-dark" href="/admin/main/adminout">Выйти из админки</a>
            <a style="float: right" class="btn btn-success" href="/admin/admin-panel/create">Добавить товар на сайт</a>
            <h3 style="text-align: center;padding-top: 30px">Таблица товаров</h3>
            <table class="table-1">
                <?php if($products){ ?>
                <tr>
                    <th>Идентификатор</th>
                    <th>Идентификатор категории</th>
                    <th>Название продукта</th>
                    <th>Цена</th>
                    <th>Описание товара</th>
                    <th>Изображение</th>
                    <?php if($feature){ ?>
                        <?php foreach (@$keys as $item){ ?>
                            <th class="block-head"><?=$item?></th>
                        <?php } } ?>
                    <th>Редактирование</th>
                </tr>
                <?php } ?>
                <?php
                $i =0;
                foreach ($products as $product) {
                    echo '<tr>';
                    echo '<td>'. $product->id .'</td>';
                    echo '<td>'. $product->category_id .'</td>';
                    echo '<td>'. $product->title .'</td>';
                    echo '<td>'. $product->price .'</td>';
                    echo '<td>' . $product->description . '</td>';
                    echo '<td>'. $product->img .'</td>';
                    for ($k = 0; $k < $count; $k++) {
                        echo '<td>' . @$mass[$i][$k] . '</td>';
                    }
                    ?>
                    <td style="text-align: center"><a href="/admin/admin-panel/update?id=<?=$product->id?>"><i style="color: black" class="fa fa-edit"></i></a></td>
                <?php
                    echo '</tr>';
                    $i++;
                }
                ?>
            </table>
        </div>
    </div>
</div>