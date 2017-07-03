<?php
class WaitProcessQueryProviderFindWaitProcessPageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.WaitProcessQueryProvider.findWaitProcessPage";
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

                        	                   			private $afsApplyTimeBegin;
    	                        
	public function setAfsApplyTimeBegin($afsApplyTimeBegin){
		$this->afsApplyTimeBegin = $afsApplyTimeBegin;
         $this->apiParas["afsApplyTimeBegin"] = $afsApplyTimeBegin;
	}

	public function getAfsApplyTimeBegin(){
	  return $this->afsApplyTimeBegin;
	}

                        	                   			private $afsApplyTimeEnd;
    	                        
	public function setAfsApplyTimeEnd($afsApplyTimeEnd){
		$this->afsApplyTimeEnd = $afsApplyTimeEnd;
         $this->apiParas["afsApplyTimeEnd"] = $afsApplyTimeEnd;
	}

	public function getAfsApplyTimeEnd(){
	  return $this->afsApplyTimeEnd;
	}

                        	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $expressCode;
    	                        
	public function setExpressCode($expressCode){
		$this->expressCode = $expressCode;
         $this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode(){
	  return $this->expressCode;
	}

                        	                   			private $afsServiceStatus;
    	                        
	public function setAfsServiceStatus($afsServiceStatus){
		$this->afsServiceStatus = $afsServiceStatus;
         $this->apiParas["afsServiceStatus"] = $afsServiceStatus;
	}

	public function getAfsServiceStatus(){
	  return $this->afsServiceStatus;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $customerName;
    	                        
	public function setCustomerName($customerName){
		$this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
	}

	public function getCustomerName(){
	  return $this->customerName;
	}

                        	                   			private $customerMobile;
    	                        
	public function setCustomerMobile($customerMobile){
		$this->customerMobile = $customerMobile;
         $this->apiParas["customerMobile"] = $customerMobile;
	}

	public function getCustomerMobile(){
	  return $this->customerMobile;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $customerExpect;
    	                        
	public function setCustomerExpect($customerExpect){
		$this->customerExpect = $customerExpect;
         $this->apiParas["customerExpect"] = $customerExpect;
	}

	public function getCustomerExpect(){
	  return $this->customerExpect;
	}

                        	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                                            		                                    	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $operatorNick;
    	                        
	public function setOperatorNick($operatorNick){
		$this->operatorNick = $operatorNick;
         $this->apiParas["operatorNick"] = $operatorNick;
	}

	public function getOperatorNick(){
	  return $this->operatorNick;
	}

                        	                   			private $operatorRemark;
    	                        
	public function setOperatorRemark($operatorRemark){
		$this->operatorRemark = $operatorRemark;
         $this->apiParas["operatorRemark"] = $operatorRemark;
	}

	public function getOperatorRemark(){
	  return $this->operatorRemark;
	}

                        	                   			private $operatorDate;
    	                        
	public function setOperatorDate($operatorDate){
		$this->operatorDate = $operatorDate;
         $this->apiParas["operatorDate"] = $operatorDate;
	}

	public function getOperatorDate(){
	  return $this->operatorDate;
	}

                        	                   			private $platformSrc;
    	                        
	public function setPlatformSrc($platformSrc){
		$this->platformSrc = $platformSrc;
         $this->apiParas["platformSrc"] = $platformSrc;
	}

	public function getPlatformSrc(){
	  return $this->platformSrc;
	}

                                                                        		                                    	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                                                    	                   			private $afsCategoryIdPop;
    	                        
	public function setAfsCategoryIdPop($afsCategoryIdPop){
		$this->afsCategoryIdPop = $afsCategoryIdPop;
         $this->apiParas["afsCategoryIdPop"] = $afsCategoryIdPop;
	}

	public function getAfsCategoryIdPop(){
	  return $this->afsCategoryIdPop;
	}

                        	                   			private $approvedDateBegin;
    	                        
	public function setApprovedDateBegin($approvedDateBegin){
		$this->approvedDateBegin = $approvedDateBegin;
         $this->apiParas["approvedDateBegin"] = $approvedDateBegin;
	}

	public function getApprovedDateBegin(){
	  return $this->approvedDateBegin;
	}

                        	                   			private $approvedDateEnd;
    	                        
	public function setApprovedDateEnd($approvedDateEnd){
		$this->approvedDateEnd = $approvedDateEnd;
         $this->apiParas["approvedDateEnd"] = $approvedDateEnd;
	}

	public function getApprovedDateEnd(){
	  return $this->approvedDateEnd;
	}

                        	                   			private $afsServiceId;
    	                        
	public function setAfsServiceId($afsServiceId){
		$this->afsServiceId = $afsServiceId;
         $this->apiParas["afsServiceId"] = $afsServiceId;
	}

	public function getAfsServiceId(){
	  return $this->afsServiceId;
	}

                            }





        
 

