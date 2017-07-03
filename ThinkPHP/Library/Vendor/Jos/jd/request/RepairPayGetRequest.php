<?php
class RepairPayGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.repair.pay.get";
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
                                                        		                                    	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $factoryNum;
    	                        
	public function setFactoryNum($factoryNum){
		$this->factoryNum = $factoryNum;
         $this->apiParas["factoryNum"] = $factoryNum;
	}

	public function getFactoryNum(){
	  return $this->factoryNum;
	}

                        	                   			private $extendArg;
    	                        
	public function setExtendArg($extendArg){
		$this->extendArg = $extendArg;
         $this->apiParas["extendArg"] = $extendArg;
	}

	public function getExtendArg(){
	  return $this->extendArg;
	}

                            }





        
 

