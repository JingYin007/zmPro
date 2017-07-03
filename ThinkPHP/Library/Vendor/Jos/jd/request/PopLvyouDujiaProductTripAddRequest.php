<?php
class PopLvyouDujiaProductTripAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.product.trip.add";
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

                        	                        	                   			private $tripName;
    	                        
	public function setTripName($tripName){
		$this->tripName = $tripName;
         $this->apiParas["tripName"] = $tripName;
	}

	public function getTripName(){
	  return $this->tripName;
	}

                        	                   			private $tripDayNum;
    	                        
	public function setTripDayNum($tripDayNum){
		$this->tripDayNum = $tripDayNum;
         $this->apiParas["tripDayNum"] = $tripDayNum;
	}

	public function getTripDayNum(){
	  return $this->tripDayNum;
	}

                        	                   			private $trafficTypeList;
    	                        
	public function setTrafficTypeList($trafficTypeList){
		$this->trafficTypeList = $trafficTypeList;
         $this->apiParas["trafficTypeList"] = $trafficTypeList;
	}

	public function getTrafficTypeList(){
	  return $this->trafficTypeList;
	}

                        	                   			private $trafficOtherDesc;
    	                        
	public function setTrafficOtherDesc($trafficOtherDesc){
		$this->trafficOtherDesc = $trafficOtherDesc;
         $this->apiParas["trafficOtherDesc"] = $trafficOtherDesc;
	}

	public function getTrafficOtherDesc(){
	  return $this->trafficOtherDesc;
	}

                        	                   			private $trafficDesc;
    	                        
	public function setTrafficDesc($trafficDesc){
		$this->trafficDesc = $trafficDesc;
         $this->apiParas["trafficDesc"] = $trafficDesc;
	}

	public function getTrafficDesc(){
	  return $this->trafficDesc;
	}

                        	                   			private $breakfastDesc;
    	                        
	public function setBreakfastDesc($breakfastDesc){
		$this->breakfastDesc = $breakfastDesc;
         $this->apiParas["breakfastDesc"] = $breakfastDesc;
	}

	public function getBreakfastDesc(){
	  return $this->breakfastDesc;
	}

                        	                   			private $noonDesc;
    	                        
	public function setNoonDesc($noonDesc){
		$this->noonDesc = $noonDesc;
         $this->apiParas["noonDesc"] = $noonDesc;
	}

	public function getNoonDesc(){
	  return $this->noonDesc;
	}

                        	                   			private $dinnerDesc;
    	                        
	public function setDinnerDesc($dinnerDesc){
		$this->dinnerDesc = $dinnerDesc;
         $this->apiParas["dinnerDesc"] = $dinnerDesc;
	}

	public function getDinnerDesc(){
	  return $this->dinnerDesc;
	}

                        	                   			private $hotelDesc;
    	                        
	public function setHotelDesc($hotelDesc){
		$this->hotelDesc = $hotelDesc;
         $this->apiParas["hotelDesc"] = $hotelDesc;
	}

	public function getHotelDesc(){
	  return $this->hotelDesc;
	}

                        	                   			private $tripDesc;
    	                        
	public function setTripDesc($tripDesc){
		$this->tripDesc = $tripDesc;
         $this->apiParas["tripDesc"] = $tripDesc;
	}

	public function getTripDesc(){
	  return $this->tripDesc;
	}

                            }





        
 

