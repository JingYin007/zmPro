<?php
namespace Common\Controller;
use Common\Model\CouponModel;
use Think\Controller;
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/4/17
 * Time: 15:20
 */
class HZhenmiController extends Controller  {
    private $loginID;
    public function _initialize(){
        header('Content-type: text/html; charset=utf-8');
        echo '<center>';
        echo '<h3>请使用手机微信端登录</h3>';
        echo '<h3>http://www.52zhenmi.com</h3>';
        echo '</center>';
        die;
    }
    public function getLoginID(){
        return $this->loginID;
    }
}