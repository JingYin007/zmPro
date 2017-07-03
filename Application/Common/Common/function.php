<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行
 * Date: 2017/3/7
 * Time: 16:54
 */
/**
 * 公用的方法  进行信息的提示
 */
function p($arr){
    echo '<meta charset="utf-8">';
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
//通用增加
function add($dataName,$data){
    return M($dataName)->add($data);
}
//通用删除
function del($dataName,$where){
    return M($dataName)->where($where)->delete();
}
//通用修改
function edit($dataName,$where,$data){
    return M($dataName)->where($where)->save($data);
    //echo M($dataName)->_sql();die;//输出sql语句

}
function showMsg($status,$message,$data=array()){
    $result = array(
        'status' => $status,
        'message' =>$message,
        'data' =>$data
    );
    exit(json_encode($result));
}
//根据快递单号查询物流信息函数
function expressinfo($order){
    header('Content-Type:text/html; charset=utf-8');
    $express = new \Think\Express();
    $result  = $express -> getorder($order);
    // var_dump($result);
    return $result;
}
/**
 *加密
 * @param $text[要加密的内容]
 * @param $key[添加的额外字符串]
 */
function getEncrypt($txt, $key){
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_.";
    $ikey ="-x6g6ZWm2G9g_vr0Bo.pOq3kRIxsZ6rm";
    $nh1 = rand(0,64);
    $nh2 = rand(0,64);
    $nh3 = rand(0,64);
    $ch1 = $chars{$nh1};
    $ch2 = $chars{$nh2};
    $ch3 = $chars{$nh3};
    $nhnum = $nh1 + $nh2 + $nh3;
    $knum = 0;$i = 0;
    while(isset($key{$i})) $knum +=ord($key{$i++});
    $mdKey = substr(md5(md5(md5($key.$ch1).$ch2.$ikey).$ch3),$nhnum%8,$knum%8 + 16);
    $txt = base64_encode($txt);
    $txt = str_replace(array('+','/','='),array('-','_','.'),$txt);
    $tmp = '';
    $j=0;$k = 0;
    $tlen = strlen($txt);
    $klen = strlen($mdKey);
    for ($i=0; $i<$tlen; $i++) {
        $k = $k == $klen ? 0 : $k;
        $j = ($nhnum+strpos($chars,$txt{$i})+ord($mdKey{$k++}))%64;
        $tmp .= $chars{$j};
    }
    $tmplen = strlen($tmp);
    $tmp = substr_replace($tmp,$ch3,$nh2 % ++$tmplen,0);
    $tmp = substr_replace($tmp,$ch2,$nh1 % ++$tmplen,0);
    $tmp = substr_replace($tmp,$ch1,$knum % ++$tmplen,0);
    return $tmp;
}
/**
 *解密
 * @param $text[要加密的内容]
 * @param $key[添加的额外字符串和加密额外添加的字符串一致]
 */
function getDecrypt($txt, $key)
{
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_.";
    $ikey ="-x6g6ZWm2G9g_vr0Bo.pOq3kRIxsZ6rm";
    $knum = 0;$i = 0;
    $tlen = strlen($txt);
    while(isset($key{$i})) $knum +=ord($key{$i++});
    $ch1 = $txt{$knum % $tlen};
    $nh1 = strpos($chars,$ch1);
    $txt = substr_replace($txt,'',$knum % $tlen--,1);
    $ch2 = $txt{$nh1 % $tlen};
    $nh2 = strpos($chars,$ch2);
    $txt = substr_replace($txt,'',$nh1 % $tlen--,1);
    $ch3 = $txt{$nh2 % $tlen};
    $nh3 = strpos($chars,$ch3);
    $txt = substr_replace($txt,'',$nh2 % $tlen--,1);
    $nhnum = $nh1 + $nh2 + $nh3;
    $mdKey = substr(md5(md5(md5($key.$ch1).$ch2.$ikey).$ch3),$nhnum % 8,$knum % 8 + 16);
    $tmp = '';
    $j=0; $k = 0;
    $tlen = strlen($txt);
    $klen = strlen($mdKey);
    for ($i=0; $i<$tlen; $i++) {
        $k = $k == $klen ? 0 : $k;
        $j = strpos($chars,$txt{$i})-$nhnum - ord($mdKey{$k++});
        while ($j<0) $j+=64;
        $tmp .= $chars{$j};
    }
    $tmp = str_replace(array('-','_','.'),array('+','/','='),$tmp);
    return trim(base64_decode($tmp));
}
//判断是移动端还是pc 端打开
function is_mobile(){

    //正则表达式,批配不同手机浏览器UA关键词。
    $regex_match="/(nokia|iphone|android|motorola|^mot\-|softbank|foma|docomo|kddi|up\.browser|up\.link|";
    $regex_match.="htc|dopod|blazer|netfront|helio|hosin|huawei|novarra|CoolPad|webos|techfaith|palmsource|";
    $regex_match.="blackberry|alcatel|amoi|ktouch|nexian|samsung|^sam\-|s[cg]h|^lge|ericsson|philips|sagem|wellcom|bunjalloo|maui|";
    $regex_match.="symbian|smartphone|midp|wap|phone|windows ce|iemobile|^spice|^bird|^zte\-|longcos|pantech|gionee|^sie\-|portalmmm|";
    $regex_match.="jig\s browser|hiptop|^ucweb|^benq|haier|^lct|opera\s*mobi|opera\*mini|320x320|240x320|176x220";
    $regex_match.=")/i";
    return isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE']) or preg_match($regex_match, strtolower($_SERVER['HTTP_USER_AGENT'])); //如果UA中存在上面的关键词则返回真。

}
function is_weixin(){
    if(strpos($_SERVER['HTTP_USER_AGENT'],'MicroMessenger') === false ){
        return false;
    }else{
        return true;
    }
}
//生成推荐码
function genRandomString($length=5) {
    $chars = array(
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
        "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",
        "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G",
        "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R",
        "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2",
        "3", "4", "5", "6", "7", "8", "9"
    );
    $charsLen = count ( $chars ) - 1;
    shuffle ( $chars ); // 将数组打乱
    $output = "";
    for($i = 0; $i < $length; $i ++) {
        $output .= $chars [mt_rand ( 0, $charsLen )];
    }
    return $output;
}
//url 替换参数
function url_set_value($url,$key,$value)
{
    $a=explode('?',$url);
    $url_f=$a[0];
    $query=$a[1];
    parse_str($query,$arr);
    $arr[$key]=$value;
    return $url_f.'?'.http_build_query($arr);
}
//二维数组排序
function my_sort($arrays,$sort_key,$sort_order=SORT_DESC,$sort_type=SORT_NUMERIC ){
    if(is_array($arrays)){
        foreach ($arrays as $array){
            if(is_array($array)){
                $key_arrays[] = $array[$sort_key];
            }else{
                return false;
            }
        }
    }else{
        return false;
    }
    array_multisort($key_arrays,$sort_order,$sort_type,$arrays);
    return $arrays;
}
//清除多余的空格
function trimall($str){
    $qian=array(" ","　","\t","\n","\r");$hou=array("","","","","");
    return str_replace($qian,$hou,$str);
}
/**
 * 对象转化为数组
 * @param $e
 * @return array|void
 */
function objectToArray($e){
    $e=(array)$e;
    foreach($e as $k=>$v){
        if( gettype($v)=='resource' ) return;
        if( gettype($v)=='object' || gettype($v)=='array' )
            $e[$k]=(array)objectToArray($v);
    }
    return $e;
}

//搜索文字变红
function keyword($s,$e){

    $linkDefs = array(
        "$e,111.htm",
    );
    // var_dump($linkDefs);
    $linkMap = array();
    foreach($linkDefs as $row) {
        $linkMap[] = explode(',', $row);
    }

    $str = $s;

    //把原有的链接替换成文字
    foreach($linkMap as $row) {
        $str = preg_replace('/(<a.*?>\s*)('.$row[0].')(\s*<\/a>)/sui', '${2}', $str);
    }

    $tmpKwds = array(); //存放暂时被替换的子关键字

    foreach($linkMap as $i=>$row) {
        list($kwd, $url) = $row;
        for($j=$i+1; $j<count($linkMap); $j++) {
            $subKwd = $linkMap[$j][0];
            //如果包含其他关键字，暂时替换成其他字符串，如 茶叶 变成 {fcc734148321f5ad627b27585aa23958}
            if(strpos($kwd, $subKwd) !== false) {
                $tmpKwd = '{'.md5($subKwd).'}';
                $kwd = str_replace($subKwd, $tmpKwd, $kwd);
                $tmpKwds[$tmpKwd] = $subKwd;
            }
        }
        //把文字替换成链接
        $str = preg_replace('/('.$row[0].')/sui', '<span style="color:#F00;display:inline;">'.$kwd.'</span>', $str, 1); // 最多替换5次
    }

    //把代替子关键字的字符串替换回来
    foreach($tmpKwds as $tmp=>$kwd) {
        $str = str_replace($tmp, $kwd, $str);
    }
    return $str;
}
//FTP上传文件函数
function ftp_upload($remotefile,$localfile){
    $ftp = new \Think\Ftp();
    $data['server'] = C('FTP_HOST');
    $data['username'] = C('FTP_NAME');//ftp帐户
    $data['password'] = C('FTP_PWD');//ftp密码
    $data['port'] = C('FTP_PORT');//ftp端口,默认为21
    $data['pasv'] = C('FTP_PASV');//是否开启被动模式,true开启,默认不开启
    $data['ssl'] = C('FTP_SSL');//ssl连接,默认不开启
    $data['timeout'] = C('FTP_TIMEOUT');//超时时间,默认60,单位 s
    $info = $ftp->start($data);
    if($info){
        if($ftp->put($remotefile,$localfile)){}
    }
    $ftp->close();
}

/**
 * 用户二维码图片
 * @param $user_id [用户id]
 * @param $recommend[推荐码]
 * @param $data[链接地址]
 */
//生成图片二维码 $data链接  $id user_id;
function code($url,$user_id,$recommend){

    $user=M('users')->field('user_name,nickname,user_img')->where('user_id='.$user_id)->find();
    $user_name=$user['user_name'];
    $canshu="?r_ec=$recommend";
    $url=$url.$canshu;
    vendor("phpqrcode.phpqrcode");
    // 纠错级别：L、M、Q、H
    $level = 'H';
    // 点的大小：1到10,用于手机端4就可以了
    $size = 4;
    // 下面注释了把二维码图片保存到本地的代码,如果要保存图片,用$fileName替换第二个参数false
    $path = "Public/code/".date("ymd")."/";
    if(!is_dir($path))
    {
        mkdir($path);
    }
    $fileName = $path.$user_name.'.png';
    $data['code']=$fileName;
    M('users')->where('user_id='.$user_id)->save($data);
    ob_end_clean();//清空缓冲区
    QRcode::png($url, $fileName, $level, $size,1);
    $furl=C('REMOTE_ROOT').$fileName;
    ftp_upload($furl,$fileName);

    // suone++
    $logo = 'Public/code/logo.jpg';//准备好的logo图片 
    $QR = $fileName;//已经生成的原始二维码图   
    $bg = 'Public/code/bj.jpg';
    if ($logo !== FALSE) {
        $QR = imagecreatefromstring(file_get_contents($QR));
        $logo = imagecreatefromstring(file_get_contents($logo));
        $QR_width = imagesx($QR);//二维码图片宽度   
        $QR_height = imagesy($QR);//二维码图片高度   
        $logo_width = imagesx($logo);//logo图片宽度   
        $logo_height = imagesy($logo);//logo图片高度   
        $logo_qr_width = $QR_width / 7;
        $scale = $logo_width/$logo_qr_width;
        $logo_qr_height = $logo_height/$scale;
        $from_width = ($QR_width - $logo_qr_width) / 2;
        //重新组合图片并调整大小   
        imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width,
            $logo_qr_height, $logo_width, $logo_height);
    }
    //输出图片   
    $codelogo = $path.$user_name.'logo.png';
    imagepng($QR, $codelogo);
    $furlt=C('REMOTE_ROOT').$codelogo;
    //ftp_upload($furlt,$codelogo);
    if($bg !== FALSE){
        $QR2 = imagecreatefromstring(file_get_contents($bg));
        $logo = imagecreatefromstring(file_get_contents($codelogo));
        $QR_width = imagesx($QR2);//二维码图片宽度   
        $QR_height = imagesy($QR2);//二维码图片高度   
        $logo_width = imagesx($logo);//logo图片宽度   
        $logo_height = imagesy($logo);//logo图片高度   
        $logo_qr_width = $QR_width / 2 + 50;
        $scale = $logo_width/$logo_qr_width;
        $logo_qr_height = $logo_height/$scale;
        $from_width = ($QR_width - $logo_qr_width) / 2;
        //重新组合图片并调整大小   
        imagecopyresampled($QR2, $logo, $from_width, 134, 0, 0, $logo_qr_width,$logo_qr_height, $logo_width, $logo_height);
    }
    $bjcodelogo = $path.$user_name.'bjlogo.png';
    imagepng($QR2, $bjcodelogo);
    // $furls=C('REMOTE_ROOT').$bjcodelogo;
    // ftp_upload($furls,$bjcodelogo);
    $user_img = $user['user_img'];
    //ini_set('default_socket_timeout', 1); 
    //$ims = imagecreatefromstring(file_get_contents($user_img));  
    //imagepng($ims, $path.$user_name . 'user_img.png'); 
    //$user_img = $path.$user_name . 'user_img.png';
    // file_put_contents('./images/image.jpg', $image);
    $user_img = getSslPage($user_img);
    file_put_contents($path.$user_name . 'user_img.png', $user_img);
    $user_img = $path.$user_name . 'user_img.png';
    if($user_img !== FALSE){
        $QR3 = imagecreatefromstring(file_get_contents($bjcodelogo));
        $user_img = imagecreatefromstring(file_get_contents($user_img));
        $QR_width = imagesx($QR3);//二维码图片宽度   
        $QR_height = imagesy($QR3);//二维码图片高度   
        $logo_width = imagesx($user_img);//logo图片宽度   
        $logo_height = imagesy($user_img);//logo图片高度   
        $logo_qr_width = $QR_width / 4;
        $scale = $logo_width/$logo_qr_width;
        $logo_qr_height = $logo_height/$scale;
        $from_width = ($QR_width - $logo_qr_width) / 2;
        //重新组合图片并调整大小   
        imagecopyresampled($QR3, $user_img, $from_width, 10, 0, 0, $logo_qr_width,$logo_qr_height, $logo_width, $logo_height);
    }
    $userbjcodelogo = $path.$user_name.'userbjlogo.png';
    imagepng($QR3, $userbjcodelogo);
    if($user['nickname'] !== FALSE){
        $imt = imagecreatefromstring(file_get_contents($userbjcodelogo));
        $QRs_width = imagesx($imt);
        #设置水印字体颜色
        $colors = imagecolorallocate($imt,121,121,121,20);
        $fontfile = "Public/code/msyhbd.ttf";
        $strs = iconv('utf-8','utf-8',$user['nickname']);
        $fontBox = imagettfbbox('14', 0, $fontfile, $strs);//文字水平居中实质
        // echo ceil(($QRs_width - $fontBox[2]) / 2);
        //$str = mb_convert_encoding($str, "UTF-8", "GB2312");
        //ImageTTFText($im, 20, 0, 10, 20, $white, "/somewhere/arial.ttf", "I am NUMBER ONE !!");
        imagettftext($imt,14,0,ceil(($QRs_width - $fontBox[2]) / 2),90,$colors,$fontfile,$strs);
        $usershare = $path.$user_name.'share.png';

        imagepng($imt,$usershare);




    }
    $furlts=C('REMOTE_ROOT').$usershare;
    ftp_upload($furlts,$usershare);




}
//图片下载用
function getSslPage($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

/**
 * 公共的上传图片的方法
 * @param $file resource 上传的文件信息
 * @return string 上传后图片的地址
 */
function upImg($file){
    if($file['f_img']['tmp_name']!=""){
        $img = $file['f_img'];
        $imgUrl = __ROOT__."/public";
        $upload = new \Org\Net\Upload($img,$imgUrl);
        return $upload->main();
    }
}

/**
 * 图片上传的公共处理方法
 * @param string $fileName 图片上传的name
 * @return string 图片的存储路径
 */
function handleImg($fileName){
    if($_FILES[$fileName]['tmp_name'] != ""){
        $img = $_FILES[$fileName];
        $imgUrl = __ROOT__."/public";
        $upload = new \Org\Net\Upload($img, $imgUrl);
        return $upload->main();
    }
}

//ue编辑器通过FTP上传图片（$str代表从表单接收到的content字符串），返回处理后的content字符串
function ftp_image_upload($str){
    $local_root = $_SERVER['DOCUMENT_ROOT'];
    $host = C('FTP_SEVER');
    $remote_root = C('REMOTE_ROOT');
    $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg|\.mp4]))[\'|\"].*?[\/]?>/";
    preg_match_all($pattern,$str,$match);
    foreach ($match[0] as $k => $v) {
        $localfile  = $local_root.$v;
        $remotefile = $remote_root.$v;
        ftp_upload($remotefile,$localfile);
    }
    $retStr = str_replace("src=\"/Public", "src=\"$host/Public", $str);
    return $retStr;
}
function ftp_image_upload_desc($str){
    $str = htmlspecialchars_decode($str);
    $local_root = $_SERVER['DOCUMENT_ROOT'];
    $host = C('FTP_SEVER');
    $remote_root = C('REMOTE_ROOT');
    $patter="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg|\.mp4]))[\'|\"].*?[\/]?>/";
    $pattern = "/(href|src)=([\"|']?)([^\"'>]+.(jpg|JPG|jpeg|JPEG|gif|GIF|png|PNG))/i";
    // p($str);
    preg_match_all($pattern,$str,$match);
    // p($match);die;
    foreach ($match[3] as $k => $v) {
        $tempu=parse_url($v);
        $v=$tempu['path']; 
        $localfile  = $local_root.$v;
        $remotefile = $remote_root.$v;
        $remotefile = substr($remotefile,1);
        ftp_upload($remotefile,$localfile);
    }
    $retStr = str_replace("src=\"/Public", "src=\"$host/Public", $str);
    return $retStr;
}

