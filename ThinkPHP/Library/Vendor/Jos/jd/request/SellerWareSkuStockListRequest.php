<?php
class SellerWareSkuStockListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.seller.ware.sku.stock.list";
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
                                    	                        	                   			private $skuId;
    	                                                            
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   	                    		private $returnFields;
    	                                                            
	public function setReturnFields($returnFields){
		$this->returnFields = $returnFields;
         $this->apiParas["return_fields"] = $returnFields;
	}

	public function getReturnFields(){
	  return $this->returnFields;
	}

}





        
 

