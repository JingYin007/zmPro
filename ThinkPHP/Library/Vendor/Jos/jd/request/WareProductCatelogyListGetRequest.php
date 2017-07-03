<?php
class WareProductCatelogyListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.product.catelogy.list.get";
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
                                    	                   			private $catelogyId;
    	                        
	public function setCatelogyId($catelogyId){
		$this->catelogyId = $catelogyId;
         $this->apiParas["catelogyId"] = $catelogyId;
	}

	public function getCatelogyId(){
	  return $this->catelogyId;
	}

                        	                   			private $level;
    	                        
	public function setLevel($level){
		$this->level = $level;
         $this->apiParas["level"] = $level;
	}

	public function getLevel(){
	  return $this->level;
	}

                        	                   			private $isIcon;
    	                        
	public function setIsIcon($isIcon){
		$this->isIcon = $isIcon;
         $this->apiParas["isIcon"] = $isIcon;
	}

	public function getIsIcon(){
	  return $this->isIcon;
	}

                        	                   			private $isDescription;
    	                        
	public function setIsDescription($isDescription){
		$this->isDescription = $isDescription;
         $this->apiParas["isDescription"] = $isDescription;
	}

	public function getIsDescription(){
	  return $this->isDescription;
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





        
 

