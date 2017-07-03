<?php
class WirelessWarePriceGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wireless.ware.price.get";
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
                                    	                   			private $skuIds;
    	                                                            
	public function setSkuIds($skuIds){
		$this->skuIds = $skuIds;
		$this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds(){
	  return $this->skuIds;
	}

                        	                   			private $origin;
    	                        
	public function setOrigin($origin){
		$this->origin = $origin;
		$this->apiParas["origin"] = $origin;
	}

	public function getOrigin(){
	  return $this->origin;
	}

}





        
 

