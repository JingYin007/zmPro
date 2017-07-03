<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行   zhanghj
 * Date: 2017/3/7
 * Time: 10:51
 */
namespace M\Controller;
use Common\Model\CouponModel;
use Common\Model\OrderModel;
use M\Model\UserModel;
use Think\Controller;
class CartpayController extends Controller
{

    private $userModel;
    private $oiModel;
    private $couponModel;
    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
        $this->oiModel = new OrderModel();
        $this->couponModel = new CouponModel();
    }

    public function index(){
        $this->display();
    }

    /**
     * 支付宝支付post提交页面
     */
    public function alipay(){
        if (IS_POST){
            $out_trade_no = I('post.order_sn');
            $oiRes = M('order_info oi')
                ->field('oi.order_amount,og.product_name')
                ->join('ms_order_goods og on oi.order_id = og.order_id')
                ->where('oi.order_sn = '.$out_trade_no)
                ->find();
            $order_amount = $this->wxPayOrder($out_trade_no,0);
            $proName = $oiRes['product_name'];
            Vendor('Alipay.aop.AopClient');
            Vendor('Alipay.aop.request.AlipayTradeWapPayRequest');
            $aop = new \AopClient();
            $aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
            $aop->appId = '2017062307551519';
            $aop->rsaPrivateKey = 'MIIEpAIBAAKCAQEA3Xlb5QMnRvru0ru1P9tHVn7xu+o1DN/EcqKJv91HMkfONWXTGL1Qc6DghBmgCUKbrJkC9JIDa2cLF/h8QiwgzVJnKoV5u9FgrnFaQmoAz7OdVC0p4U+U7Z0QUR/T/B9yJCgNe5v3YEKId5G29+xtvYICKvsZsDTEpZWuAtQ28ilmYuCHS2eJ2Dh4w8gVLl3dswSfVJ0DGRlT9JaSnRm/A6wLbWHcaHKHmLCeQCkxOqfY5S/b2p+tkiyK4v57S/Q917L68w2DMRzDyfonNihaCBvhcbHltKyjmmLgNrALAzeQIbUK3cuCt907xxC8HCPz2n2m1/yYUxGEOlE01SfxfwIDAQABAoIBADar6KVl2+JHu4DF2X5D8R5HBAFxVVsyOdpaiUqVoyekViEUW8H1qdCBXCr/8GOYz7kRpIsfKDzxGOn36ySipA5LUzBJ9r0IeKdXUAKpDD45hpLq+zWlYYwug4KjKr9IO/L0+C8VV0Gp6uopTFNzR7vKRiK6DaNTw19kzanhHRc172gJhnQ830hH48FymLp5UzVBMn8g69A0vVxGmMmQer11Y28YHgjXwnviTpqsNCHz+4QW+FXLEWSjgq3MTf+fGCMXhaHjJFOP+fEiiZNIgFVqlA7MGGlua0ZqccyMO9K6h+LMl9CfiCR67UZQ3Ie4hIr6Nm0+cYvyM/2w1R81JxECgYEA+HU0fyU4oGDvFDjuZ2xgDH2b/kdiN4gMX++nECI8nb5FArFZ7KtUxScSn+ERu99gnXrZS9bZqfdYuJdRoAIKrC+4YDKEgRHqfOZrVPWiXtU9TbGL4oF+g5kLo8aEfehiDxLQYRoo5DkOyRERsDXl0TsNulCJHLpHd2wALPDo7bMCgYEA5DJ1t1sT3FBXWVFfQwYpBYuMRMLdxF1cXVvvtuLm753TIRiDaKZ1qA4ahT1HZGwlD4zbuvLqIyF5mqNK8O/jbt9F8lzlMf53uGRzyGF3ts8RsmVI7sNKqQcKtUET103QLXR5txGYKccSx6JfVnPh2ILpFOOIY7pnPwhouOXS/wUCgYBSlttJfHzzSuWOKlKNTIgs/sAQ6Xerj+zVIxu8kDToFqxn9b43nshB9PgK70zuz5UVJBYBULzv88mpKpu2fZdAn2hBielj4im5NPrutewwa9/B6MfgFj2QzxoAaef21n1qF03vSTvYiWLx0Vu44GGxiFjK2ySIyR8igmMYjUhQYwKBgQCmbyMqOxROMI60x0Oah8itka0ZjaLfkFRIh0Bb/DwA8fRGBDH7xsSzcK3pFduXI8UYBV1RidA5FTYzEfwbpGsVt2S1swk7IGTDKQjFUklVHMvEeFjsQ6WViFxH/JHzC37VWElZu0xm1BofXo74aAaFul0zbgxQ6GhbMc/nY0Az3QKBgQDNhUKNaUB9Gi2czYPkyDAcOaBzCHyVDS+sI5Z5PwL9nS+2u/hHbXvIpQxfARgUDaVjpHmutF7Nhulreq+a7/LmiRMIG9mCbLlHg0LPaRqTmS2Loy6CK5NuSsYlZ1V2M3sAeWuPFqW/pIT6asO8BlR80mhv2tLvvMFLb5FjsprwPw==';
            $aop->alipayrsaPublicKey='MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAu8jGLUWUWPGpSHOByqbQdMYriO0l9FiABy2B+S/c+tdNGX2Xk7GIr3YQPqhBIhMfH5q+7u4ny7lwVhbgGpmSiCwP7gQXxXNiwGX1aLOur8H7sGTEfZNFReQ5UqnEhZKeq/Lrt3WWCuu7cL7hBgSmy2b7tuckn4TO6k89LjT39nFfq5rTE/H/Cxbva4ORFj+GBH+fsiCwT750nLwHZM3oCbzmRwxyFc6CxAPiuh2vsL2sn9NGBIV8e+ZvYGStUQK9VHOUbP0eFuiCxoGyaPOffUy82aFqkqP5T1+fhhKfU3723Nf1eRgoOv5nBi7OMt7tz2Hxta68dcVKzdS1zeqSmwIDAQAB';
            $aop->apiVersion = '1.0';
            $aop->postCharset='UTF-8';
            $aop->format='json';
            $aop->signType='RSA2';
            $request = new \AlipayTradeWapPayRequest ();
            $bizContent = "{" .
                "    \"body\":\"欢迎购买商品，愿您购物愉快.\"," .
                "    \"subject\":\"真米如初-$proName\"," .
                "    \"out_trade_no\":\"$out_trade_no\"," .
                "    \"timeout_express\":\"90m\"," .
                "    \"total_amount\":$order_amount," .
                "    \"product_code\":\"QUICK_WAP_WAY\"" .
                "  }";
            $request->setBizContent($bizContent);
            $notifyUrl = C('ALI_CONFIG')['notifyUrl'];
            $returnUrl = C('ALI_CONFIG')['returnUrl'];
            $request->setNotifyUrl($notifyUrl);
            $request->setReturnUrl($returnUrl);
            $result = $aop->pageExecute ( $request);
            echo $result;
        }else{
            echo 'sorry,非法请求失败';
        }
    }
    /**
     * 支付宝支付通知功能
     */
    public function ali_notify(){
        $out_trade_no = I('post.out_trade_no');
        $this->toUpdatePayInfo($out_trade_no,2);
        echo 'success';
    }
    /**
     * 微信支付目标链接
     */
    public function pay(){
        Vendor('Weixinpay.Weixinpay');
        $wxpay = new \Weixinpay();
        $out_trade_no = $_GET['out_trade_no'] ? $_GET['out_trade_no'] : 0;
        $out_trade_no = getDecrypt($out_trade_no);
        $out_trade_no = $out_trade_no ? $out_trade_no : 0;
        //获取订单支付状态
        $oiRes = M('order_info')
            ->field('pay_status,user_id')
            ->where('order_sn = '.$out_trade_no)
            ->find();
        $pay_status = $oiRes['pay_status'];
        $user_id = $oiRes['user_id'];
        //获取配置表中的支付开启状态
        $wxPayTag = M('conf')
            ->where('id = 1')
            ->getField('wx_pay');
        if (!$wxPayTag){
            $content = 'Sorry,系统维护中，暂停支付';
        }else{
            if ($pay_status){
                $content = '该订单已支付，请勿重复提交';
            }else{
                // 获取jssdk需要用到的数据
                $data=$wxpay->getParameters();
                // 将数据分配到前台页面
                $assign=array(
                    'data'=>json_encode($data)
                );
                $out_trade_no = $data['out_trade_no'];
                $content = '订单，待支付中...';
            }
        }
        $this->assign('out_trade_no',$out_trade_no);
        $this->assign('content',$content);
        //$this->assign('total_fee',number_format($data['total_fee']/100, 2));
        $this->assign($assign);
        $this->display();
    }

    /**
     * 微信支付监听接口 判断是否完成了微信支付操作
     */
    public function notify(){
        // ↓↓↓下面的file_put_contents是用来简单查看异步发过来的数据 测试完可以删除；↓↓↓
        // 获取xml
        /*$xml=file_get_contents('php://input', 'r');
        //转成php数组 禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $data= json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA));
        file_put_contents('.notify.log', $data);*/
        // ↑↑↑上面的file_put_contents是用来简单查看异步发过来的数据 测试完可以删除；↑↑↑
        // 导入微信支付sdk
        Vendor('Weixinpay.Weixinpay');
        $wxpay=new \Weixinpay();
        $result = $wxpay->notify();
        if ($result) {
            $out_trade_no = explode('M',$result['out_trade_no'])[0] ;
            $this->toUpdatePayInfo($out_trade_no);
            //TODO 进行页面跳转
        }

    }

    /**
     * 进行更新支付后的数据处理
     * @param $value 订单号
     * @param int $pay_id 支付方式
     * @return int
     */
    public function toUpdatePayInfo($value,$pay_id = 1)
    {
        $order_info = M('order_info')
            ->field('pay_status,order_amount,user_id')
            ->where('order_sn = ' . $value)
            ->find();
        // 更新的条件
        if ($order_info['pay_status'] == 0) {
            //TODO 执行数据库更新操作
            $tag = $this->oiModel->wxPayAfterUpdate($value,$pay_id);
        }
        return $tag;
    }

    /*-------------------一道奇怪的分界线--没理由--就是为了分界！---------------------------------------*/
    /**
     * 微信配置 处理订单支付金额
     * @param $out_trade_no 支付的订单号
     * @param int $postageTag 是否返回运费标记位
     * @return float|int|mixed
     */
    public function wxPayOrder($out_trade_no,$postageTag = 0){
        //TODO 获取对应订单的交易价
        $batch_order_sn = M('order_info')
            ->where('order_sn = '.$out_trade_no)
            ->getField('batch_order_sn');
        //商品(品鉴购)总价
        $pjg_order_amount = 0;
        $nk_order_amount = 0;
        $other_order_amount = 0;
        //订制包邮费
        $act_freight = 0;
        if ($batch_order_sn != null){
            $arrOrder_sn = explode('|',$batch_order_sn);
            //批量支付
            foreach ($arrOrder_sn as $value){
                $pjg_order_amount += $this->getOrderAmount($value,'PJG');
                $nk_order_amount += $this->getOrderAmount($value,'NK');
                $other_order_amount += $this->getOrderAmount($value);
                //$act_freight += $this->getOrderFreight($value);
            }
        }else{
            $pjg_order_amount += $this->getOrderAmount($out_trade_no,'PJG');
            $nk_order_amount += $this->getOrderAmount($out_trade_no,'NK');
            $other_order_amount += $this->getOrderAmount($out_trade_no);
            //$act_freight += $this->getOrderFreight($out_trade_no);
        }
        //TODO 进行优惠券的使用效果加成
        $other_order_amount = $this->getCouponEffect($out_trade_no,$other_order_amount);
        $order_amount = $pjg_order_amount +$nk_order_amount + $other_order_amount;
        //TODO 计算运费
        $postage = $this->getOrderPostage($order_amount,$pjg_order_amount);
        //$postage += $act_freight;
        //TODO 如果运费标记位是 1，则返回运费
        if($postageTag == 1){
            return round($postage,2);
        }else{
            //订单总额
            $all_order_amount = $order_amount + $postage;
            return round($all_order_amount,2);
        }

    }

    //TODO 根据订单号 获取运费
    public function getOrderPostage($all_order_amount,$pjg_order_amount){
        //如果单品总价小于100元 需要交纳运费
        $postage = get_config('postage');
        $mj = get_config('postage_mj');
        if ($all_order_amount == 0 || $all_order_amount >= $mj || $pjg_order_amount > 1) {
            //TODO 满减 ||品鉴购 免去运费
            $postage = 0;
        }
        return $postage;
    }

    /**
     * 获取订单运费 主要是订制包运费
     */
    public function getOrderFreight($value){
        $order_freight = 0;
        if ($value){
            $order_freight = M('order_info')
                ->where('order_sn = '.$value)
                ->getField('order_freight');
        }
        return $order_freight;
    }
    /**
     * 获取订单的支付总额
     * @param $value 订单号
     * @return mixed
     */
    public function getOrderAmount($value,$Tag = null)
    {
        $order_amount = 0;
        if ($value){
            $strWhere = "order_sn = '" . $value . "'";
            //TODO　判断此商品是否为品鉴购活动
            $res = M('order_info oi')
                ->join('ms_order_goods og on og.order_id = oi.order_id')
                ->join('ms_goods g on og.product_id = g.goods_id')
                ->field('oi.order_amount,g.participation_activities pa')
                ->where($strWhere)
                ->find();
            $PJG_tag = is_PJG_OrderSn($value);
            $NK_tag = is_NK_OrderSn($value);
            $PJG_discount = get_config('PJG_discount');
            //TODO 获取品鉴购的单品总价
            if ($Tag == 'PJG'){
                if ($PJG_tag){
                    $order_amount = sprintf("%.2f",($res['order_amount']*$PJG_discount));
                }else{
                    $order_amount = 0;
                }
            }elseif ($Tag == 'NK'){
                if ($NK_tag){
                    $order_amount = $res['order_amount'];
                }else{
                    $order_amount = 0;
                }
            } else{
                if ($res){
                    //如果是单品
                    if ($PJG_tag||$NK_tag){
                        $order_amount = 0;
                    }else{
                        $order_amount = $res['order_amount'];
                    }
                }else{
                    //如果是订制包
                    $order_amount = M('order_info')
                        ->where($strWhere)
                        ->getField('order_amount');
                    $order_amount = $order_amount ? $order_amount : 0;

                }
            }
        }
        return $order_amount;
    }

    /**
     * 获取优惠券绑定商品  对应订单的总价
     * @param $value
     * @param int $customMade
     * @param int $couponToGoodsID
     * @return mixed
     */
    public function getCouponGoodsOrderAmount($value,$couponToGoodsID,$customMade = 0)
    {
        $strWhere = "order_sn = '" . $value . "' and custom_made = ".$customMade
            ." and og.product_id = ".$couponToGoodsID;
        $order_amount = M('order_info oi')
            ->join('ms_order_goods og on og.order_id = oi.order_id')
            ->where($strWhere)
            ->getField('oi.order_amount');
        return $order_amount;
    }
    /**
     * 根据选择的使用券 加成支付总额
     * @param $order_sn 主订单编号
     * @param $order_amount 待支付总额
     * @return int
     */
    public function getCouponEffect($order_sn,$order_amount,$status = 1){
        $strUserTime = '(c.validity_day * 86400 + uc.add_time) > '.time();
        //TODO 我也不清楚怎么就不能用上一句了!!!
        $strUserTime = 1;
        $res = M('user_coupon uc')
            ->join('ms_coupon c on c.c_id = uc.c_id')
            ->join('ms_order_info oi on uc.id = oi.user_coupon_id')
            ->field('c.type_id,c.discount,c.full_reduction,c.goods_id')
            ->where("c.is_delete = 0 and uc.status = ".$status." and ".$strUserTime." and order_sn = ".$order_sn)
            ->find();
        $couponToGoodsID = $res['goods_id'];
        if ($res){
            if ($couponToGoodsID){
                //TODO 如果该优惠券有对应的商品 只针对绑定商品进行优惠处理
                $order_amount = $this->couponGoodsDealForOrder($order_sn,$order_amount,$couponToGoodsID,$res['discount']);
            }else{
                $couponType = $res['type_id'];
                if ($couponType == 2){
                    //此为折扣券
                    $order_amount = $order_amount * floatval($res['discount'] * 0.1);
                }else{
                    //此为优惠券
                    $fReduction = explode('-',$res['full_reduction']);
                    $fullTag = $fReduction[0] ? $fReduction[0] : 10000;
                    $reductionTag = $fReduction[1] ? $fReduction[1] : 0;
                    if ($order_amount >= $fullTag){
                        $order_amount -= $reductionTag;
                    }
                }
            }
        }else{
            //TODO 判断没选择优惠券时的订单价格
            $nk_discount = get_config('nk_discount');
            $canUseNK = canUseNK_discount($order_sn);
            if ($canUseNK){
                $order_amount = $order_amount * floatval($nk_discount);
            }
        }
        return $order_amount;
    }

    /**
     * 处理优惠券绑定商品的 订单总价影响
     * @param $out_trade_no
     * @param $order_amount
     * @param $couponToGoodsID
     * @param $discount
     */
    public function couponGoodsDealForOrder($out_trade_no,$order_amount,$couponToGoodsID,$discount){
        //TODO 获取对应订单的交易价
        $batch_order_sn = M('order_info')
            ->where('order_sn = '.$out_trade_no)
            ->getField('batch_order_sn');

        //受影响的订单总价
        $couponGoods_for_order_amount = 0 ;
        if ($batch_order_sn != null){
            $arrOrder_sn = explode('|',$batch_order_sn);
            //批量支付
            foreach ($arrOrder_sn as $value){
                $couponGoods_for_order_amount += $this->getCouponGoodsOrderAmount($value,$couponToGoodsID,0);
            }
        }else{
            $couponGoods_for_order_amount += $this->getCouponGoodsOrderAmount($out_trade_no,$couponToGoodsID);
        }
        //计算节省去的总额
        $discountToAmount = $couponGoods_for_order_amount * (1 - floatval($discount * 0.1));
        return $order_amount - $discountToAmount;
    }
}