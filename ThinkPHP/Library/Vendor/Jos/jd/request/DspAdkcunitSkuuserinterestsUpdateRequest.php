<?php
class DspAdkcunitSkuuserinterestsUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.skuuserinterests.update";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
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

                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                                                    	}





        
 

