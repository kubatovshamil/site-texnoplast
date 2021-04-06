  <div class="container">
        <?php if(!empty($_SESSION['cart'])){ ?>
        <div class="h3">Корзина</div>
        <div class="row cart-page-bucket">
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
            <div class="total-cart">
                <h4 class="h4">Оформления заказа</h4>
                <form action="/order/send" method="post" class="form">
                    <label class="star" for="surname">Фамилия:</label>
                    <input type="text" name="surname" placeholder="Введите Фамилию" required>

                    <label class="star" for="name">Имя:</label>
                    <input type="text" name="name" placeholder="Введите Имя" required>

                    <label class="star" for="email">Email:</label>
                    <input type="email" name="email" placeholder="Введите email" required>

                    <label class="star" for="tel">Телефон:</label>
                    <input type="tel" name="tel" id="phone" placeholder="Введите телефон" required>
                    <label for="tel">Адрес:</label>
                    <input type="text" name="address" placeholder="Необязательно к заполнению">

                    <span style="margin-top: 10px;display: block">Итого: <span class="totalPrice"><?=$_SESSION['totalSum'];?></span> руб с НДС</span>

                    <button type="submit" name="add-email" class="add-email">Завершить оформление</button>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>