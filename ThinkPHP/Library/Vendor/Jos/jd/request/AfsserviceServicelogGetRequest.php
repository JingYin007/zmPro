<?php
class AfsserviceServicelogGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.servicelog.get";
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
                                    	                                            		                                    	                   			private $afsServiceId;
    	                        
	public function setAfsServiceId($afsServiceId){
		$this->afsServiceId = $afsServiceId;
         $this->apiParas["afsServiceId"] = $afsServiceId;
	}

	public function getAfsServiceId(){
	  return $this->afsServiceId;
	}

                        	                   			private $pageNumber;
    	                        
	public function setPageNumber($pageNumber){
		$this->pageNumber = $pageNumber;
         $this->apiParas["pageNumber"] = $pageNumber;
	}

	public function getPageNumber(){
	  return $this->pageNumber;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

