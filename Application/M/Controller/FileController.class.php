<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/10/8
 * Time: 15:12
 */

namespace M\Controller;


use Think\Controller;

class FileController extends Controller
{

    public function index()
    {
        $this->display();
    }
    public function write(){
        // 打开文件
        // 将文件的内容读取出来，在开头加入Hello World
        // 将拼接好的字符串写回到文件当中

        $file = './file_hello.txt';
        $handle = fopen($file, 'r');
        $content = fread($handle, filesize($file));
        $content = 'Hello World'. $content;
        fclose($handle);
        $handle = fopen($file, 'w');
        fwrite($handle, $content);
        fclose($handle);

        $res = file_get_contents('file_hello.txt');
        var_dump($res);
    }

    /**
     * 遍历目录 文件
     * @param $dir
     */
    public function loopDir($dir){
        $handle = opendir($dir);
        while (false !==($file = readdir($handle))){
            if ($file != '.' && $file != '..'){
                echo $file."<br/>";
                if (filetype($dir.'/'.$file) == 'dir'){
                    $this->loopDir($dir.'/'.$file);
                }
            }
        }
    }

    /**
     * 打开目录
     * 读取目录当中的文件
     * 如果文件类型是目录，继续打开目录
     * 读取子目录的文件
     * 如果文件类型是文件，输出文件名称
     * 关闭目录
     */
    public function dir(){
        $dir = './test';
        $this->loopDir($dir);
    }

    public function sess(){
        $nn = new \SplStack();
        $nn->push('1');
        $nn->push('2');

        echo $nn->pop();
        echo $nn->pop();

    }
    static function autoload($class){
        var_dump($class) ;
    }

}