<?php
class WarePropimgsGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.propimgs.get";
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

                        	                   			private $attributeValueId;
    	                                                                        
	public function setAttributeValueId($attributeValueId){
		$this->attributeValueId = $attributeValueId;
		$this->apiParas["attribute_value_id"] = $attributeValueId;
	}

	public function getAttributeValueId(){
	  return $this->attributeValueId;
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





        
 

