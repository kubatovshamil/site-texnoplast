<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h5>ФИО: <?=$_POST['fullname']?> <br></h5>
<p>E-mail: <a href="<?=$_POST['email']?>"><?=$_POST['email']?></a></p>
<p>Страна : <?=$_POST['country']?></p>
<p>По адрессу : <?= $_POST['city'] . ' '. $_POST['street'] . ' №' . $_POST['building'] . ' ' . $_POST['room']  . 'почтовой индекс ' . $_POST['index']?></p>
<p>Способ доставки: <?=$_POST['delivery']?></p>
<p>Номер телефона : <?=$_POST['phone']?></p>

<table style="border: 1px solid #ddd; border-collapse: collapse; width: 100%;">
    <thead>
    <tr style="background: #f9f9f9;">
        <th style="padding: 8px; border: 1px solid #ddd;">Наименование</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Кол-во</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Цена</th>
        <th style="padding: 8px; border: 1px solid #ddd;">Сумма</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($_SESSION['cart'] as $item): ?>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$item['title'] ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$item['quantity'] ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$item['price'] ?> руб с НДС</td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=floatval(preg_replace('/[^0-9]/', '', $item['price'])) * $item['quantity'] ?> руб С НДС</td>
        </tr>
    <?php endforeach;?>
    <tr>
        <td colspan="3" style="padding: 8px; border: 1px solid #ddd;">Итого:</td>
        <td style="padding: 8px; border: 1px solid #ddd;"><?=$_SESSION['totalSum'] ?> руб с НДС</td>
    </tr>
    </tbody>
</table>

</body>
</html>