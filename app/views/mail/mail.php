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

<h5>ФИО: <?=$fullname?> <br></h5>
<p>E-mail: <a href="<?=$email?>"><?=$email?></a></p>
<p>Страна : <?=$country?></p>
<p>По адрессу : <?= $city . ' '. $street . ' №' . $building . ' ' . $room  . 'почтовой индекс ' . $index?></p>
<p>Способ доставки: <?=$delivery?></p>
<p>Номер телефона : <?=$phone?></p>

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
            <td style="padding: 8px; border: 1px solid #ddd;"><?=$item['price'] ?></td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?=floatval(preg_replace('/[^0-9]/', '', $item['price'])) * $item['quantity'] ?></td>
        </tr>
    <?php endforeach;?>
    <tr>
        <td colspan="3" style="padding: 8px; border: 1px solid #ddd;">Итого:</td>
        <td style="padding: 8px; border: 1px solid #ddd;"><?=$_SESSION['totalSum'] ?></td>
    </tr>
    </tbody>
</table>

</body>
</html>