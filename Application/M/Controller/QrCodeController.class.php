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
    public function index(){
        $this->display();
    }
    /**
     * 二维码测试效果
     * png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint=false)
     */
    public function qrCode(){
        vendor("phpqrcode.phpqrcode");
        $str = '你若盛开，清风自来';
        //\QRcode::png($str,'qrCodeCoco.jpg',QR_ECLEVEL_H,4,1,true);
        \QRcode::png($str,false,QR_ECLEVEL_H,4,1,true);
    }
    public function qrcode_jquery(){
        $this->display();
    }
    public function qrCode_vcard(){
        vendor("phpqrcode.phpqrcode");
        $content = 'BEGIN:VCARD'."\n";
        $content.= 'VERSION: 1.3.1'."\n";
        $content.= 'N: 毛球'."\n";
        $content.= 'FN: 贝利斯'."\n";
        $content.= 'TEL;WORK;VOICE: 18898989988'."\n";
        $content.= 'TEL;HOME;VOICE: 17789889999'."\n";
        $content.= 'ORG: 阿尔及利亚-安道尔'."\n";
        $content.= 'URL: http:www.moTou.com'."\n";
        $content.= 'END:VCARD'."\n";

        \QRcode::png($content,false,QR_ECLEVEL_L,3,2);
    }
}