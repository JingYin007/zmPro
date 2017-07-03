<?php
class DspFeaturedAddadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.featured.addad";
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
                                                        		                                    	                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $name;
                              public function setName($name ){
                 $this->name=$name;
                 $this->apiParas["name"] = $name;
              }

              public function getName(){
              	return $this->name;
              }
                                                                                                                                                                                                                                                                                                                                              private $url;
                              public function setUrl($url ){
                 $this->url=$url;
                 $this->apiParas["url"] = $url;
              }

              public function getUrl(){
              	return $this->url;
              }
                                                                                                                                                                                                                                                                                                                                              private $imgUrl;
                              public function setImgUrl($imgUrl ){
                 $this->imgUrl=$imgUrl;
                 $this->apiParas["imgUrl"] = $imgUrl;
              }

              public function getImgUrl(){
              	return $this->imgUrl;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                            }





        
 

