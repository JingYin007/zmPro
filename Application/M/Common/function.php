<?php

/**
 * 分享图片生成
 * @param $confData  商品数据，array
 * @param $fileName string 保存文件名,默认空则直接输入图片
 */
function createSharePng($confData,$fileName = ''){
    //创建画布
    $im = imagecreatetruecolor(770,520);
    //填充画布背景色
    $color = imagecolorallocate($im, 255, 255, 255);
    imagefill($im, 0, 0, $color);
    /**
     * 字体文件
     * 测试发现，支持本地字体资源文件的读取，但是网络资源没成功
     */
    $font_maiTian = "Public/images/maiTian.ttf";
    $font_bold = "Public/images/msyhbd.ttf";

    //设定字体的颜色
    $font_color_grey = ImageColorAllocate ($im, 129, 129, 129);
    $font_color_red = ImageColorAllocate ($im, 217, 45, 32);
    $right_bg_color = ImageColorAllocate ($im, 245, 226, 219);
    $line_through_color = ImageColorAllocate ($im, 83, 83, 83);
    $font_color_golden = ImageColorAllocate ($im, 245, 105, 19);

    $save_color = ImageColorAllocate ($im, 38, 70, 160);
    //商品图片
    list($g_w,$g_h) = getimagesize($confData['goods_img']);
    $goodImg = createImageFromFile($confData['goods_img']);
    imagecopyresized($im, $goodImg,0, 0, 0, 0, 520, 520, $g_w, $g_h);
    imagefilledrectangle ($im, 520 , 0 , 770 , 520 , $right_bg_color);

    imagettftext($im, 25,0, 546,80, $save_color ,$font_maiTian,
        "拼团立省 ".$confData['save_price']);
    imagefilledrectangle ($im, 600 , 129 , 722 , 131 , $line_through_color);

    imagettftext($im, 18,0, 612, 138, $font_color_grey ,$font_bold, "￥".$confData["shop_price"]);
    imagettftext($im, 28,0, 580,195, $font_color_red ,$font_bold, "￥".$confData["pt_price"]);


    //开团用户头像
    list($kt_w,$kt_h) = getimagesize($confData['user_img']);
    $ktImg = createImageFromFile($confData['user_img']);
    imagecopyresized($im, $ktImg, 580, 360, 0, 0, 57, 57, $kt_w, $kt_h);

    //拼团用户头像
    list($pt_w,$pt_h) = getimagesize($confData['who_img']);
    $ptImg = createImageFromFile($confData['who_img']);
    imagecopyresized($im, $ptImg, 660, 360, 0, 0, 57, 57, $pt_w, $pt_h);

    //画个圆圈诅咒你
    imageellipse($im,575,360,40,40,$font_color_golden);
    imagettftext($im, 15,15, 560,370, $font_color_golden ,$font_maiTian, "拼主");
    //画个矩形 Button 位置
    imagerectangle ($im, 565 , 440 , 740 , 500 ,$font_color_red);
    imagettftext($im, 26,0, 580, 480, $font_color_red ,$font_maiTian, "点击抢购");
    //输出图片
    if($fileName){
        imagepng ($im,$fileName);
    }else{
        Header("Content-Type: image/png");
        imagepng ($im);
    }
    //释放空间
    imagedestroy($im);
    imagedestroy($goodImg);
    imagedestroy($ktImg);
    imagedestroy($ptImg);
}

/**
 * 从图片文件创建Image资源
 * @param $file 图片文件，支持url
 * @return bool|resource    成功返回图片image资源，失败返回false
 */
function createImageFromFile($file){
    if(preg_match('/http(s)?:\/\//',$file)){
        $fileSuffix = getNetworkImgType($file);
    }else{
        $fileSuffix = pathinfo($file, PATHINFO_EXTENSION);
    }

    if(!$fileSuffix) return false;

    switch ($fileSuffix){
        case 'jpeg':
            $theImage = @imagecreatefromjpeg($file);
            break;
        case 'jpg':
            $theImage = @imagecreatefromjpeg($file);
            break;
        case 'png':
            $theImage = @imagecreatefrompng($file);
            break;
        case 'gif':
            $theImage = @imagecreatefromgif($file);
            break;
        default:
            $theImage = @imagecreatefromstring(file_get_contents($file));
            break;
    }

    return $theImage;
}

/**
 * 获取网络图片类型
 * @param $url  网络图片url,支持不带后缀名url
 * @return bool
 */
function getNetworkImgType($url){
    $ch = curl_init(); //初始化curl
    curl_setopt($ch, CURLOPT_URL, $url); //设置需要获取的URL
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);//设置超时
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //支持https
    curl_exec($ch);//执行curl会话
    $http_code = curl_getinfo($ch);//获取curl连接资源句柄信息
    curl_close($ch);//关闭资源连接

    if ($http_code['http_code'] == 200) {
        $theImgType = explode('/',$http_code['content_type']);

        if($theImgType[0] == 'image'){
            return $theImgType[1];
        }else{
            return false;
        }
    }else{
        return false;
    }
}

/**
 * 分行连续截取字符串
 * @param $str  需要截取的字符串,UTF-8
 * @param int $row  截取的行数
 * @param int $number   每行截取的字数，中文长度
 * @param bool $suffix  最后行是否添加‘...’后缀
 * @return array    返回数组共$row个元素，下标1到$row
 */
function cn_row_substr($str,$row = 1,$number = 10,$suffix = true){
    $result = array();
    for ($r=1;$r<=$row;$r++){
        $result[$r] = '';
    }
    $str = trim($str);
    if(!$str) return $result;
    $theStrlen = strlen($str);
    //每行实际字节长度
    $oneRowNum = $number * 3;
    for($r=1;$r<=$row;$r++){
        if($r == $row and $theStrlen > $r * $oneRowNum and $suffix){
            $result[$r] = mg_cn_substr($str,$oneRowNum-6,($r-1)* $oneRowNum).'...';
        }else{
            $result[$r] = mg_cn_substr($str,$oneRowNum,($r-1)* $oneRowNum);
        }
        if($theStrlen < $r * $oneRowNum) break;
    }
    return $result;
}

/**
 * 按字节截取utf-8字符串
 * 识别汉字全角符号，全角中文3个字节，半角英文1个字节
 * @param $str  需要切取的字符串
 * @param $len  截取长度[字节]
 * @param int $start    截取开始位置，默认0
 * @return string
 */
function mg_cn_substr($str,$len,$start = 0){
    $q_str = '';
    $q_strlen = ($start + $len)>strlen($str) ? strlen($str) : ($start + $len);
    //如果start不为起始位置，若起始位置为乱码就按照UTF-8编码获取新start
    if($start and json_encode(substr($str,$start,1)) === false){
        for($a=0;$a<3;$a++){
            $new_start = $start + $a;
            $m_str = substr($str,$new_start,3);
            if(json_encode($m_str) !== false) {
                $start = $new_start;
                break;
            }
        }
    }
    //切取内容
    for($i=$start;$i<$q_strlen;$i++){
        //ord()函数取得substr()的第一个字符的ASCII码，如果大于0xa0的话则是中文字符
        if(ord(substr($str,$i,1))>0xa0){
            $q_str .= substr($str,$i,3);
            $i+=2;
        }else{
            $q_str .= substr($str,$i,1);
        }
    }
    return $q_str;
}
