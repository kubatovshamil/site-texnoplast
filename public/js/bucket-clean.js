function cleanBucket(event) {
    event.preventDefault();
    var conf = confirm('Вы точно действительно хотите очистить корзинку?');
    if(conf) {
        $.ajax({
            url: '/cart/delete',
            type: 'GET',
            success: function (res) {
                $('.block-content-bucket').html(res);
                $('#qiuantityBucket').html('');
                $('#qiuantityBucket').attr('style', 'visibility: hidden');
            },
            error: function () {
                alert('error');
            }
        })
    }
}

function cleanIdBucket(event) {
    event.preventDefault();
    var data = $('.bucketId').data('name');
    $.ajax({
        url: '/cart/deleteid',
        type: 'POST',
        data: {data : data},
        success: function (res) {
            $('.block-content-bucket').html(res);
        },
        error: function () {
            alert('error');
        }
    });
}