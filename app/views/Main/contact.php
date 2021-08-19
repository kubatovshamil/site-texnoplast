
<section style="padding-top: 40px">
    <div class="contact-photo"></div>
</section>


<div class="bread-crumb" style="margin-top: -20px">
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Главная
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Контакты
			</span>
        </div>
    </div>
</div>


<section class="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="contact-info__title">Контактная информация</h3>
                <div class="row contact-info-wrap">
                    <div class="col-md-3">
                        <p style="text-align:center;line-height: 28px;" class="contact-info__link"><span><i class="fa fa-map-marker-alt"></i></span > 248926, г. Калуга, <br> Аэропортовский переулок д.11</p>
                    </div>
                    <div class="col-md-3">
                        <p style="text-align:center;line-height: 28px;"><span></span><a class="contact-info__link" href="tel:+79161621497"><i class="fa fa-phone-alt"></i> +7 (916) 162-14-97</a><br> <a class="contact-info__link" href="mailto:texno-plastik@yandex.ru"><i class="fa fa-send"></i> texno-plastik@yandex.ru</a></p>
                    </div>
                    <div class="col-md-3">
                        <p style="text-align:center;line-height: 28px;"><span>Офис продаж: <br><i class="fa fa-send"></i></span> <a class="contact-info__link" style="text-decoration: underline !important;" href="mailto:info@texnoplastik.ru">info@texnoplastik.ru</a></p>
                    </div>
                    <div class="col-md-3">
                        <p style="text-align:center;line-height: 28px;" class="contact-info__link"><span><i class="icon-globe"></i></span>Пн – Пт с 9:00 до 19:00. <br> Сб, Вс - выходной</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="map-contact" style="margin: 10px">
    <h4 class="map-where">Где мы находимся?</h4>
    <div class="container">
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12">
                <div class="map">
                    <iframe class="map__sizes" src="https://yandex.ru/map-widget/v1/?um=constructor%3Aadd4a3aa07ee300c383c0dfc2366534f55243887450dd106c696c64ae53e1a1e&amp;source=constructor" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

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
<script src="<?=PATH.'/public/js/bucket-clean.js'?>"></script>
<script src="<?=PATH. "/public/js/jquery.maskedinput.min.js"?>"></script>

<script>
    $(document).ready(function () {
        $('#phone').mask("+7 (999) 999-99-99");
    });
</script>

