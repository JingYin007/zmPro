<?php
class WareProductDetailSearchListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.product.detail.search.list.get";
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
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $isLoadWareScore;
    	                        
	public function setIsLoadWareScore($isLoadWareScore){
		$this->isLoadWareScore = $isLoadWareScore;
         $this->apiParas["isLoadWareScore"] = $isLoadWareScore;
	}

	public function getIsLoadWareScore(){
	  return $this->isLoadWareScore;
	}

                        	                   			private $client;
    	                        
	public function setClient($client){
		$this->client = $client;
         $this->apiParas["client"] = $client;
	}

	public function getClient(){
	  return $this->client;
	}

}





        
 

