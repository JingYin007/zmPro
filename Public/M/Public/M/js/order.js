/**
 * Created by 百鬼夜行 on 2017/3/8.
 */
/**
 * 待付款订单 商品数目增减
 * @param order_sn 订单编号
 * @param tag 商品数量操作标记
 * @param viewNum 显示数目
 * @param toUrl ajax请求地址
 * @param checkUrl ajax检查库存URL
 * @param product_id 商品对应的 ID
 * @returns {boolean}
 */
function toChangeOrderNum(order_sn,tag,viewNum,toUrl,checkUrl,product_id) {
    if(tag == 'add'){
        checkGoodsNum(order_sn,tag,viewNum,parseInt(viewNum.val()) + 1,toUrl,checkUrl,product_id);
        return false;
    }else {
        if(viewNum.val() > 1){
            viewNum.val(parseInt(viewNum.val()) - 1);
            updateOrderNum(order_sn,tag,toUrl);
        }else {
            layer.msg('商品数量 不能少于一件');
            return false;
        }
    }
}
//禁用或启用
function disableDelAdd(order_sn,tag) {
    $("#addNum-"+order_sn).attr('disabled',tag);
    $("#delNum-"+order_sn).attr('disabled',tag);
}
//检查商品库存 是否允许商品数目的增减
function checkGoodsNum(order_sn,tag,viewNum,buy_num,toUrl,checkUrl,goods_id) {
    var postData = {};
    postData['buy_num'] = buy_num;
    postData['goods_id'] = goods_id;
    disableDelAdd(order_sn,true);
    $.ajax({
        type:"POST",
        url: checkUrl,
        data :postData,
        dataType : "json",
        success : function(result){
            if(result.status == 1){
                //成功
                viewNum.val(parseInt(buy_num));
                updateOrderNum(order_sn,tag,toUrl);
            }else{
                //失败
                return layer.msg(result.message);
            }
            disableDelAdd(order_sn,false);
        },
        error: function(){
            disableDelAdd(order_sn,false);
        }
    });
}
function addrLoadInitView() {
    var btn  = document.getElementsByTagName(".bjgrdz button");
    for(var i=0;i<btn.length;i++){
        (function(index){
            btn[index].onclick = function(){
                if(btn[index].style.color === "green"){
                    btn[index].style.color = "";
                }else{
                    btn[index].style.color = "green";
                }
            }
        }(i))
    }
    btnColorInit();
}
function btnColorInit() {
    $(".bjdzxq").each(function () {
        var defaultTag = $(this).attr('status');
        if(defaultTag == '1'){
            $(this).addClass('selTrue');
            $(this).children('div').children('button').css('color','green');
        }
    });
}
function loadBtnView() {
    var btn  = document.getElementsByTagName("button");
    for(var i=0;i < btn.length;i++){
        (function(index){
            btn[index].onclick = function(){
                if(btn[index].style.color === "red"){
                    btn[index].style.color = "";
                }else{
                    btn[index].style.color = "red";
                }
            }
        }(i));
    }
    $(".qxscan .batch button").css('color','red');
    selAll();
}
function selAll() {
    //判断当前是否 是全选
    var selAllTag = redBtnTag(".qxscan .batch button");
    if(selAllTag == 1 ){
        $(".dfkcp .waitingPo").each(function () {
            $(this).children('div').children('button').css('color','red');
            $(this).addClass('selTrue');
        });
    }else {
        $(".dfkcp .waitingPo").each(function () {
            $(this).children('div').children('button').css('color','');
            $(this).removeClass('selTrue');
        });
    }
    allOrderPrice();
    updateOrderBatch();

}
function btnSel(order_sn) {
    var selTag = redBtnTag(".div-order-"+order_sn+" button");
    if (selTag == 1){
        $(".div-order-"+order_sn).addClass('selTrue');
    }else {
        $(".div-order-"+order_sn).removeClass('selTrue');
    }
    allOrderPrice();
    updateOrderBatch();
}
function redBtnTag(tag) {
    var link_col = $(tag).css("color");
    if (link_col == 'rgb(255, 0, 0)'){
        return 1;
    }else {
        return 0;
    }
}

