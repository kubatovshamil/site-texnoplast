// $(document).ready(function (){
//
//     var inputValue = $('#qnt-to-basket');
//
//     var plus = $('.cart_buy-qnt_wrap');
//     plus.on('click', function (e) {
//         e.preventDefault();
//         if(e.target.tagName === 'A' && e.target.innerHTML === '+' ){
//             e.currentTarget.childNodes[3].value++;
//         }
//         if(e.target.tagName === 'A' && e.target.innerHTML === '-'){
//             if(e.currentTarget.childNodes[3].value > 1) {
//                 e.currentTarget.childNodes[3].value--;
//             }
//         }
//
//
//     })
//
//     var inputValue = $('.input_value');
//     inputValue.on('blur', function (e) {
//         var val = this.value.replace(/[^\d;]/g, '');
//         this.value = val;
//     })
//
//
//     var bucketAdd = $('.bucket-add');
//     bucketAdd.on('click', function (e) {
//         e.preventDefault();
//         var value = $(this).data('name');
//
//     })
//
//     $('.cart_buy').on('click', function (e) {
//         e.preventDefault();
//         if((e.target.className === 'bucket-add' && e.target.tagName === 'A') || e.target.tagName === 'I'){
//             var inputVal = e.currentTarget.childNodes[1].childNodes[3].value;
//             var cartCounter = $('.cart-counter').value;
//             $.ajax({
//                 url: '/cart/add',
//                 type: 'GET',
//                 data: {
//                     data : value,
//                     value : inputVal
//                 },
//                 success: function (res) {
//                     $('.bucket-data').html(res);
//                 },
//                 error: function () {
//                     alert('ERROR');
//                 }
//             })
//         }
//     })
//
//
//
// });