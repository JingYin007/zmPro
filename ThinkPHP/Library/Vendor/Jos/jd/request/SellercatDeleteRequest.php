<?php
class SellercatDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.sellercat.delete";
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

                            }





        
 

