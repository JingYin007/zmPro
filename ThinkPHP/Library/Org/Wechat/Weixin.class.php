<?php
/**
 *
 * @authors 云知梦-军哥
 * @email zhanglijun@lampym.com
 * @date    2014-08-17 16:17:02
 * @link    http://www.lampym.com
 * @version 1.0
 * @course 《军哥带你玩转微信开发》系列教程之高级篇
 */

//微信公众平台基础接口PHP SDK （面向对象版）
class Weixin {
	const API_URL_PREFIX = 'https://api.weixin.qq.com/cgi-bin';
	const AUTH_URL = '/token?grant_type=client_credential&';
	const OAUTH_PREFIX = 'https://open.weixin.qq.com/connect/oauth2';
	const OAUTH_AUTHORIZE_URL = '/authorize?';
	const API_BASE_URL_PREFIX = 'https://api.weixin.qq.com'; //以下API接口URL需要使用此前缀
	const OAUTH_USERINFO_URL = '/sns/userinfo?';
	const OAUTH_TOKEN_URL = '/sns/oauth2/access_token?';
	const OAUTH_REFRESH_URL = '/sns/oauth2/refresh_token?';
	const OAUTH_AUTH_URL = '/sns/auth?';
	const USER_INFO_URL='/user/info?';
	const GET_TICKET_URL = '/ticket/getticket?';
	const TOKEN_GET_URL = '/gettoken?';
	const MASS_SEND_URL = '/message/custom/send?';
	private $token;
	private $appid;
	private $access_token;
	private $appsecret;
	private $jsapi_ticket;
	public $errCode = 40001;
	public $errMsg = "no access";
	//构造函数
	public function __construct($token,$appid,$appsecret)
	{
		$this->appid = $appid;
		$this->appsecret = $appsecret;
		$this->token=$token;
	}

	//验证消息
	public function valid(){
		if($this->checkSignature())
		{
			$echostr = $_GET["echostr"];
			echo $echostr;
			exit;
		}
		else
		{
			echo "error";
			exit;
		}
	}

