<?php
class WareGetAttvalueRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.get.attvalue";
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
                                                        		                                    	                   			private $avs;
    	                        
	public function setAvs($avs){
		$this->avs = $avs;
		$this->apiParas["avs"] = $avs;
	}

	public function getAvs(){
	  return $this->avs;
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





        
 

