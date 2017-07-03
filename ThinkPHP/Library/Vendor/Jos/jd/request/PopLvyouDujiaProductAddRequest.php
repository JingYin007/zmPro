<?php
class PopLvyouDujiaProductAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.product.add";
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

                        	                        	                   			private $productName;
    	                        
	public function setProductName($productName){
		$this->productName = $productName;
         $this->apiParas["productName"] = $productName;
	}

	public function getProductName(){
	  return $this->productName;
	}

                        	                   			private $categoryOneId;
    	                        
	public function setCategoryOneId($categoryOneId){
		$this->categoryOneId = $categoryOneId;
         $this->apiParas["categoryOneId"] = $categoryOneId;
	}

	public function getCategoryOneId(){
	  return $this->categoryOneId;
	}

                        	                   			private $categoryTwoId;
    	                        
	public function setCategoryTwoId($categoryTwoId){
		$this->categoryTwoId = $categoryTwoId;
         $this->apiParas["categoryTwoId"] = $categoryTwoId;
	}

	public function getCategoryTwoId(){
	  return $this->categoryTwoId;
	}

                        	                   			private $categoryThreeId;
    	                        
	public function setCategoryThreeId($categoryThreeId){
		$this->categoryThreeId = $categoryThreeId;
         $this->apiParas["categoryThreeId"] = $categoryThreeId;
	}

	public function getCategoryThreeId(){
	  return $this->categoryThreeId;
	}

                        	                   			private $categoryFourId;
    	                        
	public function setCategoryFourId($categoryFourId){
		$this->categoryFourId = $categoryFourId;
         $this->apiParas["categoryFourId"] = $categoryFourId;
	}

	public function getCategoryFourId(){
	  return $this->categoryFourId;
	}

                        	                   			private $confirmType;
    	                        
	public function setConfirmType($confirmType){
		$this->confirmType = $confirmType;
         $this->apiParas["confirmType"] = $confirmType;
	}

	public function getConfirmType(){
	  return $this->confirmType;
	}

                        	                   			private $departure;
    	                        
	public function setDeparture($departure){
		$this->departure = $departure;
         $this->apiParas["departure"] = $departure;
	}

	public function getDeparture(){
	  return $this->departure;
	}

                        	                   			private $arrive;
    	                        
	public function setArrive($arrive){
		$this->arrive = $arrive;
         $this->apiParas["arrive"] = $arrive;
	}

	public function getArrive(){
	  return $this->arrive;
	}

                        	                   			private $days;
    	                        
	public function setDays($days){
		$this->days = $days;
         $this->apiParas["days"] = $days;
	}

	public function getDays(){
	  return $this->days;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $recommendDesc;
                              public function setRecommendDesc($recommendDesc ){
                 $this->recommendDesc=$recommendDesc;
                 $this->apiParas["recommendDesc"] = $recommendDesc;
              }

              public function getRecommendDesc(){
              	return $this->recommendDesc;
              }
                                                                                                                                        	                   			private $marketPrice;
    	                        
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
         $this->apiParas["marketPrice"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

                        	                   			private $childDesc;
    	                        
	public function setChildDesc($childDesc){
		$this->childDesc = $childDesc;
         $this->apiParas["childDesc"] = $childDesc;
	}

	public function getChildDesc(){
	  return $this->childDesc;
	}

                        	                   			private $latestFormDays;
    	                        
	public function setLatestFormDays($latestFormDays){
		$this->latestFormDays = $latestFormDays;
         $this->apiParas["latestFormDays"] = $latestFormDays;
	}

	public function getLatestFormDays(){
	  return $this->latestFormDays;
	}

                        	                   			private $stockCountType;
    	                        
	public function setStockCountType($stockCountType){
		$this->stockCountType = $stockCountType;
         $this->apiParas["stockCountType"] = $stockCountType;
	}

	public function getStockCountType(){
	  return $this->stockCountType;
	}

                        	                   			private $costContain;
    	                        
	public function setCostContain($costContain){
		$this->costContain = $costContain;
         $this->apiParas["costContain"] = $costContain;
	}

	public function getCostContain(){
	  return $this->costContain;
	}

                        	                   			private $costNoContain;
    	                        
	public function setCostNoContain($costNoContain){
		$this->costNoContain = $costNoContain;
         $this->apiParas["costNoContain"] = $costNoContain;
	}

	public function getCostNoContain(){
	  return $this->costNoContain;
	}

                        	                   			private $reserveRead;
    	                        
	public function setReserveRead($reserveRead){
		$this->reserveRead = $reserveRead;
         $this->apiParas["reserveRead"] = $reserveRead;
	}

	public function getReserveRead(){
	  return $this->reserveRead;
	}

                        	                   			private $productDesc;
    	                        
	public function setProductDesc($productDesc){
		$this->productDesc = $productDesc;
         $this->apiParas["productDesc"] = $productDesc;
	}

	public function getProductDesc(){
	  return $this->productDesc;
	}

                        	                   			private $selfReturnRule;
    	                        
	public function setSelfReturnRule($selfReturnRule){
		$this->selfReturnRule = $selfReturnRule;
         $this->apiParas["selfReturnRule"] = $selfReturnRule;
	}

	public function getSelfReturnRule(){
	  return $this->selfReturnRule;
	}

                        	                   			private $pictureUrlListJson;
    	                        
	public function setPictureUrlListJson($pictureUrlListJson){
		$this->pictureUrlListJson = $pictureUrlListJson;
         $this->apiParas["pictureUrlListJson"] = $pictureUrlListJson;
	}

	public function getPictureUrlListJson(){
	  return $this->pictureUrlListJson;
	}

                        	                   			private $priceListJson;
    	                        
	public function setPriceListJson($priceListJson){
		$this->priceListJson = $priceListJson;
         $this->apiParas["priceListJson"] = $priceListJson;
	}

	public function getPriceListJson(){
	  return $this->priceListJson;
	}

                            }





        
 