	//检查签名
	private function checkSignature()
	{
		//获取微信服务器GET请求的4个参数
		$signature = $_GET['signature'];
		$timestamp = $_GET['timestamp'];
		$nonce = $_GET['nonce'];

		//定义一个数组，存储其中3个参数，分别是timestamp，nonce和token
		$tempArr = array($nonce,$timestamp,$this->token);

		//进行排序
		sort($tempArr,SORT_STRING);

		//将数组转换成字符串

		$tmpStr = implode($tempArr);

		//进行sha1加密算法
		$tmpStr = sha1($tmpStr);

		//判断请求是否来自微信服务器，对比$tmpStr和$signature
		if($tmpStr == $signature)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	//响应消息
	public function responseMsg(){
		//根据用户传过来的消息类型进行不同的响应
		//1、接收微信服务器POST过来的数据，XML数据包
		$postData = $GLOBALS[HTTP_RAW_POST_DATA];
		if(!$postData)
		{
			echo  "error";
			exit();
		}
		//2、解析XML数据包
		$object = simplexml_load_string($postData,"SimpleXMLElement",LIBXML_NOCDATA);
		//获取消息类型
		$MsgType = $object->MsgType;
		switch ($MsgType) {
			case 'event':
				//接收事件推送
				$this->receiveEvent($object);
				break;
			case 'text':
				//接收文本消息
				echo $this->receiveText($object);
				break;
			case 'image':
				//接收图片消息
				echo $this->receiveImage($object);
				break;
			case 'location':
				//接收地理位置消息
				echo $this->receiveLocation($object);
				break;
			case 'voice':
				//接收语音消息
				echo $this->receiveVoice($object);
				break;
			case 'video':
				//接收视频消息
				echo $this->receiveVideo($object);
				break;
			case  'link':
				//接收链接消息
				echo $this->receiveLink($object);
				break;
			default:
				break;
		}
	}

	//接收事件推送
	private function receiveEvent($obj){
		switch ($obj->Event) {
			//关注事件
			case 'subscribe':
				//扫描带参数的二维码，用户未关注时，进行关注后的事件
				if(!empty($obj->EventKey)){
					//做相关处理
				}
				// //请求获取用户基本信息接口的地址
				// $openid = $obj->FromUserName;
				// $url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=".$this->getaccesstoken()."&openid=$openid&lang=zh_CN";
				// $userInfo = $this->https_request($url);
				// $nickname = $userInfo['nickname'];//获取昵称
				// $sex = $userInfo['sex'];	//获取性别
				// $city = $userInfo['city'];//获取用户所在城市
				// $headimgurl = $userInfo['headimgurl'];//获取用户头像

				// $subscribe_time = $userInfo['subscribe_time'];//获取用户关注的时间
				// $is_userid = $GLOBALS['dou']->get_one("SELECT user_id FROM " . $GLOBALS['dou']->table('user') . " WHERE openid = '$openid'");
				// $password = md5($openid);

				// if ($is_userid) {
				//        $sql = "UPDATE " . $GLOBALS['dou']->table('user') . " SET nickname = '$nickname',add_time = '$subscribe_time',images = '$headimgurl' WHERE openid = '$openid' ";
				// 	$GLOBALS['dou']->query($sql);
				// }else{
				//        $sql = "INSERT INTO " . $GLOBALS['dou']->table('user') . " (user_id,openid, nickname, sex,money, add_time,images,email,password)" . " VALUES (NULL, '$openid', '$nickname','$sex','0','$subscribe_time','$headimgurl','$openid','$password')";
				//        $GLOBALS['dou']->query($sql);
				//    }
				//$GLOBALS['dou']->write_in_session($openid);
				// $dataArray = array(
				// 					array(
				// 						"Title"=>"欢迎光临沸腾网",
				// 						"Description"=>"沸腾一下米到来,收米才是硬道理",
				// 						"PicUrl"=>"http://img.fetow.com/Public/M/images/in_1.jpg",
				// 						"Url"=>"http://www.fetow.com/m/Index/articledetails/id/56.html"
				// 						),
				// 						array(
				// 						"Title"=>"大V招募中",
				// 						"Description"=>"大V年赚百万不是梦",
				// 						"PicUrl"=>"http://img.fetow.com/Public/M/images/in_2.jpg",
				// 						"Url"=>"http://www.fetow.com/m"
				// 						),
				// 						array(
				// 						"Title"=>"沸腾新玩法-沸点",
				// 						"Description"=>"每一点都有米,全线大牌 生活美",
				// 						"PicUrl"=>"http://img.fetow.com/Public/M/images/in_3.jpg",
				// 						"Url"=>"http://www.fetow.com/m/Index/articledetails/id/59.html"
				// 						),
				// 						array(
				// 						"Title"=>"沸腾-HI购",
				// 						"Description"=>"HI收 不剁手,让打折见鬼去吧",
				// 						"PicUrl"=>"http://img.fetow.com/Public/M/images/in_4.jpg",
				// 						"Url"=>"http://www.fetow.com/m/Index/articledetails/id/57.html"
				// 						)
				//  				);
				// // echo replyText($obj,"欢迎你关注军哥带你玩转微信开发");
				// echo $this->replyNews($obj,$dataArray);
				$contents = "欢迎关注真米如初。\n真米如初，只追求最安全、最营养、最有心意的粮食。\n产地最纯正，品质最纯臻，不管走的有多远，永远保持一颗为善的初心。";
				echo $this->replyText($obj,$contents);
				break;
			//取消关注事件
			case 'unsubscribe':
				break;
			//扫描带参数的二维码，用户已关注时，进行关注后的事件
			case 'SCAN':
				//做相关的处理
				break;
			//自定义菜单事件
			case 'CLICK':
				//
				switch ($obj->EventKey) {
					case 'ZM_GRAIN':
						//客服二维码
							$imageArr = array(
								"PicUrl"=>$obj->PicUrl,
								"MediaId"=>'MxDnGcFH5q7ElYJPXD0jnks-apdKd-j_GCoFETTI6bY'
								);
							//发送图片消息
							echo $this->replyImage($obj,$imageArr);
						break;
					case 'ZM_HELP':
						//马上火爆
					$ask = "会员问题\n1、如何成为真米如初会员？\n答：进入真米如初公众号（真米如初、真米如初官网），点击“我要买米”，进入真米如初商城，登录成功即自动注册成为会员。\n\n2、会员优惠政策\n答：链接转至会员晋级系统页面\n\n订单问题\n1、年卡在哪里更改收货地址？\n\n答：购买了年卡之后，如果在某一月份需要更改收货地址，只需提前7天在订单中更改地址。\n2、优惠卡券怎样使用？\n\n答：真米如初优惠卡券均为系统自动发放至您的卡券包，使用时需在提交订单页面手动选取您可以使用的优惠卡券，如不选择则默认不使用优惠。";
						$openid = $obj->FromUserName;
						echo $this->replyText($obj,$ask);


						break;
					case 'ZM_GUSHI_XS':
						$gushi = "响水石板大米\n武则天“以米之名”攻下渤海国\n据北宋欧阳修主持编撰的《新唐书•渤海传》记载，唐代渤海国时期，渤海地区已经出现了先进的水利灌溉和水稻栽培技术。公元698年，渤海国国王大祚荣建都渤海镇，遍种响水米。相传此米大雪之中而生，固石板之上而长，饮天然之水而活。同年，武则天剑指渤海国，称其拥兵自重，不向大唐称臣，恐不利大唐为由，遂进军宁古塔，实则为渤海国之响水米而战。\n兵战七年，渤海国大败。\n渤海国国王大祚荣派次子到长安（现西安）向大唐称臣进贡，并将有着米中珍珠之称的响水米贡奉给大唐，唐中宗大喜，赐大祚荣绢、帛、锦彩、彩练、粟无数，金银器皿万件，并昭告天下，盛筵三天，文武百官不分官位等级，均赐响水米一碗。自此，响水贡米声名鹊起，历经唐宋元明清，世代相传，享誉世界，传承至今。";
						$openid = $obj->FromUserName;
						echo $this->replyText($obj,$gushi);


						break;
					case 'ZM_GUSHI_WC':
						$gushi = "五常稻花香\n慈禧：非此米不能尽食\n有记载，道光十五年，吉林将军富俊征集部分朝鲜族人在五常一带引河水种稻，所收获稻子用石碾碾制成大米，封成贡米，专送京城，供皇室享用。咸丰四年，清政府干脆在当地设立了“举仁、由义、崇礼、尚智、诚信”五个甲社，以“三纲五常”中“仁、义、礼、智、信”五常为名，称此地为五常，后又派旗官协领五常，设衙建堡，1909年设五常府。\n传说，食不厌精的慈禧太后对五常大米青睐有加，曾经数次对宫里人宣称“非此米不能进食”。上有所好，下必甚焉。清皇室的喜爱，使得京城富户都以吃到五常大米为荣。";
						$openid = $obj->FromUserName;
						echo $this->replyText($obj,$gushi);


						break;
					case 'ZM_GUSHI_PJ':
						$gushi = "盘锦蟹田稻\n2008年北京奥运会专用米\n2000年鼎翔被中国绿色食品发展中心认证为绿色食品生产基地，同年开始向有机食品生产基地的转换。在2万亩水稻种植基地上停止使用一切化肥农药，全部使用稻杆、牲畜粪堆积发酵的农家肥料，历时三年，最终成功通过国家环保总局对土壤残留、灌溉水资源的严格检测及种植过程的监督，于2003年9月被国家环保总局认证为“国家有机食品生产基地”。而年年审核的有机认证制度，令鼎翔米业这2万多亩有机基地被视若珍宝，精心呵护，确保不流失一分有机基地。\n07年盘锦市政府和北京京粮集团签订了08年奥运会特供米战略协议书，盘锦蟹田稻成为08年北京奥运会特供大米供应商，盘锦大米正式端上了奥运的餐桌。";
						$openid = $obj->FromUserName;
						echo $this->replyText($obj,$gushi);


						break;
					case 'V1001_FTTOW_STARS':
						//沸腾明星
						$openid = $obj->FromUserName;
						$contents = "欢迎关注真米如初。\n真米如初，只追求最安全、最营养、最有心意的粮食。\n产地最纯正，品质最纯臻，不管走的有多远，永远保持一颗为善的初心。";
						echo $this->replyText($obj,$contents);


						break;
					default:
						echo $this->replyText($obj,"错误");
						break;
				}
				break;
		}
	}

	//接收文本消息
	private function receiveText($obj){
		$rece = $obj->Content;
		$where['keywords']=array('like',"$rece%");
		//$content = M('reply')->where($where)->getField('content');
		$content = null;
		if($content){
			$content = $content;
		}else{
			$content = '抱歉,您写的不认识!';
		}

	// $data = json_encode(array(
	// 			"type" => image, 
	// 			"offset" => 0, 
	// 			"count" => 20, 
	// 			));


	// 		$content = $this->http_post('https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token='.$this->getaccesstoken(),$data);



	//发送文本消息
		return $this->replyText($obj,$content);
	}

	//接收图片消息
	private function receiveImage($obj)
	{
		//获取图片消息的内容
		$imageArr = array(
			"PicUrl"=>$obj->PicUrl,
			"MediaId"=>$obj->MediaId
		);
		//发送图片消息
		return $this->replyImage($obj,$imageArr);
	}

	//接收地理位置消息
	private function receiveLocation($obj)
	{
		//获取地理位置消息的内容
		$locationArr = array(
			"Location_X"=>"地址位置纬度：".$obj->Location_X,
			"Location_Y"=>"地址位置经度：".$obj->Location_Y,
			"Label"=>$obj->Label
		);
		//回复文本消息
		return $this->replyText($obj,$locationArr['Location_X'].$locationArr['Location_Y']);
	}

	//接收语言消息
	private function receiveVoice($obj){
		//获取语言消息内容
		$voiceArr = array(
			"MediaId"=>$obj->MediaId,
			"Format"=>$obj->Format
		);
		//回复语言消息
		return $this->replyVoice($obj,$voiceArr);
	}

	//接收视频消息
	private function receiveVideo($obj){
		//获取视频消息的内容
		$videoArr = array(
			"MediaId"=>$obj->MediaId
		);
		//回复视频消息
		return $this->replyVideo($obj,$videoArr);
	}

	//接收链接消息
	private function receiveLink($obj)
	{
		//接收链接消息的内容
		$linkArr = array(
			"Title"=>$obj->Title,
			"Description"=>$obj->Description,
			"Url"=>$obj->Url
		);
		//回复文本消息
		return $this->replyText($obj,"你发过来的链接地址是{$linkArr['Url']}");
	}

	//发送文本消息
	private function replyText($obj,$content){
		$replyXml = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[text]]></MsgType>
						<Content><![CDATA[%s]]></Content>
						</xml>";
		//返回一个进行xml数据包

		$resultStr = sprintf($replyXml,$obj->FromUserName,$obj->ToUserName,time(),$content);
		return $resultStr;
	}

