//validaion signup
$('.surnameInput').on('blur', function (){
    let surnameLengh = $('.surnameInput').val().length;
    if(surnameLengh == 0){
        $('.surnameSpan').html("Введите в поле...");
    }else{
            if(surnameLengh > 3){
        $('.surnameSpan').html('');
        if(surnameLengh > 32){
            $('.surnameSpan').html("Фамилия слишком большое...");
        }
    }else{
        $('.surnameSpan').html('Фамилия слишком короткое...');
    }
    }
})


setTimeout(function (){
    $('.signup-success').css('display', 'none');
},4000);



$('.nameInput').on('blur', function (){
    let name = $('.nameInput').val().length;
    if(name == 0){
          $('.nameSpan').html("Введите в поле...");
    }else{
           if(name > 2){
        $('.nameSpan').html('');
        if(name > 32){
            $('.nameSpan').html("Имя слишком большое...");
        }
    }else{
        $('.nameSpan').html('Имя слишком короткое...');
    }
    }
})


$('.emailInput').on('blur', function (){
    let email = $('.emailInput').val().length,
        reg = /^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/i;
    if(email == 0){
        $('.emailSpan').html("Введите в поле...");
    }else{
         if($('.emailInput').val().length > 0){
        if(!reg.test($('.emailInput').val())){
            $('.emailSpan').html("Введите корректный email...");
        }else {
            $('.emailSpan').html("");
        }
    }
    }
})

$('.userNameInput').on('blur', function (){
    
    let username = $('.userNameInput').val().length,
        reg = /^[a-zA-Z0-9_\-\.]+$/i;
        if(username == 0){
            $('.userNameSpan').html("Введите в поле...");
        }else{
              if(reg.test($('.userNameInput').val())){
        $('.userNameSpan').html("");
    }else{
        $('.userNameSpan').html("Только латинские буквы...");
    }
        }

})



$('.passwordInput').on('blur', function (){
    let password = $('.passwordInput').val().length;
    if(password == 0){
        $('.passwordSpan').html('Введите в поле');
    }else{
    if(password > 4){
        $('.passwordSpan').html('');
    }else{
        $('.passwordSpan').html('Пароль слишком слабый...');
    }
    }
})


$('.password2Input').on('blur', function (){
    if($('.password2Input').val().length == 0){
         $('.password2Span').html('Подвердите пароль...');
    }else{
         let password2 = $('.password2Input').val(),
        password = $('.passwordInput').val();
    if(password2 == password){
        $('.password2Span').html('');
    }else{
        $('.password2Span').html('Пароли не совпадают...');
    }
    }
})

//end validaion