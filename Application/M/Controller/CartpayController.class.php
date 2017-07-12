<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行   zhanghj
 * Date: 2017/3/7
 * Time: 10:51
 */
namespace M\Controller;
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
            Vendor('Alipay.aop.AopClient');
            Vendor('Alipay.aop.request.AlipayTradeWapPayRequest');
            //$out_trade_no = I('post.order_sn');
            /*
             *  $out_trade_no 为自己业务逻辑中要支付的订单号
             *      可从POST数据中提取，具体安全起见可自行加密操作 此处仅举例测试数据
             *  $order_amount 为要进行支付的金额 注意要用小数转换
             *      例如：3.50，10.00
             *  $aliConfig 获取支付宝配置数据
             */
            $out_trade_no = '2017M'.time();
            $body = '欢迎购买商品，愿您购物愉快';
            $subject = '你好';
            $order_amount = 9.00;
            $aliConfig = C('ALI_CONFIG');
            $aop = new \AopClient();
            $aop->gatewayUrl = $aliConfig['gatewayUrl'];
            $aop->appId = $aliConfig['appId'];
            $aop->rsaPrivateKey = $aliConfig['rsaPrivateKey'];
            $aop->alipayrsaPublicKey=$aliConfig['alipayrsaPublicKey'];
            $aop->apiVersion = '1.0';
            $aop->postCharset='UTF-8';
            $aop->format='json';
            $aop->signType='RSA2';
            $request = new \AlipayTradeWapPayRequest ();
            $bizContent = "{" .
                "    \"body\":\"$body.\"," .
                "    \"subject\":\"$subject\"," .
                "    \"out_trade_no\":\"$out_trade_no\"," .
                "    \"timeout_express\":\"90m\"," .
                "    \"total_amount\":$order_amount," .
                "    \"product_code\":\"QUICK_WAP_WAY\"" .
                "  }";
            $request->setBizContent($bizContent);
            $request->setNotifyUrl($aliConfig['notifyUrl']);
            $request->setReturnUrl($aliConfig['returnUrl']);
            $result = $aop->pageExecute ( $request);
            echo $result;
        }else{
            echo 'sorry,非法请求失败';
        }
    }

    /**
     * 电脑端唤醒 支付宝扫码支付接口
     */
    public function aliPayPage(){
        $out_trade_no = '2017PC'.time();
        $order_amount = '12.88';
        $proName = "真米黑米 XXXXXX";
        Vendor('Alipay.aop.AopClient');
        Vendor('Alipay.aop.request.AlipayTradePagePayRequest');
        //构造参数
        $aop = new \AopClient();
        $aliConfig = C('ALI_CONFIG');
        $aop->gatewayUrl = $aliConfig['gatewayUrl'];
        $aop->appId = $aliConfig['appId'];
        $aop->rsaPrivateKey = $aliConfig['rsaPrivateKey'];

        $aop->apiVersion = '1.0';
        $aop->signType = 'RSA2';
        $aop->postCharset= 'utf-8';
        $aop->format='json';
        $request = new \AlipayTradePagePayRequest ();
        $request->setReturnUrl($aliConfig['returnPcUrl']);
        $request->setNotifyUrl($aliConfig['notifyUrl']);
        $request->setBizContent(
            "{" .
            "    \"product_code\":\"FAST_INSTANT_TRADE_PAY\"," .
            "    \"subject\":\"$proName\"," .
            "    \"out_trade_no\":\"$out_trade_no\"," .
            "    \"total_amount\":$order_amount," .
            "    \"body\":\"Iphone6 16G\"" .
            "  }");
        //请求
        $result = $aop->pageExecute ($request);
        //输出
        echo $result;
    }

    /**
     * 支付宝支付通知功能
     */
    public function notify_ali(){
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
        /*
         * $out_trade_no 为自己业务逻辑中要支付的订单号
         *      可从POST数据中提取，具体安全起见可自行加密操作 此处仅举例测试数据
         * $wxPayTag  微信支付开启状态
         *      一般为后台监控设置 此处测试定为开启状态
         * $pay_status 获取订单支付状态
         *      一般为支付前的订单查询 此处测试直接为未支付状态
         *
         */
        $wxPayTag = true;
        $pay_status = 0;
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
    public function notify_wx(){
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
            $this->toUpdatePayInfo($out_trade_no,'wx');
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