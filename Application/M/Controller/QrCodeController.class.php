<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行  zhanghj
 * Date: 2017/3/7
 * Time: 10:51
 */
namespace M\Controller;
use Think\Controller;

class QrCodeController extends Controller
{
    /**
     * 二维码测试效果
     * png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint=false)
     */
    public function qrCode(){
        vendor("phpqrcode.phpqrcode");
        $str = '你若盛开，清风自来';
        \QRcode::png($str,'qrCodeCoco.jpg',QR_ECLEVEL_H,4,1,true);
    }
    public function qrcode_jquery(){
        //echo 'ss';
        $this->display();
    }
}