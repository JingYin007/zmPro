<?php
class SellercatAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.sellercat.add";
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
                                                        		                                    	                   			private $parentId;
    	                                                            
	public function setParentId($parentId){
		$this->parentId = $parentId;
		$this->apiParas["parent_id"] = $parentId;
	}

	public function getParentId(){
	  return $this->parentId;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $isOpen;
    	                                                            
	public function setIsOpen($isOpen){
		$this->isOpen = $isOpen;
		$this->apiParas["is_open"] = $isOpen;
	}

	public function getIsOpen(){
	  return $this->isOpen;
	}

                        	                   			private $isHomeShow;
    	                                                                        
	public function setIsHomeShow($isHomeShow){
		$this->isHomeShow = $isHomeShow;
		$this->apiParas["is_home_show"] = $isHomeShow;
	}

	public function getIsHomeShow(){
	  return $this->isHomeShow;
	}

                            }





        
 

