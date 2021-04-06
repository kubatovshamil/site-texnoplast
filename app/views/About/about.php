<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12 col-12">
                <nav>
                    <ul class="menu">
                        <a class="hamburger__btn"><span></span></a>
                        <li class="menu__item"><a class="menu__link" href="/">Главная</a></li>
                        <li class="menu__item"><a class="menu__link" href="/catalog/">Каталог</a></li>
                        <li class="menu__item"><a class="menu__link" href="/about">О нас</a></li>
                        <li class="menu__item"><a class="menu__link" href="/contact">Контакты</a></li>
                        <li class="menu__item"><a href="#">
                                <form method="get" action="/search/">
                                    <input type="text" class="menu__item__search" name="q">
                                    <input type="submit" value="Поиск" class="menu__item__btn">
                                </form>
                            </a></li>
                        <li class="menu__item">
                            <a style="position: relative;" class="menu__link backet-open" data-toggle="modal" data-target="#exampleModal3" href="#"><i class="fa fa-shopping-basket"></i>Корзина<?php if(!empty($_SESSION['total.Quantity'])){ ?> <span  id="qiuantityBucket" style="visibility: visible"><?=$_SESSION['total.Quantity']?></span><?php }else{ echo '<span id="qiuantityBucket" style="visibility: hidden"></span>'; }  ?></a>
                        </li>
                        <?php if(isset($_SESSION['user'])){ ?>
                            <li class="menu__item"><a class="menu__link" href="/main/logout/"><i class="fa fa-sign-in"></i>Выход</a></li>
                        <?php  }else{  ?>
                            <li class="menu__item"><a class="menu__link" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-sign-in"></i>Вход</a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
|<!-- navigation -->
<div class="mobile-nav-bar">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <ul class="mobile-nav-bar-menu">
                    <li class="mobile-nav-bar-menu__item"><a class="mobile-nav-bar-menu__item__link" href="/">Главная</a></li>
                    <li class="mobile-nav-bar-menu__item"><a class="mobile-nav-bar-menu__item__link" href="/catalog/">Каталог</a></li>
                    <li class="mobile-nav-bar-menu__item"><a class="mobile-nav-bar-menu__item__link" href="/about">О нас</a></li>
                    <li style="margin-left: -20px;" class="mobile-nav-bar-menu__item"><a class="mobile-nav-bar-menu__item__link" href="/contact"><i class="fa fa-phone mobile-phone"></i>Контакты</a></li>
                    <li style="margin-left: -20px;" class="mobile-nav-bar-menu__item">
                        <a class="mobile-nav-bar-menu__item__link backet-open" data-toggle="modal" data-target="#exampleModal3"><i class="fa fa-shopping-basket mobile-backet"></i>Корзина</a>
                    </li>
                    <li class="mobile-nav-bar-menu__item">
                        <form class="mobile__form" method="get" action="/search/">
                                <input type="text" class="menu__item__search" name="q">
                                <input type="submit" value="Поиск" class="mobile-nav-bar-menu__item__btn">
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- mobile -->
<section class="about" style="background: white;margin-bottom: 30px">
    <div class="container">
        <h2 class="about__title" style="color: black">О нас</h2>
        <div class="row" style="border-top: 1px solid black; border-bottom: 1px solid black">
            <div class="col-12">
                <p class="about__subttitle" style="color: black">Наша фирма – занимается пластмассовой тарой с 2009 года.
                    большой ассортимент пластмассовой тары и листовых пластиков, присутствие филиалов в 8-ми городках по РФ и долголетний опыт компании позволяет захватывать лидирующее положение в отрасли.
                    Продукция нашей компании использует спросом в всевозможных сферах: супермаркеты, лечебного заведения строительство, реклама, сельский сектор, домашний уют и другие.
                    <span class="about__subttitle__hide3">У нас вы можете приобрести пластмассовую тару, и купить листовые пластики по легкодоступной стоимости в розницу и оптом.</span><span class="about__subttitle__hide2"> Хранение предметов быта, пищевых продуктов, использование в
                        транспортировочных целях – всё эти и многие другие темы решает наша тара из высококачественного полимерного сырья.</span><span class="about__subttitle__hide">
                    Вся продукция проходит непременный многоуровневый контроль и отвечает очень высочайшим требованиям в области качества.
                    Для того, чтобы Ваше сотрудничество стало не только взаимовыгодным, но также долгосрочным, компания дает массу услуг: гибкая система скидок, легкость в заключение договоров,
                        своевременная доставка высококачественного товара.</span>
                </p>
            </div>
        </div>
    </div>
</section>
<!--about-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5  class="modal-title" id="exampleModalLabel" style="display: block;margin: auto">Авторизация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/main/login/">
                    <div class="form-group">
                        <label><strong>Введите ваш логин:</strong></label>
                        <input type="text" class="form-control" name="username" minlength="8" maxlength="16" placeholder="Введите ваш логин"   autocomplete="on" required>
                    </div>
                    <div class="form-group">
                        <label><strong>Введите ваш пароль:</strong></label>
                        <input type="password" class="form-control" name="password" placeholder="Введите ваш пароль" required  autocomplete="on">
                    </div>
                    <input type="submit" value="Войти" name="submit" class="btn btn-primary">
                    <a style="float: right" class="btn btn-danger" data-dismiss="modal"  data-toggle="modal" data-target="#exampleModal2"  href="#">Регистрация</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Модальное окно авторизации -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5  class="modal-title" id="exampleModalLabel" style="margin: auto;display: block;">Регистрация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/main/sign" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1"><strong>Введите новый логин:</strong></label>
                        <input type="text" minlength="8" maxlength="16"  class="form-control"  autocomplete="on"  name="username" placeholder="Введите новый логин" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><strong>Введите ваш email:</strong></label>
                        <input type="email" class="form-control" id="exampleInputEmail1"  autocomplete="on" name="email" aria-describedby="emailHelp" placeholder="Введите ваш email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><strong>Введите новый пароль:</strong></label>
                        <input type="password" class="form-control" minlength="8" maxlength="16"  autocomplete="on" name="password1" placeholder="Введите новый пароль" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"><strong>Подтвердите ваш новый пароль:</strong></label>
                        <input type="password" class="form-control" minlength="8" maxlength="16"  autocomplete="on" name="password2" placeholder="Подтвердите новый пароль" required>
                    </div>
                    <input type="submit"  value="Регистрация" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Модальное окно регистрации -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="display: block;margin: auto">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="bucket-data">

                    <div class="block-content-bucket">
                        <?php if(!empty(($_SESSION['cart']))){ ?>
                            <table class="table table-striped">

                                <thead>
                                <tr>
                                    <th scope="col">Фото</th>
                                    <th scope="col">Наименование</th>
                                    <th scope="col">Количество</th>
                                    <th scope="col">Цена</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($_SESSION['cart'] as $item){ ?>
                                    <tr>
                                        <td style="vertical-align: middle" ><img  height="80" src="<?=PATH.'/public/img/product/'. $item['img']?>" alt="img"></td>
                                        <td style="vertical-align: middle"><?=$item['title']?></td>
                                        <td style="vertical-align: middle"><?=$item['quantity']?></td>
                                        <td style="vertical-align: middle"><?=$item['quantity']*$item['price']?> рублей</td>
                                        <td class="delete" style="text-align: center; cursor: pointer; vertical-align: middle; color: red">
                                            <a data-name ="<?=$item['id']?>" class="bucketId" style="color: red" onclick="cleanIdBucket(event)" href=""><span>✖</span></a></td>
                                    </tr>
                                <?php } ?>
                                <tr style="border-top: 4px solid black">
                                    <td colspan="4">Всего товаров</td>
                                    <td class="total-quantity"><?=$_SESSION['total.Quantity']?></td>
                                </tr>
                                <tr>
                                    <td colspan="4">На сумму </td>
                                    <td style="font-weight: 700"><?=$_SESSION['totalSum'];?> рублей</td>
                                </tr>
                                </tbody>

                            </table>

                            <div class="modal-buttons" style="display: flex; padding: 15px; justify-content: space-around">
                                <a href="" id="clearBucket2" type="button" class="btn btn-danger" onclick="cleanBucket(event)">Очистить корзину</a>
                                <button data-dismiss="modal" type="button" class="btn btn-secondary btn-close">Продолжить покупки</button>
                                <button type="button" class="btn btn-success btn-next" data-dismiss="modal"  data-toggle="modal" data-target="#exampleModal4">Оформить заказ</button>
                            </div>
                            <div id="js-atavi-extension-install">
                            </div>
                            <div id="target_kultivator_ico" data-ico="chrome-extension://ailgcbdikiapkcbglcpfippolmjfljgi/images/ico.png" style="display: none;">
                            </div>

                        <?php }else{ ?>
                            <h2>В корзинке ничего нету</h2>
                            <button data-dismiss="modal" style="width: 180px;margin: auto;display: block;margin-top: 10px;" type="button" class="btn btn-secondary btn-close">Продолжить покупки</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 700px;margin-left: -100px;display: block">
            <div class="modal-header">
                <h5 style="margin-left: 200px" class="modal-title" id="exampleModalLabel">Оформление заказа</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-data">
                    <form action="/order/send" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><strong>Введите вашу фамилию:</strong></label>
                            <input type="text" minlength="3"  class="form-control"  autocomplete="on"  name="surname" placeholder="Введите ваше фамилию" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><strong>Введите ваше имя:</strong></label>
                            <input type="text" class="form-control" autocomplete="on" name="name" placeholder="Введите ваше имя" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"><strong>Введите ваше email:</strong></label>
                            <input type="email" class="form-control" id="exampleInputEmail1"  autocomplete="on" name="email" aria-describedby="emailHelp" placeholder="Введите ваше email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"><strong>Введите ваш номер телефона:</strong></label>
                            <input type="text" name="phone" id="phone" class="form-control" autocomplete="on" placeholder="+7 (999) 999-99-99" required>
                        </div>
                        <input type="submit"  value="Сделать заказ" name="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Yandex.Metrika counter -->
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
<!-- /Yandex.Metrika counter -->


<!--Модальное окно корзинки -->
<script src="<?=PATH. "/public/js/jquery-3.5.1.min.js"?>"></script>
<script src="<?=PATH. "/public/js/app.js"?>"></script>
<script src="<?=PATH. "/public/js/jquery.maskedinput.min.js"?>"></script>
<script src="<?=PATH.'/public/js/bucket-clean.js'?>"></script>



<script>
    $(document).ready(function () {
        $('#phone').mask("+7 (999) 999-99-99");
    });
</script>
