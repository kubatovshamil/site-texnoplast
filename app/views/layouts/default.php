<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="e5a536215441e913" />
    <?=$this->getMeta()?>
    <link rel="shortcut icon" href="<?=PATH . '/favicon.svg'?>" type="image/svg" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="<?=PATH . '/public/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=PATH ."/public/assets/css/font-awesome.min.css"?>">
    <link rel="stylesheet" href="<?=PATH ."/public/assets/css/owl.css"?>">
    <link rel="stylesheet" href="<?=PATH ."/public/assets/css/style.css"?>">
</head>
<body>
<div class="dark"></div>
<div class="header">
    <div class="container">
        <div class="row wrapper">

            <div class="nav-left hidden-lg">
                <div class="hambuger nav-icon">
                    <div></div>
                </div>
            </div>

            <div class="nav-title">
                <div class="logo">
                    <a href="/"><img src="<?=PATH . '/public/assets/img/icon/favicon.png'?>" alt="Иконка сайта"></a>
                </div>
            </div>

            <div class="nav-right">
                <div id="search-box">
                    <form class="form-search" action="/search/" method="get">
                      <input id="search" class="search" name="q" type="text" placeholder="Поиск">
                      <input id="search_submit" class="search_submit" value="Отправить" type="submit">
                    </form>
                </div>
                <div class="init icon icon-cart" data-qty="0">
                   <span class="cart-counter counter"><?=isset($_SESSION['total.Quantity'])? $_SESSION['total.Quantity'] : 0 ?></span>
                          <ul class="ht-dropdown main-cart-box">
                        <?php if(isset($_SESSION['cart'])): ?>
                        <li>
                            <?php foreach ($_SESSION['cart'] as $item): ?>
                            <div class="single-cart-box">
                                <div class="cart-img">
                                    <a href="/product/<?=$item['id']?>"><img src="<?=PATH . '/public/img/product/'. $item['img']?>" alt="cart-image"></a>
                                </div>
                                <div class="cart-content">
                                    <h6><a style="color: black" href="/product/<?=$item['id']?>"><?=$item['title']?></a></h6>
                                    <span><?=$item['price']?> x <?=$item['quantity']?></span>
                                </div>
                                <a class="del-icone" data-name="<?=$item['quantity']?>" data-id="<?=$item['id'];?>" href=""><i class="fa fa-times"></i></a>
                            </div>
                            <?php endforeach; ?>
                            <div class="cart-footer fix">
                                <h5>Общая :<span class="f-right"><?=$_SESSION['total.Quantity']?></span></h5>
                                <div class="cart-actions">
                                    <a class="checkout" href="/cart">Оформить</a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="tss tss--close">
        <div class="tss-wrap">
            <div class="tss-label">
                <div class="tss-label_pic">

                </div>
            </div>
            <div id="touch-side-swipe" class="touch-side-swipe">
                <ul  class="mobile-menu">
                <?php $categoryArr = getCategory();
                
                foreach ($categoryArr as $item){ ?>
                       <li>
                           <div class="link accordion-mobile">
                               <a href="<?='/category/' .$item['parent_link'] ?>"><?=$item['name']?></a>
                               <span class="fm-arrow"></span>
                           </div>
                           
                            <ul class="mob-sub-menu">
                                <?php
                                foreach ($item as $k => $val){ 
                                    if(is_int($k)){ ?>
                                        <li>
                                            <a href="<?='/subcategory/' . $val['category_link'];?>"><?=$val['category_name']?></a>
                                        </li>
                                <?php } } ?>
                            </ul>
                        <?php } ?>
                </ul>
                <ul class="footer-mobile-menu">
                     <li><a style="text-decoration: underline !important;" href="/contact">Контакты</a></li>
                    <li><a style="text-decoration: underline !important;" href="tel:+79161621497" class="register"><i class="fa fa-phone"></i> +7 (916) 162-14-97</a></li>
                    <li><a style="text-decoration: underline !important;"  href="mailto:info@texnoplastik.ru" class="register"><i class="fa fa-envelope"></i>info@texnoplastik.ru</a></li>
               <?php if(isset($_SESSION['user'])){  ?>
                    <li><a style="text-decoration: underline !important;" href="/sign/out" class="user">Выход</a></li>
                    <?php }else{ ?>
                   <li><a style="text-decoration: underline !important;" href="/sign/" class="user">Вход</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>










<?=$content;?>

<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    <a style="color: white" href="/contact">Контакты</a>
                </h4>

                <ul class="footer-list">
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            248926, г. Калуга, Аэропортовский переулок д.11
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            +7 (916) 162-14-97
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a  href="mailto:info@texnoplastik.ru" class="stext-107 cl7 hov-cl1 trans-04">
                           info@texnoplastik.ru
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-6 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    График работы
                </h4>

                <ul class="footer-list">
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Пн – Пт с 9:00 до 19:00. Сб,Вс - выходной
                        </a>
                        <br>
                        <a href="https://vk.com/public200503104" class="stext-107 cl7 hov-cl1 trans-04">
                           <i><img src="https://img.icons8.com/color/24/000000/vk-circled.png"/></i> Вконтакте
                        </a>
                        <br>
                        <a href="https://instagram.com/texnoplast40?igshid=12zz02iniqhmg" class="stext-107 cl7 hov-cl1 trans-04">
                           <i><img src="https://img.icons8.com/fluent/24/000000/instagram-new.png"/></i> Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>