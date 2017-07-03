<?php
class PopLvyouJingdianProductGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.jingdian.product.get";
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

                        	                            }





        
 

