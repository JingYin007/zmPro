<?php
class PopLvyouJingdianProductUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.jingdian.product.update";
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
                                                        		                                    	                   			private $supplierProductId;
    	                        
	public function setSupplierProductId($supplierProductId){
		$this->supplierProductId = $supplierProductId;
         $this->apiParas["supplierProductId"] = $supplierProductId;
	}

	public function getSupplierProductId(){
	  return $this->supplierProductId;
	}

                        	                   			private $productName;
    	                        
	public function setProductName($productName){
		$this->productName = $productName;
         $this->apiParas["productName"] = $productName;
	}

	public function getProductName(){
	  return $this->productName;
	}

                        	                   			private $stockCountType;
    	                        
	public function setStockCountType($stockCountType){
		$this->stockCountType = $stockCountType;
         $this->apiParas["stockCountType"] = $stockCountType;
	}

	public function getStockCountType(){
	  return $this->stockCountType;
	}

                        	                   			private $productPriceListJson;
    	                        
	public function setProductPriceListJson($productPriceListJson){
		$this->productPriceListJson = $productPriceListJson;
         $this->apiParas["productPriceListJson"] = $productPriceListJson;
	}

	public function getProductPriceListJson(){
	  return $this->productPriceListJson;
	}

                        	                   			private $productDesc;
    	                        
	public function setProductDesc($productDesc){
		$this->productDesc = $productDesc;
         $this->apiParas["productDesc"] = $productDesc;
	}

	public function getProductDesc(){
	  return $this->productDesc;
	}

                        	                   			private $beforeReserveMinutes;
    	                        
	public function setBeforeReserveMinutes($beforeReserveMinutes){
		$this->beforeReserveMinutes = $beforeReserveMinutes;
         $this->apiParas["beforeReserveMinutes"] = $beforeReserveMinutes;
	}

	public function getBeforeReserveMinutes(){
	  return $this->beforeReserveMinutes;
	}

                        	                        	                   			private $refundRuleType;
    	                        
	public function setRefundRuleType($refundRuleType){
		$this->refundRuleType = $refundRuleType;
         $this->apiParas["refundRuleType"] = $refundRuleType;
	}

	public function getRefundRuleType(){
	  return $this->refundRuleType;
	}

                        	                   			private $changeRuleType;
    	                        
	public function setChangeRuleType($changeRuleType){
		$this->changeRuleType = $changeRuleType;
         $this->apiParas["changeRuleType"] = $changeRuleType;
	}

	public function getChangeRuleType(){
	  return $this->changeRuleType;
	}

                        	                   			private $refundRuleDesc;
    	                        
	public function setRefundRuleDesc($refundRuleDesc){
		$this->refundRuleDesc = $refundRuleDesc;
         $this->apiParas["refundRuleDesc"] = $refundRuleDesc;
	}

	public function getRefundRuleDesc(){
	  return $this->refundRuleDesc;
	}

                        	                   			private $changeRuleDesc;
    	                        
	public function setChangeRuleDesc($changeRuleDesc){
		$this->changeRuleDesc = $changeRuleDesc;
         $this->apiParas["changeRuleDesc"] = $changeRuleDesc;
	}

	public function getChangeRuleDesc(){
	  return $this->changeRuleDesc;
	}

                        	                   			private $bookingInfo;
    	                        
	public function setBookingInfo($bookingInfo){
		$this->bookingInfo = $bookingInfo;
         $this->apiParas["bookingInfo"] = $bookingInfo;
	}

	public function getBookingInfo(){
	  return $this->bookingInfo;
	}

                            }





        
 

