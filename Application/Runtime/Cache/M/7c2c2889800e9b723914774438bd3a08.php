<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link href="http://localhost/zmPro/Public/M/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/zmPro/Public/M/css/upzhang.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://localhost/zmPro/Public/M/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="http://localhost/zmPro/Public/M/js/order.js"></script>
    <script type="text/javascript" src="http://localhost/zmPro/Public/M/js/pay.js"></script>
    <script type="text/javascript" src="http://localhost/zmPro/Public/M/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="http://localhost/zmPro/Public/M/js/dialog/layer.js"></script>
    <script type="text/javascript" src="http://localhost/zmPro/Public/M/js/dialog.js"></script>
    <title>支付</title>
</head>
<body>
<!--<a href="<?php echo U('Order/indexx');?>">参考</a>-->
<div class="cpxqzsk">
    <div class="shdzxs">
        <a onclick="toAddress()">
            <div class="shdzxq" userAddr="<?php echo ($userAddr0["consignee"]); ?>">
                <b class="consignee"><?php echo ($userAddr0["consignee"]); ?>&nbsp;<?php echo ($userAddr0["mobile"]); ?></b>
                <p class="address"><?php echo ($userAddr0["address_name"]); ?>&nbsp;<?php echo ($userAddr0["address"]); ?></p>
                <span class="delivery_note"><?php echo ($userAddr0["delivery_note"]); ?></span>
                <?php
 if(!$userAddr0){ ?>
                <p class="tipAddUserAddrView">请点击此处添加收货地址</p>
                <?php
 } ?>
            </div>
            <a onclick="toAddress()">
                <div class="xgdzxq">＞</div>
            </a>
        </a>
    </div>
    <div id="div-payment">
        <div class="dfkcp xbzfbkj">
            <?php if(is_array($waitingPayOrder)): $i = 0; $__LIST__ = $waitingPayOrder;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wo): $mod = ($i % 2 );++$i;?><div class="dfkxplb waitingPo div-order-<?php echo ($wo["order_sn"]); ?>"
                     order_sn="<?php echo ($wo["order_sn"]); ?>" price="<?php echo ($wo["price"]); ?>" rprice="<?php echo ($wo["rprice"]); ?>">
                    <div class="dzxzan" onclick="btnSel('<?php echo ($wo["order_sn"]); ?>')">
                        <button type="button">◉</button>
                    </div>
                    <div class="dzxcpt">
                        <img src="<?php echo (C("FTP_SEVER")); ?>/<?php echo ($wo["thumbnail"]); ?>" /></div>
                    <div class="dzxcpm">
                        <p>
                            <a href="###"><?php echo ($wo["product_name"]); ?></a>
                        </p>
                        <div class="dzxcsl">

                            <input name="" type="button" class="dzxczj"
                                   id="delNum-<?php echo ($wo["order_sn"]); ?>"
                                   onclick="changeOrderNum('<?php echo ($wo["order_sn"]); ?>','del','<?php echo ($wo["product_id"]); ?>')" value="-"/>
                            <input name="" type="text" class="dzxcsjs viewNum"
                                   id="viewNum-<?php echo ($wo["order_sn"]); ?>" value="<?php echo ($wo["product_number"]); ?>"/>
                            <input name="" type="button" class="dzxczj"
                                   id="addNum-<?php echo ($wo["order_sn"]); ?>"
                                   onclick="changeOrderNum('<?php echo ($wo["order_sn"]); ?>','add','<?php echo ($wo["product_id"]); ?>')" value="+"/>
                        </div>
                    </div>
                    <div class="dzxcjg">
                        <p>￥<?php echo ($wo["rprice"]); ?></p>
                        <span class="spanDel" onclick="delOrderInfo('<?php echo ($wo["order_sn"]); ?>')">
                            <a href="###">×</a>
                    </span>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

            <div class="qxscan">
                <div class="batch">
                    <span onclick="selAll()">
                        <button type="button" id="checkbox_a1" >◉</button>
                        <label for="checkbox_a1" style="margin-left: -2px">全部</label>
                        </span>
                    <span>
                        <input name="" type="button" onclick="delBatch()" value="删除" />
                    </span>
                    <b>￥<label id="allPrice">1254.00</label></b>
                </div>
            </div>
        </div>
        <div class="yfxsnr">邮费：￥<label class="postage"><?php echo ($postage); ?></label>元<span><?php echo ($postage_tip); ?></span></div>
        <div class="yhkxzjs">
            <?php if(is_array($useCoupons)): $i = 0; $__LIST__ = $useCoupons;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$use): $mod = ($i % 2 );++$i;?><span class="sel" id="uc-<?php echo ($use["c_id"]); ?>" attr-c_id="<?php echo ($use["c_id"]); ?>" onclick="selUc('<?php echo ($use["c_id"]); ?>')">
                    <?php echo ($use["discount"]); ?>折卡X<label class="sum_<?php echo ($use["c_id"]); ?>"><?php echo ($use["sum"]); ?></label></span><?php endforeach; endif; else: echo "" ;endif; ?>
            <p class="xkjgysgb ">￥<label class="wx_allPrice">0.00</label></p>
        </div>
        <div class="hdzkfs zfymhdk">获得折扣卡办法<b>></b></div>
        <div class="hdzkwzjs zfymhdkjs">
            <?php echo ($coupon_rule); ?>
        </div>
        <div class="zjyjrzs">
            <div class="yhtxzs">
                <img src="<?php echo ($user_img); ?>" />
            </div>
            <div class="yhzfyzs"><?php echo ($ad_word); ?></div>
        </div>
        <div class="msfkjzan">
            <input name="" onclick="orderPayment()" type="button" value="支付订单" />
        </div>
    </div>
    <div id="div-address" style="display: none">
    <div id="div-address-view">
        <?php if(is_array($userAddr)): $i = 0; $__LIST__ = $userAddr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addr): $mod = ($i % 2 );++$i;?><div class="bjdzxq" status="<?php echo ($addr["status"]); ?>"
                 id="div-addr-<?php echo ($addr["address_id"]); ?>" >
                <div class="bjgrdz" onclick="btnAddrSel('<?php echo ($addr["address_id"]); ?>')">
                    <button type="button">◉</button>
                </div>
                <ul class="bjxqdz">
                    <li><?php echo ($addr["consignee"]); ?>&nbsp;<?php echo ($addr["mobile"]); ?>
                        <span><a onclick="delUserAddr('<?php echo ($addr["address_id"]); ?>')">删除</a></span>
                    </li>
                    <li><?php echo ($addr["address_name"]); ?>&nbsp;<?php echo ($addr["address"]); ?></li>
                </ul>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="xzyhdz">
        <input name="" type="button" value="+新增地址" onclick="upAddNewMsg()" />
    </div>
    <form class="form-addNewMsg" id="form-addNewMsg" style="margin-top:0;">
        <div class="div-addNewMsg">
            <label>姓名：</label>
            <input type="text" name="consignee"/>
            <br/><br/>
            <label>电话：</label>
            <input type="text" name="mobile"/>
            <br/><br/>
            <label>地址：</label>
            <input name="address" type="text" placeholder="请输入详细地址" />
            <br/><br/>
            <label>备注：</label>
            <select name="delivery">
                <?php if(is_array($delivery)): $i = 0; $__LIST__ = $delivery;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><option value="<?php echo ($d["id"]); ?>"><?php echo ($d["delivery_note"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <br/><br/>
            <input type="button" value="添加" onclick="addNewMsg()" class="qrtjdz"/>
            <input type="reset" value="重置" class="cztjdz"/>
        </div>
    </form>
</div>
</div>

<!--<form action="<?php echo U('Cartpay/pay');?>" method="get" id="form-toWxPayOrder">
       <input name="out_trade_no" id="out_trade_no" value="<?php echo ($order_sn); ?>" type="hidden" />
   </form>-->
<form action="http://www.52zhenmi.com/M/Cartpay/pay" method="get" id="form-toWxPayOrder">
    <input name="out_trade_no" id="out_trade_no" value="" type="hidden" />
</form>
<input name="str_order_sn" id="str_order_sn" value="" type="hidden" />
<input name="order_sn" id="order_sn" value="" type="hidden" />
</body>
<script>
    $(document).ready(function(){
        $(".hdzkfs").toggle(function(){
            $(this).next(".hdzkwzjs").animate({height: 'toggle', opacity: 'toggle'}, "slow");
        },function(){
            $(this).next(".hdzkwzjs").animate({height: 'toggle', opacity: 'toggle'}, "slow");
        });
    });
    $(document).bind("click",function(e){
        $('div').closest('.hdzkwzjs').each(function(){
            if(e.target != this){
                $(this).hide("slow");
            }
        });
    })
    $(document).ready(function(){
        var aac=$(".yhtxzs img").width();
        $(".yhtxzs img").css("height", aac);
    });
    $(document).ready(function(){
        var aac=$(".yhtxzs img").height();
        var bbc=$(".yhzfyzs").height();
        $(".yhzfyzs").css("padding-top", (aac - bbc) / 2);
    });
</script>
<script>
    var addressViewShowTag = 0;
    loadBtnView();
    var tag = 0;
    var userAddrTag = $(".shdzxq").attr('userAddr');

    if (userAddrTag){
        $(".tipAddUserAddrView").hide();
    }else {
        $(".tipAddUserAddrView").show();
    }
    addrLoadInitView();

    function selUc(c_id) {
        var toUrl = "<?php echo U('Order/ajaxSetUseCoupon');?>";
        var strOrder_sn = $("#str_order_sn").val();
        var order_sn = $("#order_sn").val(); //字符分割

        if(c_id == null){
            c_id = $(".xzyhkbs").attr('attr-c_id');
            if(c_id == null){
                var viewAllPrice = parseFloat($("#allPrice").html())+parseFloat($(".postage").html());
                $(".wx_allPrice ").html(viewAllPrice.toFixed(2));
                c_id = 0;
                getAllPrice(order_sn);
                //return;
            }
        }
        //loading层
        index = layer.load(1, {
            shade: [0.1,'#fff'], //0.1透明度的白色背景
            time:1200,
        });
        $.post(
                toUrl,
                {'strOrder_sn':strOrder_sn,'tag':c_id},
                function (result) {
                    getAllPrice(order_sn);
                    var sumTag = $(".sum_"+c_id);
                    if(result.status == 1){
                        selEffect(c_id,sumTag,1)
                    }else{
                        if (result.status == -1){
                            selEffect(c_id,sumTag,0)
                        }else {
                            dealSelView();
                            layer.msg(result.message,{time:1200});
                        }
                    }
                    //layer.msg(result.message,{time:1200});
                },"JSON");
    }
    function selEffect(c_id,sumTag,tag) {
        var currSum = parseInt(sumTag.html());
        var viewTag = $("#uc-"+c_id);
        if (tag == 1){
            sumTag.html(parseInt(currSum-1));
            dealSelView();
            viewTag.addClass('xzyhkbs');
        }else {
            sumTag.html(parseInt(currSum+1));
            viewTag.removeClass('xzyhkbs');
        }
    }
    function dealSelView() {
        $(".xzyhkbs").each(function () {
            var c_id = $(this).attr("attr-c_id");
            var sumTag = $(".sum_"+c_id);
            var currSum = parseInt(sumTag.html());
            sumTag.html(parseInt(currSum + 1));
            $(this).removeClass('xzyhkbs');
        })
    }
    function getAllPrice(order_sn) {
        var toUrl = "<?php echo U('Order/ajaxGetAllPrice');?>";
        $.post(
                toUrl,
                {'order_sn' : order_sn,},
                function (result) {
                    $(".postage").html(result.data['postage'].toFixed(2));
                    $(".wx_allPrice").html(parseFloat(result.data['wx_allPrice']).toFixed(2));
                },"JSON");
    }
    //待付款订单 商品数量增加或减少
    function changeOrderNum(order_sn,tag,product_id) {
        var viewNum = $(".dzxcsl #viewNum-" + order_sn);
        var toUrl = "<?php echo U('Order/ajaxChangeOrderNum');?>";
        var checkUrl = "<?php echo U('Order/ajaxCheckGoodsNum');?>";
        toChangeOrderNum(order_sn,tag,viewNum,toUrl,checkUrl,product_id);
    }
    //删除订单
    function delOrderInfo(order_sn) {
        var toUrl = "<?php echo U('Order/ajaxDelOrder');?>";
        toDelOrderInfo(toUrl,order_sn);
    }
    //已支付订单 批量删除
    function delBatch() {
        var toUrl = "<?php echo U('Order/ajaxDelBatchOrder');?>";
        toBatchOrder(toUrl,'.dfkcp','请选择要删除的订单！','确定要批量删除此订单吗？');
    }
    function updateOrderBatch() {
        var toUrl = "<?php echo U('Order/ajaxUpdateBatchOrder');?>";
        toOrderPayment('.dfkcp','请选择要结算的订单！',toUrl);
    }
    function orderPayment() {
        var str_order_sn = $("#str_order_sn").val();
        //ajax 检查是否拥有默认收货地址
        var toUrl = "<?php echo U('Order/ajaxCheckDefaultAddr');?>";
        toCheckDefaultAddr(toUrl,str_order_sn);

    }
    function btnAddrSel(address_id) {
        var selTag = greenBtnTag("#div-addr-"+address_id+" button");
        var toUrl = "<?php echo U('Order/ajaxSetDefaultAddr');?>";
        toBtnAddrSel(address_id,selTag,toUrl);
    }
    //删除收货地址
    function delUserAddr(addr_id) {
        var toUrl = "<?php echo U('Order/ajaxDelAddr');?>";
        toDelUserAddr(toUrl,addr_id);
    }
    //编辑收货地址
    function editUserAddr(addr_id) {
        var toUrl = "<?php echo U('Order/ajaxEditAddr');?>";
        toEditUserAddr(toUrl,addr_id);
    }
    //添加收货地址
    function addNewMsg() {
        if(checkmsg() === false){
            return;
        }
        var toUrl = "<?php echo U('Order/ajaxAddUserAddr');?>";
        var postData =  $("#form-addNewMsg").serialize();
        var afterHtml = "";
        $.post(
                toUrl,
                postData,
                function (result) {
                    layer.msg(result.message);
                    if(result.status == 1){
                        //成功
                        //location.reload();
                        $(".tipAddUserAddrView").hide();
                        addAfterHtml(result,afterHtml);
                    }
                },"JSON");
    }

     function checkmsg(){
        var flag = true;
        $('#form-addNewMsg').find('input').each(function(i,v){
            var name = v.getAttribute('name');
            var val = $.trim(this.value);
            switch(name) {
                case 'consignee':
                    if (val.length <= 0) {
                        layer.msg('姓名不能为空!',{time:1500});
                        flag = false;
                        return false;
                    }
                    break;
                case 'mobile':
                    var phoneNumReg = /^1(3|4|5|7|8)\d{9}$/;
                    if (val.length <= 0) {
                        layer.msg('手机号码不能为空!',{time:1500});
                        flag = false;
                        return false;
                    } else if (!phoneNumReg.test(val)) {
                        layer.msg('请输入正确的手机号码!',{time:1500});
                        flag = false;
                        return false;
                    }
                    break;
                case 'address':
                    if (val.length <= 0) {
                        layer.msg('地址不能为空!',{time:1500});
                        flag = false;
                        return false;
                    }
                    break;
                default:
            }
        });
        return flag;
     }

</script>
</html>