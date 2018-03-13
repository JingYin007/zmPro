<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/10/8
 * Time: 15:12
 */

namespace M\Controller;


use Think\Controller;

class TestController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        header("Content-Type:text/html;charset=utf-8");
    }

    public function index()
    {
        $arr = array(12,14,5,2,67,53,22,0,8);
        $res = $this->BubbleSort3($arr);
        var_dump($res);



    }




    public function page(){
        $this->display();
    }
    public function code5(){
        $password = 'password1232456';//前端 获取的原始密码
        //数据库存放的 使用BCRYPT算法加密的密码
        //此处仅为测试，实际应用时应从数据表中查询获得
        //$db_pass = '$2y$10$2vJJC.rb/swAUnTfc9B94.l/ix75kiZHvOZFpu0Dd8uzp07YWlj4q';
        $db_pass = password_hash($password, PASSWORD_BCRYPT);
        if (password_verify($password , $db_pass)){
            echo "密码匹配";
        }else {
            echo "密码错误";
        }
    }

    public function pdo(){
        \PDO::ATTR_ERRMODE;
    }


}