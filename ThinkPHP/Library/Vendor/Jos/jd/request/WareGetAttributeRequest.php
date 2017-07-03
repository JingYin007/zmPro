<?php
class WareGetAttributeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.get.attribute";
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
                                                        		                                    	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   			private $isKeyProp;
    	                                                                        
	public function setIsKeyProp($isKeyProp){
		$this->isKeyProp = $isKeyProp;
		$this->apiParas["is_key_prop"] = $isKeyProp;
	}

	public function getIsKeyProp(){
	  return $this->isKeyProp;
	}

                        	                   			private $isSaleProp;
    	                                                                        
	public function setIsSaleProp($isSaleProp){
		$this->isSaleProp = $isSaleProp;
		$this->apiParas["is_sale_prop"] = $isSaleProp;
	}

	public function getIsSaleProp(){
	  return $this->isSaleProp;
	}

                        	                   			private $aid;
    	                        
	public function setAid($aid){
		$this->aid = $aid;
		$this->apiParas["aid"] = $aid;
	}

	public function getAid(){
	  return $this->aid;
	}

                        	                   			private $fields;
    	                        
	public function setFields($fields){
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields(){
	  return $this->fields;
	}

                            }





        
 

