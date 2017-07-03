<?php
class AddVenderDeliveryCompanyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.add.vender.delivery.company";
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

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $sort;
    	                        
	public function setSort($sort){
		$this->sort = $sort;
		$this->apiParas["sort"] = $sort;
	}

	public function getSort(){
	  return $this->sort;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                            }





        
 

