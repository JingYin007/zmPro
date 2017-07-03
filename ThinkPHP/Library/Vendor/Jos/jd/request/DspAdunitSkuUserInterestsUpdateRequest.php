<?php
class DspAdunitSkuUserInterestsUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adunit.skuUserInterests.update";
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
                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                        	                                            		                                    	                   			private $actionCycle;
    	                        
	public function setActionCycle($actionCycle){
		$this->actionCycle = $actionCycle;
         $this->apiParas["actionCycle"] = $actionCycle;
	}

	public function getActionCycle(){
	  return $this->actionCycle;
	}

                        	                   			private $actionCycleBuy;
    	                        
	public function setActionCycleBuy($actionCycleBuy){
		$this->actionCycleBuy = $actionCycleBuy;
         $this->apiParas["actionCycleBuy"] = $actionCycleBuy;
	}

	public function getActionCycleBuy(){
	  return $this->actionCycleBuy;
	}

                        	                   			private $skuList;
    	                        
	public function setSkuList($skuList){
		$this->skuList = $skuList;
         $this->apiParas["skuList"] = $skuList;
	}

	public function getSkuList(){
	  return $this->skuList;
	}

                        	                   			private $skuADGroup;
    	                        
	public function setSkuADGroup($skuADGroup){
		$this->skuADGroup = $skuADGroup;
         $this->apiParas["skuADGroup"] = $skuADGroup;
	}

	public function getSkuADGroup(){
	  return $this->skuADGroup;
	}

                        	                   			private $brandExtend;
    	                        
	public function setBrandExtend($brandExtend){
		$this->brandExtend = $brandExtend;
         $this->apiParas["brandExtend"] = $brandExtend;
	}

	public function getBrandExtend(){
	  return $this->brandExtend;
	}

                        	                   			private $shopExtend;
    	                        
	public function setShopExtend($shopExtend){
		$this->shopExtend = $shopExtend;
         $this->apiParas["shopExtend"] = $shopExtend;
	}

	public function getShopExtend(){
	  return $this->shopExtend;
	}

                        	                   			private $categoryExtend;
    	                        
	public function setCategoryExtend($categoryExtend){
		$this->categoryExtend = $categoryExtend;
         $this->apiParas["categoryExtend"] = $categoryExtend;
	}

	public function getCategoryExtend(){
	  return $this->categoryExtend;
	}

                        	                   			private $brandAndCategoryExtend;
    	                        
	public function setBrandAndCategoryExtend($brandAndCategoryExtend){
		$this->brandAndCategoryExtend = $brandAndCategoryExtend;
         $this->apiParas["brandAndCategoryExtend"] = $brandAndCategoryExtend;
	}

	public function getBrandAndCategoryExtend(){
	  return $this->brandAndCategoryExtend;
	}

                                                                                	}





        
 