function greenBtnTag(tag) {
    var link_col = $(tag).css("color");
    if (link_col == 'rgb(0, 128, 0)'){
        return 1;
    }else {
        return 0;
    }
}
//点击显示去支付（结算）按钮
function    showPayTip(tag){
    if (tag == 0){
        $("#toPayTip").hide();
    }else {
        $("#toPayTip").show();
    }
}
function allOrderPrice() {
    var allPrice = 0;
    var str_order_sn = '';
    var allSelTag = $('.dfkcp .selTrue');

    if(allSelTag.length > 0){
        allSelTag.each(function () {
            var num = $(this).children('.dzxcpm').children('div').children('.viewNum').val();
            var order_sn = $(this).attr("order_sn");
            str_order_sn += order_sn+"|";
            if(num){
                allPrice += parseFloat($(this).attr("rprice"))*parseInt(num);
            }else {
                allPrice += parseFloat($(this).attr("rprice"));
            }
        });
    }else {
        allPrice = '0.00';
    }
    allPrice = parseFloat(allPrice).toFixed(2);
    if(allPrice >= 100 || allPrice == 0){
        $(".postage").html('0.00');
    }else {
        $(".postage").html('10.00');
    }
    $("#allPrice").html(allPrice);
    $("#str_order_sn").val(str_order_sn);
    var order_sn = str_order_sn.split("|")[0]; //字符分割
    $("#order_sn").val(order_sn);
    selUc();
}

function toEndHarvest(toUrl,imgUrl) {
    var postData = {};
    var addStr = "";
    $.post(
        toUrl,
        postData,
        function (result) {
            if(result.status == 1){
                //成功
                if (result.data['echo'].length == 0 && result.data['eho'].length == 0 ){
                    addStr += '<p style="text-align: center;font-size:16px;margin-top: 20px">' +
                        '抱歉，您还没有已收货订单!</p>';
                }else {
                    result.data['echo'].forEach(function (e) {
                        var harvestTime = e.is_harvest_time;
                        addStr +=
                            "<div class='dfkxplb'>"+
                            "<div class='dzxcpt'>"+
                            "<img src='"+imgUrl+e.act_img+"'/>"+
                            "</div>"+
                            "<div class='dzxcpm'>"+
                            "<p>"+
                            "<a href='###'>"+e.act_name+ "(第"+e.product_name+"期)</a>"+
                            "</p>"+
                            "<span>"+e.custom_desc+"</span>"+
                            "<div class='dzxcsl'>收货时间:"+harvestTime+"</div>"+
                            "</div>"+
                            "<div class='dzxcjg dshjl'>"+
                            "<p>¥"+e.order_price+"</p><s>¥"+e.order_rprice+"</s>"+
                            "</div>"+
                            "</div>"
                    });
                    result.data['eho'].forEach(function (e) {
                        var harvestTime = e.is_harvest_time;
                        addStr +=
                            "<div class='dfkxplb'>"+
                            "<div class='dzxcpt'>"+
                            "<img src='"+imgUrl+e.thumbnail+"'/>"+
                            "</div>"+
                            "<div class='dzxcpm'>"+
                            "<p>"+
                            "<a href='###'>"+e.product_name+"</a>"+
                            "</p>"+
                            "<div class='dzxcsl'>收货时间:"+harvestTime+"</div>"+
                            "</div>"+
                            "<div class='dzxcjg dshjl'>"+
                            "<p>¥"+e.rprice+"</p>"+
                            "</div>"+
                            "</div>"
                    });
                }
                $(".div-endHarvest").html(addStr);
            }else{
                //失败
                layer.msg(result.message);
            }
        },"JSON");
}

