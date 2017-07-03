<?php
class WarePromotionSearchCatelogyListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.promotion.search.catelogy.list";
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
                                    	                   			private $catelogyId;
    	                        
	public function setCatelogyId($catelogyId){
		$this->catelogyId = $catelogyId;
         $this->apiParas["catelogyId"] = $catelogyId;
	}

	public function getCatelogyId(){
	  return $this->catelogyId;
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
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $client;
    	                        
	public function setClient($client){
		$this->client = $client;
         $this->apiParas["client"] = $client;
	}

	public function getClient(){
	  return $this->client;
	}

}





        
 

