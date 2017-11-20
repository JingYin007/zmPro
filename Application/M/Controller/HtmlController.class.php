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
}