/**
 * 验证ID是否有效
 * @param string/array $data 数据库名/数组
 * @param int          $id   查询的ID
 * @param string       $c_id 数据库中字段名
 * @return mixed/bool        查询的ID/bool
 */
function checkId($id, $data='', $c_id = 'id'){
    //判断ID是否存在
    if($id){
        if(!is_array($data)){
            $Ids = M($data)->field($c_id)->select();
            $arr = array();
            foreach ($Ids as $key => $value){
                $arr[] = $value[$c_id];
            }
        } else {
            $arr = $data;
        }
        if(!in_array($id, $arr)){
            return false;
        }
        return $id;
    } else {
        return false;
    }
}

//资讯关键字可点击
function keyword_a($s,$e,$n,$u){

    $linkDefs = array(
        "$e,$u",
    );
    // var_dump($linkDefs);
    $linkMap = array();
    foreach($linkDefs as $row) {
        $linkMap[] = explode(',', $row);
    }

    $str = $s;

    //把原有的链接替换成文字
    foreach($linkMap as $row) {
        $str = preg_replace('/(<a.*?>\s*)('.$row[0].')(\s*<\/a>)/sui', '${2}', $str);
    }

    $tmpKwds = array(); //存放暂时被替换的子关键字

    foreach($linkMap as $i=>$row) {
        list($kwd, $url) = $row;
        for($j=$i+1; $j<count($linkMap); $j++) {
            $subKwd = $linkMap[$j][0];
            //如果包含其他关键字，暂时替换成其他字符串，如 茶叶 变成 {fcc734148321f5ad627b27585aa23958}
            if(strpos($kwd, $subKwd) !== false) {
                $tmpKwd = '{'.md5($subKwd).'}';
                $kwd = str_replace($subKwd, $tmpKwd, $kwd);
                $tmpKwds[$tmpKwd] = $subKwd;
            }
        }
        //把文字替换成链接
        $str = preg_replace('/('.$row[0].')/sui', '<a href="'.$row[1].'">'.$kwd.'</a>', $str, $n); // 最多替换5次
    }

    //把代替子关键字的字符串替换回来
    foreach($tmpKwds as $tmp=>$kwd) {
        $str = str_replace($tmp, $kwd, $str);
    }
    return $str;
}

