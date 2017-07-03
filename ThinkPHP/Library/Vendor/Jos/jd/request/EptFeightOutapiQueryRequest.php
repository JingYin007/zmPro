<?php
class EptFeightOutapiQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.feight.outapi.query";
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
                                                        		                                    	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $currPage;
    	                        
	public function setCurrPage($currPage){
		$this->currPage = $currPage;
         $this->apiParas["currPage"] = $currPage;
	}

	public function getCurrPage(){
	  return $this->currPage;
	}

                            }





        
 

