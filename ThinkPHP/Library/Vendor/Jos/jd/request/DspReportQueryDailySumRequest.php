<?php
class DspReportQueryDailySumRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.report.queryDailySum";
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
                                                        		                                    	                   			private $startDay;
    	                        
	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $endDay;
    	                        
	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $dimension;
    	                        
	public function setDimension($dimension){
		$this->dimension = $dimension;
         $this->apiParas["dimension"] = $dimension;
	}

	public function getDimension(){
	  return $this->dimension;
	}

                        	                   			private $isTodayOr15Days;
    	                        
	public function setIsTodayOr15Days($isTodayOr15Days){
		$this->isTodayOr15Days = $isTodayOr15Days;
         $this->apiParas["isTodayOr15Days"] = $isTodayOr15Days;
	}

	public function getIsTodayOr15Days(){
	  return $this->isTodayOr15Days;
	}

                        	                   			private $isOrderOrClick;
    	                        
	public function setIsOrderOrClick($isOrderOrClick){
		$this->isOrderOrClick = $isOrderOrClick;
         $this->apiParas["isOrderOrClick"] = $isOrderOrClick;
	}

	public function getIsOrderOrClick(){
	  return $this->isOrderOrClick;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $id;
                              public function setId($id ){
                 $this->id=$id;
                 $this->apiParas["id"] = $id;
              }

              public function getId(){
              	return $this->id;
              }
                                                                                                                                                                                                                                                                                                                                              private $putType;
                              public function setPutType($putType ){
                 $this->putType=$putType;
                 $this->apiParas["putType"] = $putType;
              }

              public function getPutType(){
              	return $this->putType;
              }
                                                                                                                                                                                                                                                                                                                                              private $platform;
                              public function setPlatform($platform ){
                 $this->platform=$platform;
                 $this->apiParas["platform"] = $platform;
              }

              public function getPlatform(){
              	return $this->platform;
              }
                                                                                                                                        	                                                    	}





        
 

