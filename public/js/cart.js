$(function () {

    $('#bucket-add').on('click', function (e) {
        e.preventDefault();

        var value = $(this).data('name');
        var inputVal = $('#qnt-to-basket').val();
        quantity = Number($('#qiuantityBucket').html()) + Number($('#qnt-to-basket').val());
        $('.add-bucket-tovar').attr('style', 'display: block');
        setTimeout(function () {
            $('.add-bucket-tovar').attr('style', 'display: none');
        },2000)
        $.ajax({
            url: '/cart/add',
            type: 'GET',
            data: {
                data : value,
                value : inputVal
            },
            success: function (res) {
                $('.bucket-data').html(res);
                $('#qiuantityBucket').attr('style', 'visibility: visible');
                $('#qiuantityBucket').html(quantity);
            },
            error: function () {
                alert('ERROR');
            }
        })
    });
})