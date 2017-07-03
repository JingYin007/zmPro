<?php
class PopLvyouDujiaProductGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.product.get";
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

                        	                        	                   			private $hasCostContain;
    	                        
	public function setHasCostContain($hasCostContain){
		$this->hasCostContain = $hasCostContain;
         $this->apiParas["hasCostContain"] = $hasCostContain;
	}

	public function getHasCostContain(){
	  return $this->hasCostContain;
	}

                        	                   			private $hasCostNoContain;
    	                        
	public function setHasCostNoContain($hasCostNoContain){
		$this->hasCostNoContain = $hasCostNoContain;
         $this->apiParas["hasCostNoContain"] = $hasCostNoContain;
	}

	public function getHasCostNoContain(){
	  return $this->hasCostNoContain;
	}

                        	                   			private $hasReserveRead;
    	                        
	public function setHasReserveRead($hasReserveRead){
		$this->hasReserveRead = $hasReserveRead;
         $this->apiParas["hasReserveRead"] = $hasReserveRead;
	}

	public function getHasReserveRead(){
	  return $this->hasReserveRead;
	}

                        	                   			private $hasProductDesc;
    	                        
	public function setHasProductDesc($hasProductDesc){
		$this->hasProductDesc = $hasProductDesc;
         $this->apiParas["hasProductDesc"] = $hasProductDesc;
	}

	public function getHasProductDesc(){
	  return $this->hasProductDesc;
	}

                        	                   			private $hasProductTripDesc;
    	                        
	public function setHasProductTripDesc($hasProductTripDesc){
		$this->hasProductTripDesc = $hasProductTripDesc;
         $this->apiParas["hasProductTripDesc"] = $hasProductTripDesc;
	}

	public function getHasProductTripDesc(){
	  return $this->hasProductTripDesc;
	}

                        	                   			private $hasSelfReturnRule;
    	                        
	public function setHasSelfReturnRule($hasSelfReturnRule){
		$this->hasSelfReturnRule = $hasSelfReturnRule;
         $this->apiParas["hasSelfReturnRule"] = $hasSelfReturnRule;
	}

	public function getHasSelfReturnRule(){
	  return $this->hasSelfReturnRule;
	}

                        	                   			private $hasPictureUrlList;
    	                        
	public function setHasPictureUrlList($hasPictureUrlList){
		$this->hasPictureUrlList = $hasPictureUrlList;
         $this->apiParas["hasPictureUrlList"] = $hasPictureUrlList;
	}

	public function getHasPictureUrlList(){
	  return $this->hasPictureUrlList;
	}

                        	                   			private $hasPriceList;
    	                        
	public function setHasPriceList($hasPriceList){
		$this->hasPriceList = $hasPriceList;
         $this->apiParas["hasPriceList"] = $hasPriceList;
	}

	public function getHasPriceList(){
	  return $this->hasPriceList;
	}

                            }





        
 

