<?php
class DspAdunitDirectionUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adunit.direction.update";
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
                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $groupDirection;
    	                        
	public function setGroupDirection($groupDirection){
		$this->groupDirection = $groupDirection;
         $this->apiParas["groupDirection"] = $groupDirection;
	}

	public function getGroupDirection(){
	  return $this->groupDirection;
	}

                        	                        	                                                    	}





        
 

