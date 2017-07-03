<?php
class VenderDeptModifyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.dept.modify";
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
                                                        		                                    	                   			private $deptId;
    	                                                            
	public function setDeptId($deptId){
		$this->deptId = $deptId;
         $this->apiParas["dept_id"] = $deptId;
	}

	public function getDeptId(){
	  return $this->deptId;
	}

                        	                        	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                            }





        
 