//发送消息公共方法
/*
$title 消息标题
$content 消息内容
$status 0为私人消息 1为公告消息
$uid 消息接收人
$hid 消息发送人
$card 如果有卡券 这个是卡券ms_coupon表里的c_id
*/
function public_news($title,$content,$status,$uid,$hid,$card){

    $date['title'] = $title;
    $date['status'] = $status;
    $date['content'] = $content;
    $date['hid'] = $hid;
    $date['add_time'] = time();
    if($card!=""){
        $date['cid'] = $card;
    } if($status==""){
        $date['status'] = 0;
    } if($hid==""){
        $date['hid'] = $_SESSION['uid'];
    } if($uid=="" || $uid==0){
        $date['status'] = 1;
    }

    if($date['status']==0){
        $date['uid'] = $uid;
        $news = M('news')->add($date);
    }else{
        $date['uid'] = 0;
        $news = M('news')->add($date);
    }

    return $news;

}
function get_ad_img($ap_id){
    $ad_img = M('advertising_position ap')
        ->field('a.img_url,a.url')
        ->join('ms_advertising a on a.id = ap.advertising_id')
        ->where('ap.id = '.$ap_id)
        ->find();
    return $ad_img;
}


//用户行为方法
function user_ber($id){
    if($_SESSION['website']!==$_SERVER["REQUEST_URI"]){
        if(!IS_AJAX){
            $date['uid'] = $id;
            $date['website'] = $_SERVER["REQUEST_URI"];
            $_SESSION['website'] = $date['website'];
            $date['user_ip'] = $_SERVER["REMOTE_ADDR"];
            $date['add_time'] = time();
            M('user_behavior')->add($date);
        }
    }
}
/**
 * 使用curl获取远程数据
 * @param  string $url url连接
 * @return string      获取到的数据
 */
