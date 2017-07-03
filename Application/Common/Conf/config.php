<?php
return array(
    //网站标题及配置
    'WEB_TITTLE'           =>   '木头部落',
    //'配置项'=>'配置值'
    'DEFAULT_MODULE'       =>   'M', //设置默认模块
    'MODULE_ALLOW_LIST'    =>   array('Home','Admin','M'),// 设置允许访问的模块列表
    'MODULE_DENY_LIST'     =>   array('Common','Runtime'),// 设置禁止访问的模块列表
    'URL_MODEL'            =>   2,      //URL模式
    'URL_CASE_INSENSITIVE' =>   true,//URL不区分大小写
    'URL_HTML_SUFFIX'      =>  'html', // URL伪静态
    'DEFAULT_CHARSET'      =>  'UTF-8',//指定编码
    'DEFAULT_TIMEZONE'     =>  'Asia/Shanghai', //设置时区
    'PAGE_LISTROWS'        =>  '10',//默认条数

    //数据库配置信息
    'DB_DEPLOY_TYPE'=> 1, // 设置分布式数据库支持
    'DB_RW_SEPARATE'=>true,
    'DB_TYPE'       => 'mysql', //分布式数据库类型必须相同
    'DB_CHARSET'    => 'utf8', // 字符集
    'VAR_PAGE'=>'p',

    'UPLOAD_MAX_SIZE'       => 1000*1024*1024, //设置为100M

    //ftp(外网服务器)上传文件相关参数
    'FTP_SEVER'       => 'http://img.52zhenmi.com',  //此地址，作为图片读取的位置 请上线前仔细确认
    'FTP_HOST'       => 'img.52zhenmi.com',
    'WEB_SEVER'      => 'http://img.52zhenmi.com',
    'WEB_M_SERVER'    => 'http://www.52zhenmi.com/m',

    'FTP_NAME'       => 'xxx',//ftp帐户
    'FTP_PWD'        => 'xxxxxxxxx',//ftp密码
    'FTP_PORT'       => '21',//ftp端口,默认为21
    'FTP_PASV'       => true,//是否开启被动模式,true开启,默认不开启
    'FTP_SSL'        => false,//ssl连接,默认不开启
    'FTP_TIMEOUT'    => 60,//超时时间,默认60,单位 s
    'REMOTE_ROOT'    => '/',//图片服务器根目录
    'ER_IMG'         =>__ROOT__.'/Public/M/images',

    //开发模式下 右下角提示错误
    'SHOW_PAGE_TRACE'       =>false,   // 显示页面Trace信息

    'WEIXINPAY_CONFIG'  => array(
        'APPID'              => 'wxdxxxxxxx89', // 微信支付APPID
        'MCHID'              => '1xxxxxxx2', // 微信支付MCHID 商户收款账号
        'KEY'                => 'MCxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxlW', // 微信支付KEY
        'APPSECRET'          => 'exxxxxxxxxxxxxxxxxxxxxxxxx7', // 公众帐号secert (公众号支付专用)
        'NOTIFY_URL'         => 'http://xxxxxxxx/M/Cartpay/notify', // 接收支付状态的连接 118.190.117.44
    ),
    //支付宝 支付配置
    'ALI_CONFIG'  => array(
        'notifyUrl'              => 'http://www.xxx.com/m/cartpay/zm_notify', // 支付成功通知地址
        'returnUrl'              => 'http://www.xxx.com' // 支付后跳转地址
    ),
    );
?>