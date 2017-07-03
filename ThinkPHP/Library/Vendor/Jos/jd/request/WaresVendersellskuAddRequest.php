<?php
class WaresVendersellskuAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.wares.vendersellsku.add";
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
                                                        		                                    	                   			private $categoryId;
    	                                                            
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
		$this->apiParas["category_id"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $indexId;
    	                                                            
	public function setIndexId($indexId){
		$this->indexId = $indexId;
		$this->apiParas["index_id"] = $indexId;
	}

	public function getIndexId(){
	  return $this->indexId;
	}

                        	                   			private $attributeId;
    	                                                            
	public function setAttributeId($attributeId){
		$this->attributeId = $attributeId;
		$this->apiParas["attribute_id"] = $attributeId;
	}

	public function getAttributeId(){
	  return $this->attributeId;
	}

                        	                   			private $attributeValue;
    	                                                            
	public function setAttributeValue($attributeValue){
		$this->attributeValue = $attributeValue;
		$this->apiParas["attribute_value"] = $attributeValue;
	}

	public function getAttributeValue(){
	  return $this->attributeValue;
	}

                        	                   			private $features;
    	                        
	public function setFeatures($features){
		$this->features = $features;
		$this->apiParas["features"] = $features;
	}

	public function getFeatures(){
	  return $this->features;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                            }





        
 

