<?php
class WareUpdateListingRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.update.listing";
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
                                                        		                                    	                   			private $wareId;
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
		$this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
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





        
 

