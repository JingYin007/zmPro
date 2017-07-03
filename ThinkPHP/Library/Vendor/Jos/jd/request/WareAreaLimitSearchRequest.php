<?php
class WareAreaLimitSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.area.limit.search";
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
                                                        		                                    	                   			private $wareId;
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
		$this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
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





        
 

