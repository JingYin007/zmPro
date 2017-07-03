<?php
class VcItemAdvertiseApplyCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.advertise.apply.create";
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

                        	                   			private $newWord;
    	                                                            
	public function setNewWord($newWord){
		$this->newWord = $newWord;
         $this->apiParas["new_word"] = $newWord;
	}

	public function getNewWord(){
	  return $this->newWord;
	}

                        	}





        
 

