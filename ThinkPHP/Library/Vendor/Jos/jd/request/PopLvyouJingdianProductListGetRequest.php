<?php
class PopLvyouJingdianProductListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.jingdian.product.list.get";
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
                                                        		                                    	                   			private $jingdianId;
    	                        
	public function setJingdianId($jingdianId){
		$this->jingdianId = $jingdianId;
         $this->apiParas["jingdianId"] = $jingdianId;
	}

	public function getJingdianId(){
	  return $this->jingdianId;
	}

                        	                   			private $productStatus;
    	                        
	public function setProductStatus($productStatus){
		$this->productStatus = $productStatus;
         $this->apiParas["productStatus"] = $productStatus;
	}

	public function getProductStatus(){
	  return $this->productStatus;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
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





        
 

