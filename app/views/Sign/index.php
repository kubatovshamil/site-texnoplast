<div class="bread-crumb">
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Главная
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Регистрация
			</span>
        </div>
    </div>
</div>

<?php if(!empty($success)){ ?>
<div class="signup-success">
    <div class="container">
        <h4 style="color: #1e7e34;font-size: 30px;text-align: center"><?=$success?></h4>
    </div>
</div>
<?php } ?>

<div class="login-register">
    <div class="row">
        <div class="container">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> Войти </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> Зарегистрироваться </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="/sign/" method="post">
                                        <label for="user-name">Логин:</label>
                                        <input type="text" name="user-name" required placeholder="Введите логин">
                                        <label for="password">Пароль:</label>
                                        <input type="password" name="user-password" required placeholder="Введите пароль">
                                        <div class="button-box">
                                            <button type="submit" name="login"><span>Войти</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="/sign/" method="post">
                                        <div class="surname">
                                            <label for="user-name">Фамилия:</label>
                                            <input type="text" name="surname" class="surnameInput" placeholder="Введите ваше Фамилия" required>
                                            <span class="surnameSpan" style="color: red"></span>
                                        </div>
                                        <div class="name">
                                            <label for="name">Имя:</label>
                                            <input type="text" name="name" class="nameInput" placeholder="Введите ваше Имя" required>
                                            <span class="nameSpan" style="color: red"></span>
                                        </div>
                                        <div class="email">
                                            <label for="email">Email:</label>
                                            <input name="email" class="emailInput" placeholder="Введите ваш email" type="email" required>
                                            <span class="emailSpan" style="color: red"></span>
                                        </div>
                                        <div class="userName">
                                            <label for="user-name">Логин:</label>
                                            <input type="text" class="userNameInput" name="user-name" placeholder="Введите логин" required>
                                            <span class="userNameSpan" style="color: red"></span>
                                        </div>

                                        <div class="password">
                                            <label for="user-name">Пароль:</label>
                                            <input type="password" class="passwordInput" name="user-password" placeholder="Введите пароль" required>
                                            <span class="passwordSpan" style="color: red"></span>
                                        </div>

                                        <div class="password2">
                                            <label for="user-name">Подверждение пароля:</label>
                                            <input type="password" class="password2Input" name="user-password2" placeholder="Подтвердите пароль" required>
                                            <span class="password2Span" style="color: red"></span>
                                        </div>
                                        <div class="button-box">
                                            <button type="submit" name="sign-add" value="Отправить"><span>Зарегистрироваться</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(56626408, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56626408" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<script src="<?=PATH. "/public/js/jquery-3.5.1.min.js"?>"></script>
<script src="<?=PATH ."/public/assets/js/owl.js"?>"></script>
<script src="<?=PATH. "/public/js/bootstrap.min.js"?>"></script>
<script src="<?=PATH. "/public/js/app.js"?>"></script>
<script src="<?=PATH. "/public/js/formValidation.js"?>"></script>