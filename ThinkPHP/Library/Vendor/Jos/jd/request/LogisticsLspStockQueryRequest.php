<?php
class LogisticsLspStockQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.lsp.stock.query";
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
                                    	                        	                   			private $skuId;
    	                                                            
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $outerSkuId;
    	                                                                        
	public function setOuterSkuId($outerSkuId){
		$this->outerSkuId = $outerSkuId;
         $this->apiParas["outer_sku_id"] = $outerSkuId;
	}

	public function getOuterSkuId(){
	  return $this->outerSkuId;
	}

                        	                   			private $stationNo;
    	                                                            
	public function setStationNo($stationNo){
		$this->stationNo = $stationNo;
         $this->apiParas["station_no"] = $stationNo;
	}

	public function getStationNo(){
	  return $this->stationNo;
	}

                        	                   			private $stationNoIsv;
    	                                                                        
	public function setStationNoIsv($stationNoIsv){
		$this->stationNoIsv = $stationNoIsv;
         $this->apiParas["station_no_isv"] = $stationNoIsv;
	}

	public function getStationNoIsv(){
	  return $this->stationNoIsv;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $currentPage;
    	                                                            
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

}





        
 

