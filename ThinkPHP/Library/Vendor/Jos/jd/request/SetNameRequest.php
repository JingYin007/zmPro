<?php
class SetNameRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.setName";
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
                                                        		                                    	                   	                    		private $hour;
    	                        
	public function setHour($hour){
		$this->hour = $hour;
         $this->apiParas["hour"] = $hour;
	}

	public function getHour(){
	  return $this->hour;
	}

                        	                   	                    		private $price;
    	                        
	public function setPrice($price){
		$this->price = $price;
         $this->apiParas["price"] = $price;
	}

	public function getPrice(){
	  return $this->price;
	}

                            }





        
 

