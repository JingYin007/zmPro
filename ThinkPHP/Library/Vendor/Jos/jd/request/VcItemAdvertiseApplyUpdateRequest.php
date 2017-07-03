<?php
class VcItemAdvertiseApplyUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.advertise.apply.update";
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
                                    	                        	                   			private $newWord;
    	                                                            
	public function setNewWord($newWord){
		$this->newWord = $newWord;
         $this->apiParas["new_word"] = $newWord;
	}

	public function getNewWord(){
	  return $this->newWord;
	}

                        	                   			private $applyId;
    	                                                            
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

                        	}





        
 

