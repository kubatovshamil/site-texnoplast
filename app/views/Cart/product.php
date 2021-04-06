<?php


foreach ($product as $item){
    
        $array = explode(";", $item->feature);
        foreach ($array as $value) {
            $arr = explode(":", $value);
            @$feat[$arr[0]] = $arr[1];
        }
        
        
    ?>
    <div class="bread-crumb">
        <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
                <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                    Главная
                    <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
                </a>
                <a href="/catalog/" class="stext-109 cl8 hov-cl1 trans-04">
                    Каталог
                </a>
            </div>
        </div>
    </div>
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-5 col-sm-4">
                <div class="block-img">
                    <img class="product-img" src="<?=PATH.'/public/img/product/'.$item->img?>" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-6 col-sm-8">
                <div class="blocl-content">
                    <h2 class="product_title"><?=$item->title?></h2>
                    <p class="product_price">Цена: <span class="price"><?=$item->price;?></span></p>
                    <div class="block-selected" style="padding-top: 20px;justify-content: flex-start !important;">
                        <div class="cart_buy">
                            <div class="cart_buy-qnt_wrap">
                                <a id="cart_buy_plus" class="cart_buy-qnt plus_class plus" data-target="#qnt-to-basket">+</a>
                                <input id="qnt-to-basket"  type="text" class="cart_buy-qnt input_value" value="1">
                                <a id="cart_buy_minus"  class="cart_buy-qnt minusCart minus" data-target="#qnt-to-basket">-</a>
                            </div>
                            <a class="bucket-add" href="" data-name="<?=$item->id?>"><span><i class="fa fa-cart-plus"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-12 col-sm-12" style="margin-bottom: 20px">
                <div class="blocl-featyre">
                    <h2 class="feature-title">Характеристики</h2>
                    <div class="compare_table pr-table feature">
                        <?php foreach ($feat as $k => $v){ ?>
                        <div class="table_row">
                            <div class="table_col table_col-280"><?=$k?></div>
                            <div class="table_col"><?=$v?></div>
                        </div>
                        <?php } ?>
                    </div>
                    <p style="font-family: 'Roboto';color: black;font-size: 20px;font-style: italic;padding-top: 15px;text-align:center;line-height: 33px"><?=empty(!$item->description) ? $item->description : '' ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php   } ?>

<div class="add-bucket-tovar">
    <h4 style="color: white">Товар добавлен в корзину</h4>
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

<script src="<?=PATH. "/public/js/jquery-3.5.1.min.js"?>"></script>
<script src="<?=PATH. "/public/js/app.js"?>"></script>
