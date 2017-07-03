<?php
class PopLvyouDujiaProductTripGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.product.trip.get";
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
                                                        		                                    	                   			private $productId;
    	                        
	public function setProductId($productId){
		$this->productId = $productId;
         $this->apiParas["productId"] = $productId;
	}

	public function getProductId(){
	  return $this->productId;
	}

                        	                        	                   			private $tripDayNum;
    	                        
	public function setTripDayNum($tripDayNum){
		$this->tripDayNum = $tripDayNum;
         $this->apiParas["tripDayNum"] = $tripDayNum;
	}

	public function getTripDayNum(){
	  return $this->tripDayNum;
	}

                        	                   			private $hasTripDesc;
    	                        
	public function setHasTripDesc($hasTripDesc){
		$this->hasTripDesc = $hasTripDesc;
         $this->apiParas["hasTripDesc"] = $hasTripDesc;
	}

	public function getHasTripDesc(){
	  return $this->hasTripDesc;
	}

                            }





        
 

