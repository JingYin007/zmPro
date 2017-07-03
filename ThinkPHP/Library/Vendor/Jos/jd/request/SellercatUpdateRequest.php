<?php
class SellercatUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.sellercat.update";
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

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $homeShow;
    	                                                            
	public function setHomeShow($homeShow){
		$this->homeShow = $homeShow;
		$this->apiParas["home_show"] = $homeShow;
	}

	public function getHomeShow(){
	  return $this->homeShow;
	}

                            }





        
 