//更新 待付款订单的商品数量
function updateOrderNum(order_sn,tag,toUrl) {
    var postData = {};
    postData['order_sn'] = order_sn;
    postData['change_tag'] = tag;
    disableDelAdd(order_sn,true);
    $.ajax({
        type:"POST",
        url: toUrl,
        data :postData,
        dataType : "json",
        success : function(result){
            if(result.status == 1){
                //成功
                allOrderPrice();
                disableDelAdd(order_sn,false);
            }else{
                //失败
                dialog.delCartFail(result.message);
                disableDelAdd(order_sn,false);
            }
        },
        error: function(){
            disableDelAdd(order_sn,false);
        }
    });
}
/**
 * 待收货订单 确认收货操作
 * @param order_sn 订单编号
 * @param toUrl ajax 请求地址
 */
function toConfirmGoods(rec_id,order_id,toUrl){
    var postData = {'rec_id':rec_id,'order_id':order_id};
    var remove_div = $("#div-waitingHarvest-"+rec_id);
    layer.open({
        type:0,
        title:false,
        btn:['确定','取消'],
        icon:3,
        closeBtn:2,
        content:"您现在就要确认收货吗？",
        scrollbar:true,
        yes:function () {
            //执行删除操作
            $.post(
                toUrl,
                postData,
                function (result) {
                    if(result.status == 1){
                        //成功
                        remove_div.remove();
                        layer.msg(result.message);
                        getOrderCount();
                    }else{
                        //失败
                        layer.msg(result.message);
                    }
                },"JSON");
        },
    });
}
/**
 * //查询物流信息
 * @param courier_num 物流单号
 * @param toUrl ajax 请求URL
 */
function toDeliveryMsg(courier_num,toUrl){
    toUrl+= '?courier_num='+courier_num;
    var width = (screen.availWidth - 50)+'px';
    var height = (screen.availHeight -100)+'px' ;
    console.log(width);
    layer.open({
        title:'物流信息',
        type: 2,
        area: [width, height],
        skin: 'layui-layer-rim', //加上边框
        content: [toUrl, 'no']
    });
}
function toAddWaittingOrder(toUrl,goods_id,imageUrl) {
    $.post(
        toUrl,
        {'goods_id':goods_id},
        function (result) {
            if(result.status == 1){
                //执行表单提交操作
                $(".div-addCart-"+goods_id)
                    .find('img').replaceWith('<img src="'+imageUrl+'/12.png" />');
                layer.msg(result.message);
                getOrderCount();
            }else{
                //失败
                layer.msg(result.message);
            }
        },"JSON");
}
function toOrderPayment(allSelTopId,tip,toUrl) {
    var allSelTag = $(allSelTopId+' .selTrue');
    var checkedLen = allSelTag.length;
    var strOrder_sn = '';
    if (checkedLen == 0) {
        //layer.msg(tip);
    } else {
        allSelTag.each(function () {
            strOrder_sn +=  $(this).attr("order_sn")+'|';
        });
        ajaxUpdateBatchOrder(toUrl,strOrder_sn);
    }
}
function goToWxPay(str_order_sn) {
    if(str_order_sn == null || str_order_sn == ''){
        layer.msg('请选择要支付的订单');
    }else {
        $("#form-toWxPayOrder").submit();
    }

}
function ajaxUpdateBatchOrder(toUrl,strOrder_sn) {
    $.post(
        toUrl,
        {'strOrder_sn':strOrder_sn},
        function (result) {
            if(result.status == 1){
                //执行表单提交操作
                $("#out_trade_no").val(result.data['out_trade_no']);
            }else{
                //失败
                layer.msg(result.message);
            }
        },"JSON");
}
/**
 * 待收货订单、已收货订单 --- 批量操作
 * @param toUrl ajax    请求地址
 * @param allSelTopId   当前“全选” 对应标签的父元素 ID
 * @param tip           未选择订单时的提示
 * @param content       弹出框的内容信息
 */
