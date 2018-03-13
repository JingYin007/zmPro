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
        $arr = array(12, 14, 5, 2, 67, 53, 22, 0, 8);
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

    public function biaodan(){
        $this->display();
    }
    public function jstimu(){
        $this->display();
    }
    public function aaa(){
        echo '提交成功';
    }


    public function timu(){

        //TODO 读取文件 ciku.txt 中的敏感词
        // 注意该文件的路径正确,测试时我放在了C盘根目录下，可做参考
        $strCiku = file_get_contents('C:\\ciku.txt');
        /**
         * 注意一点，原本 readme.txt中介绍 ：（敏感词通过"|"连接）
         * 而实际的 ciku.txt 文件中的敏感词是通过" "连接，并且拥有换行
         * TODO 此处，我是严格按照源文件做的处理
         */
        $arrCiku = explode(' ',trim($strCiku));

        //正则表达式
        $pattern = [
                    '/ /',//半角下空格
                    '/　/',//全角下空格
                    '/\r\n/',//window 下换行符
                    '/\n/',//Linux && Unix 下换行符
                    ];

        $replace = array('&nbsp;','&nbsp;','<br />','<br />');
        $message =  preg_replace($pattern, $replace, $_POST['message']);

        //遍历敏感词数组，依次进行字符的替换
        foreach ($arrCiku as $v){
            $message = str_replace($v,'**',$message);
        }

        echo $message;

        /**
         * 运行后得到的结果如下：

        "In ** world th**t's **h**n**in** re**lly qui**kly, the bi****est risk is not t**kin** **ny risk."
        —— M**rk Zu**kerber**
         *
         */

    }

    public function timu2(){

        //TODO 读取文件 ciku.txt 中的敏感词
        $strCiku = file_get_contents('ciku.txt');
        /**
         * 注意一点，原本 readme.txt中介绍 ：（敏感词通过"|"连接）
         * 而实际的 ciku.txt 文件中的敏感词是通过" "连接，并且拥有换行
         * TODO 此处，我是严格按照源文件做的处理
         */
        $arrCiku = explode(' ',trim($strCiku));

        //正则表达式
        $pattern = [
            '/ /',//半角下空格
            '/　/',//全角下空格
            '/\r\n/',//window 下换行符
            '/\n/',//Linux && Unix 下换行符
        ];

        $replace = array('&nbsp;','&nbsp;','<br />','<br />');
        $message =  preg_replace($pattern, $replace, $_POST['message']);





        //找出不是邮箱的字符串
        $message = 'kkuggscdd test001@qq.com asda test002@qq.com okam test003@aa.com ';
        $preg = "/([a-z0-9\-_\.]+@[a-z0-9]+\.[a-z0-9\-_\.]+)+/i";


        //如果匹配到了 邮箱地址
        if (preg_match_all($preg, $message , $matches)) {
            $start = 0;
            $newMsg = '';
            foreach ($matches[0] as $val){
                //遍历敏感词数组，依次进行字符的替换
                $index2 = strpos($message,$val,$start);
                $tagStr = substr($message,$start,$index2);
                foreach ($arrCiku as $v){
                    $tagStr = str_replace($v,'**',$tagStr);
                }
                $newMsg .= $tagStr.$val;
                $start = $index2 + strlen($val);
            }

            echo $newMsg;
        }else{
            //遍历敏感词数组，依次进行字符的替换
            foreach ($arrCiku as $v){
                $message = str_replace($v,'**',$message);
            }
        }

        //echo $message;

    }


}