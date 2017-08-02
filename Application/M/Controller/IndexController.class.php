<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行  zhanghj
 * Date: 2017/3/7
 * Time: 10:51
 */
namespace M\Controller;
use Think\Controller;

class IndexController extends Controller
{
    public function index(){
        $this->display();
    }

    /**
     * 二维码测试效果
     * png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint=false)
     */
    public function qrCode(){
        vendor("phpqrcode.phpqrcode");
        \QRcode::png('avc','qrCodeCoco.jpg',QR_ECLEVEL_H,15,0,true);
    }
}