function toBatchOrder(toUrl,allSelTopId,tip,content) {
    var allSelTag = $(allSelTopId+' .selTrue');
    var checkedLen = allSelTag.length;
    var strOrder_sn = '';
    var postData = {};
    if (checkedLen == 0) {
        layer.msg(tip);
    } else {
        allSelTag.each(function () {
            strOrder_sn +=  $(this).attr("order_sn")+'|';
        });
        postData['str_Order_sn'] = strOrder_sn;
        layer.open({
            type:0,
            title:false,
            btn:['确定','取消'],
            icon:3,
            closeBtn:2,
            content:content,
            scrollbar:true,
            yes:function () {
                //执行删除操作
                $.post(
                    toUrl,
                    postData,
                    function (result) {
                        if(result.status == 1){
                            //成功
                            allSelTag.remove();
                            //getOrderCount();
                            allOrderPrice();
                            loadBtnView();
                            layer.msg(result.message);
                        }else{
                            //失败
                            dialog.delCartFail(result.message);
                        }
                    },"JSON");
            },
        });
    }
}


/**
 * //删除订单
 * @param toUrl ajax 请求地址
 * @param order_sn 订单编号
 * @param tag   操作标记 tag=1:待付款模式   tag=2:已收货模式
 */
function toDelOrderInfo(toUrl,order_sn) {
    var postData = {order_sn:order_sn};
    var remove_div = $(".div-order-"+order_sn);

    layer.open({
        type:0,
        title:false,
        btn:['确定','取消'],
        icon:3,
        closeBtn:2,
        content:"确定要删除此订单吗？",
        scrollbar:true,
        yes:function () {
            //执行删除操作
            $.post(
                toUrl,
                postData,
                function (result) {
                    if(result.status == 1){
                        //成功
                        remove_div.remove();
                        //getOrderCount();
                        allOrderPrice();
                        loadBtnView();
                        layer.msg(result.message);
                    }else{
                        //失败
                        dialog.delCartFail(result.message);
                    }
                },"JSON");
        },
    });
}

function toGetOrderCount(toUrl) {
    $.post(
        toUrl,
        function (result) {
            if(result.status == 1){
                $(".hd .waitingPay").html(result.data['waitingPayCount']);
                $(".hd .waitingHarvest").html(result.data['waitingHarvestCount']);
                $(".hd .endHarvest").html(result.data['endHarvestCount']);
            }else{
                //失败
                layer.msg(result.message);
            }
        },"JSON");
}
function view_customer_service_img(showTag) {
    $(".khfwan").click(function () {
        $(".img-customer-service").width($(window).width()*2/3);
        if (showTag == 1){
            showTag = 0;
            $(".img-customer-service").hide();
        }else {
            showTag = 1;
            $(".img-customer-service").show();
        }
    });
}
/**
 * 针对ios微信端 添加新地址刷新的一种替换方案
 * @param result
 * @param afterHtml
 */
function addAfterHtml(result,afterHtml) {
    $(".shdzxq .consignee").html(result.data[0]['consignee']+' '+result.data[0]['mobile']);
    $(".shdzxq .address").html(result.data[0]['address_name']+' '+result.data[0]['address']);
    $(".shdzxq .delivery_note").html(result.data[0]['delivery_note']);
    //TODO 刷新显示地址列表
    toAddress();
    result.data.forEach(function (e) {
        afterHtml +=
            "<div class='bjdzxq' status='"+e.status+"' id='div-addr-"+e.address_id+"'>"+
            "<div class='bjgrdz' onclick='btnAddrSel("+e.address_id+")'>"+
            "<button type='button'>◉</button>" +
            "</div>" +
            "<ul class='bjxqdz'>"+
            "<li>"+e.consignee+"&nbsp;"+e.mobile+
            "<span><a onclick='delUserAddr("+e.address_id+")'>删除</a></span>"+
            "</li>" +
            "<li>"+e.address_name+"&nbsp;"+e.address+"</li>"+
            "</ul>"+
            "</div>";
    });
    $("#div-address-view").html(afterHtml);
    $('#form-addNewMsg')[0].reset();
}






