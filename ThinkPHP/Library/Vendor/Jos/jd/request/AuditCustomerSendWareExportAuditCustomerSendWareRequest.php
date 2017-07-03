<?php
class AuditCustomerSendWareExportAuditCustomerSendWareRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.AuditCustomerSendWareExport.auditCustomerSendWare";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $serviceId;
                              public function setServiceId($serviceId ){
                 $this->serviceId=$serviceId;
                 $this->apiParas["serviceId"] = $serviceId;
              }

              public function getServiceId(){
              	return $this->serviceId;
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

                        	                   			private $detailAddress;
    	                        
	public function setDetailAddress($detailAddress){
		$this->detailAddress = $detailAddress;
         $this->apiParas["detailAddress"] = $detailAddress;
	}

	public function getDetailAddress(){
	  return $this->detailAddress;
	}

                                                    	                   			private $contactsName;
    	                        
	public function setContactsName($contactsName){
		$this->contactsName = $contactsName;
         $this->apiParas["contactsName"] = $contactsName;
	}

	public function getContactsName(){
	  return $this->contactsName;
	}

                        	                   			private $contactsTel;
    	                        
	public function setContactsTel($contactsTel){
		$this->contactsTel = $contactsTel;
         $this->apiParas["contactsTel"] = $contactsTel;
	}

	public function getContactsTel(){
	  return $this->contactsTel;
	}

                        	                   			private $contactsPhone;
    	                        
	public function setContactsPhone($contactsPhone){
		$this->contactsPhone = $contactsPhone;
         $this->apiParas["contactsPhone"] = $contactsPhone;
	}

	public function getContactsPhone(){
	  return $this->contactsPhone;
	}

                        	                   			private $contactsZipCode;
    	                        
	public function setContactsZipCode($contactsZipCode){
		$this->contactsZipCode = $contactsZipCode;
         $this->apiParas["contactsZipCode"] = $contactsZipCode;
	}

	public function getContactsZipCode(){
	  return $this->contactsZipCode;
	}

                                                                        		                                                        		                                    	                   			private $province2;
    	                        
	public function setProvince2($province2){
		$this->province2 = $province2;
         $this->apiParas["province2"] = $province2;
	}

	public function getProvince2(){
	  return $this->province2;
	}

                        	                   			private $city2;
    	                        
	public function setCity2($city2){
		$this->city2 = $city2;
         $this->apiParas["city2"] = $city2;
	}

	public function getCity2(){
	  return $this->city2;
	}

                        	                   			private $county2;
    	                        
	public function setCounty2($county2){
		$this->county2 = $county2;
         $this->apiParas["county2"] = $county2;
	}

	public function getCounty2(){
	  return $this->county2;
	}

                        	                   			private $village2;
    	                        
	public function setVillage2($village2){
		$this->village2 = $village2;
         $this->apiParas["village2"] = $village2;
	}

	public function getVillage2(){
	  return $this->village2;
	}

                        	                   			private $detailAddress2;
    	                        
	public function setDetailAddress2($detailAddress2){
		$this->detailAddress2 = $detailAddress2;
         $this->apiParas["detailAddress2"] = $detailAddress2;
	}

	public function getDetailAddress2(){
	  return $this->detailAddress2;
	}

                                                    	                   			private $contactsName2;
    	                        
	public function setContactsName2($contactsName2){
		$this->contactsName2 = $contactsName2;
         $this->apiParas["contactsName2"] = $contactsName2;
	}

	public function getContactsName2(){
	  return $this->contactsName2;
	}

                        	                   			private $contactsTel2;
    	                        
	public function setContactsTel2($contactsTel2){
		$this->contactsTel2 = $contactsTel2;
         $this->apiParas["contactsTel2"] = $contactsTel2;
	}

	public function getContactsTel2(){
	  return $this->contactsTel2;
	}

                        	                   			private $contactsPhone2;
    	                        
	public function setContactsPhone2($contactsPhone2){
		$this->contactsPhone2 = $contactsPhone2;
         $this->apiParas["contactsPhone2"] = $contactsPhone2;
	}

	public function getContactsPhone2(){
	  return $this->contactsPhone2;
	}

                        	                   			private $contactsZipCode2;
    	                        
	public function setContactsZipCode2($contactsZipCode2){
		$this->contactsZipCode2 = $contactsZipCode2;
         $this->apiParas["contactsZipCode2"] = $contactsZipCode2;
	}

	public function getContactsZipCode2(){
	  return $this->contactsZipCode2;
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

                                                                        		                                    	                   			private $approveNotes;
    	                        
	public function setApproveNotes($approveNotes){
		$this->approveNotes = $approveNotes;
         $this->apiParas["approveNotes"] = $approveNotes;
	}

	public function getApproveNotes(){
	  return $this->approveNotes;
	}

                        	                        	                        	                   			private $customizedSmsType;
    	                        
	public function setCustomizedSmsType($customizedSmsType){
		$this->customizedSmsType = $customizedSmsType;
         $this->apiParas["customizedSmsType"] = $customizedSmsType;
	}

	public function getCustomizedSmsType(){
	  return $this->customizedSmsType;
	}

                        	                   			private $platformSrc2;
    	                        
	public function setPlatformSrc2($platformSrc2){
		$this->platformSrc2 = $platformSrc2;
         $this->apiParas["platformSrc2"] = $platformSrc2;
	}

	public function getPlatformSrc2(){
	  return $this->platformSrc2;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $afsApplyDetailId;
                              public function setAfsApplyDetailId($afsApplyDetailId ){
                 $this->afsApplyDetailId=$afsApplyDetailId;
                 $this->apiParas["afsApplyDetailId"] = $afsApplyDetailId;
              }

              public function getAfsApplyDetailId(){
              	return $this->afsApplyDetailId;
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
                                                                                                                                                                                                                                                                                                                                              private $wareDescribe;
                              public function setWareDescribe($wareDescribe ){
                 $this->wareDescribe=$wareDescribe;
                 $this->apiParas["wareDescribe"] = $wareDescribe;
              }

              public function getWareDescribe(){
              	return $this->wareDescribe;
              }
                                                                                                                                                                                                                                                                                                                                              private $wareType;
                              public function setWareType($wareType ){
                 $this->wareType=$wareType;
                 $this->apiParas["wareType"] = $wareType;
              }

              public function getWareType(){
              	return $this->wareType;
              }
                                                                                                                                        	                   			private $afterServiceProvider;
    	                        
	public function setAfterServiceProvider($afterServiceProvider){
		$this->afterServiceProvider = $afterServiceProvider;
         $this->apiParas["afterServiceProvider"] = $afterServiceProvider;
	}

	public function getAfterServiceProvider(){
	  return $this->afterServiceProvider;
	}

                            }





        
 

