<?php
class PopLvyouDujiaOrderRefundApproveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.order.refund.approve";
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

                        	                        	                   			private $approveFlag;
    	                        
	public function setApproveFlag($approveFlag){
		$this->approveFlag = $approveFlag;
         $this->apiParas["approveFlag"] = $approveFlag;
	}

	public function getApproveFlag(){
	  return $this->approveFlag;
	}

                        	                   			private $refundValue;
    	                        
	public function setRefundValue($refundValue){
		$this->refundValue = $refundValue;
         $this->apiParas["refundValue"] = $refundValue;
	}

	public function getRefundValue(){
	  return $this->refundValue;
	}

                        	                   			private $approveDesc;
    	                        
	public function setApproveDesc($approveDesc){
		$this->approveDesc = $approveDesc;
         $this->apiParas["approveDesc"] = $approveDesc;
	}

	public function getApproveDesc(){
	  return $this->approveDesc;
	}

                            }





        
 

