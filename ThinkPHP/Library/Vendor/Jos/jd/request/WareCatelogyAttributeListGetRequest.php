<?php
class WareCatelogyAttributeListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.catelogy.attribute.list.get";
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
                                    	                   			private $newVersion;
    	                        
	public function setNewVersion($newVersion){
		$this->newVersion = $newVersion;
         $this->apiParas["newVersion"] = $newVersion;
	}

	public function getNewVersion(){
	  return $this->newVersion;
	}

                        	                   			private $catelogyId;
    	                        
	public function setCatelogyId($catelogyId){
		$this->catelogyId = $catelogyId;
         $this->apiParas["catelogyId"] = $catelogyId;
	}

	public function getCatelogyId(){
	  return $this->catelogyId;
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





        
 

