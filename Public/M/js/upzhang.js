/**
 * Created by 百鬼夜行 on 2017/5/8.
 */
function upQuestion(article_id) {
    var toUrl = "{:U('Rank/rightForArticleIntegral')}";
    var postData = {'article_id':article_id};
    layer.open({
        type:0,
        title:false,
        btn:['确定','取消'],
        icon:3,
        closeBtn:2,
        content:"确定要提交答卷吗？",
        scrollbar:true,
        yes:function () {
            //执行删除操作
            $.post(
                toUrl,
                postData,
                function (result) {
                    if(result.status == 1){
                        //成功
                        layer.msg(result.message);
                    }else{
                        //失败
                        dialog.delCartFail(result.message);
                    }
                },"JSON");
        },
    });

}