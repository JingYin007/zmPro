<?php
class VenderRoleGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.role.get";
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
                                                        		                                    	                   			private $roleId;
    	                                                            
	public function setRoleId($roleId){
		$this->roleId = $roleId;
         $this->apiParas["role_id"] = $roleId;
	}

	public function getRoleId(){
	  return $this->roleId;
	}

                        	                        	                            }





        
 

