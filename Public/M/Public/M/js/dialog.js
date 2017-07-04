var dialog = {
    // 错误弹出层
    error: function(message,url) {
        layer.open({
            content:message,
            icon:2,
            title : '错误提示',
            yes : function(){
                location.href=url;
            },
        });
    },

    //成功弹出层
    success : function(message,url) {
        layer.open({
            content : message,
            icon : 1,
            yes : function(){
                location.href=url;
            },
        });
    },

    // 确认弹出层
    confirm : function(message, url) {
        layer.open({
            title:false,
            content : message,
            icon:3,
            btn : ['确定','取消'],
            yes : function(){
                location.href=url;
            },
        });
    },

    //提示，商品属性值没有选择完全
    tipNoAttr : function(message) {
        layer.tips(message, $("#buyTip"), {
            tips: [1, '#3595CC'],
            time: 3000
        });
    },

    //提示，余额支付密码错误提示
    tipPwdErr : function(message) {
        layer.tips(message, $("#xianshi"), {
            tips: [1, '#3595CC'],
            time: 3000
        });
    },

    //提示，用户未登录
    tipNoLogin : function(message) {
        layer.open({
            title:false,
            content : message,
            icon:4,
            btn : ['确定'],
        });
    },

    //购物车 删除记录失败提示
    delCartFail: function(message) {
        layer.open({
            title:false,
            content : message,
            icon:5,
            btn : ['确定'],
        });
    },

    //支付 成功提示
    tipPaySucc: function(message,url,orderUrl) {
        layer.open({
            content : message,
            icon:1,
            title:false,
            btn : ['查看订单','首页逛逛'],
            yes : function(){
                location.href = orderUrl;
            },
            btn2 :function () {
                location.href = url;
            },
        });
    },

    //支付 失败提示
    tipPayErr: function(message) {
        layer.open({
            content : message,
            title:false,
            icon:5,
            btn : ['确定'],
        });
    },
}

