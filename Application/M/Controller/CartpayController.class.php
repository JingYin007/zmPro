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
            $order_amount = $this->wxPayOrder($out_trade_no);
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
        $this->toUpdatePayInfo($out_trade_no,'ali');
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
     * @param string $pay_type 支付方式 ：TODO 可用于支付方式的后续数据处理
     * @return mixed
     */
    public function toUpdatePayInfo($value,$pay_type = 'wx')
    {
        $order_info = M('order_info')
            ->field('pay_status,order_amount,user_id')
            ->where('order_sn = ' . $value)
            ->find();
        // 更新的条件
        if ($order_info['pay_status'] == 0) {
            //TODO 执行数据库更新操作
            //.......
        }
        return true;
    }

    /*-------------------一道奇怪的分界线--没理由--就是为了分界！---------------------------------------*/
    /**
     * 微信配置 处理订单支付金额
     * @param $out_trade_no 支付的订单号
     * TODO $all_order_amount 此为测试数值 可根据实际情况进行赋值
     * @return float|int|mixed
     */
    public function wxPayOrder($out_trade_no){
        //$out_trade_no 可用于真实业务的数据处理
        $all_order_amount = 1;
        return round($all_order_amount,2);
    }
}