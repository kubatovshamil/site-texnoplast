<div class="container" >
    <div class="row">
        <div class="col-12" style="margin-top: 200px;">
            <h2 class="form__title" style="text-align: center">Форма входа в Админку</h2>
            <div class="sign-up">
                <form style="width:360px; margin:auto;" method="post" action="/admin/main/index">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введите ваш логин</label>
                        <input type="text" class="form-control" name="username"  placeholder="Введите логин" required>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Введите ваш пароль</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Введите ваш пароль" required>
                    </div>
                    <input type="submit" name="submit_admin" class="btn btn-primary" value="Войти">
                </form>
            </div>
        </div>
    </div>
</div>