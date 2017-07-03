<?php
class LogisticsLspOrderdeliverystatusUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.lsp.orderdeliverystatus.update";
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
                                    	                        	                   			private $orderSource;
    	                                                            
	public function setOrderSource($orderSource){
		$this->orderSource = $orderSource;
         $this->apiParas["order_source"] = $orderSource;
	}

	public function getOrderSource(){
	  return $this->orderSource;
	}

                        	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $stateOperator;
    	                                                            
	public function setStateOperator($stateOperator){
		$this->stateOperator = $stateOperator;
         $this->apiParas["state_operator"] = $stateOperator;
	}

	public function getStateOperator(){
	  return $this->stateOperator;
	}

                        	                   			private $carrierNo;
    	                                                            
	public function setCarrierNo($carrierNo){
		$this->carrierNo = $carrierNo;
         $this->apiParas["carrier_no"] = $carrierNo;
	}

	public function getCarrierNo(){
	  return $this->carrierNo;
	}

                        	                   			private $deliverNo;
    	                                                            
	public function setDeliverNo($deliverNo){
		$this->deliverNo = $deliverNo;
         $this->apiParas["deliver_no"] = $deliverNo;
	}

	public function getDeliverNo(){
	  return $this->deliverNo;
	}

}





        
 

