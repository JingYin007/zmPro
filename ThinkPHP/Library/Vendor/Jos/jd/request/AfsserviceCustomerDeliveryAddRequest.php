<?php
class AfsserviceCustomerDeliveryAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.customer.delivery.add";
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
                                    	                        	                   			private $afsServiceId;
    	                        
	public function setAfsServiceId($afsServiceId){
		$this->afsServiceId = $afsServiceId;
         $this->apiParas["afsServiceId"] = $afsServiceId;
	}

	public function getAfsServiceId(){
	  return $this->afsServiceId;
	}

                                            		                                    	                   	                    		private $afsApplyDetailIds;
    	                        
	public function setAfsApplyDetailIds($afsApplyDetailIds){
		$this->afsApplyDetailIds = $afsApplyDetailIds;
         $this->apiParas["afsApplyDetailIds"] = $afsApplyDetailIds;
	}

	public function getAfsApplyDetailIds(){
	  return $this->afsApplyDetailIds;
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

                        	                   			private $customerPhone;
    	                        
	public function setCustomerPhone($customerPhone){
		$this->customerPhone = $customerPhone;
         $this->apiParas["customerPhone"] = $customerPhone;
	}

	public function getCustomerPhone(){
	  return $this->customerPhone;
	}

                        	                   			private $afterserviceReceiver;
    	                        
	public function setAfterserviceReceiver($afterserviceReceiver){
		$this->afterserviceReceiver = $afterserviceReceiver;
         $this->apiParas["afterserviceReceiver"] = $afterserviceReceiver;
	}

	public function getAfterserviceReceiver(){
	  return $this->afterserviceReceiver;
	}

                        	                   			private $afterserviceAddress;
    	                        
	public function setAfterserviceAddress($afterserviceAddress){
		$this->afterserviceAddress = $afterserviceAddress;
         $this->apiParas["afterserviceAddress"] = $afterserviceAddress;
	}

	public function getAfterserviceAddress(){
	  return $this->afterserviceAddress;
	}

                        	                   			private $afterserviceTel;
    	                        
	public function setAfterserviceTel($afterserviceTel){
		$this->afterserviceTel = $afterserviceTel;
         $this->apiParas["afterserviceTel"] = $afterserviceTel;
	}

	public function getAfterserviceTel(){
	  return $this->afterserviceTel;
	}

                        	                   			private $afterserviceZipcode;
    	                        
	public function setAfterserviceZipcode($afterserviceZipcode){
		$this->afterserviceZipcode = $afterserviceZipcode;
         $this->apiParas["afterserviceZipcode"] = $afterserviceZipcode;
	}

	public function getAfterserviceZipcode(){
	  return $this->afterserviceZipcode;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                                                        }





        
 

