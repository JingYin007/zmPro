<?php
class OrderApplyProiderSubmitReworkOrderApplyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.OrderApplyProider.submitReworkOrderApply";
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

                                                    	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $receiptName;
    	                        
	public function setReceiptName($receiptName){
		$this->receiptName = $receiptName;
         $this->apiParas["receiptName"] = $receiptName;
	}

	public function getReceiptName(){
	  return $this->receiptName;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
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

                        	                   			private $receiptAddress;
    	                        
	public function setReceiptAddress($receiptAddress){
		$this->receiptAddress = $receiptAddress;
         $this->apiParas["receiptAddress"] = $receiptAddress;
	}

	public function getReceiptAddress(){
	  return $this->receiptAddress;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $applyDescription;
    	                        
	public function setApplyDescription($applyDescription){
		$this->applyDescription = $applyDescription;
         $this->apiParas["applyDescription"] = $applyDescription;
	}

	public function getApplyDescription(){
	  return $this->applyDescription;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $wareId;
                              public function setWareId($wareId ){
                 $this->wareId=$wareId;
                 $this->apiParas["wareId"] = $wareId;
              }

              public function getWareId(){
              	return $this->wareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareName;
                              public function setWareName($wareName ){
                 $this->wareName=$wareName;
                 $this->apiParas["wareName"] = $wareName;
              }

              public function getWareName(){
              	return $this->wareName;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareQty;
                              public function setWareQty($wareQty ){
                 $this->wareQty=$wareQty;
                 $this->apiParas["wareQty"] = $wareQty;
              }

              public function getWareQty(){
              	return $this->wareQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $relationWareId;
                              public function setRelationWareId($relationWareId ){
                 $this->relationWareId=$relationWareId;
                 $this->apiParas["relationWareId"] = $relationWareId;
              }

              public function getRelationWareId(){
              	return $this->relationWareId;
              }
                                                                                                                                                                                                                                                                                                                                              private $relationWareType;
                              public function setRelationWareType($relationWareType ){
                 $this->relationWareType=$relationWareType;
                 $this->apiParas["relationWareType"] = $relationWareType;
              }

              public function getRelationWareType(){
              	return $this->relationWareType;
              }
                                                                                                                                        	                   			private $deliveryCenterId;
    	                        
	public function setDeliveryCenterId($deliveryCenterId){
		$this->deliveryCenterId = $deliveryCenterId;
         $this->apiParas["deliveryCenterId"] = $deliveryCenterId;
	}

	public function getDeliveryCenterId(){
	  return $this->deliveryCenterId;
	}

                        	                   			private $deliveryCenterName;
    	                        
	public function setDeliveryCenterName($deliveryCenterName){
		$this->deliveryCenterName = $deliveryCenterName;
         $this->apiParas["deliveryCenterName"] = $deliveryCenterName;
	}

	public function getDeliveryCenterName(){
	  return $this->deliveryCenterName;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                            }





        
 

