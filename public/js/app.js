jQuery( document ).ready(function( $ ) {
	"use strict";

	if ($('.owl-banner').length) {
		$('.owl-banner').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			items: 1,
			margin: 0,
			autoplay: true,
			smartSpeed: 1400,
			autoplayTimeout: 4000,
			responsive: {
				0: {
					items: 1,
					margin: 0
				},
				460: {
					items: 1,
					margin: 0
				},
				576: {
					items: 1,
					margin: 20
				},
				992: {
					items: 1,
					margin: 30
				}
			}
		});
	}
	if ($('.owl-shares').length) {
		$('.owl-shares').owlCarousel({
			items: 4,
			margin: 30,
			loop: true,
			nav: true,
			dots: true,
			autoplay: true,
			autoplayTimeout: 2500,
			smartSpeed: 1000,
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				768: {
					items: 3
				},
				992: {
					items: 4
				}
			}
		});
	}
});

if(Number($('.cart-counter').html()) === 0){
	$('.cart-counter').css('visibility', 'hidden');
}



	



$('.cart_buy-qnt_wrap').on('click', '.plusCart', function (e){
	e.preventDefault();
	let plusCart = Number($(this).next().val());
	let val = $(this).next().val(plusCart + 1);
	this.nextElementSibling.setAttribute('value', plusCart + 1);
});

$('.cart_buy-qnt_wrap').on('click', '.minusCart', function (e){
	e.preventDefault();
	let minusCart = Number($(this).prev().val());
	if(minusCart > 1) {
		$(this).prev().val(minusCart - 1);
		this.previousElementSibling.setAttribute('value', minusCart - 1);
	}
});


$('.cart_buy-qnt_wrap').on('click', '.plus', function (e){
	e.preventDefault();
	let plusCart = Number($(this).next().val());
	let val = $(this).next().val(plusCart + 1);
	this.nextElementSibling.setAttribute('value', plusCart + 1);
});



$('.cart_buy-qnt_wrap').on('click', '.minus', function (e){
	e.preventDefault();
	let plusCart = Number($(this).next().val());
	let val = $(this).next().val(plusCart + 1);
	this.nextElementSibling.setAttribute('value', plusCart + 1);
});


$('.init').on('click',function(){
    
    if($('.ht-dropdown').hasClass('ht-dropdown-active')){
        $('.ht-dropdown').removeClass('ht-dropdown-active');
    }else{
           $('.ht-dropdown').addClass('ht-dropdown-active');
    }
});



$('.input_value').on('blur', function (e) {
	var val = this.value.replace(/[^\d;]/g, '');
	this.value = val;
})

var inputValue = $('#qnt-to-basket');
inputValue.on('blur', function(e){
	var val =  inputValue.val().replace(/[^\d;]/g, '');
	inputValue.val(val);
});


/*начало ajax запросы*/
$('#bucket-add').on('click', function (e) {

	e.preventDefault();
	
	
	
	$('.cart-counter').css('visibility', 'visible');
	var value = $(this).data('name');
	var inputVal = Number($('#qnt-to-basket').val());
	$.ajax({
		url: '/cart/add',
		type: 'GET',
		data: {
			data : value,
			value : inputVal
		},
		success: function (res) {
			$('.main-cart-box').html(res);
			$('.cart-counter').html($('.f-right').html());
		},
		error: function () {
			alert('ERROR');
		}
	})
});


$('.cart_buy').on('click', function (e) {

	e.preventDefault();

	$('.cart-counter').css('visibility', 'visible');
	if((e.target.className === 'bucket-add' && e.target.tagName === 'A') || e.target.tagName === 'I') {
		var inputVal = Number(e.currentTarget.childNodes[1].childNodes[3].value);
		var value = Number(e.currentTarget.childNodes[3].getAttribute('data-name'));
		
	setTimeout(function(){
	    $('.add-bucket-tovar').css('left', '0' + 'px');
	    setTimeout(function(){
	    $('.add-bucket-tovar').css('left', '-350' + 'px');
	},1000);
	},500);
	
		$.ajax({
			url: '/cart/add',
			type: 'GET',
			data: {
				data : value,
				value : inputVal
			},
			success: function (res) {
				$('.main-cart-box').html(res);
				$('.cart-counter').html($('.f-right').html());
			},
			error: function () {
				alert('ERROR');
			}
		})
	}
});

$('.main-cart-box').on('click', '.del-icone', function (e){

	e.preventDefault();
	let id = $(this).data('id');
	$.ajax({
		url: '/cart/deleteid',
		type: 'POST',
		data: {
			id: id
		},
		success: function (res){
			$('.main-cart-box').html(res);
			$('.cart-counter').html($('.f-right').html());
			$.ajax({
				url: '/cart/deletecart',
				type: 'POST',
				data: {
					id: id
				},
				success: function (res){
					$('.cart-page').html(res);
				},
				error: function (){
					alert('Ошибка');
				}
			})

		},
		error: function (){
			alert('Ошибка');
		}
	})
});

