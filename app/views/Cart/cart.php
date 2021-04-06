<div class="bread-crumb">
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Главная
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <a href="/catalog" class="stext-109 cl8 hov-cl1 trans-04">
                Каталог
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
				Корзинка
			</span>
        </div>
    </div>
</div>

<?php if(!empty($_SESSION['cart'])){ ?>
<section class="cart-page">
    <div class="container">
        <?php if(isset($_SESSION['cart'])): ?>
        <div class="h3">Корзина</div>
        <div class="row cart-page-bucket">
            <div class="col-12">
                <div class="block-list">
                    <?php foreach ($_SESSION['cart'] as $item): ?>
                        <div class="block-item <?=$item['id']?>">
                            <a class="img"><img width="150" height="100" src="<?=PATH . '/public/img/product/'. $item['img']?>" alt=""></a>
                            <div class="item-title"><?=$item['title'];?></div>
                            <div class="item-quantity">
                                <div class="cart_buy-qnt_wrap">
                                    <a id="cart_buy_plus" class="cart_buy-qnt plusCart cartChange" data-target="#qnt-to-basket">+</a>
                                    <input id="qnt-to-basket" type="text" class="cart_buy-qnt input-value cartChange" data-id = "<?=$item['id']?>" value="<?=$item['quantity']?>">
                                    <a id="cart_buy_minus" class="cart_buy-qnt minusCart cartChange" data-target="#qnt-to-basket">-</a>
                                </div>
                            </div>
                            <div class="item-price"><span><?=$item['price']?></span><a class="cart-delete cart-remove"  data-id="<?=$item['id'];?>" href=""><i class="fa fa-trash"></i></a></div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>


            <form class="ms2_form" id="msOrder" action="/order/send" method="post">
                <input type="hidden" name="payment" id="payment_3" value="3">
                <div class="purchase">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-12 col-sm-12">
                            <div class="purchase-item">
                                <h3 class="purchase-item__title">Выберите способ доставки</h3>
                                <div class="purchase-form" id="deliveries">
                                    <div class="purchase-form__item">
                                        <div class="ui-radio">
                                            <input id="delivery_53" type="radio" name="delivery" value="По России, до ТК Деловые линии 1-2 дня от 810₽" data-payments="[3]" checked="">
                                            <div class="ui-radio__label">
                                                <label for="delivery_53">
                                                    По России, до ТК Деловые линии                                                                    <b>1-2 дня от 810₽</b>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item">
                                        <div class="ui-radio">
                                            <input id="delivery_54" type="radio" name="delivery" value="По России,  до ТК ПЭК 1-2 дня от 3,89 ₽/кг" data-payments="[3]">
                                            <div class="ui-radio__label">
                                                <label for="delivery_54">
                                                    По России,  до ТК ПЭК                                                                 <b>1-2 дня от 3,89 ₽/кг</b>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item">
                                        <div class="ui-radio">
                                            <input id="delivery_52" type="radio" name="delivery" value="По России,  до ТК DHL 1-2 дня от 810₽" data-payments="[3]">
                                            <div class="ui-radio__label">
                                                <label for="delivery_52">
                                                    По России,  до ТК DHL                                                             <b>1-2 дня от 810₽</b>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item">
                                        <div class="ui-radio">
                                            <input id="delivery_1" type="radio" name="delivery" value="По Москве и МО, курьером 1-2 дня от 490₽" data-payments="[3]">
                                            <div class="ui-radio__label">
                                                <label for="delivery_1">
                                                    По Москве и МО, курьером                                                             <b>1-2 дня от 490₽</b>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item">
                                        <div class="ui-radio">
                                            <input id="delivery_55" type="radio" name="delivery" value="Самовывоз в Калуге бесплатно" data-payments="[3]">
                                            <div class="ui-radio__label">
                                                <label for="delivery_55">
                                                    Самовывоз в Калуге                                                                    <b>бесплатно</b>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-12 col-sm-12">
                            <div class="purchase-item">
                                <h3 class="purchase-item__title">Заполните необходимые данные</h3>
                                <div class="purchase-form">

                                    <div class="purchase-form__item">
                                        <div class="ui-input">
                                            <input type="text" class="ui-input__text required" name="fullname" value="" placeholder="ФИО" required>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item">
                                        <div class="ui-input">
                                            <input id="phone" type="text" class="ui-input__text required" name="phone" value="" placeholder="Телефон" required>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item">
                                        <div class="ui-input">
                                            <input type="email" class="ui-input__text required" name="email" value="" placeholder="E-mail" required>
                                        </div>
                                    </div>

                                    <div class="purchase-form__item purchase-form__item_w1-2">
                                        <div class="ui-input">
                                            <input type="text" class="ui-input__text" name="country" value="" placeholder="Страна" required>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item purchase-form__item_w1-2">
                                        <div class="ui-input">
                                            <input type="text" class="ui-input__text" name="index" value="" placeholder="Почтовый индекс" required>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item purchase-form__item_w1-2">
                                        <div class="ui-input">
                                            <input type="text" class="ui-input__text" name="city" value="" placeholder="Город" required>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item purchase-form__item_w1-2">
                                        <div class="ui-input">
                                            <input type="text" class="ui-input__text" name="street" value="" placeholder="Улица" required>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item purchase-form__item_w1-2">
                                        <div class="ui-input">
                                            <input type="text" class="ui-input__text" name="building" value="" placeholder="Дом" required>
                                        </div>
                                    </div>
                                    <div class="purchase-form__item purchase-form__item_w1-2">
                                        <div class="ui-input">
                                            <input type="text" class="ui-input__text" name="room" value="" placeholder="Квартира">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-12 col-md-12 col-sm-12">
                            <div class="purchase-item">
                                <div class="checkout">
                                    <div class="row middle-sm">
                                        <div class="col-xs-12 col-sm-12 col-12 ">
                                            <div class="checkout__item">
                                                <button class="btn btn_primary" type="submit" name="ms2_action" value="order/submit">Оформить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php }else{ ?>
<h4>Корзинка пуста</h4>
<?php } ?>



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
<!--<!-- /Yandex.Metrika counter -->

<script src="<?=PATH. "/public/js/jquery-3.5.1.min.js"?>"></script>
<script src="<?=PATH. "/public/js/bootstrap.min.js"?>"></script>
<script src="<?=PATH. "/public/js/jquery.maskedinput.min.js"?>"></script>
<script>
    $(document).ready(function () {
        $('#phone').mask("+7 (999) 999-99-99");
    });
</script>
<script src="<?=PATH. "/public/js/app.js"?>"></script>
