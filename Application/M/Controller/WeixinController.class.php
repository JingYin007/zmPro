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
        $wechat = new \Weixin('zhenmi', 'wxd6ef998d1322fa89', 'ef8e5728ffe1c25f18d24f7708d066b7');
        if (!isset($_GET['echostr'])) {
            //TODO 调用响应消息函数 自动回复
            $wechat->responseMsg();
        } else {
            //实现网址接入，调用验证消息函数
            $wechat->valid();
        }
    }
}