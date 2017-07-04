<?php
/**
 * Created by PhpStorm.
 * User: 百鬼夜行  zhanghj
 * Date: 2017/3/7
 * Time: 10:51
 */
namespace M\Controller;
use Common\Controller\MZhenmiController;
use Common\Model\CouponModel;
use Common\Model\OrderModel;
use M\Model\UserModel;
use Think\Cache\Driver\Memcache;
use Think\Controller;
class OrderController extends MZhenmiController
{
    private $loginID;
    private $oiModel;
    private $userModel;
    private $couponModel;
    public function __construct()
    {
        parent::__construct();
        $this->loginID = parent::getLoginID();
        $this->oiModel = new OrderModel();
        $this->userModel = new UserModel();
        $this->couponModel = new CouponModel();
    }
    public function index(){
        $res = M('order_info')
            ->where('user_id = '.$this->loginID)
            ->order('add_time desc')
            ->find();
        if (haveSessionUserID()){
            if ($res && IS_POST){
                $this->redirect('Order/mobilepayment');
            }else{
                $this->redirect('User/login');
            }
        }else{
            if (is_mobile()&& !is_weixin()){
                if ($res && IS_POST){
                    $this->redirect('Order/mobilepayment');
                }else{
                    $this->redirect('Index/index');
                }
            }
        }

        $waitingPayOrder = $this->oiModel->getOrderData($this->loginID,0,0,1);
        $arrOrderSn = ['',];
        $str_order_sn = '';
        foreach ($waitingPayOrder as $v){
            array_push($arrOrderSn,$v['order_sn']);
            $str_order_sn.=$v['order_sn'].'|';
        }
        $coupon_rule = $this->couponModel->getRules();
        //获取用户的默认收货地址
        $userAddr = $this->userModel->getUserAddr($this->loginID);
        $user_img = get_user_img($this->loginID);
        $ad_word = $this->oiModel->getAdWord($this->loginID,$arrOrderSn);
        //TODO 获取有效期内的使用券信息
        $useCoupons = $this->couponModel->getUserCoupon($this->loginID,1,0,$arrOrderSn);
        //获取物流备注数据
        $delivery = M('delivery')->select();
        //获取订单所需的运费
        $postage = get_config('postage');
        $postageTip = get_config('postage_tip');

        $this->assign('delivery',$delivery);
        $this->assign('postage',$postage);
        $this->assign('postage_tip', $postageTip);
        $this->assign('useCoupons',$useCoupons);
        $this->assign('userAddr',$userAddr);
        $this->assign('userAddr0',$userAddr[0]);
        $this->assign('waitingPayOrder', $waitingPayOrder);
        $this->assign('ad_word', $ad_word);
        $this->assign('user_img',$user_img);
        $this->assign('str_order_sn',$str_order_sn);
        $this->assign('coupon_rule',$coupon_rule);
        $this->display();
    }
    /**
     * TODO 订单界面 默认加载时显示 待付款订单
     */
    public function indexx(){
        //获取私人订制的相应订单数据
        $waitingCustomOrder = $this->oiModel->getCustomOrderData($this->loginID);
        $waitingCustomHarvestOrder = $this->oiModel->getCustomHarvestOrderData($this->loginID);
        $endCustomHarvestOrder = $this->oiModel->getEndCustomHarvestOrderData($this->loginID);

        //获取非私人订制的相应订单数据
        $waitingPayOrder = $this->oiModel->getOrderData($this->loginID,0,0,1);
        $waitingHarvestOrder = $this->oiModel->getOrderData($this->loginID,1,0,1);
        $endHarvestOrder = $this->oiModel->getOrderData($this->loginID,1,1,1);
        //获取产品推荐数据
        $recommended = $this->oiModel->recommendedGoods();
        //获取私人订制产品的详细描述信息
        $waitingCustomOrder = $this->getCustomDesc($waitingCustomOrder);
        $customer_service_img = get_config('service_img');
        $this->assign('customer_service_img', $customer_service_img);
        $this->assign('recommended',$recommended);
        $this->assign('waitingPayOrder',$waitingPayOrder);
        $this->assign('waitingHarvestOrder',$waitingHarvestOrder);
        $this->assign('waitingCustomOrder',$waitingCustomOrder);
        $this->assign('waitingCustomHarvestOrder',$waitingCustomHarvestOrder);
        $this->assign('endHarvestOrder',$endHarvestOrder);
        $this->assign('endCustomHarvestOrder',$endCustomHarvestOrder);
        $this->display();
    }

