<?php
class WareListingGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.listing.get";
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

                        	                   			private $endModified;
    	                                                            
	public function setEndModified($endModified){
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified(){
	  return $this->endModified;
	}

                        	                   			private $startModified;
    	                                                            
	public function setStartModified($startModified){
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified(){
	  return $this->startModified;
	}

                        	                   			private $fields;
    	                        
	public function setFields($fields){
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields(){
	  return $this->fields;
	}

                            }





        
 

