<?php
class OrderVenderRemarkUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.order.vender.remark.update";
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
                                                        		                                    	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
		$this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $tradeNo;
    	                                                            
	public function setTradeNo($tradeNo){
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo(){
	  return $this->tradeNo;
	}

                        	                   			private $flag;
    	                        
	public function setFlag($flag){
		$this->flag = $flag;
		$this->apiParas["flag"] = $flag;
	}

	public function getFlag(){
	  return $this->flag;
	}

                            }





        
 

