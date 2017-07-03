<?php
class LogisticsO2oSkuStock_ownerUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.o2o.sku.stock_owner.update";
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
                                    	                        	                   			private $spuId;
    	                                                            
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spu_id"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["sku_id"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $name;
                              public function setName($name ){
                 $this->name=$name;
                 $this->apiParas["name"] = $name;
              }

              public function getName(){
              	return $this->name;
              }
                                                                                                                                        	                   			private $stockOwner;
    	                                                            
	public function setStockOwner($stockOwner){
		$this->stockOwner = $stockOwner;
         $this->apiParas["stock_owner"] = $stockOwner;
	}

	public function getStockOwner(){
	  return $this->stockOwner;
	}

}





        
 

