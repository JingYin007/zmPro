<?php
class PopLvyouJingdianProductStatusUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.jingdian.product.status.update";
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

                        	                   			private $productStatus;
    	                        
	public function setProductStatus($productStatus){
		$this->productStatus = $productStatus;
         $this->apiParas["productStatus"] = $productStatus;
	}

	public function getProductStatus(){
	  return $this->productStatus;
	}

                        	                            }





        
 

