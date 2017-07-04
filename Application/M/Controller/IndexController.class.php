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
       echo 'Index';
       $this->display();
   }

}