$('.cart-page').on('click','.cart-delete', function (e){
	e.preventDefault();
	let id = $(this).data('id');
	$('.' + id).remove();
	$.ajax({
		url: '/cart/deletecart',
		type: 'POST',
		data: {
			id: id
		},
		success: function (res){
			$.ajax({
				url: '/cart/updatecart',
				type: 'GET',
				success: function (res){
					$('.ms2_total_cost').html(res);
					$.ajax({
						url: '/cart/update',
						type: 'GET',
						success: function (res){
							$('.main-cart-box').html(res);
							$('.cart-counter').html($('.f-right').html());
						},
						error: function (){
							alert('Ошибка');
						}
					})
				},
				error: function (){
					alert('Ошибка');
				}
			});
		},
		error: function (){
			alert('Ошибка');
		}
	})
})

$('.cart_buy-qnt_wrap').on('click', '.plusCart', function (){

	let val =  Number(this.nextElementSibling.value),
		id = Number($(this).next().data('id')),
		quantity = 0;
	$('.input-value').each(function (i, item){
		quantity += Number(item.getAttribute('value'));
	});

	$.ajax({
		url: "/cart/change",
		type: "GET",
		data: {
			value : val,
			id : id
		},
		success: function (res){
			$('.ms2_total_cost').html(res);
			$('.cart-counter').html(quantity);
			$.ajax({
				url: '/cart/update',
				type: 'GET',
				success: function (res){
					$('.main-cart-box').html(res);
				},
				error: function (){
					alert('Ошибка');
				}
			})
		},
		error: function (){
			alert('errors cart');
		}
	});

});

$('.cart_buy-qnt_wrap').on('click', '.minusCart', function (e){

	let val =  Number(this.previousElementSibling.value),
		id = Number($(this).prev().data('id')),
		quantity = 0;
	$('.input-value').each(function (i, item){
		quantity += Number(item.getAttribute('value'));
	});
	$.ajax({
		url: "/cart/change",
		type: "GET",
		data: {
			value : val,
			id : id
		},
		success: function (res){
			$('.ms2_total_cost').html(res);
			$('.cart-counter').html(quantity);
			$.ajax({
				url: '/cart/update',
				type: 'GET',
				success: function (res){
					$('.main-cart-box').html(res);
				},
				error: function (){
					alert('Ошибка');
				}
			})
		},
		error: function (){
			alert('errors cart');
		}
	});
});


$('.cart_buy-qnt_wrap').on('blur', '.cartChange', function (e){

	let val =  Number($(this).val()),
		id = Number($(this).data('id')),
		quantity = 0;
	$('.input-value').each(function (i, item){
		quantity += Number(item.getAttribute('value'));
	});
	$.ajax({
		url: "/cart/change",
		type: "GET",
		data: {
			value : val,
			id : id
		},
		success: function (res){
			$('.ms2_total_cost').html(res);
			$.ajax({
				url: '/cart/update',
				type: 'GET',
				success: function (res){
					$('.main-cart-box').html(res);
					$.ajax({
						url: '/cart/update',
						type: 'GET',
						success: function (res){
							$('.main-cart-box').html(res);
							$('.cart-counter').html($('.f-right').html());
						},
						error: function (){
							alert('Ошибка');
						}
					})
				},
				error: function (){
					alert('Ошибка');
				}
			})
		},
		error: function (){
			alert('errors cart');
		}
	});
});
/*конец ajax запросы*/

//Гамбугер
let hambuger = document.querySelector('.hambuger'),
	closeHambuger = document.querySelector('.tss-label_pic'),
	dark = document.querySelector('.dark'),
	arrows = document.querySelectorAll('.fm-arrow'),
	dropDownList = document.querySelectorAll('.mob-sub-menu'),
	searchBox = document.querySelector('#search_submit');

hambuger.addEventListener('click', function(e){
	document.querySelector('.tss--close').style.transform = 'translateX(0px)';
	document.body.style.overflow = 'hidden';
	document.querySelector('.tss-label').style.display = 'block';
	document.querySelector('.dark').classList.toggle('dark-active');
});

closeHambuger.addEventListener('click', (e)=>{
	document.querySelector('.tss--close').style.transform = 'translateX(-400px)';
	document.querySelector('.tss-label').style.display = 'none';
    document.body.style.overflow = '';
	document.querySelector('.dark').classList.remove('dark-active');
});

dark.addEventListener('click', function (e){
	if(e.target == dark){
		document.querySelector('.tss--close').style.transform = 'translateX(-400px)';
		document.querySelector('.tss-label').style.display = 'none';
		document.body.style.overflow = '';
		document.querySelector('.dark').classList.remove('dark-active');
	}
},false)

arrows.forEach((item, i)=>{
	item.addEventListener('click', function (e){
		dropDownList.item(i).classList.toggle('mob-sub-menu-active');
	})
});