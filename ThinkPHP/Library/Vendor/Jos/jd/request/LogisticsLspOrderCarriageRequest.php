<?php
class LogisticsLspOrderCarriageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.lsp.order.carriage";
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

                        	                   			private $orderSource;
    	                                                            
	public function setOrderSource($orderSource){
		$this->orderSource = $orderSource;
         $this->apiParas["order_source"] = $orderSource;
	}

	public function getOrderSource(){
	  return $this->orderSource;
	}

                        	                   			private $carrierNo;
    	                                                            
	public function setCarrierNo($carrierNo){
		$this->carrierNo = $carrierNo;
         $this->apiParas["carrier_no"] = $carrierNo;
	}

	public function getCarrierNo(){
	  return $this->carrierNo;
	}

                        	                   			private $carrierName;
    	                                                            
	public function setCarrierName($carrierName){
		$this->carrierName = $carrierName;
         $this->apiParas["carrier_name"] = $carrierName;
	}

	public function getCarrierName(){
	  return $this->carrierName;
	}

                        	                   			private $deliverNo;
    	                                                            
	public function setDeliverNo($deliverNo){
		$this->deliverNo = $deliverNo;
         $this->apiParas["deliver_no"] = $deliverNo;
	}

	public function getDeliverNo(){
	  return $this->deliverNo;
	}

                        	                   			private $parcelNum;
    	                                                            
	public function setParcelNum($parcelNum){
		$this->parcelNum = $parcelNum;
         $this->apiParas["parcel_num"] = $parcelNum;
	}

	public function getParcelNum(){
	  return $this->parcelNum;
	}

}





        
 