function curl_get_contents($url){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);                //设置访问的url地址
    // curl_setopt($ch,CURLOPT_HEADER,1);               //是否显示头部信息
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);               //设置超时
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);   //用户访问代理 User-Agent
    curl_setopt($ch, CURLOPT_REFERER,$_SERVER['HTTP_HOST']);        //设置 referer
    curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);          //跟踪301
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        //返回结果
    $r=curl_exec($ch);
    curl_close($ch);
    return $r;
}

//资讯点击量
function clicks($id){
    $User = M("article");
    $User->where("id=$id")->setInc('clicks',1);
}

/**
 * 获取配置 value值
 * @param $tag 标签
 * @return mixed
 */
function get_config($tag){
    $img = M('conf_mi')
        ->where(" tag = '$tag'")
        ->getField('value');
    return $img;
}
/**
 * 用户晋升等级
 * @param $userID 需要升级的用户
 * @param $rank 要达到的等级
 * @return bool
 */
function up_user_rank($userID,$rank){
    $saveData = array(
        'rank' => $rank
    );
    $res = M('users')
        ->where('user_id = '.$userID.' and rank < '.$rank)
        ->save($saveData);
    return $res;
}

/**
 * 向用户推送消息 “我的-消息”
 * @param $tag
 * @param $user_id
 */
