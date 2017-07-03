<?php
class VcItemPrimaryPicUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.primaryPic.update";
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
                                    	                                            		                                    	                   			private $applyId;
    	                                                            
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $path;
                              public function setPath($path ){
                 $this->path=$path;
                 $this->apiParas["path"] = $path;
              }

              public function getPath(){
              	return $this->path;
              }
                                                                                                                                                                    	}





        
 

