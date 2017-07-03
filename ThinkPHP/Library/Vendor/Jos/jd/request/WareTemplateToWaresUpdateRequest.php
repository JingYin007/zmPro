<?php
class WareTemplateToWaresUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.template.to.wares.update";
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
                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $wareIds;
    	                                                            
	public function setWareIds($wareIds){
		$this->wareIds = $wareIds;
		$this->apiParas["ware_ids"] = $wareIds;
	}

	public function getWareIds(){
	  return $this->wareIds;
	}

                            }





        
 

