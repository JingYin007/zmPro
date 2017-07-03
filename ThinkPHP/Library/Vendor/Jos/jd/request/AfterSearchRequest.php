<?php
class AfterSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.after.search";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $queryFields;
                              public function setQueryFields($queryFields ){
                 $this->queryFields=$queryFields;
              }

              public function getQueryFields(){
              	return $this->queryFields;
              }
                                                                                                                                        	                   			private $selectFields;
    	                                                            
	public function setSelectFields($selectFields){
		$this->selectFields = $selectFields;
		$this->apiParas["select_fields"] = $selectFields;
	}

	public function getSelectFields(){
	  return $this->selectFields;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