function push_tip_msg($tag,$user_id){
    $res = M('tip_msg')
        ->field('title,content')
        ->where("is_delete = 0 and tag = '".$tag."'")
        ->find();
    $title = $res['title'];
    $content = $res['content'];
    $hid = 1;//消息发送人 后台管理员admin_user表user_id
    public_news($title,$content,0,$user_id,$hid);
}

/**
 * 获取用户的头像
 * @param $user_id 登录用户的ID
 * @return mixed
 */
function get_user_img($user_id){
    $img = M('users')
        ->where('user_id = '.$user_id)
        ->getField('user_img');
    $str=strstr($img,'wx.qlogo.cn');
    if ($img){
        if(!$str){
            $img=C('FTP_SEVER').DIRECTORY_SEPARATOR.$img;
        }
    }else{
        $img = C('FTP_SEVER').'/Public/M/images/stlogo.jpg';
    }
    return $img;
}

/**
 * @param $goods_id
 * @return int
 */
function getSellGoodsCount($goods_id){
    $count = M('goods g')
        ->join('ms_order_goods og on og.product_id = g.goods_id')
        ->join('ms_order_info oi on oi.order_id = og.order_id')
        ->where('oi.pay_status = 1 and g.goods_id = '.$goods_id)
        ->getField('sum(og.product_number)');
    return intval($count);
}