    /**
     * 对应于“个人中心—订单” 查看
     */
    public function grdcx(){
        //TODO 自动收货设置
        $waitingHarvestOrder = $this->oiModel->getOrderData($this->loginID,1,0,1);
        $endHarvestOrder = $this->oiModel->getOrderData($this->loginID,1,1,1);
        $this->autoHarvest($waitingHarvestOrder);
        $this->assign('waitingHarvestOrder',$waitingHarvestOrder);
        $this->assign('endHarvestOrder',$endHarvestOrder);
        //$this->assign('','');
        $this->display();
    }

    /**
     * //TODO 自动收货设置  发货7天后
     * @param $waitingHarvestOrder
     */
    public function autoHarvest($waitingHarvestOrder){
        foreach ($waitingHarvestOrder as $value){
            $is_harvest_time = $value['is_harvest_time'];
            if ($is_harvest_time){
                $timeTag = 7*60*60*24 + $is_harvest_time;
                if (time() > $timeTag){
                    //TODO AUTO
                    $rec_id = $value['rec_id']?$value['rec_id']:null;
                    $order_id = $value['order_id']?$value['order_id']:null;
                    //AUTO
                    $this->oiModel->confirmGoods($this->loginID,$rec_id,$order_id);
                }
            }

        }
    }
    /**
     * 年卡产品订单详情
     */
    public function nkcpxq(){
    	if(IS_POST){
    		$data['order_sn'] = I('post.order_sn') ? I('post.order_sn') : I('get.order_sn');
    		if($data['order_sn']){
			    //年卡
			    $where = array(
				    'oi.user_id' => $this->loginID,
				    'oi.order_type' => 'NK',
				    'oi.pay_status' => 1,
				    'oi.is_delete' => 0,
				    'oi.order_sn' =>$data['order_sn'],
		        );
			    $nk_data[] = M('OrderInfo')
				    ->alias('oi')
				    ->field('oi.pay_time,oi.act_id,oi.order_id,oi.order_sn,og.product_id,og.product_number,g.name,g.thumbnail,g.unit,oi.nk_address_ids,oi.order_sn,og.courier_num,oi.goods_num')
				    ->join('ms_order_goods as og on og.order_id=oi.order_id')
				    ->join('ms_goods as g on og.product_id=g.goods_id')
				    ->where($where)
				    ->order('oi.pay_time desc')
				    ->find();
			    if($nk_data){
				    $nk_data = $this->oiModel->getNkDate($nk_data);
				    foreach($nk_data[0]['order_goods'] as $key => &$val){
				    	if(!empty($val['courier_num'])){
						    $nk_data[0]['order_goods'][$key]['status'] = 2;
					    } else if(($val['stamptime']-604800) < time() ){
						    $nk_data[0]['order_goods'][$key]['status'] = 1;
					    }
				    }
				    $nk_data[0]['order_goods'] = array_reverse($nk_data[0]['order_goods']);
			    }
			    $this->assign('data', $nk_data[0]);
			    $this->display();
		    } else {
			    header('location:'.U('Order/grdcx'));
		    }
	    } else {
		    header('location:'.U('Order/grdcx'));
	    }
    }
    
    public function editaddress(){
    	$order_id = I('get.order_id');
    	$addr_wz = I('get.addr_wz');
	    //获取用户地址
	    $address = D('User')->getUserAddr($this->loginID);
	    //获取物流备注数据
	    $delivery = M('delivery')->select();
	    $newAddr = M('orderInfo')
		    ->alias('oi')
		    ->field('oi.nk_address_ids nk_address_ids,og.courier_num courier_num')
		    ->join('ms_order_goods as og on og.order_id=oi.order_id')
		    ->where('oi.order_id='.$order_id)
		    ->find();
	    $ids = array();
	    foreach($address as $val){
		    $ids[] = $val['address_id'];
		    if($val['status']==1){
			    $k_id = $val['address_id'];
		    }
	    }
	    $arr = explode('|',$newAddr['nk_address_ids']);
	    $courier_num = explode('|',$newAddr['courier_num']);
	    $flag = false;
	    foreach($arr as $kk=>&$vv){
	    	if($vv){
			    if(!in_array($vv,$ids)&& empty($courier_num[$kk])){
				    $arr[$kk] = $k_id;
				    $flag = true;
			    }
		    }
	    }
	    if($flag){
		    $str = implode('|',$arr);
		    M('OrderInfo')->where('order_id='.$order_id)->save(array('nk_address_ids'=>$str));
	    }

	    $this->assign('order_id',$order_id);
	    $this->assign('addr',$arr[$addr_wz]);
	    $this->assign('addr_wz',$addr_wz);
	    $this->assign('address',$address);
	    $this->assign('delivery',$delivery);
    	$this->display();
    }
    
