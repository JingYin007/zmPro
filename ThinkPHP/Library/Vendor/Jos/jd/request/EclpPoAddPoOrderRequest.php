<?php
class EclpPoAddPoOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.po.addPoOrder";
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
                                                        		                                    	                   			private $spPoOrderNo;
    	                        
	public function setSpPoOrderNo($spPoOrderNo){
		$this->spPoOrderNo = $spPoOrderNo;
         $this->apiParas["spPoOrderNo"] = $spPoOrderNo;
	}

	public function getSpPoOrderNo(){
	  return $this->spPoOrderNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $whNo;
    	                        
	public function setWhNo($whNo){
		$this->whNo = $whNo;
         $this->apiParas["whNo"] = $whNo;
	}

	public function getWhNo(){
	  return $this->whNo;
	}

                        	                   			private $supplierNo;
    	                        
	public function setSupplierNo($supplierNo){
		$this->supplierNo = $supplierNo;
         $this->apiParas["supplierNo"] = $supplierNo;
	}

	public function getSupplierNo(){
	  return $this->supplierNo;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $deptGoodsNo;
                              public function setDeptGoodsNo($deptGoodsNo ){
                 $this->deptGoodsNo=$deptGoodsNo;
                 $this->apiParas["deptGoodsNo"] = $deptGoodsNo;
              }

              public function getDeptGoodsNo(){
              	return $this->deptGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $numApplication;
                              public function setNumApplication($numApplication ){
                 $this->numApplication=$numApplication;
                 $this->apiParas["numApplication"] = $numApplication;
              }

              public function getNumApplication(){
              	return $this->numApplication;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsStatus;
                              public function setGoodsStatus($goodsStatus ){
                 $this->goodsStatus=$goodsStatus;
                 $this->apiParas["goodsStatus"] = $goodsStatus;
              }

              public function getGoodsStatus(){
              	return $this->goodsStatus;
              }
                                                                                                                                                                                                                                                                                                                                              private $barCodeType;
                              public function setBarCodeType($barCodeType ){
                 $this->barCodeType=$barCodeType;
                 $this->apiParas["barCodeType"] = $barCodeType;
              }

              public function getBarCodeType(){
              	return $this->barCodeType;
              }
                                                                                                                                        	}





        
 

