<?php
class WareProductSearchListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.product.search.list.get";
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
                                    	                   			private $isLoadAverageScore;
    	                        
	public function setIsLoadAverageScore($isLoadAverageScore){
		$this->isLoadAverageScore = $isLoadAverageScore;
         $this->apiParas["isLoadAverageScore"] = $isLoadAverageScore;
	}

	public function getIsLoadAverageScore(){
	  return $this->isLoadAverageScore;
	}

                        	                   			private $isLoadPromotion;
    	                        
	public function setIsLoadPromotion($isLoadPromotion){
		$this->isLoadPromotion = $isLoadPromotion;
         $this->apiParas["isLoadPromotion"] = $isLoadPromotion;
	}

	public function getIsLoadPromotion(){
	  return $this->isLoadPromotion;
	}

                        	                   			private $sort;
    	                        
	public function setSort($sort){
		$this->sort = $sort;
         $this->apiParas["sort"] = $sort;
	}

	public function getSort(){
	  return $this->sort;
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

                        	                   			private $keyword;
    	                        
	public function setKeyword($keyword){
		$this->keyword = $keyword;
         $this->apiParas["keyword"] = $keyword;
	}

	public function getKeyword(){
	  return $this->keyword;
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





        
 

