<?php
class AfsserviceFreightUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.freight.update";
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

                        	                   			private $expressCode;
    	                        
	public function setExpressCode($expressCode){
		$this->expressCode = $expressCode;
         $this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode(){
	  return $this->expressCode;
	}

                        	                   			private $expressCompany;
    	                        
	public function setExpressCompany($expressCompany){
		$this->expressCompany = $expressCompany;
         $this->apiParas["expressCompany"] = $expressCompany;
	}

	public function getExpressCompany(){
	  return $this->expressCompany;
	}

                        	                   			private $modifiedMoney;
    	                        
	public function setModifiedMoney($modifiedMoney){
		$this->modifiedMoney = $modifiedMoney;
         $this->apiParas["modifiedMoney"] = $modifiedMoney;
	}

	public function getModifiedMoney(){
	  return $this->modifiedMoney;
	}

                            }





        
 

