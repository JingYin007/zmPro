<?php
class WareAreaLimitUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.area.limit.update";
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
                                                        		                                    	                   			private $levs;
    	                        
	public function setLevs($levs){
		$this->levs = $levs;
		$this->apiParas["levs"] = $levs;
	}

	public function getLevs(){
	  return $this->levs;
	}

                        	                   			private $areaIds;
    	                                                            
	public function setAreaIds($areaIds){
		$this->areaIds = $areaIds;
		$this->apiParas["area_ids"] = $areaIds;
	}

	public function getAreaIds(){
	  return $this->areaIds;
	}

                        	                   			private $areaFids;
    	                                                            
	public function setAreaFids($areaFids){
		$this->areaFids = $areaFids;
		$this->apiParas["area_fids"] = $areaFids;
	}

	public function getAreaFids(){
	  return $this->areaFids;
	}

                        	                   			private $wareId;
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
		$this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
		$this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                            }





        
 

