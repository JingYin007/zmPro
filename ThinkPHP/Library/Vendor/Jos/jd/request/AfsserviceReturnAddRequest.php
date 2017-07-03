<?php
class AfsserviceReturnAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.return.add";
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
                                    	                                            		                                    	                   			private $shipWay;
    	                        
	public function setShipWay($shipWay){
		$this->shipWay = $shipWay;
         $this->apiParas["shipWay"] = $shipWay;
	}

	public function getShipWay(){
	  return $this->shipWay;
	}

                        	                   			private $shipWayName;
    	                        
	public function setShipWayName($shipWayName){
		$this->shipWayName = $shipWayName;
         $this->apiParas["shipWayName"] = $shipWayName;
	}

	public function getShipWayName(){
	  return $this->shipWayName;
	}

                        	                   			private $waybill;
    	                        
	public function setWaybill($waybill){
		$this->waybill = $waybill;
         $this->apiParas["waybill"] = $waybill;
	}

	public function getWaybill(){
	  return $this->waybill;
	}

                        	                   			private $partCodes;
    	                        
	public function setPartCodes($partCodes){
		$this->partCodes = $partCodes;
         $this->apiParas["partCodes"] = $partCodes;
	}

	public function getPartCodes(){
	  return $this->partCodes;
	}

                                                                        		                                    	                   			private $afsServiceId;
    	                        
	public function setAfsServiceId($afsServiceId){
		$this->afsServiceId = $afsServiceId;
         $this->apiParas["afsServiceId"] = $afsServiceId;
	}

	public function getAfsServiceId(){
	  return $this->afsServiceId;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $village;
    	                        
	public function setVillage($village){
		$this->village = $village;
         $this->apiParas["village"] = $village;
	}

	public function getVillage(){
	  return $this->village;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $zipCode;
    	                        
	public function setZipCode($zipCode){
		$this->zipCode = $zipCode;
         $this->apiParas["zipCode"] = $zipCode;
	}

	public function getZipCode(){
	  return $this->zipCode;
	}

                        	                   			private $consigneeName;
    	                        
	public function setConsigneeName($consigneeName){
		$this->consigneeName = $consigneeName;
         $this->apiParas["consigneeName"] = $consigneeName;
	}

	public function getConsigneeName(){
	  return $this->consigneeName;
	}

                        	                   			private $consigneeTel;
    	                        
	public function setConsigneeTel($consigneeTel){
		$this->consigneeTel = $consigneeTel;
         $this->apiParas["consigneeTel"] = $consigneeTel;
	}

	public function getConsigneeTel(){
	  return $this->consigneeTel;
	}

                        	                   			private $applayRemark;
    	                        
	public function setApplayRemark($applayRemark){
		$this->applayRemark = $applayRemark;
         $this->apiParas["applayRemark"] = $applayRemark;
	}

	public function getApplayRemark(){
	  return $this->applayRemark;
	}

                            }





        
 

