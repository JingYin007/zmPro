<?php
class PopLvyouDujiaAreaFindAreaInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.area.findAreaInfo";
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
                                                        		                                    	                   			private $areaType;
    	                        
	public function setAreaType($areaType){
		$this->areaType = $areaType;
         $this->apiParas["areaType"] = $areaType;
	}

	public function getAreaType(){
	  return $this->areaType;
	}

                        	                            }





        
 

