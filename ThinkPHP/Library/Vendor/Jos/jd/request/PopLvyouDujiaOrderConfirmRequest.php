<?php
class PopLvyouDujiaOrderConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.order.confirm";
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
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $confirmType;
    	                        
	public function setConfirmType($confirmType){
		$this->confirmType = $confirmType;
         $this->apiParas["confirmType"] = $confirmType;
	}

	public function getConfirmType(){
	  return $this->confirmType;
	}

                        	                   			private $totalFee;
    	                        
	public function setTotalFee($totalFee){
		$this->totalFee = $totalFee;
         $this->apiParas["totalFee"] = $totalFee;
	}

	public function getTotalFee(){
	  return $this->totalFee;
	}

                        	                   			private $confirmDesc;
    	                        
	public function setConfirmDesc($confirmDesc){
		$this->confirmDesc = $confirmDesc;
         $this->apiParas["confirmDesc"] = $confirmDesc;
	}

	public function getConfirmDesc(){
	  return $this->confirmDesc;
	}

                            }





        
 