    //修改地址
    public function ajax_addr(){
    	if(IS_AJAX&& IS_POST){
    		$addr = I('post.addr');
    		$wz = I('post.wz');
    		$order_id = I('post.order_id');
    		if($order_id&&$addr&&$wz){
    			$ids = M('OrderInfo')->where('order_id='.$order_id)->getField('nk_address_ids');
    			$data = explode('|',$ids);
    			$data[$wz] = $addr;
    			$ids = implode('|',$data);
    			$res = M('OrderInfo')->where('order_id='.$order_id)->save(array('nk_address_ids'=>$ids));
    			if($res){
    				return showMsg(1,'地址修改成功');
			    }
		    }
	    }
    }
	
	/**
	 * ajax 删除当前用户的地址
	 */
	public function ajaxDelAddrNk(){
		if (IS_AJAX && IS_POST){
			$postData = I('post.');
			$address_id = $postData['address_id']?$postData['address_id']:null;
			
			$tag = $this->userModel->delAddr($address_id,$this->loginID);
			
			$ids = M('OrderInfo')
				->alias('oi')
				->field('oi.nk_address_ids nk_address_ids,og.courier_num courier_num')
				->join('ms_order_goods as og on og.order_id=oi.order_id')
				->where('oi.order_id='.$postData['order_id'])
				->find();
			$data = explode('|',$ids['nk_address_ids']);
			$courier_num = explode('|',$ids['courier_num']);
			//获取用户地址
			$address = D('User')->getUserAddr($this->loginID);
			foreach($address as $val){
				if($val['status']==1){
					$k_id = $val['address_id'];
				}
			}

			foreach($data as $kk=>&$vv){
				if($vv){
					if(($vv == $address_id)&&empty($courier_num[$kk])){
						$data[$kk] = $k_id;
					}
				}
			}
			
			$ids = implode('|',$data);
			M('OrderInfo')->where('order_id='.$postData['order_id'])->save(array('nk_address_ids'=>$ids));
			if ($tag == 1){
				return showMsg(1,'删除地址,操作成功');
			}else{
				if ($tag == 2){
					return showMsg(0,'Sorry,不可删除默认地址');
				}
				return showMsg(0,'Sorry,删除地址失败');
			}
		}else{
			return showMsg(0,'sorry,非法请求失败');
		}
	}
    
    /**
     * 年卡产品订单详情
     */
    public function ptcpxq(){
        $postData = I('post.');
        $waybillCode = $postData['courier_num']?$postData['courier_num']:null;
        $res = expressinfo($waybillCode);
        $trace = $res['data'];
        $express = $this->traceExpress();
        foreach ($express as $key => $value){
            if ($res['com'] == $key){
                $comName = $value;
                break;
            }else{
                $comName = '暂无匹配';
            }
        }
        $this->assign('trace',$trace);
        $this->assign('comName',$comName);
        $this->assign('desc',$postData);
        $this->display();
    }
    public function mobilePayment(){
        header("Content-type:text/html;charset=utf-8");
        $res = M('order_info')
            ->where('user_id = '.$this->loginID)
            ->order('add_time desc')
            ->find();
        $this->assign('res',$res);
        $this->display();
    }
    /**
     * 支付界面功能设计
     */
    public function payment(){
        if (IS_POST){
            $postData = $_POST;
            //获取拼接的订单号
            $str_Order_sn = $postData['order_sn']?$postData['order_sn']:null;
            $arrOrder_sn = explode('|',$str_Order_sn);
            $order_sn = current($arrOrder_sn);
            $showCouponTag = toShowCouponsTag($order_sn);
            //根据订单号获取私人订制的订单数据
            $customOrderInfo = $this->oiModel->customOrderInfoBySn($arrOrder_sn,$this->loginID);
            //获取单品订单详情信息
            $orderInfo = $this->oiModel->orderInfoBySn($arrOrder_sn,$this->loginID);
            //获取用户的默认收货地址
            $userAddr = $this->userModel->getUserAddr($this->loginID);
            //获取物流备注数据
            $delivery = M('delivery')->select();
            //获取私人订制产品的详细描述信息
            $customOrderInfo = $this->getCustomDesc($customOrderInfo);
            $deliveryDate = date("Y-m-d",strtotime("+1 day"));
            //TODO 获取有效期内的使用券信息
            $useCoupons = $this->couponModel->getUserCoupon($this->loginID,1,0,$arrOrder_sn);

            //获取订单所需的运费
            $cartPayController = new CartpayController();
            $postage = $cartPayController->wxPayOrder($order_sn,1);
            $wx_allPrice = $cartPayController->wxPayOrder($order_sn,0);
            $ad_word = $this->oiModel->getAdWord($this->loginID,$arrOrder_sn);
            $postageTip = get_config('postage_tip');
            //获取客服二维码
            $service_img = get_config('service_img');
            $user_img = get_user_img($this->loginID);
            $wx_allNum = $this->wxAllNum($customOrderInfo,$orderInfo);
            $this->assign('postage_tip', $postageTip);
            $this->assign('ad_word', $ad_word);

            $this->assign('postage', $postage);
            $this->assign('wx_allNum',$wx_allNum);
            $this->assign('wx_allPrice', $wx_allPrice);
            $this->assign('service_img', $service_img);
            $this->assign('user_img', $user_img);
            $this->assign('userAddr',$userAddr);
            $this->assign('delivery',$delivery);

            $this->assign('custom_ois',$customOrderInfo);
            $this->assign('deliveryDate',$deliveryDate);

            $this->assign('ois',$orderInfo);
            $this->assign('order_sn' ,getEncrypt($order_sn));
            $this->assign('str_order_sn' ,getEncrypt($str_Order_sn));
            $this->assign('userAddr0',$userAddr[0]);
            $this->assign('useCoupons',$useCoupons);
            $this->assign('showCouponTag',$showCouponTag);
        }
        $this->display();
    }

