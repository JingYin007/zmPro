<?php
class WareBaseproductGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.baseproduct.get";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $ids;
                              public function setIds($ids ){
                 $this->ids=$ids;
              }

              public function getIds(){
              	return $this->ids;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $base;
                              public function setBase($base ){
                 $this->base=$base;
              }

              public function getBase(){
              	return $this->base;
              }
                                                                                                                }





        
 

