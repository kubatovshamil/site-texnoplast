<div class="container">
    <div class="row">
        <div class="col-12" style="margin-top: 10px;">
            <a class="btn btn-dark" href="/admin/main/adminout">Выйти из админки</a>
            <a style="float: right" class="btn btn-success" href="/admin/admin-panel/view">Посмотреть товары сайта</a>
            <h2 class="form__title" style="text-align: center">Форма добавление товара</h2>
            <div class="sign-up">
                <form action="/admin/admin-panel/create" enctype="multipart/form-data" class="form-add" method="post" style="width: 500px;margin: auto;padding-bottom: 20px;">
                    <?php if($category){ ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Категория</label>
                        <div class="block-new">
                            <select id="category_select" style="display: block;width: 500px;padding: 5px;border-radius: 9px" name="select" id="">
                               <?php foreach ($category as $cat){ ?>
                                   <option value="<?=$cat->id?>"><?=$cat->cat_name;?></option>
                              <?php  } ?>
                            </select>
                        </div>
                        <small><a id="new-input" href="">Добавить новую категорию</a></small>
                    </div>
                    <?php }else{ ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите категорию</label>
                        <input id = "inp" type="text" name="category" class="form-control"  placeholder='Введите новую категорию'>
                        <input id = 'inp' type='file' name='category_image' class='form-control'>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите название товара</label>
                        <input type="text" class="form-control" name="product_name"  placeholder="Введите название товара" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите цену товара</label>
                        <input type="text" class="form-control" name="price"  placeholder="Введите цену товара" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите описание товара</label>
                        <textarea id = "desc" type="text" name="desc" class="form-control"  placeholder='Введите описание'></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Выберите изображение которую хотите загрузить</label>
                        <input type="file" class="form-control" name="file"  placeholder="Введите логин" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="link_product">Установите ссылку на товар :</label>
                        <input type="text" class="form-control" name="product_link"  placeholder="Название ссылки" required>
                    </div>
                    <small><a class="btn btn-danger" id="new-form__input" href="">Добавить характеристику</a></small>
                    <input style="float: right" type="submit" name="submit" class="btn btn-primary" id="btn-add" value="Добавить в БД">
                </form>
            </div>
        </div>
    </div>
</div>