function getUserBuyTheGoodsCount($goods_id,$user_id){
    $count = M('goods g')
        ->join('ms_order_goods og on og.product_id = g.goods_id')
        ->join('ms_order_info oi on oi.order_id = og.order_id')
        ->where('oi.pay_status = 1 and g.goods_id = '.$goods_id.' and oi.user_id = '.$user_id)
        ->getField('sum(og.product_number)');
    return intval($count);
}

/**
 * 判断此商品是否为品鉴购活动商品
 * @param $goods_id
 * @return bool
 */
function is_PJG($goods_id){
    $res = M('goods')
        ->where('goods_id = '.$goods_id)
        ->getField('participation_activities pa');
    $partActRes = unserialize($res);
    $tag = $partActRes[3]['status'];
    if ($tag == '1'){
        return true;
    }else{
        return false;
    }
}
function is_PJG_OrderSn($order_sn){
    $goods_id = M('order_info oi')
        ->join('ms_order_goods og on og.order_id = oi.order_id')
        ->where('oi.order_sn = '.$order_sn)
        ->getField('og.product_id');
    $tag = is_PJG($goods_id);
    return $tag;
}

/**
 * 判断此商品是否为年卡
 * @param $goods_id
 * @return bool
 */
function is_NK($goods_id){
    $res = M('goods')
        ->where('goods_id = '.$goods_id)
        ->getField('participation_activities pa');
    $partActRes = unserialize($res);
    $tag = $partActRes[4]['status'];
    if ($tag == '1'){
        return true;
    }else{
        return false;
    }
}
/**
 * 判断此商品是否为年卡
 * @param $order_sn
 * @return bool
 */
function is_NK_OrderSn($order_sn){
    $goods_id = M('order_info oi')
        ->join('ms_order_goods og on og.order_id = oi.order_id')
        ->where('oi.order_sn = '.$order_sn)
        ->getField('og.product_id');
    $tag = is_NK($goods_id);
    return $tag;
}

