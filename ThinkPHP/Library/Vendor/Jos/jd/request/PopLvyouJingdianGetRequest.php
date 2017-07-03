<?php
class PopLvyouJingdianGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.jingdian.get";
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
                                                        		                                    	                        	                   			private $sceneryId;
    	                        
	public function setSceneryId($sceneryId){
		$this->sceneryId = $sceneryId;
         $this->apiParas["sceneryId"] = $sceneryId;
	}

	public function getSceneryId(){
	  return $this->sceneryId;
	}

                            }





        
 

