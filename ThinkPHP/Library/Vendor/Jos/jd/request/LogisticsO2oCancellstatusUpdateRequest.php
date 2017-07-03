<?php
class LogisticsO2oCancellstatusUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.o2o.cancellstatus.update";
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

                        	                   			private $orderCancelReason;
    	                                                                        
	public function setOrderCancelReason($orderCancelReason){
		$this->orderCancelReason = $orderCancelReason;
         $this->apiParas["order_cancel_reason"] = $orderCancelReason;
	}

	public function getOrderCancelReason(){
	  return $this->orderCancelReason;
	}

                        	                   			private $orderCancelRemark;
    	                                                                        
	public function setOrderCancelRemark($orderCancelRemark){
		$this->orderCancelRemark = $orderCancelRemark;
         $this->apiParas["order_cancel_remark"] = $orderCancelRemark;
	}

	public function getOrderCancelRemark(){
	  return $this->orderCancelRemark;
	}

}





        
 

