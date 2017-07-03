<?php
class AfsserviceCompensateorderAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.compensateorder.add";
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

                        	                   			private $receiptName;
    	                        
	public function setReceiptName($receiptName){
		$this->receiptName = $receiptName;
         $this->apiParas["receiptName"] = $receiptName;
	}

	public function getReceiptName(){
	  return $this->receiptName;
	}

                        	                   			private $receiptAddress;
    	                        
	public function setReceiptAddress($receiptAddress){
		$this->receiptAddress = $receiptAddress;
         $this->apiParas["receiptAddress"] = $receiptAddress;
	}

	public function getReceiptAddress(){
	  return $this->receiptAddress;
	}

                        	                   			private $zipcode;
    	                        
	public function setZipcode($zipcode){
		$this->zipcode = $zipcode;
         $this->apiParas["zipcode"] = $zipcode;
	}

	public function getZipcode(){
	  return $this->zipcode;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $village;
    	                        
	public function setVillage($village){
		$this->village = $village;
         $this->apiParas["village"] = $village;
	}

	public function getVillage(){
	  return $this->village;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $applyDescription;
    	                        
	public function setApplyDescription($applyDescription){
		$this->applyDescription = $applyDescription;
         $this->apiParas["applyDescription"] = $applyDescription;
	}

	public function getApplyDescription(){
	  return $this->applyDescription;
	}

                        	                   			private $orderRemark;
    	                        
	public function setOrderRemark($orderRemark){
		$this->orderRemark = $orderRemark;
         $this->apiParas["orderRemark"] = $orderRemark;
	}

	public function getOrderRemark(){
	  return $this->orderRemark;
	}

                        	                   			private $relationOrderId;
    	                        
	public function setRelationOrderId($relationOrderId){
		$this->relationOrderId = $relationOrderId;
         $this->apiParas["relationOrderId"] = $relationOrderId;
	}

	public function getRelationOrderId(){
	  return $this->relationOrderId;
	}

                        	                   			private $afsServiceId;
    	                        
	public function setAfsServiceId($afsServiceId){
		$this->afsServiceId = $afsServiceId;
         $this->apiParas["afsServiceId"] = $afsServiceId;
	}

	public function getAfsServiceId(){
	  return $this->afsServiceId;
	}

                                                                        		                                    	                   			private $wareId;
    	                        
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["wareId"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $wareName;
    	                        
	public function setWareName($wareName){
		$this->wareName = $wareName;
         $this->apiParas["wareName"] = $wareName;
	}

	public function getWareName(){
	  return $this->wareName;
	}

                        	                   			private $warePrice;
    	                        
	public function setWarePrice($warePrice){
		$this->warePrice = $warePrice;
         $this->apiParas["warePrice"] = $warePrice;
	}

	public function getWarePrice(){
	  return $this->warePrice;
	}

                            }





        
 