//每有三个下级购买时 上级获得一张年卡
//$user_id 当前登录用户的user_id
//$goods_id 购买的年卡商品id
function give_card_CQ($user_id,$goods_id){
    if(is_NK($goods_id)){
        $parent_id = M('users')->where("user_id = $user_id")->getfield('parent_id');//上级的id
        if($parent_id){
            $list = M('users')->field('o.order_id,o.pay_time,ms_users.user_id')
                ->join('ms_users as u on u.user_id = ms_users.parent_id')
                ->join('ms_order_info as o on o.user_id = ms_users.user_id')
                ->join('ms_order_goods as og on og.order_id = o.order_id')
                ->where("o.pay_time!=0 and o.pay_status = 1 and ms_users.parent_id = $parent_id and og.product_id = $goods_id")
                ->group('o.user_id')
                ->select();//查询下级有多少人购买

            $pay_status = M('order_info')->field('pay_status,pay_time,og.order_id')
                ->join("ms_order_goods as og on ms_order_info.order_id = og.order_id")
                ->where("pay_time!=0 and pay_status = 1 and user_id = $parent_id and og.product_id = $goods_id")
                ->find();//查询上级是否购买和最初购买时间

            if($pay_status['pay_status']){
                foreach ($list as $key => $value) {//过滤掉下级在上级之前购买的用户
                    if($pay_status['pay_time'] < $value['pay_time']){
                        $s+=1;
                    }
                }

                if($s%3 == 0 && $s!== null && $s!== 0){
                    $pay_sta = M('order_info')->field('pay_status,pay_time,og.order_id')
                        ->join("ms_order_goods as og on ms_order_info.order_id = og.order_id")
                        ->where("pay_time!=0 and pay_status = 1 and user_id = $parent_id and og.product_id = $goods_id")
                        ->order('og.order_id desc')
                        ->find();//查询上级的最后订单的购买时间

                    //如果为3的倍数 就给上级加一年的年卡
                    $pay_sta['pay_time'] += 31536000;
                    givingNK($goods_id,$pay_sta['pay_time'],$parent_id);
                }
            }
        }
    }
}

/**
 * 每有三个下级购买时 上级获得一张年卡
 * @param $user_id 当前登录用户的user_id
 * @param $goods_id 购买的年卡商品id
 */
function give_card($user_id,$goods_id){
    if(is_NK($goods_id)){
        $parent_id = M('users')->where("user_id = $user_id")->getfield('parent_id');//上级的id
        if($parent_id){
            $pay_status = M('order_info')->field('pay_status,pay_time,og.order_id')
                ->join("ms_order_goods as og on ms_order_info.order_id = og.order_id")
                ->where("pay_time!=0 and pay_status = 1 and user_id = $parent_id and og.product_id = $goods_id")
                ->find();//查询上级是否购买和最初购买时间

            if($pay_status['pay_status']){
                $list = M('users')->field('o.order_id,o.pay_time,ms_users.user_id')
                    ->join('ms_users as u on u.user_id = ms_users.parent_id')
                    ->join('ms_order_info as o on o.user_id = ms_users.user_id')
                    ->join('ms_order_goods as og on og.order_id = o.order_id')
                    ->where("o.pay_time!=0 and o.pay_time > ".$pay_status['pay_time']
                        ." and o.pay_status = 1 and ms_users.parent_id = $parent_id and og.product_id = $goods_id")
                    ->group('o.user_id')
                    ->select();//查询下级有多少人购买
                $s = 0;
                foreach ($list as $key => $value) {//过滤掉下级在上级之前购买的用户
                    if($pay_status['pay_time'] < $value['pay_time']){
                        $s+=1;
                    }
                }
                if($s%3 == 0 && $s!== null && $s!== 0){
                    $pay_sta = M('order_info')->field('pay_status,pay_time,og.order_id')
                        ->join("ms_order_goods as og on ms_order_info.order_id = og.order_id")
                        ->where("pay_time!=0 and pay_status = 1 and user_id = $parent_id and og.product_id = $goods_id")
                        ->order('og.order_id desc')
                        ->find();//查询上级的最后订单的购买时间
                    //如果为3的倍数 就给上级加一年的年卡
                    $pay_sta['pay_time'] += 31536000;
                    givingNK($goods_id,$pay_sta['pay_time'],$parent_id);
                }
            }
        }
    }
}

/**
 * 针对赠送的一张年卡订单下发
 * @param $goods_id 年卡 ID
 * @param $pay_time 支付时间参数
 * @param $user_id 所赠用户 ID
 * @return bool true:赠送成功  false:赠送失败
 */
function givingNK($goods_id,$pay_time,$user_id){
    $orderController = new \M\Controller\OrderController();
    $tag = $orderController->givingNKOrderInfo($goods_id,$pay_time,$user_id);
    //TODO 提示消息 赠送一张年卡
    push_tip_msg('giveNK',$user_id);
    return $tag;
}
/**
 * 判断该用户是否享受 年卡所提供的优惠折扣
 * @param $order_sn
 * @return bool
 */
function canUseNK_discount($order_sn){
    //查询其支付的所有订单 时间倒叙
    //判断其是否买过年卡商品
    $user_id = M('order_info')
        ->where('order_sn = '.$order_sn)
        ->getField('user_id');
    $user_id = $user_id ? $user_id : 0;
    $tagTime = time() - (365 * 24 * 60 * 60);
    $res = M('order_info')
        ->where("pay_status = 1 and order_type = 'NK' and user_id = ".$user_id
            ." and pay_time > ".$tagTime)
        ->select();
    if ($res){
        return true;
    }else{
        return false;
    }
}
function get_goods_id_by_orderSn($order_sn){
    $goods_id = M('order_info oi')
        ->join('ms_order_goods og on og.order_id = oi.order_id')
        ->where('oi.order_sn = '.$order_sn)
        ->getField('og.product_id');
    $goods_id = $goods_id ? $goods_id :0;
    return $goods_id;
}

