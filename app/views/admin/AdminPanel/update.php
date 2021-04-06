<div class="container">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-dark" href="/admin/main/adminout">Выйти из админки</a>
            <h2 style="text-align: center;padding-top: 20px;">Редактирование товара</h2>
            <form action="" method="post" enctype="multipart/form-data" style="width: 600px;margin: auto;padding-top: 10px;padding-bottom: 100px">
                <?php  foreach ($product as $item){
                    $array = explode(";", $item->feature);
                    foreach ($array as $product) {
                        $arr = explode(":", $product);
                        @$feat[$arr[0]] = $arr[1];
                    }
                    $id = $item->id;
                
                    ?>
                    
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Категория продукта:</label>
                        <input type="text" class="form-control" name="category_id"  placeholder="Введите название товара" value="<?=$item->category_id?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Наименование продукта:</label>
                        <input type="text" class="form-control" name="product_name"  placeholder="Введите название товара" value="<?=$item->title?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Изображение:</label>
                        <input type="file" class="form-control" name="file" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите описание товара</label>
                        <textarea  type="text" name="desc" class="form-control"  placeholder='Введите описание'><?=$item->description;?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Цена продукта:</label>
                        <input type="text" class="form-control" name="price"  value="<?=$item->price?>">
                    </div>
                    <?php foreach ($feat as $k => $v){ ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?=$k?>:</label>
                        <input type="text" class="form-control" name="<?=$k?>"  placeholder="Введите название товара" value="<?=$v?>">
                    </div>
                <?php }} ?>
                <div class="form-group" style="display: flex;justify-content: space-between;align-items: center">
                    <a class="btn btn-dark" href="/admin/admin-panel/view">Назад</a>
                    <a class="btn btn-danger" href="/admin/admin-panel/delete?id=<?=$id?>">Удалить</a>
                    <input style="display: block" type="submit" class="btn btn-success" name="save-data"  value="Сохранить" ">
                </div>
        </div>
        </form>
    </div>
</div>