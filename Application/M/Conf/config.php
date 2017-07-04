<?php
//系统前台台配置文件
$imgServer= 'http://zmPro.com/';
return array(
	'TOKEN_ON'      =>    true,  // 是否开启令牌验证 默认关闭
	'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
	'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true
	'URL_CASE_INSENSITIVE' =>   true,//URL不区分大小写
	//默认错误跳转对应的模板文件
	'TMPL_ACTION_ERROR' => 'Public:error',
	//默认成功跳转对应的模板文件
	'TMPL_ACTION_SUCCESS' => 'Public:success',
	'TMPL_PARSE_STRING'     => array(
		'__MCSS__'   =>   $imgServer.'Public/M/css',//定义css位置
		'__MJS__'    =>   $imgServer.'Public/M/js',//定义js位置
		'__MIMG__'   =>   $imgServer.'Public/M/images',//定义images位置
	),
	'PAGE_LISTROWS' =>10,//列表数量),
	'IMAGE_URL' => $imgServer.'Public/M/images',
);
?>	