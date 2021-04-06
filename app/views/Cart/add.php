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
                <a class="del-icone" onclick="cleanBox(e)"  data-name="<?=$item['quantity']?>" data-id="<?=$item['id'];?>" href=""><i class="fa fa-times"></i></a>
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