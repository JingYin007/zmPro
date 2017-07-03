<?php
class WareTemplateUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.template.update";
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

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   	                    		private $contents;
    	                        
	public function setContents($contents){
		$this->contents = $contents;
		$this->apiParas["contents"] = $contents;
	}

	public function getContents(){
	  return $this->contents;
	}

                            }





        
 

