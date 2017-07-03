<?php
class LogisticsLspStockUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.lsp.stock.update";
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
                                    	                        	                   			private $stockrfType;
    	                                                            
	public function setStockrfType($stockrfType){
		$this->stockrfType = $stockrfType;
         $this->apiParas["stockrf_type"] = $stockrfType;
	}

	public function getStockrfType(){
	  return $this->stockrfType;
	}

                        	                   			private $stockrfId;
    	                                                            
	public function setStockrfId($stockrfId){
		$this->stockrfId = $stockrfId;
         $this->apiParas["stockrf_id"] = $stockrfId;
	}

	public function getStockrfId(){
	  return $this->stockrfId;
	}

                        	                   			private $rsn;
    	                        
	public function setRsn($rsn){
		$this->rsn = $rsn;
         $this->apiParas["rsn"] = $rsn;
	}

	public function getRsn(){
	  return $this->rsn;
	}

                        	                   			private $updateRemark;
    	                                                            
	public function setUpdateRemark($updateRemark){
		$this->updateRemark = $updateRemark;
         $this->apiParas["update_remark"] = $updateRemark;
	}

	public function getUpdateRemark(){
	  return $this->updateRemark;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $outerSkuId;
                              public function setOuterSkuId($outerSkuId ){
                 $this->outerSkuId=$outerSkuId;
                 $this->apiParas["outer_sku_id"] = $outerSkuId;
              }

              public function getOuterSkuId(){
              	return $this->outerSkuId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["sku_id"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $stationNoIsv;
                              public function setStationNoIsv($stationNoIsv ){
                 $this->stationNoIsv=$stationNoIsv;
                 $this->apiParas["station_no_isv"] = $stationNoIsv;
              }

              public function getStationNoIsv(){
              	return $this->stationNoIsv;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $stationNo;
                              public function setStationNo($stationNo ){
                 $this->stationNo=$stationNo;
                 $this->apiParas["station_no"] = $stationNo;
              }

              public function getStationNo(){
              	return $this->stationNo;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $stockNum;
                              public function setStockNum($stockNum ){
                 $this->stockNum=$stockNum;
                 $this->apiParas["stock_num"] = $stockNum;
              }

              public function getStockNum(){
              	return $this->stockNum;
              }
                                                                                                                }





        
 

