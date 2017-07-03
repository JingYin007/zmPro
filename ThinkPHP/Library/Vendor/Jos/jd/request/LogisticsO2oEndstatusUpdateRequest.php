<?php
class LogisticsO2oEndstatusUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.o2o.endstatus.update";
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
                                    	                        	                   			private $stationNo;
    	                                                            
	public function setStationNo($stationNo){
		$this->stationNo = $stationNo;
         $this->apiParas["station_no"] = $stationNo;
	}

	public function getStationNo(){
	  return $this->stationNo;
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

                        	                   			private $stationPaymentCash;
    	                                                                        
	public function setStationPaymentCash($stationPaymentCash){
		$this->stationPaymentCash = $stationPaymentCash;
         $this->apiParas["station_payment_cash"] = $stationPaymentCash;
	}

	public function getStationPaymentCash(){
	  return $this->stationPaymentCash;
	}

                        	                   			private $stationPaymentPos;
    	                                                                        
	public function setStationPaymentPos($stationPaymentPos){
		$this->stationPaymentPos = $stationPaymentPos;
         $this->apiParas["station_payment_pos"] = $stationPaymentPos;
	}

	public function getStationPaymentPos(){
	  return $this->stationPaymentPos;
	}

}





        
 

