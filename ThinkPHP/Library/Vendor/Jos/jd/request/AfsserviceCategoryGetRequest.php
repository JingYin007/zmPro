<?php
class AfsserviceCategoryGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.category.get";
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
                                    	                                            		                                    	                   			private $afsCategoryId;
    	                        
	public function setAfsCategoryId($afsCategoryId){
		$this->afsCategoryId = $afsCategoryId;
		$this->apiParas["afsCategoryId"] = $afsCategoryId;
	}

	public function getAfsCategoryId(){
	  return $this->afsCategoryId;
	}

                            }





        
 

