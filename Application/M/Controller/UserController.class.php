<?php
namespace M\Controller;
use Think\Controller;
class UserController extends Controller  {
    /**
     * 注册
     */
    public function register(){
        $this->display();
    }
    /**
     * 发送信息到用户手机
     */
    public function ajax_send_message(){
        if(IS_AJAX && IS_POST){
            $phone = I('post.phone');
            if((session('timestamp')+60) < time()){
                session('phone',$phone);
            }else{
                return showMsg(0,'网络繁忙，请稍等一会儿');
            }
            if(session('phone')){
                session('timestamp',time());
                send_verify($phone,'reg_verify');
                return showMsg(1,'success');
            } else {
                return showMsg(0,'Error');
            }
        }else{
            return showMsg(0,'网络繁忙，请求失败');
        }
    }
    /**
     * 六位验证码校验
     */
    public function verSixCode(){
        $sessionPhone = session('phone');
        if($sessionPhone){
            $phone = substr_replace($sessionPhone,'****',3,4);
            $this->assign('phone',$phone);
            $this->display();
        } else {
            $this->redirect('User/register');
        }
    }
    /**
     * 判断手机验证码是否正确
     */
    public function ajax_verify(){
        if(IS_AJAX){
                if(cookie('reg_verify') == md5(I('post.verify').'zm')){
                    cookie('reg_verify',null);
                    return showMsg(1,'验证码正确');
                }else{
                    return showMsg(0,'验证码错误');
                }
        }
    }
}