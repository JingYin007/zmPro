<?php
class LogisticsPdjOrderQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.pdj.order.query";
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
                                    	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

                        	                   			private $pageCount;
    	                        
	public function setPageCount($pageCount){
		$this->pageCount = $pageCount;
         $this->apiParas["pageCount"] = $pageCount;
	}

	public function getPageCount(){
	  return $this->pageCount;
	}

                        	                                            		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $stationNo;
    	                        
	public function setStationNo($stationNo){
		$this->stationNo = $stationNo;
         $this->apiParas["stationNo"] = $stationNo;
	}

	public function getStationNo(){
	  return $this->stationNo;
	}

                        	                   			private $srcSysId;
    	                        
	public function setSrcSysId($srcSysId){
		$this->srcSysId = $srcSysId;
         $this->apiParas["srcSysId"] = $srcSysId;
	}

	public function getSrcSysId(){
	  return $this->srcSysId;
	}

                        	                   			private $srcOrderId;
    	                        
	public function setSrcOrderId($srcOrderId){
		$this->srcOrderId = $srcOrderId;
         $this->apiParas["srcOrderId"] = $srcOrderId;
	}

	public function getSrcOrderId(){
	  return $this->srcOrderId;
	}

                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $orderTimeStart;
    	                        
	public function setOrderTimeStart($orderTimeStart){
		$this->orderTimeStart = $orderTimeStart;
         $this->apiParas["orderTimeStart"] = $orderTimeStart;
	}

	public function getOrderTimeStart(){
	  return $this->orderTimeStart;
	}

                        	                   			private $orderTimeEnd;
    	                        
	public function setOrderTimeEnd($orderTimeEnd){
		$this->orderTimeEnd = $orderTimeEnd;
         $this->apiParas["orderTimeEnd"] = $orderTimeEnd;
	}

	public function getOrderTimeEnd(){
	  return $this->orderTimeEnd;
	}

                        	                   			private $orderUpdateTimeStart;
    	                        
	public function setOrderUpdateTimeStart($orderUpdateTimeStart){
		$this->orderUpdateTimeStart = $orderUpdateTimeStart;
         $this->apiParas["orderUpdateTimeStart"] = $orderUpdateTimeStart;
	}

	public function getOrderUpdateTimeStart(){
	  return $this->orderUpdateTimeStart;
	}

                        	                   			private $orderUpdateTimeEnd;
    	                        
	public function setOrderUpdateTimeEnd($orderUpdateTimeEnd){
		$this->orderUpdateTimeEnd = $orderUpdateTimeEnd;
         $this->apiParas["orderUpdateTimeEnd"] = $orderUpdateTimeEnd;
	}

	public function getOrderUpdateTimeEnd(){
	  return $this->orderUpdateTimeEnd;
	}

                            }





        
 

