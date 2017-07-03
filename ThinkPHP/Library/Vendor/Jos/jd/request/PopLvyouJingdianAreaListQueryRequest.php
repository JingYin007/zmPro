<?php
class PopLvyouJingdianAreaListQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.jingdian.area.list.query";
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
                                                        		                                    	                   			private $searchType;
    	                        
	public function setSearchType($searchType){
		$this->searchType = $searchType;
         $this->apiParas["searchType"] = $searchType;
	}

	public function getSearchType(){
	  return $this->searchType;
	}

                            }





        
 