    /**
     * 获取订单中商品的总数量
     * @param $customOrderInfo
     * @param $orderInfo
     * @return int
     */
    public function wxAllNum($customOrderInfo,$orderInfo){
        $allNum = 0;
        foreach ($customOrderInfo as $cu){
            $allNum += $cu['num'];
        }

        foreach ($orderInfo as $o){
            $allNum += $o['product_number'];
        }
        return $allNum;
    }
    /**
     * 订单支付对应的 使用券选择界面
     */
    public function coupon(){
        $str_order_sn = $_GET['str_order_sn'] ? $_GET['str_order_sn'] : null;
        $str_order_sn = getDecrypt($str_order_sn);
        $arrOrder_sn = explode('|',$str_order_sn);
        $order_sn = current($arrOrder_sn);
        $user_coupon_id = M('order_info')
            ->where('order_sn = '.$order_sn)
            ->getField('user_coupon_id');
        //获取使用券数据
        $useCoupons = $this->couponModel->getUseCoupons($this->loginID);
        foreach ($useCoupons as &$uc){
            if ($uc['id'] == $user_coupon_id){
                $uc['status'] = 1;
            }else{
                $uc['status'] = 0;
            }
        }
        $this->assign('nowTime',time());
        $this->assign('useCoupons',$useCoupons);
        $this->assign('str_order_sn',$str_order_sn);
        $this->display();
    }
    /**
     * 获取个人定制的商品详情描述
     * @param $customOrderInfo
     * @return mixed
     */
    public function getCustomDesc($customOrderInfo){
        foreach ($customOrderInfo as &$coi){
            $custom_order_id = $coi['order_id'];
            //获取订制的商品信息
            $custom_goods = $this->oiModel->getCustomGoods($custom_order_id);
            //默认的十二期数组
            $arrMonth = array(0,0,0,0,0,0,0,0,0,0,0,0);
            $allNum = 0;
            foreach($custom_goods as $cg){
                //获取对应的商品数目数组
                $arrNum = explode(',',$cg['batch_product_number']);
                foreach ($arrNum as $k => $v){
                    $arrMonth[$k] += $v;
                    $allNum += $v;
                }
            }
            //获取对应的商品ID 数组
            $arrPID = explode(',',$custom_goods[0]['batch_product_id']);
            $custom_desc = '';
            foreach ($arrPID as $key => $value){
                if ($value == null || $value == ''){
                    continue;
                }
                $productName = M('goods')->where('goods_id = '.$value)->getField('name');
                $custom_desc .= $productName .'x'.$arrMonth[$key].'、';
            }
            $coi['custom_desc'] = $custom_desc;
            $coi['num'] = $allNum;
        }
        return $customOrderInfo;
    }
    /**
     * ajax 设置该订单关联的使用券
     */
    public function ajaxSetUseCoupon(){
        if (IS_AJAX && IS_POST){
            $strOrder_sn = I('post.strOrder_sn');
            $cID = I('post.tag');
            if ($cID == 0){
                return showMsg(1,'Success');
            }
            $ucID = $this->couponModel->getFirstUserCoupon($this->loginID,$cID);
            $Tag = $this->oiModel->setUseCoupon($strOrder_sn,$ucID,$this->loginID);
            if ($Tag == 1){
                return showMsg(1,'使用券选择成功');
            }elseif ($Tag == 0){
                return showMsg(-1,'使用券取消成功');
            }else{
                return showMsg(0,'非特定商品，不能使用');
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * ajax 批量更新订单数据
     */
    public function ajaxUpdateBatchOrder(){
        if (IS_AJAX && IS_POST){
            $strOrder_sn = I('post.strOrder_sn');
            $arrOrder_sn = explode('|',$strOrder_sn);
            $order_sn = getEncrypt(current($arrOrder_sn));
            //批量更新
            $Tag = $this->oiModel->updateBatchOrder($strOrder_sn,$this->loginID);
            if ($Tag){
                return showMsg(1,'Success',['out_trade_no'=>$order_sn]);
            }else{
                return showMsg(1,'Sorry,网络繁忙，服务受阻',['out_trade_no'=>$order_sn]);
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * 获取个人收货地址信息
     */
    public function address(){
        $userAddr = $this->userModel->getUserAddr($this->loginID);
        $str_Order_sn = I('post.str_Order_sn');
        $delivery = M('delivery')->select();
        $this->assign('userAddr',$userAddr);
        $this->assign('delivery',$delivery);
        $this->assign('str_Order_sn',$str_Order_sn);
        $this->display();
    }
    /**
     * ajax 添加当前用户的地址数据
     */
    public function ajaxAddUserAddr(){
        if (IS_AJAX && IS_POST){
            $postData = I('post.');
            $tag = $this->userModel->addUserAddr($postData,$this->loginID);
            $returnAddr = $this->userModel->getUserAddr($this->loginID);
            if ($tag){
                return showMsg(1,'新增地址，设置成功',$returnAddr);
            }else{
                return showMsg(0,'新增地址，设置失败');
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * ajax 检查当前用户是否拥有默认地址
     */
    public function ajaxCheckDefaultAddr(){
        $userAddr = $this->userModel->getUserAddr($this->loginID);
        if ($userAddr){
            return showMsg(1,'success');
        }else{
            return showMsg(0,'Error');
        }
    }
    /**
     * ajax 设置当前用户的默认地址
     */
    public function ajaxSetDefaultAddr(){
        if (IS_AJAX && IS_POST){
            $postData = I('post.');
            $address_id = $postData['address_id']?$postData['address_id']:null;
            $tag = $this->userModel->setDefaultAddr($address_id,$this->loginID);
            $returnAddr = $this->userModel->getUserAddr($this->loginID);
            if ($tag == 1){
                return showMsg(1,'默认地址，设置成功',$returnAddr[0]);
            }else{
                return showMsg(0,'默认地址，设置失败');
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * ajax 删除当前用户的地址
     */
    public function ajaxDelAddr(){
        if (IS_AJAX && IS_POST){
            $postData = I('post.');
            $address_id = $postData['address_id']?$postData['address_id']:null;

            $tag = $this->userModel->delAddr($address_id,$this->loginID);
            if ($tag == 1){
                return showMsg(1,'删除地址,操作成功');
            }else{
                if ($tag == 2){
                    return showMsg(0,'Sorry,不可删除默认地址');
                }
                return showMsg(0,'Sorry,删除地址失败');
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * 待收货商品 确认收货
     */
    public function ajaxHarvestOrder(){
        if (IS_AJAX && IS_POST){
            //TODO 获取订单号
            $postData = I('post.');
            $rec_id = $postData['rec_id']?$postData['rec_id']:null;
            $order_id = $postData['order_id']?$postData['order_id']:null;
            //获取当前用户的 ID
            $tag = $this->oiModel->confirmGoods($this->loginID,$rec_id,$order_id);
            if ($tag == 1){
                return showMsg(1,'确认收货,操作成功');
            }else{
                return showMsg(0,'确认收货失败，可刷新页面，再试一次');
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * ajax 获取已收货订单数据
     */
    public function ajaxEndHarvestData(){
        $endHarvestOrder = $this->oiModel->getOrderData($this->loginID,1,1,1);
        $endCustomHarvestOrder = $this->oiModel->getEndCustomHarvestOrderData($this->loginID);
        $res = array(
            'eho' => $endHarvestOrder,
            'echo' => $endCustomHarvestOrder,
        );
        return showMsg(1,'success',$res);
    }
    /**
     * 查询物流跟踪信息
     */
    public function Trace(){
        //TODO 获取物流单号
        $postData = I('get.');
        $waybillCode = $postData['courier_num']?$postData['courier_num']:null;
        //$waybillCode = '778880350676';
        $res = expressinfo($waybillCode);
        $trace = $res['data'];
        $express = $this->traceExpress();
        foreach ($express as $key => $value){
            if ($res['com'] == $key){
                $comName = $value;
                break;
            }else{
                $comName = '暂无匹配';
            }
        }
        $this->assign('trace',$trace);
        $this->assign('comName',$comName);
        $this->display();
    }
    public function traceExpress(){
        $express = array(
            'aae' => 'aae全球专递',
            'anjie' => '安捷快递',
            'anxindakuaixi' => '安信达快递',
            'biaojikuaidi' => '彪记快递',
            'datianwuliu' => '大田物流',
            'debangwuliu' => '德邦物流',
            'ems' => 'ems快递',
            'guotongkuaidi' => '国通快递',
            'huitongkuaidi' => '汇通快运',
            'jixianda' => '急先达',
            'kuaijiesudi' => '快捷速递',
            'quanfengkuaidi' => '全峰快递',
            'rufengda' => '如风达',
            'shentong' => '申通',
            'shunfeng' => '顺丰',
            'tiantian' => '天天快递',
            'xinfengwuliu' => '信丰物流',
            'yibangwuliu' => '一邦速递',
            'yuantong' => '圆通速递',
            'yunda' => '韵达快运',
            'zhaijisong' => '宅急送',
            'zhongtong' => '中通速递',
            'jd' => '京东快递'
        );
        return $express;
    }
    /**
     * ajax 待付款订单 进行商品数量的增减
     */
    public function ajaxChangeOrderNum(){
        if (IS_AJAX && IS_POST){
            $postData = I('post.');
            $order_sn = $postData['order_sn']?$postData['order_sn']:null;
            $change_tag = $postData['change_tag']?$postData['change_tag']:null;
            $res_change = $this->oiModel->changeOrderNum($this->loginID,$order_sn,$change_tag);
            if ($res_change['tag'] == 1){
                return showMsg(1,'操作成功',$res_change['oiData']);
            }else{
                return showMsg(0,'sorry,网络不稳定，稍后再试',$res_change['oiData']);
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * ajax 批量删除 已收货订单
     */
    public function ajaxDelBatchOrder(){
        if (IS_AJAX && IS_POST){
            $postData = I('post.');
            $str_Order_sn = $postData['str_Order_sn']?$postData['str_Order_sn']:null;
            $arrOrder_sn = explode('|',$str_Order_sn);
            foreach ($arrOrder_sn as $value){
                if ($value == null||$value == ''){
                    continue;
                }else{
                    $tag = $this->oiModel->delOrderInfo($this->loginID,$value);
                    if($tag == 0 ){
                        return showMsg(0,'订单：'.$value.'删除失败！');
                    }
                }
            }
            return showMsg(1,'订单批量删除成功',$arrOrder_sn);
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * ajax 删除订单信息
     */
    public function ajaxDelOrder(){
        if (IS_AJAX && IS_POST){
            $postData = I('post.');
            $order_sn = $postData['order_sn']?$postData['order_sn']:null;
            //获取当前用户的 ID
            $tag = $this->oiModel->delOrderInfo($this->loginID,$order_sn);
            if ($tag == 1){
                return showMsg(1,'订单删除成功');
            }else{
                return showMsg(0,'删除失败，可刷新页面，再试一次');
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }
    /**
     * 获取对应用户的个订单数目
     */
    public function ajaxGetOrderCount()
    {
        if (IS_AJAX){
            //获取待付款订单数目
            $res = $this->oiModel->getOrderCount($this->loginID);
            return showMsg(1,'Success,获取数据成功！',$res);
        }else{
            return showMsg(0,'Sorry,非法请求失败！');
        }
    }
    /**
     *获取待付款（购物车）订单数目
     */
    public function ajaxGetCartNum()
    {
        if (IS_AJAX){
            //获取待付款订单数目
            $res = $this->oiModel->getOrderCount($this->loginID);
            return showMsg(1,'Success,获取数据成功！',$res);
        }else{
            return showMsg(0,'Sorry,非法请求失败！');
        }
    }
    /**
     * ajax 检查库存量
     */
    public function ajaxCheckGoodsNum(){
        if (IS_AJAX ){
            $postData = I('post.');
            $buyNum = $postData['buy_num']?$postData['buy_num']:null;
            $goods_id = $postData['goods_id']?$postData['goods_id']:null;
            $checkTag = $this->oiModel->checkGoodsNumber($goods_id,$buyNum);
            //TODO 判断您是否为品鉴购商品订单
            $is_PJG = is_PJG($goods_id);
            if ($is_PJG){
                return showMsg(0,'sorry,品鉴购商品只能买一件');
            }
            if ($checkTag == 1){
                return showMsg(1,'商品足量，欢迎选购');
            }else{
                return showMsg(0,'Sorry,商品库存不足！！');
            }
        }else{
            return showMsg(0,'Sorry,非法请求失败！');
        }
    }
    /**
     * ajax 商品详情页 进行购物车（待付款订单）的添加
     */
    public function addOrderInfo() {
        if(IS_AJAX && IS_POST){
            $postData = I('post.');
            $goods_id = $postData['goods_id'];

            //TODO 判断此商品是否为品鉴购商品  tag区分
            $is_PJG = is_PJG($goods_id);
            if ($is_PJG){
                $this->isPJGtoDeal($goods_id);
            }

            $goodsInfo = $this->oiModel->GoodsInfoByID($goods_id);
            $goodsNum = $postData['num'] ? $postData['num'] : 1;
            $checkTag = $this->oiModel->checkGoodsNumber($goods_id,$goodsNum);
            if(!$checkTag){
                return showMsg(0,'Sorry,所购商品库存不足');
            }
            $oiData = array(
                'order_sn' => $this->oiModel->get_order_sn(),
                'user_id' => $this->loginID,
                'add_time' => time(),
                'goods_num' => $goodsNum,
                'order_amount' => $goodsInfo['rprice'] * $goodsNum,);

            //TODO 判断此商品是否为年卡商品  tag区分
            $is_NK = is_NK($goods_id);
            if ($is_NK){
                $oiData['order_type'] = 'NK';
            }
            $checkTag = M('OrderInfo')->add($oiData);
            $product_attr_id = implode(',',$postData['attr_id']);
            $ogData = array(
                'order_id' => $checkTag,
                'product_id' => $goods_id,
                'product_name' => $goodsInfo['name'],
                'product_number' => $goodsNum,
                'product_price' => $goodsInfo['rprice'],
                'product_attr_id' => $product_attr_id ? $product_attr_id : 0,
            );
            $checkTag2 = M('OrderGoods')->add($ogData);
            $order_sn = $this->oiModel->ordersnByID($checkTag);
            if ($checkTag && $checkTag2){
                return showMsg(1,'您的商品已加入购物车',array('order_sn' => $order_sn));
            }else{
                return showMsg(0,'Sorry,加入购物车失败！');
            }
        }else{
            return showMsg(0,'Sorry,非法请求失败！');
        }
    }

    /**
     * 针对赠送的一张年卡订单下发
     * @param $goods_id 年卡商品 ID
     * @param $pay_time 支付时间
     * @param $user_id 所赠用户 ID
     * @return bool true:赠送成功  false:赠送失败
     */
    public function givingNKOrderInfo($goods_id,$pay_time,$user_id) {
        $goodsInfo = $this->oiModel->GoodsInfoByID($goods_id);
        $goodsNum = 1;
        $checkTag = $this->oiModel->checkGoodsNumber($goods_id,$goodsNum);
        if(!$checkTag){
            return false;
        }
        $oiData = array(
            'order_sn' => $this->oiModel->get_order_sn(),
            'user_id' => $user_id,
            'add_time' => time(),
            'goods_num' => $goodsNum,
            'pay_status' => 1,
            'pay_time' => $pay_time,
            'order_amount' => $goodsInfo['rprice'] * $goodsNum,);

        //TODO 判断此商品是否为年卡商品  tag区分
        $is_NK = is_NK($goods_id);
        if ($is_NK){
            $oiData['order_type'] = 'NK';
            $userAddr = $this->userModel->getUserAddr($user_id);
            if ($userAddr){
                $oiData['consignee'] = $userAddr[0]['consignee'];
                $oiData['mobile'] = $userAddr[0]['mobile'];
                $oiData['address'] = $userAddr[0]['address_name'].$userAddr[0]['address'];
            }
            //TODO 默认填写年卡 11个月的收货地址id
            $default_addr_id = $userAddr[0]['address_id'];
            $str_addr_ids = '';
            for ($i=0;$i<11;$i++){
                $str_addr_ids .= $default_addr_id.'|';
            }
            $oiData['nk_address_ids'] = $str_addr_ids;
        }
        $checkTag = M('OrderInfo')->add($oiData);
        $ogData = array(
            'order_id' => $checkTag,
            'product_id' => $goods_id,
            'product_name' => $goodsInfo['name'],
            'product_number' => $goodsNum,
            'product_price' => $goodsInfo['rprice'],
        );
        $checkTag2 = M('OrderGoods')->add($ogData);
        if ($checkTag && $checkTag2){
            return true;
        }else{
            return false;
        }
    }
    /**
     * 针对品鉴购商品的订单下发
     */
    public function addPjgOrder(){
        if (IS_AJAX && IS_POST){
            $postData = I('post.');
            $tag = 1;
            $str_goods = $postData['str_goods']?$postData['str_goods']:null;
            $arrGoodsIDs = explode('|',$str_goods);
            $str_order_sn = '';
            foreach ($arrGoodsIDs as $goodsID){
                if ($goodsID){
                    $res = $this->toAddPigOrderByGoodsID($goodsID,$str_order_sn);
                    if ($res['status'] == 0){
                        $tag = 0;
                    }else{
                        $str_order_sn .= $res['str_order_sn'];
                    }
                }else{
                    continue;
                }
            }
            if ($tag == 1){
                $batch_order_sn = M('order_info')
                    ->where('order_sn = '.$res['new_order_sn'])
                    ->getField('batch_order_sn');
                $res['batch_order_sn'] = $batch_order_sn;
                return showMsg(1,'Success',$res);
            }else{
                return showMsg(0,'操作有误，品鉴失败');
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }
    }

    public function toAddPigOrderByGoodsID($goods_id,$str_order_sn){
        $res = ['status'=>0];
        //TODO 判断此商品是否为品鉴购商品  tag区分
        $is_PJG = is_PJG($goods_id);
        if ($is_PJG){
            $this->isPJGtoDeal($goods_id);
        }
        $goodsInfo = $this->oiModel->GoodsInfoByID($goods_id);
        $goodsNum = 1;
        $checkTag = $this->oiModel->checkGoodsNumber($goods_id,$goodsNum);
        if(!$checkTag){
            return showMsg(0,'Sorry,所购商品库存不足');
        }
        $new_order_sn = $this->oiModel->get_order_sn();
        $oiData = array(
            'order_sn' => $new_order_sn,
            'batch_order_sn' => $new_order_sn.'|'.$str_order_sn,
            'user_id' => $this->loginID,
            'add_time' => time(),
            'goods_num' => $goodsNum,
            'order_amount' => $goodsInfo['rprice'] * $goodsNum,);

        //TODO 判断此商品是否为年卡商品  tag区分
        $is_NK = is_NK($goods_id);
        if ($is_NK){
            $oiData['order_type'] = 'NK';
        }
        $checkTag = M('OrderInfo')->add($oiData);
        $ogData = array(
            'order_id' => $checkTag,
            'product_id' => $goods_id,
            'product_name' => $goodsInfo['name'],
            'product_number' => $goodsNum,
            'product_price' => $goodsInfo['rprice'],
        );
        $checkTag2 = M('OrderGoods')->add($ogData);
        if ($checkTag && $checkTag2){
            $res['status'] = 1;
            $res['str_order_sn'] = $new_order_sn.'|';
            $res['new_order_sn'] = $new_order_sn;
        }
        return $res;
    }
    public function ajaxGetAllPrice(){
        $cartPayController = new CartpayController();
        $order_sn = I('post.order_sn')?I('post.order_sn'):0;
        $wx_allPrice = $cartPayController->wxPayOrder($order_sn,0);
        $postage = $cartPayController->wxPayOrder($order_sn,1);
        $data = [
            'postage' => $postage,
            'wx_allPrice' => $wx_allPrice,
        ];
        return showMsg(1,$order_sn,$data);
    }

    /**
     * 如果所下订单商品属于品鉴购 所做的处理
     */
    public function isPJGtoDeal($goods_id){
        //判断之前是否购买过
        $alreadyBuy = getUserBuyTheGoodsCount($goods_id,$this->loginID);
        if ($alreadyBuy){
            return showMsg(0,'您已购买过此品鉴购商品');
        }else{
            //清除所有该品鉴购所下的未支付订单
            $this->oiModel->deleteOrderByGoodsID($goods_id,$this->loginID);
            //return showMsg(1,'您的商品已加入购物车');
        }
    }

    public function ajax_deal_orderSn(){
        if (IS_AJAX && IS_POST){
            $postData = I('post.');
            $tag = $this->oiModel->noLoginDealOrderSn($postData,$this->loginID);
            if ($tag){
                return showMsg(1,'Success');
            }else{
                return showMsg(0,'网络繁忙，请稍后再试');
            }
        }else{
            return showMsg(0,'sorry,非法请求失败');
        }

    }
    //微信扫码支付
    public function wechatpaymenter(){
        // 虚拟的订单 请根据实际业务更改
        $order_sn = I('get.order_sn');
        $cartPayController = new CartpayController();
        $order_amount = $cartPayController->wxPayOrder($order_sn,0);
        $oiRes = M('order_info oi')
            ->field('oi.order_amount,og.product_name')
            ->join('ms_order_goods og on oi.order_id = og.order_id')
            ->where('oi.order_sn = '.$order_sn)
            ->find();
        $proName = $oiRes['product_name'];
        $order=array(
            'body'=>'真米如初-'.$proName,
            'total_fee'=>$order_amount * 100,
            'out_trade_no'=> $order_sn.'M'.time(),// 订单号（需要根据自己的业务修改）,
            'product_id'=>1
        );
        weixinpay($order);
    }
}