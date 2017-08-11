<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/8/11
 * Time: 15:35
 */

namespace M\Controller;
use phpmailer\Email;
use Think\Controller;

class EmailController extends Controller
{

    public function index(){
        $this->display();
    }
    public function send(){
        if (IS_POST){
            $postData = I('post.');
            $email = $postData['email'];
            $subject = $postData['subject'];
            $content = $postData['content'];
            if ($email == null || $email == ''){
                return showMsg(0,'邮箱地址不能为空');
            }elseif ($subject == null || $subject == ''){
                return showMsg(0,'主题不能为空');
            }elseif ( $content == null || $content == ''){
                return showMsg(0,'邮件内容不能为空');
            }else{
                Vendor('phpmailer.Email');
                $mail = new Email();
                $res = $mail::send($email,$subject,$content);
                if ($res){
                    return showMsg(1,'邮件发送成功');
                }else{
                    return showMsg(0,'邮件发送失败');
                }
            }
        }else{
            return showMsg(0,'请求不合法');
        }
    }
}