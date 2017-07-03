<?php
class IncrementCustomerStopRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.increment.customer.stop";
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
                                    	                   			private $pins;
    	                        
	public function setPins($pins){
		$this->pins = $pins;
         $this->apiParas["pins"] = $pins;
	}

	public function getPins(){
	  return $this->pins;
	}

                        	}





        
 

