<?php
class AfterStateUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.after.state.update";
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
                                                        		                                    	                   			private $returnId;
    	                                                            
	public function setReturnId($returnId){
		$this->returnId = $returnId;
		$this->apiParas["return_id"] = $returnId;
	}

	public function getReturnId(){
	  return $this->returnId;
	}

                        	                   			private $tradeNo;
    	                                                            
	public function setTradeNo($tradeNo){
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo(){
	  return $this->tradeNo;
	}

                            }





        
 