	//发送图片消息
	private function replyImage($obj,$imageArr){
		$replyXml = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[image]]></MsgType>
						<Image>
						<MediaId><![CDATA[%s]]></MediaId>
						</Image>
						</xml>";
		//返回一个进行xml数据包

		$resultStr = sprintf($replyXml,$obj->FromUserName,$obj->ToUserName,time(),$imageArr['MediaId']);
		return $resultStr;
	}

	//回复语音消息
	private function replyVoice($obj,$voiceArr)
	{
		$replyXml = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[voice]]></MsgType>
						<Voice>
						<MediaId><![CDATA[%s]]></MediaId>
						</Voice>
						</xml>";
		//返回一个进行xml数据包

		$resultStr = sprintf($replyXml,$obj->FromUserName,$obj->ToUserName,time(),$voiceArr['MediaId']);
		return $resultStr;
	}

	//回复视频消息
	private function replyVideo($obj,$videoArr){
		$replyXml = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[video]]></MsgType>
						<Video>
						<MediaId><![CDATA[%s]]></MediaId>
						</Video> 
						</xml>";
		//返回一个进行xml数据包

		$resultStr = sprintf($replyXml,$obj->FromUserName,$obj->ToUserName,time(),$videoArr['MediaId']);
		return $resultStr;
	}

	//回复音乐消息
	private function  replyMusic($obj,$musicArr)
	{
		$replyXml = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[music]]></MsgType>
						<Music>
						<Title><![CDATA[%s]]></Title>
						<Description><![CDATA[%s]]></Description>
						<MusicUrl><![CDATA[%s]]></MusicUrl>
						<HQMusicUrl><![CDATA[%s]]></HQMusicUrl>
						<ThumbMediaId><![CDATA[%s]]></ThumbMediaId>
						</Music>
						</xml>";
		//返回一个进行xml数据包

		$resultStr = sprintf($replyXml,$obj->FromUserName,$obj->ToUserName,time(),$musicArr['Title'],$musicArr['Description'],$musicArr['MusicUrl'],$musicArr['HQMusicUrl'],$musicArr['ThumbMediaId']);
		return $resultStr;
	}

	//回复图文消息
	private function replyNews($obj,$newsArr){
		$itemStr = "";
		if(is_array($newsArr))
		{
			foreach($newsArr as $item)
			{
				$itemXml ="<item>
						<Title><![CDATA[%s]]></Title> 
						<Description><![CDATA[%s]]></Description>
						<PicUrl><![CDATA[%s]]></PicUrl>
						<Url><![CDATA[%s]]></Url>
						</item>";
				$itemStr .= sprintf($itemXml,$item['Title'],$item['Description'],$item['PicUrl'],$item['Url']);
			}

		}

		$replyXml = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[news]]></MsgType>
						<ArticleCount>%s</ArticleCount>
						<Articles>
							{$itemStr}
						</Articles>
						</xml> ";
		//返回一个进行xml数据包

		$resultStr = sprintf($replyXml,$obj->FromUserName,$obj->ToUserName,time(),count($newsArr));
		return $resultStr;
	}

	/**
	 *
	 * GET 请求
	 * @param string $url
	 * @param null $data
	 * @return mixed
	 */
	public function https_request($url,$data = null){
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		if(!empty($data))
		{
			curl_setopt($ch,CURLOPT_POST,1);//模拟POST
			curl_setopt($ch,CURLOPT_POSTFIELDS,$data);//POST内容
		}
		$outopt = curl_exec($ch);
		curl_close($ch);
		$outopt = json_decode($outopt,true);
		return $outopt;
	}



	/**
	 * 设置缓存，按需重载
	 * @param string $cachename
	 * @param mixed $value
	 * @param int $expired
	 * @return boolean
	 */
	protected function setCache($cachename,$value,$expired){
		//TODO: set cache implementation
		return false;
	}

	/**
	 * 获取缓存，按需重载
	 * @param string $cachename
	 * @return mixed
	 */
	protected function getCache($cachename){
		//TODO: get cache implementation
		return false;
	}
	//保证access_token在两小时内不过期
	public function getaccesstoken($appid='',$appsecret=''){
		$appid=$this->appid;
		$appsecret=$this->appsecret;
		$re = M('acceaatoden')->field('*')->where("appid = '$appid'")->find();
		if($re){
			if(time()>$re['add_time']+3600){
				$result = $this->http_get(self::API_URL_PREFIX.self::AUTH_URL.'appid='.$appid.'&secret='.$appsecret);
				if ($result)
				{
					$json = json_decode($result,true);
					$this->access_token = $json['access_token'];
					$accesstoken=$json['access_token'];
					$time = time();
					$data = array(
						'accesstokens'=>$accesstoken,
						'add_time'    =>$time
					);
					$where = array(
						'appid'=>$appid,
						'appsecret'=>$appsecret
					);
					M('acceaatoden')->where($where)->save($data);
					return $this->access_token;
				}

			}else{
				$this->access_token=$re['accesstokens'];
				return $this->access_token;


			}
		}else{
			$result = $this->http_get(self::API_URL_PREFIX.self::AUTH_URL.'appid='.$appid.'&secret='.$appsecret);
			if ($result)
			{
				$json = json_decode($result,true);
				$this->access_token = $json['access_token'];
				$time=time();
				$tt = $this->access_token;
				$data = array(
					'appid'=>$appid,
					'appsecret'=>$appsecret,
					'accesstokens'=>$tt,
					'add_time'    =>$time
				);

				add('acceaatoden',$data);
				return $this->access_token;
			}
		}

	}
	/**
	 * GET 请求
	 * @param string $url
	 */
	private function http_get($url){
		$oCurl = curl_init();
		if(stripos($url,"https://")!==FALSE){
			curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($oCurl, CURLOPT_SSLVERSION, 1); //CURL_SSLVERSION_TLSv1
		}
		curl_setopt($oCurl, CURLOPT_URL, $url);
		curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
		$sContent = curl_exec($oCurl);
		$aStatus = curl_getinfo($oCurl);
		curl_close($oCurl);
		if(intval($aStatus["http_code"])==200){
			return $sContent;
		}else{
			return false;
		}
	}
	//创建菜单
	/*public function menu_create($data)
    {
        $access_token = $this->get_access_token();
        $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$this->getaccesstoken();
        return $this->https_request($url,$data);
    }*/

	//查询菜单
	public function menu_select()
	{
		//$access_token = $this->get_access_token();
		$url = "https://api.weixin.qq.com/cgi-bin/menu/get?access_token=".$this->getaccesstoken();
		return $this->https_request($url);
	}

	//删除菜单

	public function menu_delete()
	{
		$access_token = $this->get_access_token();
		$url = "https://api.weixin.qq.com/cgi-bin/menu/delete?access_token=".$this->getaccesstoken();
		return $this->https_request($url);
	}

	/**
	 * oauth 授权跳转接口
	 * @param string $callback 回调URI
	 * @return string
	 */
	public function getOauthRedirect($callback,$state='',$scope='snsapi_userinfo'){
		return self::OAUTH_PREFIX.self::OAUTH_AUTHORIZE_URL.'appid='.$this->appid.'&redirect_uri='.urlencode($callback).'&response_type=code&scope='.$scope.'&state='.$state.'#wechat_redirect';
	}


	/**s
	 * 通过code获取Access Token
	 * @return array {access_token,expires_in,refresh_token,openid,scope}
	 */
	public function getOauthAccessToken(){
		$code = isset($_GET['code'])?$_GET['code']:'';
		if (!$code) return false;
		$result = $this->http_get(self::API_BASE_URL_PREFIX.self::OAUTH_TOKEN_URL.'appid='.$this->appid.'&secret='.$this->appsecret.'&code='.$code.'&grant_type=authorization_code');
		if ($result)
		{
			$json = json_decode($result,true);
			if (!$json || !empty($json['errcode'])) {
				$this->errCode = $json['errcode'];
				$this->errMsg = $json['errmsg'];
				return false;
			}
			$this->user_token = $json['access_token'];
			return $json;
		}
		return false;
	}
	/**
	 * 获取授权后的用户资料
	 * @param string $access_token
	 * @param string $openid
	 * @return array {openid,nickname,sex,province,city,country,headimgurl,privilege,[unionid]}
	 * 注意：unionid字段 只有在用户将公众号绑定到微信开放平台账号后，才会出现。建议调用前用isset()检测一下
	 */
	public function getOauthUserinfo($access_token,$openid){
		$result = $this->http_get(self::API_BASE_URL_PREFIX.self::OAUTH_USERINFO_URL
			.'access_token='.$access_token.'&openid='.$openid.'&Lang=zh_CN');
		if ($result)
		{
			$json = json_decode($result,true);
			if (!$json || !empty($json['errcode'])) {
				$this->errCode = $json['errcode'];
				$this->errMsg = $json['errmsg'];
				return false;
			}
			return $json;
		}
		return false;
	}

	/**
	 * 检验授权凭证是否有效
	 * @param string $access_token
	 * @param string $openid
	 * @return boolean 是否有效
	 */
	public function getOauthAuth($access_token,$openid){
		$result = $this->http_get(self::API_BASE_URL_PREFIX.self::OAUTH_AUTH_URL.'access_token='.$access_token.'&openid='.$openid);
		if ($result)
		{
			$json = json_decode($result,true);
			if (!$json || !empty($json['errcode'])) {
				$this->errCode = $json['errcode'];
				$this->errMsg = $json['errmsg'];
				return false;
			} else
				if ($json['errcode']==0) return true;
		}
		return false;
	}
	/**
	 * 获取关注者详细信息
	 * @param string $openid
	 * @return array {subscribe,openid,nickname,sex,city,province,country,language,headimgurl,subscribe_time,[unionid]}
	 * 注意：unionid字段 只有在用户将公众号绑定到微信开放平台账号后，才会出现。建议调用前用isset()检测一下
	 */
	//https://api.weixin.qq.com/cgi-bin/user/info?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN
	/*			const API_URL_PREFIX = 'https://api.weixin.qq.com/cgi-bin';
            const AUTH_URL = '/token?grant_type=client_credential&';
            const OAUTH_PREFIX = 'https://open.weixin.qq.com/connect/oauth2';
            const OAUTH_AUTHORIZE_URL = '/authorize?';
            const API_BASE_URL_PREFIX = 'https://api.weixin.qq.com'; //以下API接口URL需要使用此前缀
            const OAUTH_USERINFO_URL = '/sns/userinfo?';
            const OAUTH_TOKEN_URL = '/sns/oauth2/access_token?';
            const OAUTH_REFRESH_URL = '/sns/oauth2/refresh_token?';
            const OAUTH_AUTH_URL = '/sns/auth?';
            const USER_INFO_URL='/user/info?';
            const GET_TICKET_URL = '/ticket/getticket?';
    */
	/**
	 * @param $openid 用户微信的唯一标记 openID
	 * @return bool|mixed
	 */
	public function getUserInfo($openid){

		$result = $this->http_get(self::API_URL_PREFIX.self::USER_INFO_URL.'access_token='.$this->getaccesstoken().'&openid='.$openid.'&Lang=zh_CN');
		if ($result)
		{
			$json = json_decode($result,true);
			if (isset($json['errcode'])) {
				$this->errCode = $json['errcode'];
				$this->errMsg = $json['errmsg'];
				return false;
			}
			return $json;
		}
		return false;
	}

	/**
	 * 删除JSAPI授权TICKET
	 * @param string $appid 用于多个appid时使用
	 * @return bool
	 */
	public function resetJsTicket($appid=''){
		if (!$appid) $appid = $this->appid;
		$this->jsapi_ticket = '';
		$authname = 'wechat_jsapi_ticket'.$appid;
		$this->removeCache($authname);
		return true;
	}

	/**
	 * 获取JSAPI授权TICKET
	 * @param string $appid 用于多个appid时使用,可空
	 * @param string $jsapi_ticket 手动指定jsapi_ticket，非必要情况不建议用
	 * @return bool|mixed|string
	 */
	public function getJsTicket($appid='',$jsapi_ticket=''){

		if (!$this->access_token && !$this->getaccesstoken()) return false;
		if (!$appid) $appid = $this->appid;
		if ($jsapi_ticket) { //手动指定token，优先使用
			$this->jsapi_ticket = $jsapi_ticket;
			return $this->jsapi_ticket;
		}
		$authname = 'wechat_jsapi_ticket'.$appid;
		if ($rs = $this->getCache($authname))  {
			$this->jsapi_ticket = $rs;
			return $rs;
		}
		$result = $this->http_get(self::API_URL_PREFIX.self::GET_TICKET_URL.'access_token='.$this->access_token.'&type=jsapi');
		if ($result)
		{
			$json = json_decode($result,true);
			if (!$json || !empty($json['errcode'])) {
				$this->errCode = $json['errcode'];
				$this->errMsg = $json['errmsg'];
				return false;
			}
			$this->jsapi_ticket = $json['ticket'];
			$expire = $json['expires_in'] ? intval($json['expires_in'])-100 : 3600;
			$this->setCache($authname,$this->jsapi_ticket,$expire);
			return $this->jsapi_ticket;
		}
		return false;
	}

	/**
	 * 获取JsApi使用签名
	 * @param string $url 网页的URL，自动处理#及其后面部分
	 * @param int $timestamp 当前时间戳 (为空则自动生成)
	 * @param string $noncestr 随机串 (为空则自动生成)
	 * @param string $appid 用于多个 appid 时使用,可空
	 * @return array|bool 返回签名字串
	 */
	public function getJsSign($url, $timestamp=0, $noncestr='', $appid=''){
		if (!$this->jsapi_ticket && !$this->getJsTicket($appid) || !$url) return false;
		if (!$timestamp)
			$timestamp = time();
		if (!$noncestr)
			$noncestr = $this->generateNonceStr();
		$ret = strpos($url,'#');
		if ($ret)
			$url = substr($url,0,$ret);
		$url = trim($url);
		if (empty($url))
			return false;
		$arrdata = array("timestamp" => $timestamp, "noncestr" => $noncestr, "url" => $url, "jsapi_ticket" => $this->jsapi_ticket);
		$sign = $this->getSignature($arrdata);
		if (!$sign)
			return false;
		$signPackage = array(
			"appid"     => $this->appid,
			"noncestr"  => $noncestr,
			"timestamp" => $timestamp,
			"url"       => $url,
			"signature" => $sign
		);
		return $signPackage;
	}
	/**
	 * 获取签名
	 * @param array $arrdata 签名数组
	 * @param string $method 签名方法
	 * @return boolean|string 签名值
	 */
	public function getSignature($arrdata,$method="sha1") {
		if (!function_exists($method)) return false;
		ksort($arrdata);
		$paramstring = "";
		foreach($arrdata as $key => $value)
		{
			if(strlen($paramstring) == 0)
				$paramstring .= $key . "=" . $value;
			else
				$paramstring .= "&" . $key . "=" . $value;
		}
		$Sign = $method($paramstring);
		return $Sign;
	}
	/**
	 * 生成随机字串
	 * @param int $length 长度，默认为16，最长为32字节
	 * @return string
	 */
	public function generateNonceStr($length=16){
		// 密码字符集，可任意添加你需要的字符
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$str = "";
		for($i = 0; $i < $length; $i++)
		{
			$str .= $chars[mt_rand(0, strlen($chars) - 1)];
		}
		return $str;
	}
	/**
	 *创建二维码ticket
	 *
	 */
	public function getTicket(){
		//http请求方式: POST
		//URL: https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=TOKEN
		$post_string = '{"action_name": "QR_LIMIT_SCENE", "action_info": {"scene": {"scene_id": 1}}}';//scene_id 识别号，用户扫描二维码后会将该识别号发送给开发者
		$url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$this->getaccesstoken();
		$ticket = UrlEncode($this->https_post($url, $post_string));
		//二维码图片url
		//https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=TOKENPOST
		$picurl = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=".$ticket;
		return $picurl; //$picurl 就是二维码图片地址，到这里就成功啦
	}
	public function https_post($url,$data){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
		if (curl_errno($curl)) {
			return 'Errno'.curl_error($curl);
		}
		curl_close($curl);
		$result=json_decode($result,true);
		$ticket = empty($result['ticket'])? '':$result['ticket'];
		return $ticket;
	}

	//向客户发送消息()
	public function postMaggerToUser($user,$content){
		$url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=".$this->getaccesstoken();
		$data = '{"touser": "'.$user.'","msgtype": "text","text": {"content": "'.$content.'"}}';
		$this->https_post($url,$data);
	}
	//获取关注服务号的总数和openid
	public function getUserCounts(){
		$url = "https://api.weixin.qq.com/cgi-bin/user/get?access_token="
			.$this->getaccesstoken()."&next_openid=".$openid;
		return $this->https_request($url);
	}
	//向会员发送红包
	/**
	 * 微信支付
	 * @param $re_openid 用户openid
	 * @param $money
	 * @param $buy_nickname
	 * @return bool|mixed
	 */
	public function wx_pay($re_openid,$money,$buy_nickname){
		$content = $buy_nickname=='提现'?"恭喜您提现成功，红包多多，继续努力":"恭喜沸腾家人增加一名".$buy_nickname."，红包多多，继续努力";
		$datas['mch_billno'] = "1390724902".date('YmdHis').rand(1000, 9999);
		$datas['mch_id'] = '1390724902';
		$datas['wxappid'] = $this->appid;
		$datas['send_name'] = '真米如初';
		$datas['re_openid'] = $re_openid;
		$datas['total_amount'] = $money;
		$datas['total_num'] = 1;
		$datas['wishing'] = $content;
		$datas['client_ip'] = "139.224.20.161";
		$datas['act_name'] = "发展代理红包发不停";
		$datas['remark'] = $content;
		$datas['nonce_str'] = $this->generateNonceStr();
		$datas['sign'] = $this->makeSign($datas);
		$xml = '';
		$xml .= "<xml>";
		foreach ($datas as $key => $value) {
			$xml .= "<{$key}><![CDATA[{$value}]]></{$key}>";
		}
		$xml .="</xml>";
		$url = 'https://api.mch.weixin.qq.com/mmpaymkttransfers/sendredpack';
		$responseXml = $this->curl_post_ssl($url, $xml);
		$responseObj = simplexml_load_string($responseXml, 'SimpleXMLElement', LIBXML_NOCDATA);
		return $responseXml;
		/*
        返回信息写入数据库
        libxml_disable_entity_loader(true);
        $data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        $data['add_time'] =  time();
        add('red_log',$data);*/
	}

	/**
	 * //红包微信支付证书
	 * @param $url
	 * @param $vars
	 * @param int $second
	 * @param array $aHeader
	 * @return bool|mixed
	 */
	public function curl_post_ssl($url, $vars, $second=30,$aHeader=array()){
		$ch = curl_init();
		//超时时间
		curl_setopt($ch,CURLOPT_TIMEOUT,$second);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
		//这里设置代理，如果有的话
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
		//cert 与 key 分别属于两个.pem文件
		//请确保您的libcurl版本是否支持双向认证，版本高于7.20.1
		curl_setopt($ch,CURLOPT_SSLCERT,DIRECTORY_SEPARATOR.'mnt'.DIRECTORY_SEPARATOR.'www'.DIRECTORY_SEPARATOR.'Public'.DIRECTORY_SEPARATOR.'certc28362188a19b45703498d93f757cf55'.DIRECTORY_SEPARATOR.'apiclient_cert.pem');
		curl_setopt($ch,CURLOPT_SSLKEY,DIRECTORY_SEPARATOR.'mnt'.DIRECTORY_SEPARATOR.'www'.DIRECTORY_SEPARATOR.'Public'.DIRECTORY_SEPARATOR.'certc28362188a19b45703498d93f757cf55'.DIRECTORY_SEPARATOR.'apiclient_key.pem');
		curl_setopt($ch,CURLOPT_CAINFO,DIRECTORY_SEPARATOR.'mnt'.DIRECTORY_SEPARATOR.'www'.DIRECTORY_SEPARATOR.'Public'.DIRECTORY_SEPARATOR.'certc28362188a19b45703498d93f757cf55'.DIRECTORY_SEPARATOR.'rootca.pem');
		if( count($aHeader) >= 1 ){
			curl_setopt($ch, CURLOPT_HTTPHEADER, $aHeader);
		}
		curl_setopt($ch,CURLOPT_POST, 1);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
		$data = curl_exec($ch);
		if($data){
			curl_close($ch);
			return $data;
		}
		else {
			$error = curl_errno($ch);
			curl_close($ch);
			return false;
		}
	}

	/**
	 * 红包签名
	 * @param $data
	 * @return string
	 */
	public function makeSign($data){
		// 去空
		$data=array_filter($data);
		//签名步骤一：按字典序排序参数
		ksort($data);
		$string_a=http_build_query($data);
		$string_a=urldecode($string_a);
		//签名步骤二：在string后加入KEY
		$config=$this->config;
		$string_sign_temp=$string_a."&key=1qaz2wsxhuangyi5feitengjd3sdhgf5";
		//签名步骤三：MD5加密
		$sign = md5($string_sign_temp);
		// 签名步骤四：所有字符转为大写
		$result=strtoupper($sign);
		return $result;
	}

	/**
	 * 通用auth验证方法
	 * @param string $appid
	 * @param string $appsecret
	 * @param string $token 手动指定access_token，非必要情况不建议用
	 * @return bool|mixed|string
	 */
	public function checkAuth($appid='',$appsecret='',$token=''){
		if (!$appid || !$appsecret) {
			$appid = $this->appid;
			$appsecret = $this->appsecret;
		}
		if ($token) { //手动指定token，优先使用
			$this->access_token=$token;
			return $this->access_token;
		}
		$authname = 'qywechat_access_token'.$appid;
		if ($rs = $this->getCache($authname))  {
			$this->access_token = $rs;
			return $rs;
		}

		$result = $this->http_get(self::API_URL_PREFIX.self::TOKEN_GET_URL.'corpid='.$appid.'&corpsecret='.$appsecret);
		if ($result)
		{
			$json = json_decode($result,true);
			if (!$json || isset($json['errcode'])) {
				$this->errCode = $json['errcode'];
				$this->errMsg = $json['errmsg'];
				return false;
			}
			$this->access_token = $json['access_token'];
			$expire = $json['expires_in'] ? intval($json['expires_in'])-100 : 3600;
			$this->setCache($authname,$this->access_token,$expire);
			return $this->access_token;
		}
		return false;
	}

	/**
	 * 主动发送信息接口
	 * @param array $data 	结构体为:
	 * array(
	 *         "touser" => "UserID1|UserID2|UserID3",
	 *         "toparty" => "PartyID1|PartyID2 ",
	 *         "totag" => "TagID1|TagID2 ",
	 *         "safe":"0"			//是否为保密消息，对于news无效
	 *         "agentid" => "001",	//应用id
	 *         "msgtype" => "text",  //根据信息类型，选择下面对应的信息结构体
	 *
	 *         "text" => array(
	 *                 "content" => "Holiday Request For Pony(http://xxxxx)"
	 *         ),
	 *
	 *         "image" => array(
	 *                 "media_id" => "MEDIA_ID"
	 *         ),
	 *
	 *         "voice" => array(
	 *                 "media_id" => "MEDIA_ID"
	 *         ),
	 *
	 *         " video" => array(
	 *                 "media_id" => "MEDIA_ID",
	 *                 "title" => "Title",
	 *                 "description" => "Description"
	 *         ),
	 *
	 *         "file" => array(
	 *                 "media_id" => "MEDIA_ID"
	 *         ),
	 *
	 *         "news" => array(			//不支持保密
	 *                 "articles" => array(    //articles  图文消息，一个图文消息支持1到10个图文
	 *                     array(
	 *                         "title" => "Title",             //标题
	 *                         "description" => "Description", //描述
	 *                         "url" => "URL",                 //点击后跳转的链接。可根据url里面带的code参数校验员工的真实身份。
	 *                         "picurl" => "PIC_URL",          //图文消息的图片链接,支持JPG、PNG格式，较好的效果为大图640*320，
	 *                                                         //小图80*80。如不填，在客户端不显示图片
	 *                     ),
	 *                 )
	 *         ),
	 *
	 *         "mpnews" => array(
	 *                 "articles" => array(    //articles  图文消息，一个图文消息支持1到10个图文
	 *                     array(
	 *                         "title" => "Title",             //图文消息的标题
	 *                         "thumb_media_id" => "id",       //图文消息缩略图的media_id
	 *                         "author"                                                                                                                       => "Author",           //图文消息的作者(可空)
	 *                         "content_source_url" => "URL",  //图文消息点击“阅读原文”之后的页面链接(可空)
	 *                         "content" => "Content"          //图文消息的内容，支持html标签
	 *                         "digest" => "Digest description",   //图文消息的描述
	 *                         "show_cover_pic" => "0"         //是否显示封面，1为显示，0为不显示(可空)
	 *                     ),
	 *                 )
	 *         )
	 * )
	 * 请查看官方开发文档中的 发送消息 -> 消息类型及数据格式
	 *
	 * @return boolean|array
	 * 如果对应用或收件人、部门、标签任何一个无权限，则本次发送失败；
	 * 如果收件人、部门或标签不存在，发送仍然执行，但返回无效的部分。
	 * {
	 *    "errcode": 0,
	 *    "errmsg": "ok",
	 *    "invaliduser": "UserID1",
	 *    "invalidparty":"PartyID1",
	 *    "invalidtag":"TagID1"
	 * }
	 */
	public function sendMessage($data){
		foreach ($data['news']['articles'] as $key => $value) {
			$data['news']['articles'][$key]['title'] =  urlencode($data['news']['articles'][$key]['title']);
			$data['news']['articles'][$key]['description'] =  urlencode($data['news']['articles'][$key]['description']);
			$data['news']['articles'][$key]['content'] =  urlencode($data['news']['articles'][$key]['content']);


			foreach ($data['news'][$key] as &$item){
				foreach ($item as $k=>$v){
					if($k =='content'){
						$item[$k] = urlencode(htmlspecialchars(str_replace("\"","'",$v)));
					}else{
						$item[$k] = urlencode($v);
					}
				}
			}
		}
		//if (!$this->access_token && !$this->checkAuth()) return false;
		$result = $this->http_post(self::API_URL_PREFIX.self::MASS_SEND_URL.'access_token='.$this->getaccesstoken(),$data);

		if ($result)
		{
			$json = json_decode($result,true);
			if (!$json || !empty($json['errcode']) || $json['errcode']!=0) {
				$this->errCode = $json['errcode'];
				$this->errMsg = $json['errmsg'];
				return false;
			}
			return $json;
		}
		return false;
	}
	/**
	 * POST 请求
	 * @param string $url
	 * @param array $param
	 * @param boolean $post_file 是否文件上传
	 * @return string content
	 */
	private function http_post($url,$param,$post_file=false){
		$oCurl = curl_init();
		if(stripos($url,"https://")!==FALSE){
			curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($oCurl, CURLOPT_SSLVERSION, 1); //CURL_SSLVERSION_TLSv1
		}
		if (is_string($param) || $post_file) {
			$strPOST = $param;
		} else {
			$aPOST = array();
			foreach($param as $key=>$val){
				$aPOST[] = $key."=".urlencode($val);
			}
			$strPOST =  join("&", $aPOST);
		}
		curl_setopt($oCurl, CURLOPT_URL, $url);
		curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($oCurl, CURLOPT_POST,true);
		curl_setopt($oCurl, CURLOPT_POSTFIELDS,$strPOST);
		$sContent = curl_exec($oCurl);
		$aStatus = curl_getinfo($oCurl);
		curl_close($oCurl);
		if(intval($aStatus["http_code"])==200){
			return $sContent;
		}else{
			return false;
		}
	}

	//获取永久素材列表
	public function get_wx_sucai(){
		$data = json_encode(array(
			"type" => image, 
			"offset" => 0, 
			"count" => 20, 
			));


		return $this->http_post('https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token='.$this->getaccesstoken(),$data);
	

	}
}
?>
