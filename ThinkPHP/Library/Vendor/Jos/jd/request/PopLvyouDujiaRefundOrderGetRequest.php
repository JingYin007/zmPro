<?php
class PopLvyouDujiaRefundOrderGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.refund.order.get";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                    	                   			private $refundId;
    	                        
	public function setRefundId($refundId){
		$this->refundId = $refundId;
         $this->apiParas["refundId"] = $refundId;
	}

	public function getRefundId(){
	  return $this->refundId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                            }





        
 

