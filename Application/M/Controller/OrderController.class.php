<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行  zhanghj
 * Date: 2017/3/7
 * Time: 10:51
 */
namespace M\Controller;
use Think\Cache\Driver\Redis;
use Think\Controller;

class OrderController extends Controller
{
    public function index(){

        $this->display();
    }

    public function mobilePayment(){
        header("Content-type:text/html;charset=utf-8");
        $this->display();
    }
    /**
     * 支付界面功能设计
     */
    public function payment(){
        $this->display();
    }

    /**
     * 查询物流跟踪信息
     */
    public function Trace(){
        /*$redis = new \Redis();
        $redis->connect('192.168.1.150', '6379');
        $redis->set('say','moTzxx say hello !');
        echo $redis->get('say');*/
        //TODO 获取物流单号
        $postData = I('get.');
        $waybillCode = $postData['courier_num']?$postData['courier_num']:null;
        //TODO 测试物流单号
        $waybillCode = 'VA36518521454';
        $res = expressinfo($waybillCode);
        $trace = $res['data'];
        $express = $this->traceExpress();
        foreach ($express as $key => $value){
            if ($res['com'] == $key){
                $comName = $value;
                break;
            }else{
                $comName = '暂无匹配';
            }
        }
        $this->assign('trace',$trace);
        $this->assign('comName',$comName);
        $this->display();
    }
    public function traceExpress(){
        $express = array(
            'aae' => 'aae全球专递',
            'anjie' => '安捷快递',
            'anxindakuaixi' => '安信达快递',
            'biaojikuaidi' => '彪记快递',
            'datianwuliu' => '大田物流',
            'debangwuliu' => '德邦物流',
            'ems' => 'ems快递',
            'guotongkuaidi' => '国通快递',
            'huitongkuaidi' => '汇通快运',
            'jixianda' => '急先达',
            'kuaijiesudi' => '快捷速递',
            'quanfengkuaidi' => '全峰快递',
            'rufengda' => '如风达',
            'shentong' => '申通',
            'shunfeng' => '顺丰',
            'tiantian' => '天天快递',
            'xinfengwuliu' => '信丰物流',
            'yibangwuliu' => '一邦速递',
            'yuantong' => '圆通速递',
            'yunda' => '韵达快运',
            'zhaijisong' => '宅急送',
            'zhongtong' => '中通速递',
            'jd' => '京东快递'
        );
        return $express;
    }

    //微信扫码支付
    public function wechatpaymenter(){
        // 虚拟的订单 请根据实际业务更改
        $order_sn = I('get.order_sn')?I('get.order_sn'):'ztM'.time();
        $cartPayController = new CartpayController();
        $order_amount = $cartPayController->wxPayOrder($order_sn);

        $proName = '欢迎购买商品，愿您购物愉快';
        $order=array(
            'body'=>$proName,
            'total_fee'=>$order_amount * 100,
            'out_trade_no'=> $order_sn.'M'.time(),// 订单号（需要根据自己的业务修改）,
            'product_id'=>1
        );
        weixinpay($order);
    }
}