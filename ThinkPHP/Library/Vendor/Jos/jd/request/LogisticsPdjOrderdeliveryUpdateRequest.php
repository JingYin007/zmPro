<?php
class LogisticsPdjOrderdeliveryUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.pdj.orderdelivery.update";
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
                                    	                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $operator;
    	                        
	public function setOperator($operator){
		$this->operator = $operator;
         $this->apiParas["operator"] = $operator;
	}

	public function getOperator(){
	  return $this->operator;
	}

                        	                   			private $carrierNo;
    	                        
	public function setCarrierNo($carrierNo){
		$this->carrierNo = $carrierNo;
         $this->apiParas["carrierNo"] = $carrierNo;
	}

	public function getCarrierNo(){
	  return $this->carrierNo;
	}

                        	                   			private $deliverNo;
    	                        
	public function setDeliverNo($deliverNo){
		$this->deliverNo = $deliverNo;
         $this->apiParas["deliverNo"] = $deliverNo;
	}

	public function getDeliverNo(){
	  return $this->deliverNo;
	}

}





        
 

