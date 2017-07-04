/**
 * Created by 百鬼夜行 on 2017/3/24.
 */
//富文本编辑器
UE.getEditor('myEditor', {
    textarea: 'rule',
    initialFrameWidth: '100%',
    initialFrameHeight: 200,
    elementPathEnabled: true
});
selTypeFun();
function selTypeFun() {
    var typeTag = $("#selType").val();
    if(typeTag == 1){
        //优惠券
        $("#div-full-reduction").show();
        $("#div-discount").hide();
    }else if (typeTag == 2){
        //折扣券
        $("#div-discount").show();
        $("#div-full-reduction").hide();
    }
}
function todelCoupon(toUrl,cid,tag) {
    layer.open({
        type:0,
        title:false,
        btn:['确定','取消'],
        icon:3,
        closeBtn:2,
        content:"您确定要删除吗？",
        yes:function () {
            //执行删除操作
            $.post(
                toUrl,
                {'c_id':cid,'tag':tag},
                function (result) {
                    if(result.status == 1){
                        //成功
                        layer.msg(result.message);
                        $(".tr-"+cid).remove();
                    }else{
                        //失败
                        layer.msg(result.message);
                    }
                },"JSON");
        },
    });
}
