<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/10/8
 * Time: 15:12
 */

namespace M\Controller;


use Common\Controller\WXBizDataCryptController;
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


    public function page()
    {
        $this->display();
    }

    public function code5()
    {
        $password = 'password1232456';//前端 获取的原始密码
        //数据库存放的 使用BCRYPT算法加密的密码
        //此处仅为测试，实际应用时应从数据表中查询获得
        //$db_pass = '$2y$10$2vJJC.rb/swAUnTfc9B94.l/ix75kiZHvOZFpu0Dd8uzp07YWlj4q';
        $db_pass = password_hash($password, PASSWORD_BCRYPT);
        if (password_verify($password, $db_pass)) {
            echo "密码匹配";
        } else {
            echo "密码错误";
        }
    }

    public function pdo()
    {
        \PDO::ATTR_ERRMODE;
    }

    public function biaodan()
    {
        $this->display();
    }

    public function jstimu()
    {
        $this->display();
    }

    public function aaa()
    {
        echo '提交成功';
    }


    public function timu()
    {

        //TODO 读取文件 ciku.txt 中的敏感词
        // 注意该文件的路径正确,测试时我放在了C盘根目录下，可做参考
        $strCiku = file_get_contents('C:\\ciku.txt');
        /**
         * 注意一点，原本 readme.txt中介绍 ：（敏感词通过"|"连接）
         * 而实际的 ciku.txt 文件中的敏感词是通过" "连接，并且拥有换行
         * TODO 此处，我是严格按照源文件做的处理
         */
        $arrCiku = explode(' ', trim($strCiku));

        //正则表达式
        $pattern = [
            '/ /',//半角下空格
            '/　/',//全角下空格
            '/\r\n/',//window 下换行符
            '/\n/',//Linux && Unix 下换行符
        ];

        $replace = array('&nbsp;', '&nbsp;', '<br />', '<br />');
        $message = preg_replace($pattern, $replace, $_POST['message']);

        //遍历敏感词数组，依次进行字符的替换
        foreach ($arrCiku as $v) {
            $message = str_replace($v, '**', $message);
        }

        echo $message;

        /**
         * 运行后得到的结果如下：
         *
         * "In ** world th**t's **h**n**in** re**lly qui**kly, the bi****est risk is not t**kin** **ny risk."
         * —— M**rk Zu**kerber**
         *
         */

    }

    /**
     * 测试微信解密 用户数据
     *
     * AppID: wxdce3cdc5145256b4
     * AppSecret: 4f14b1348c4db195e8e78c15030b18fe
     */
    public function wxDecrypt()
    {

        $appid = 'wxdce3cdc5145256b4';
        $secret = '4f14b1348c4db195e8e78c15030b18fe';
        $code = $_GET['code'] ? $_GET['code'] : 0;

        $arrSess = $this->getWxSession($appid, $secret, $code);
        $sessionKey = $arrSess['session_key'];

        $encryptedData = $_GET['encryptedData'];
        $iv = $_GET['iv'];

        $pc = new WXBizDataCryptController($appid, $sessionKey);
        $errCode = $pc->decryptData($encryptedData, $iv, $data);

        if ($errCode == 0) {
            $loginKey = md5(base64_encode(time() + rand(0000, 50000)));
            session('wxLoginKey', $loginKey);
            return showMsg(1, 'Success', ['loginKey' => $loginKey, 'userInfo' => $data]);
        } else {
            return showMsg(0, 'Error', $errCode);
        }
    }

    /**
     * 登录凭证校验：使用 临时登录凭证code 获取 session_key 和 openid 等
     * @param $appid 小程序唯一标识
     * @param $secret 小程序的 app secret
     * @param $code 登录时获取的 code
     * @param string $grant_type 默认填写 authorization_code
     * @return mixed
     */
    public function getWxSession($appid, $secret, $code, $grant_type = 'authorization_code')
    {
        $req_url =
            'https://api.weixin.qq.com/sns/jscode2session?appid=' . $appid
            . '&secret=' . $secret . '&js_code=' . $code
            . '&grant_type=' . $grant_type;
        $json_data = file_get_contents($req_url);
        $arrData = json_decode($json_data, true);
        return $arrData;
    }

    /**
     * array_merge() 函数用于将一个或者多个数组的单元合并起来，返回结果为数组
     * ①如果合并的数组中有相同的字符串键名，则后面的值覆盖前面的值，键名不变
     * ②如果合并的数组中有相同的数字键名，则后面的值不覆盖前面的值，而是依次附加到后面
     * ③如果只有一个数组，并且该数组是数字索引的，则键名会以连续方式重新索引

     * array+array 是数组的联合运算
     * ①如果合并的数组中有相同的字符串键名，则取最先出现的值而把后面拥有相同键名的那些值“抛弃”
     * ②如果合并的数组中有相同的数字键名，则取最先出现的值而把后面拥有相同键名的那些值“抛弃”
     * ③如果只有一个数组，并且该数组是数字索引的，则键名会以连续方式重新索引
     */
    public function arrTest()
    {
        $arr1 = array('color' => 'red', 2, 4);
        $arr2 = array('a', 'b','c', 'color' => 'green');
        $res = array_merge($arr1, $arr2);
        print_r($res);
        echo '<br/><br/>';

        $arr3 = array();
        $arr4 = array(1 => 'a', 2 => 'b');
        $res2 = array_merge($arr3, $arr4);
        print_r($res2);
        echo '<br/><br/>';

        $arr5 = array('color' => 'red', 2, 4);
        $arr6 = array('a', 'b','c', 'color' => 'green');
        $res3 = $arr5 + $arr6;
        print_r($res3);
        echo '<br/><br/>';

        $arr7 = array();
        $arr8 = array(1 => 'a', 2 => 'b');
        $res4 = $arr7 + $arr8;
        print_r($res4);
    }

    public function YH(){
       $this->funYH2(10);
    }

    /**
     * 第一种代码实现
     * @param int $n 要求的层数
     * 理解思路：   $i代表行数; $j代表列数
     */
    public function funYH($n = 1){
        //初始化数组
        $arr = [];
        for($i = 0;$i < $n;$i++){
            //注意循环条件
            for($j = 0;$j <= $i;$j++){
                if($j == 0 || $i == $j){
                    $arr[$i][$j] = 1;
                }else {
                    $arr[$i][$j] = $arr[$i-1][$j-1]+$arr[$i-1][$j];
                }
                echo $arr[$i][$j]."\t";
            }
            echo "<br/>";
        }
    }

    /**
     * 第二种代码实现
     * @param int $n 要求的层数
     */
    public function funYH2($n = 1){
        //初始化数组
        $arrL = [1,1];
        //初始化索引
        $index = 0;
        while ($index < $n){
            if ($index == 0){
                echo $arrL[$index]."\t";
            }elseif ($index == 1){
                echo $arrL[$index - 1]."\t".$arrL[$index]."\t";
            }else{
                $oldL = $arrL;
                for ($i = 0;$i <= count($oldL);$i++){
                    $arrL[$i] = $oldL[$i-1] + $oldL[$i];
                    echo $arrL[$i]."\t";
                }
            }
            $index ++;
            echo "<br/>";
        }
    }
}