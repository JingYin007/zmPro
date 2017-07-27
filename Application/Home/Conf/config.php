<?php
//系统前台台配置文件
$imgServer= 'http://zmPro.com/';
return array(
	'TMPL_PARSE_STRING'     => array(
		'__HCSS__'   =>   $imgServer.'Public/M/css',//定义css位置
		'__HJS__'    =>   $imgServer.'Public/M/js',//定义js位置
		'__HIMG__'   =>   $imgServer.'Public/M/images',//定义images位置
	),
);
?>	