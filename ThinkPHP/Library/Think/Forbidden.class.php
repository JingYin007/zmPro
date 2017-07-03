<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: pengyong <i@pengyong.info>
// +----------------------------------------------------------------------
//违禁词库类
namespace Think;

class Forbidden {

	protected $config = array('妈的','草你妈','操你妈','你妈的','你妈逼','你麻痹','TMD','tmd','二逼','傻逼','你奶奶的','三炮');
    public function statu_s($config=array()){
    	return $this->config;
    }
}