<?php
class EtmsWaybillcodeGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.etms.waybillcode.get";
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
                                                        		                                    	                        	                        	                   			private $preNum;
    	                        
	public function setPreNum($preNum){
		$this->preNum = $preNum;
         $this->apiParas["preNum"] = $preNum;
	}

	public function getPreNum(){
	  return $this->preNum;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                            }





        
 

