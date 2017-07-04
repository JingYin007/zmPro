<?php
namespace Common\Controller;
use Common\Model\CouponModel;
use Common\Model\OrderModel;
use Think\Controller;
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/4/17
 * Time: 15:20
 */
class MZhenmiController extends Controller  {
    private $loginID;
    public function _initialize(){
        $this->dealForSever();
    }
    /**
     * 判断是否为线上服务 处理配置数据
     */
    public function dealForSever(){
            if (is_mobile() && is_weixin()){
                $this->dealWithData();
            }else{
                if (!is_mobile()) {
                    $this->redirect('Home/Index/index');
                }else{
                    $this->isNoWxDeal();
                }
            }
    }
    public function isNoWxDeal(){
        $memcacheUserID = S(session('m_name').'_ZMid');
        //判断是否存在 Memcache
        if (!$memcacheUserID){
            //如果不存在
            $currUserID = time();
            //判断cookie中是否存在ID值
            $cookieUserID = session('sessionUserID');
            if (!$cookieUserID){
                session('sessionUserID',$currUserID);
            }
            $this->loginID = session('sessionUserID');
        }else{
            session('sessionUserID',null);
            $this->loginID = $memcacheUserID;
        }
    }
    public function getLoginID(){
        return $this->loginID;
    }
    /**
     * 配置微信分享功能
     */
    public function getWxShare(){
        import('Org.Wechat.Weixin');
        $wxConf = C('WEIXINPAY_CONFIG');
        $wechat=new \Weixin($wxConf['TOKEN'],$wxConf['APPID'],$wxConf['APPSECRET']);
        $url = "http://www.52zhenmi.com".$_SERVER['REQUEST_URI'];
        $res = $wechat->getJsSign($url);
        $res['wxurl'] = $url;
        $this->assign('wx',$res);
    }

    /**
     * 数据处理
     */
    public function dealWithData()
    {
        if (!IS_AJAX) {
            //获取分享的链接写入数据库(我的分享)
            if (is_weixin()) {
                import('Org.Wechat.Weixin');
                $wxConf = C('WEIXINPAY_CONFIG');
                $wechat = new \Weixin($wxConf['TOKEN'],$wxConf['APPID'],$wxConf['APPSECRET']);
                $url = "http://www.52zhenmi.com" . $_SERVER['REQUEST_URI'];
                if (!S(session('m_name') . '_ZMid')) {
                    if (!$_GET['code']) {
                        $redirect_uri = $url;
                        $urls = $wechat->getOauthRedirect($redirect_uri);
                        header("Location:" . $urls);
                        die;
                    }
                }
                $re = $wechat->getOauthAccessToken();
                if ($re) {
                    $openid = $re['openid'];
                    $user_info = $wechat->getOauthUserinfo($re['access_token'], $openid);
                    //查询数据库是否存在
                    $userData = M('users')
                        ->where("openid = '$openid'")
                        ->Field('user_id,user_name,abnormal')
                        ->find();
                    if ($userData['user_id']) {
                        //已经有帐号则取用户名写入memcached
                        session('m_name', $userData['user_name']);
                        S($userData['user_name'], session_id(), 3600 * 24);
                        S($userData['user_name'] . '_ZMid', $userData['user_id'], 3600 * 24);

                        $return_url = explode('?', $url);
                        $return_url = $return_url['0'];
                        header("Location:$return_url");
                    } else {
                        //TODO 进行新用户的添加
                        $return_url = explode('?', $url);
                        $return_url = $return_url['0'];
                        //没有帐号需要转到用户名填写页面来完成授权
                        $addRecommend = genRandomString(5);
                        $user['openid'] = $openid;
                        $user['nickname'] = $user_info['nickname']?$user_info['nickname']:$user_name;
                        $user['sex'] = $user_info['sex'];
                        $user['reg_time'] = time();
                        $user['user_img'] = $user_info['headimgurl'];
                        $addTag = add('users', $user);
                        if ($addTag) {
                            //TODO 生成用户推荐二维码
                            code(C('WEB_M_SERVER'), $addTag, $addRecommend);
                            session('m_name', $user['user_name']);
                            S($user['user_name'], session_id(), 3600 * 24);
                            S($user['user_name'] . '_ZMid', $addTag, 3600 * 24);
                            Header("Location: " . $return_url);
                        }
                    }
                }
            } else {
                //不是微信客户端打开
                echo '请使用手机微信端打开...';
                die;
            }
        }
    }
}