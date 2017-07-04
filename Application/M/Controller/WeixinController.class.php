<?php
namespace M\Controller;
use Think\Controller;
/**
 * 微信开发配置控制器
 * Class WeixinController
 * @package M\Controller
 */
class WeixinController extends Controller
{
    public function index()
    {
        import('Org.Wechat.Weixin');
        //参数传值 token、AppID、AppSecert
        $wxConf = C('WEIXINPAY_CONFIG');
        $wechat = new \Weixin($wxConf['TOKEN'],$wxConf['APPID'],$wxConf['APPSECRET']);
        if (!isset($_GET['echostr'])) {
            //TODO 调用响应消息函数 自动回复
            $wechat->responseMsg();
        } else {
            //实现网址接入，调用验证消息函数
            $wechat->valid();
        }
    }
}