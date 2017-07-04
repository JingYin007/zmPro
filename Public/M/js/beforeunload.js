//关闭页面执行方法
$(window).bind('beforeunload',function(){
        $.ajax({
            url: "{:U('Index/user_ber')}",
            type: 'get',
            data: '',
            dataType: 'json',
            success: function (msg) {
            }
        });
    });