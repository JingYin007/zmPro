<?php
class WarePropimgUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.propimg.update";
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

                        	                   			private $attributeValueId;
    	                                                                        
	public function setAttributeValueId($attributeValueId){
		$this->attributeValueId = $attributeValueId;
		$this->apiParas["attribute_value_id"] = $attributeValueId;
	}

	public function getAttributeValueId(){
	  return $this->attributeValueId;
	}

                        	                   			private $isMainPic;
    	                                                                        
	public function setIsMainPic($isMainPic){
		$this->isMainPic = $isMainPic;
		$this->apiParas["is_main_pic"] = $isMainPic;
	}

	public function getIsMainPic(){
	  return $this->isMainPic;
	}

                        	                   			private $imageId;
    	                                                            
	public function setImageId($imageId){
		$this->imageId = $imageId;
		$this->apiParas["image_id"] = $imageId;
	}

	public function getImageId(){
	  return $this->imageId;
	}

                            }





        
 

