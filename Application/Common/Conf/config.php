<?php
return array(
    //网站标题及配置
    'WEB_TITTLE'           =>   '木头部落',
    //'配置项'=>'配置值'
    'DEFAULT_MODULE'       =>   'M', //设置默认模块
    'MODULE_ALLOW_LIST'    =>   array('Admin','M','Home'),// 设置允许访问的模块列表
    'MODULE_DENY_LIST'     =>   array('Common','Runtime'),// 设置禁止访问的模块列表
    'URL_MODEL'            =>   1,      //URL模式
    'URL_CASE_INSENSITIVE' =>   true,//URL不区分大小写
    'URL_HTML_SUFFIX'      =>  'html', // URL伪静态
    'DEFAULT_CHARSET'      =>  'UTF-8',//指定编码
    'DEFAULT_TIMEZONE'     =>  'Asia/Shanghai', //设置时区

    //开发模式下 右下角提示错误
    'SHOW_PAGE_TRACE'       =>true,   // 显示页面Trace信息
    //数据库配置信息
    'DB_DEPLOY_TYPE'=> 1, // 设置分布式数据库支持
    'DB_RW_SEPARATE'=>true,
    'DB_TYPE'       => 'mysql', //分布式数据库类型必须相同
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'test',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀


    'DB_CHARSET'    => 'utf8', // 字符集
    'VAR_PAGE'=>'p',

    'UPLOAD_MAX_SIZE'       => 1000*1024*1024, //设置为100M

    //ftp(外网服务器)上传文件相关参数
    'FTP_SEVER'       => 'http://img.xxxxxxx.com',  //此地址，作为图片读取的位置 请上线前仔细确认
    'FTP_HOST'       => 'img.xxxxxxx.com',

    'FTP_NAME'       => 'xxx',//ftp帐户
    'FTP_PWD'        => 'xxxxxxxxx',//ftp密码
    'FTP_PORT'       => '21',//ftp端口,默认为21
    'FTP_PASV'       => true,//是否开启被动模式,true开启,默认不开启
    'FTP_SSL'        => false,//ssl连接,默认不开启
    'FTP_TIMEOUT'    => 60,//超时时间,默认60,单位 s
    'REMOTE_ROOT'    => '/',//图片服务器根目录
    'ER_IMG'         =>__ROOT__.'/Public/M/images',

    //微信 开发配置
    'WEIXINPAY_CONFIG'  => array(
        'APPID'              => 'wxdxxxxxxx89', // 公众号APPID 微信支付APPID
        'MCHID'              => '1xxxxxxx2', // 微信支付MCHID 商户收款账号
        'KEY'                => 'MCxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxlW', // 微信支付KEY
        'APPSECRET'          => 'exxxxxxxxxxxxxxxxxxxxxxxxx7', // 公众帐号secert (公众号支付专用)
        'NOTIFY_URL'         => 'http://www.xxx.com/m/cartpay/notify_wx', // 接收支付状态的连接
        'TOKEN'             => 'zmxxx',
    ),
    'WEIXIN_LOGIN' => array(
        // 微信开放平台 使用微信帐号登录App或者网站 配置信息
        'OPEN_APPID' => 'wxbd961b2a6b7b2963', //应用　AppID
        'OPEN_APPSECRET' => 'e6xxxxxxxxxxxxxxxxxxxxe90',//应用 AppSecret
        'OPEN_CALLBACKURL' => 'http://www.52zhenmi.com/Home/Login/wxBack', //微信用户使用微信扫描二维码并且确认登录后，PC端跳转路径
    ),
    //支付宝 支付配置
    'ALI_CONFIG'  => array(
        'gatewayUrl'            => 'https://openapi.alipay.com/gateway.do',//支付宝网关（固定)'
        'appId'                 => '2017xxxxxxxx9',//APPID即创建应用后生成
        //由开发者自己生成: 请填写开发者私钥去头去尾去回车，一行字符串
        'rsaPrivateKey'         =>  'MIIExxxxxxxxxxxxxxxxxxxxxxxxxxxq',
        //支付宝公钥，由支付宝生成: 请填写支付宝公钥，一行字符串
        'alipayrsaPublicKey'    =>  'IIBxxxxxxxxxxxxxxxxxxxEFAA',
        'notifyUrl'             => 'http://www.xxx.com/m/cartpay/notify_ali', // 支付成功通知地址
        'returnUrl'             => 'http://www.xxx.com', // 支付后跳转地址
        'returnPcUrl'           => 'http://www.xxx.com/Home', // PC端扫码支付后跳转地址
    ),
    //邮件发送 配置
    'EMAIL_CONFIG' => array(
        'host' => 'smtp.163.com',
        'post' => '25',
        'username' => '151xxxxxx@163.com',//TODO 邮箱账号
        'password' => 'xxxxxxxxx',//TODO 客户端授权密码
        'sender' => '木头人',//TODO 发送人昵称
    ),


    /* 数据缓存设置 */
    //'DATA_CACHE_PREFIX' => 'Redis_',//缓存前缀
    'DATA_CACHE_TYPE'=>'Redis',//默认动态缓存为Redis
    'REDIS_RW_SEPARATE' => true, //Redis读写分离 true 开启
    'REDIS_HOST'=>'127.0.0.1', //redis服务器ip，多台用逗号隔开；读写分离开启时，第一台负责写，其它[随机]负责读；
    'REDIS_PORT'=>'6379',//端口号
    'REDIS_TIMEOUT'=>'300',//超时时间
    'REDIS_PERSISTENT'=>false,//是否长连接 false=短连接
    'REDIS_AUTH'=>'',//AUTH认证密码




);
?>