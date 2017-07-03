<?php
class LogisticsLspDispatchstatusUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.lsp.dispatchstatus.update";
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

                        	                   			private $orderSource;
    	                                                            
	public function setOrderSource($orderSource){
		$this->orderSource = $orderSource;
         $this->apiParas["order_source"] = $orderSource;
	}

	public function getOrderSource(){
	  return $this->orderSource;
	}

                        	                   			private $stateOperator;
    	                                                            
	public function setStateOperator($stateOperator){
		$this->stateOperator = $stateOperator;
         $this->apiParas["state_operator"] = $stateOperator;
	}

	public function getStateOperator(){
	  return $this->stateOperator;
	}

                        	                   			private $antiDispatcherRemark;
    	                                                                        
	public function setAntiDispatcherRemark($antiDispatcherRemark){
		$this->antiDispatcherRemark = $antiDispatcherRemark;
         $this->apiParas["anti_dispatcher_remark"] = $antiDispatcherRemark;
	}

	public function getAntiDispatcherRemark(){
	  return $this->antiDispatcherRemark;
	}

}





        
 