/**
 * 判断是否在支付页面显示 “我的优惠券”
 * @param $order_sn 主订单号
 * @return string
 */
function toShowCouponsTag($order_sn){
    $showTag = 'block';
    $batch_order_sn = M('order_info')
        ->where('order_sn = '.$order_sn)
        ->getField('batch_order_sn');

    if ($batch_order_sn != null){
        $showTag = 'none';
        $arrOrder_sn = explode('|',$batch_order_sn);
        $tag = noPJGNK($arrOrder_sn);
        if ($tag){
            $showTag = 'block';
        }
    }else{
        $nk_Tag = is_NK_OrderSn($order_sn);
        $pjg_Tag = is_PJG_OrderSn($order_sn);
        if ($nk_Tag || $pjg_Tag){
            $showTag = 'none';
        }
    }
    return $showTag;
}

/**
 * 判断批量订单
 * 既不是年卡，也不是品鉴购
 * @param $arrOrder_sn
 * @return int
 */
function noPJGNK($arrOrder_sn){
    //既不是年卡，也不是品鉴购
    $tag = 0;
    foreach ($arrOrder_sn as $value){
        if ($value){
            $pjg_Tag = is_PJG_OrderSn($value);
            $nk_Tag = is_NK_OrderSn($value);
            if ($pjg_Tag){
                continue;
            }else{
                if (!$nk_Tag){
                    $tag = 1;
                    break;
                }
            }
        }
    }
    return $tag;
}

//查询商品名
function goods_name($id){
    if($id){
        $name = M('goods')->where("goods_id = $id")->getfield('name');
        if(!$name){
            return '该商品不存在，请核对数据库';
        }else{
            return '【详情页】'.$name;
        }
    }else{
         return '该商品不存在，请核对数据库';
    }
}

//查询资讯标题
function found_title($id){
    if($id){
        $name = M('article')->where("id = $id")->getfield('title');
        if(!$name){
            return '资讯不存在，请核对数据库';
        }else{
            return '【资讯页】'.$name;
        }
    }else{
         return '资讯不存在，请核对数据库';
    }
}

function haveSessionUserID(){
    if (is_mobile() && !is_weixin()){
        //判断cookie中是否存在ID值
        $sessionUserID = session('sessionUserID');
        if ($sessionUserID){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function send_verify($mobile){
	$arr = range(0,9);
	$rand_keys = array_rand($arr,6);
	shuffle($rand_keys);
	$rand = implode('',$rand_keys);
	if(cookie('code')){
		cookie('code',null);
	}
	cookie('code',md5($rand.'fetow'),time()+6000,"/");
    $appkey = "23496841";
    $secret = "618776c025b93bb2f86e66a2b04eb294";
    vendor('Alimsg.top.TopClient');
    vendor('Alimsg.top.ResultSet');
    vendor('Alimsg.top.RequestCheckUtil');
    vendor('Alimsg.top.TopLogger');
    vendor('Alimsg.top.request.AlibabaAliqinFcSmsNumSendRequest');
    vendor('Alimsg.TopSdk.php');
    $c = new \TopClient;
    $c->appkey = $appkey;
    $c->secretKey = $secret;
    $req = new \AlibabaAliqinFcSmsNumSendRequest;
    $req->setSmsTemplateCode("SMS_24575052");
    $req->setExtend("3");
    $req->setSmsType("normal");
    $req->setSmsFreeSignName("沸腾主义");
    $req->setSmsParam("{code:'".$rand."'}");
    $req->setRecNum($mobile);
    $resp = $c->execute($req);
	return 1;
}
/**
 * 微信扫码支付
 * @param  array $order 订单 必须包含支付所需要的参数 body(产品描述)、total_fee(订单金额)、out_trade_no(订单号)、product_id(产品id)
 */
function weixinpay($order){
    $order['trade_type']='NATIVE';
    Vendor('Weixinpay.Weixinpay');
    $weixinpay=new \Weixinpay();
    return $weixinpay->pay($order);
}
/**
 * 生成二维码
 * @param  string  $url  url连接
 * @param  integer $size 尺寸 纯数字
 */
function qrcode($url,$size=4){
    vendor("phpqrcode.phpqrcode");
    // 如果没有http 则添加
    // if (strpos($url, 'http')===false) {
    //     $url='http://'.$url;
    // }

    QRcode::png($url,false,QR_ECLEVEL_L,$size,2,false,0xFFFFFF,0x000000);
}



