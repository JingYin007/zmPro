<?php
class LogisticsO2oOrderCarriageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.o2o.order.carriage";
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
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
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





        
 

