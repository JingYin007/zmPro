<?php
class LogisticsO2oAnti_dispatchUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.o2o.anti_dispatch.update";
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

                        	                   			private $realShop;
    	                                                            
	public function setRealShop($realShop){
		$this->realShop = $realShop;
         $this->apiParas["real_shop"] = $realShop;
	}

	public function getRealShop(){
	  return $this->realShop;
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





        
 

