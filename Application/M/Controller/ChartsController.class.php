<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/10/8
 * Time: 15:12
 */

namespace M\Controller;


use Think\Controller;

class ChartsController extends Controller
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
    public function pie(){
        $this->display();
    }
    public function bar(){
        $this->display();
    }
    public function spline(){
        $this->display();
    }
}