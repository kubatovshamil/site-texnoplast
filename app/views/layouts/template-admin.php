<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=PATH. "/public/css/fontawesome.min.css"?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,600;0,700;0,800;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=PATH."/public/css/admin.css"?>">
    <?=$this->getMeta()?>
</head>
<body style="background: beige">
<?=$content?>
<script src="<?=PATH. '/public/js/jquery-3.5.1.min.js'?>"></script>
<script src="<?=PATH. '/public/js/app.js'?>"></script>
<script>
    $(function () {
        var current = 0;
        $('#new-input').on('click',function (e) {
            e.preventDefault();
            $(".block-new select").hide();
            current++;
            if(current === 1) {
                $(".block-new").append("<input id = 'inp' type='text' name='category' " +
                    "class='form-control'  placeholder='Введите новую категорию'>" +
                    "<input id = 'inp' type='file' name='category_image' " +
                    "class='form-control'>");
                $(this).html('Вернуться');
            }
            if(current === 2){
                $(".block-new #inp").remove();
                $(".block-new select").show();
                current = current -2;
                $(this).html('Добавить новую категорию');
            }
        });

        var data = 2,
            label = 1;
        $("#new-form__input").on("click", function (e) {
            e.preventDefault();
            $("<div class=\"form-group\"><label for=\"exampleInputEmail1\">Введите название характеристики</label>\n" +
                "<input type=\"text\" class=\"form-control\" name=\""+label+"\"  placeholder=\"Введите название характеристики\" required>\n" +
                "<label for=\"exampleInputEmail1\">Введите значение характеристики</label>\n" +
                "<input type=\"text\" class=\"form-control\" name=\""+data+"\"  placeholder=\"Введите значение характеристики\" required></div>").insertBefore("#new-form__input");
            data += 2;
            label += 2;
        })
    });
</script>
</body>
</html>