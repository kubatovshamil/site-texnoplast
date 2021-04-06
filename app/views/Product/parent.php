<div class="bread-crumb">
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
                Главная
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>
            <span class="stext-109 cl4">
				Категория
			</span>
        </div>
    </div>
</div>
<section class="products">
    <div class="container">
        <div class="row">
            <?php foreach ($result as $product){ ?>
                <div class="col-12 col-md-6 col-sm-12 col-xl-4">
                    <div class="product-item">
                        <a href="/product/<?=$product->product_link?>" style="display: flex;justify-content: center;"><img width="300" height="250" src="<?= PATH."/public/img/product/$product->img"?>"  alt=""></a>
                        <div class="down-content">
                            <a href="/product/<?=$product->product_link?>"><h4><?=$product->title?></h4></a>
                            <h6 style="text-align: center;font-size: 25px;">Цена : <span><?=$product->price?></span></h6>
                            <div class="block-selected">
                                <div class="cart_buy">
                                    <div class="cart_buy-qnt_wrap">
                                        <a id="cart_buy_plus" class="cart_buy-qnt plus_class plus" data-target="#qnt-to-basket">+</a>
                                        <input id="qnt-to-basket"  type="text" class="cart_buy-qnt input_value" value="1">
                                        <a id="cart_buy_minus"  class="cart_buy-qnt minusCart minus" data-target="#qnt-to-basket">-</a>
                                    </div>
                                    <a class="bucket-add" href="" data-name ="<?=$product->id?>"><span><i class="fa fa-cart-plus"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


            <div class="col-12 col-md-12 col-sm-12 col-xl-12">
                <div class="block-pagination">
                    <?=$pageLinks?>
                </div>
            </div>

        </div>
    </div>
</section>

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