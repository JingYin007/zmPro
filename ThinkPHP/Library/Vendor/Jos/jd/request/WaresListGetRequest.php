<?php
class WaresListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.wares.list.get";
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
                                                        		                                    	                   			private $wareIds;
    	                                                            
	public function setWareIds($wareIds){
		$this->wareIds = $wareIds;
		$this->apiParas["ware_ids"] = $wareIds;
	}

	public function getWareIds(){
	  return $this->wareIds;
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





        
 

