<?php
class AfsserviceJdInterveneRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.jd.intervene";
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

                        	                   			private $interveneReson;
    	                        
	public function setInterveneReson($interveneReson){
		$this->interveneReson = $interveneReson;
         $this->apiParas["interveneReson"] = $interveneReson;
	}

	public function getInterveneReson(){
	  return $this->interveneReson;
	}

}





        
 

