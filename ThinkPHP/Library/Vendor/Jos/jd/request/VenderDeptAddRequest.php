<?php
class VenderDeptAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.dept.add";
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
                                                        		                                    	                        	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $parentId;
    	                        
	public function setParentId($parentId){
		$this->parentId = $parentId;
         $this->apiParas["parentId"] = $parentId;
	}

	public function getParentId(){
	  return $this->parentId;
	}

                        	                            }





        
 

