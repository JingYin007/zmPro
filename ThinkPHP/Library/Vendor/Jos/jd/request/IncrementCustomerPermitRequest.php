<?php
class IncrementCustomerPermitRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.increment.customer.permit";
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
                                    	                        	                        	                   			private $topics;
    	                        
	public function setTopics($topics){
		$this->topics = $topics;
         $this->apiParas["topics"] = $topics;
	}

	public function getTopics(){
	  return $this->topics;
	}

}





        
 

