<?php
class SkuCustomGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.sku.custom.get";
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
                                                        		                                    	                   			private $outerId;
    	                                                            
	public function setOuterId($outerId){
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId(){
	  return $this->outerId;
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





        
 

