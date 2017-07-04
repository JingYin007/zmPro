/**
 * Created by 百鬼夜行 on 2017/3/14.
 */

function toCheckDefaultAddr(toUrl,str_order_sn) {
    $.post(
        toUrl,
        {},
        function (result) {
            if(result.status == 1){
                //成功
                goToWxPay(str_order_sn);
            }else{
                //失败
                layer.msg('Sorry,您还未添加收货地址');
            }
        },"JSON");
}

function toAddress() {
    if (addressViewShowTag){
        $(".xgdzxq").html("✔");
        $("#div-payment").show();
        $("#div-address").hide();
        addressViewShowTag = 0;
        //window.location.reload();
    }else {
        $(".xgdzxq").html("✘");
        $("#div-payment").hide();
        $("#div-address").show();
        addressViewShowTag = 1;
    }
}
function upAddNewMsg() {
    var tag = addTag();
    if (tag == 1){
        $(".xzyhdz input").val('-取消操作');
        $(".form-addNewMsg").show();
    }else {
        $(".xzyhdz input").val('+新增地址');
        $(".form-addNewMsg").hide();
    }
}
function addTag() {
    if (tag == 1){
        tag = 0;
    }else {
        tag = 1;
    }
    return tag;
}
function toBtnAddrSel(address_id,selTag,toUrl) {
        $(".bjdzxq").each(function () {
            $(this).children('div').children('button').css('color','');
            $(this).removeClass('selTrue');
        });
        $("#div-addr-"+address_id).addClass('selTrue');
        $("#div-addr-"+address_id).children('div').children('button').css('color','green');
        toSetDefaultAddr(toUrl,address_id);
}

function toEditUserAddr(toUrl,address_id) {
    layer.msg('编辑');
}
//设置默认收货地址
function toSetDefaultAddr(toUrl,address_id) {
    $.post(
        toUrl,
        {'address_id':address_id},
        function (result) {
            if(result.status == 1){
                //成功
                $(".shdzxq .consignee").html(result.data['consignee']+' '+result.data['mobile']);
                $(".shdzxq .address").html(result.data['address_name']+' '+result.data['address']);
                $(".shdzxq .delivery_note").html(result.data['delivery_note']);
                layer.msg(result.message);
            }else{
                //失败
                layer.msg(result.message);
            }
        },"JSON");
}
function toDelUserAddr(toUrl,address_id) {
    var remove_div = $("#div-addr-"+address_id);
    layer.open({
        type:0,
        title:false,
        btn:['确定','取消'],
        icon:3,
        closeBtn:2,
        content:"确定要删除此地址吗？",
        scrollbar:true,
        yes:function () {
            //执行删除操作
            $.post(
                toUrl,
                {'address_id':address_id},
                function (result) {
                    if(result.status == 1){
                        //成功
                        remove_div.remove();
                        layer.msg(result.message);
                    }else{
                        //失败
                        layer.msg(result.message);
                    }
                },"JSON");
        },
    });
}















