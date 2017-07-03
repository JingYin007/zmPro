<?php
class AfsserviceAuditRejectRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.audit.reject";
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

                        	                   			private $rejectReason;
    	                        
	public function setRejectReason($rejectReason){
		$this->rejectReason = $rejectReason;
         $this->apiParas["rejectReason"] = $rejectReason;
	}

	public function getRejectReason(){
	  return $this->rejectReason;
	}

}





        
 

