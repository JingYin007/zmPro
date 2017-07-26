<?php
/*               真米如初

                 _oo0oo_
                o8888888o
                88" . "88
                (| -_- |)
                0\  =  /0
              ___/'---'\___
            .' \\|     |// '.
           / \\|||  :  |||// \
          / _||||| -:- |||||- \
         |    | \\\ - /// |    |
         | .-\  ''\---/''  /-. |
         \ . -\___ '-' ___/- . /
       ___'. .'   /--.--\  '. .'___
     /."" '< '.___\_<|>_/___.' >' "".\
    | | :  `- \'.;'\ _ /';.'/ -`  : | |
    \  \ '_.   \_ __\ /__ _/   .-` /  /
=====`-.____`.___ \_____/ ___.-`___.-'=====
                  '=----='


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


          佛祖保佑        永无Bug
*/
namespace M\Controller;
use Common\Model\CouponModel;
use Think\Controller;
class LoginController extends Controller {
    private $appID;
    private $appSecret;
    private $callBackUrl;
    public function __construct()
    {
        parent::__construct();
        $wxConf = C('WEIXIN_LOGIN');
        $this->appID = $wxConf['OPEN_APPID'];
        $this->appSecret = $wxConf['OPEN_APPSECRET'];
        $this->callBackUrl = $wxConf['OPEN_CALLBACKURL'];
        layout(false);
    }
    //登录
    public function index(){
        $sysCfg['title'] = '登录';
        $state  = md5(uniqid(rand(), TRUE));
        $_SESSION["wx_state"]    =   $state; //存到SESSION
        $callback = urlencode($this->callBackUrl);
        $sysCfg['redirect_uri'] = $callback;
        $sysCfg['wx_state'] = $state;
        $this->assign('sysCfg',$sysCfg);
        $this->display();
    }
    public function wxIndex(){
        //微信登录
        //-------生成唯一随机串防CSRF攻击
        $state  = md5(uniqid(rand(), TRUE));
        $_SESSION["wx_state"]    =   $state; //存到SESSION
        $callback = urlencode($this->callBackUrl);
        'https://open.weixin.qq.com/connect/qrconnect?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect';
        $wxurl = "https://open.weixin.qq.com/connect/qrconnect?appid=".$this->appID."&redirect_uri="
            .$callback."&response_type=code&scope=snsapi_login&state=".$state."#wechat_redirect";
        header("Location: $wxurl");
    }

    public function wxBack(){
        if($_GET['state']!=$_SESSION["wx_state"]){
            echo 'sorry,网络请求失败...';
            exit("5001");
        }
        $url='https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$this->appID.'&secret='.$this->appSecret.'&code='.$_GET['code'].'&grant_type=authorization_code';
        $arr = curl_get_contents($url);
        //得到 access_token 与 openid
        //print_r($arr);

        $url='https://api.weixin.qq.com/sns/userinfo?access_token='.$arr['access_token'].'&openid='.$arr['openid'].'&lang=zh_CN';
        $user_info = curl_get_contents($url);
        //得到 用户资料
        //print_r($user_info);
        $this->dealWithWxLogin($user_info);
    }
    public function dealWithWxLogin($user_info){
        //TODO 数据处理
    }

}