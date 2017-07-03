<?php
class LogisticsPdjStockUploadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.pdj.stock.upload";
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
                                    	                        	                   			private $outerSkuId;
    	                        
	public function setOuterSkuId($outerSkuId){
		$this->outerSkuId = $outerSkuId;
         $this->apiParas["outerSkuId"] = $outerSkuId;
	}

	public function getOuterSkuId(){
	  return $this->outerSkuId;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $stationNo;
    	                        
	public function setStationNo($stationNo){
		$this->stationNo = $stationNo;
         $this->apiParas["stationNo"] = $stationNo;
	}

	public function getStationNo(){
	  return $this->stationNo;
	}

                        	                   			private $outerStationNo;
    	                        
	public function setOuterStationNo($outerStationNo){
		$this->outerStationNo = $outerStationNo;
         $this->apiParas["outerStationNo"] = $outerStationNo;
	}

	public function getOuterStationNo(){
	  return $this->outerStationNo;
	}

                        	                   			private $stockQty;
    	                        
	public function setStockQty($stockQty){
		$this->stockQty = $stockQty;
         $this->apiParas["stockQty"] = $stockQty;
	}

	public function getStockQty(){
	  return $this->stockQty;
	}

}





        
 

