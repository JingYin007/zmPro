<?php
class DeleteVenderDeliveryCompanyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.delete.vender.delivery.company";
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
                                                        		                                    	                   			private $deliveryCompanyId;
    	                                                                        
	public function setDeliveryCompanyId($deliveryCompanyId){
		$this->deliveryCompanyId = $deliveryCompanyId;
		$this->apiParas["delivery_company_id"] = $deliveryCompanyId;
	}

	public function getDeliveryCompanyId(){
	  return $this->deliveryCompanyId;
	}

                            }





        
 

