<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/10/8
 * Time: 15:12
 */

namespace M\Controller;


use Think\Controller;

/**
 * 记录一些前端的 知识
 * Class HtmlController
 * @package M\Controller
 */
class HtmlController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        header("Content-Type:text/html;charset=utf-8");
    }

    public function index()
    {
        $this->display();
    }

    /**
     * 图片热点
     */
    public function map()
    {
        $this->display();
    }

    /**
     * 背景图片切图定位
     */
    public function imgCut()
    {
        $this->display();
    }
    public function imgsop(){
        $this->display();
    }

    /**
     * PHP 自定义图片的生成与保存方法
     */
    public function imgShare(){
        $confData = [
            'goods_img' => 'http://img.mp.itc.cn/upload/20170811/d2f47957e9054891a7c47482ad8c5ddf_th.jpg',
            'shop_price' => 78.50,
            'pt_price' => 56.50,
            'save_price' => '28%',
            'user_img' => 'https://wx.qlogo.cn/mmopen/vi_32/DYAIOgq83eqXCNxwqzGzBvc7LibqmRtBqrxHdTtLpZafVsENVrHrHPyTQ9qEQe00XFlu6DFrKGFx6zZ5jIh4LdA/132',
            'who_img' => 'Public/images/share_pt_who.png'
        ];
        //第一种方法：TODO 直接输出，可用于显示测试效果
        createSharePng($confData); die;

        //第二种方法： TODO 输出到图片，传入保存路径进行图片保存
        createSharePng($confData, "Public/images/share_" . time() . ".png");
        echo 'Hello My Dear~';
    }
}