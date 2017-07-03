<?php
class AirplaneServiceApiJosJosQueryFlightRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.airplane.service.api.jos.JosQueryFlight";
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
                                                        		                                    	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $airways;
    	                        
	public function setAirways($airways){
		$this->airways = $airways;
         $this->apiParas["airways"] = $airways;
	}

	public function getAirways(){
	  return $this->airways;
	}

                        	                   			private $arrCity;
    	                        
	public function setArrCity($arrCity){
		$this->arrCity = $arrCity;
         $this->apiParas["arrCity"] = $arrCity;
	}

	public function getArrCity(){
	  return $this->arrCity;
	}

                        	                   			private $arrDate;
    	                        
	public function setArrDate($arrDate){
		$this->arrDate = $arrDate;
         $this->apiParas["arrDate"] = $arrDate;
	}

	public function getArrDate(){
	  return $this->arrDate;
	}

                        	                   			private $arrTime;
    	                        
	public function setArrTime($arrTime){
		$this->arrTime = $arrTime;
         $this->apiParas["arrTime"] = $arrTime;
	}

	public function getArrTime(){
	  return $this->arrTime;
	}

                        	                   			private $classNo;
    	                        
	public function setClassNo($classNo){
		$this->classNo = $classNo;
         $this->apiParas["classNo"] = $classNo;
	}

	public function getClassNo(){
	  return $this->classNo;
	}

                        	                   			private $depCity;
    	                        
	public function setDepCity($depCity){
		$this->depCity = $depCity;
         $this->apiParas["depCity"] = $depCity;
	}

	public function getDepCity(){
	  return $this->depCity;
	}

                        	                   			private $depDate;
    	                        
	public function setDepDate($depDate){
		$this->depDate = $depDate;
         $this->apiParas["depDate"] = $depDate;
	}

	public function getDepDate(){
	  return $this->depDate;
	}

                        	                   			private $depTime;
    	                        
	public function setDepTime($depTime){
		$this->depTime = $depTime;
         $this->apiParas["depTime"] = $depTime;
	}

	public function getDepTime(){
	  return $this->depTime;
	}

                        	                   			private $lineType;
    	                        
	public function setLineType($lineType){
		$this->lineType = $lineType;
         $this->apiParas["lineType"] = $lineType;
	}

	public function getLineType(){
	  return $this->lineType;
	}

                        	                   			private $queryModule;
    	                        
	public function setQueryModule($queryModule){
		$this->queryModule = $queryModule;
         $this->apiParas["queryModule"] = $queryModule;
	}

	public function getQueryModule(){
	  return $this->queryModule;
	}

                        	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                   			private $clientVersion;
    	                        
	public function setClientVersion($clientVersion){
		$this->clientVersion = $clientVersion;
         $this->apiParas["clientVersion"] = $clientVersion;
	}

	public function getClientVersion(){
	  return $this->clientVersion;
	}

                        	                   			private $goTime;
    	                        
	public function setGoTime($goTime){
		$this->goTime = $goTime;
         $this->apiParas["goTime"] = $goTime;
	}

	public function getGoTime(){
	  return $this->goTime;
	}

                        	                   			private $backTime;
    	                        
	public function setBackTime($backTime){
		$this->backTime = $backTime;
         $this->apiParas["backTime"] = $backTime;
	}

	public function getBackTime(){
	  return $this->backTime;
	}

                        	                   			private $oneBox;
    	                        
	public function setOneBox($oneBox){
		$this->oneBox = $oneBox;
         $this->apiParas["oneBox"] = $oneBox;
	}

	public function getOneBox(){
	  return $this->oneBox;
	}

                        	                   			private $queryType;
    	                        
	public function setQueryType($queryType){
		$this->queryType = $queryType;
         $this->apiParas["queryType"] = $queryType;
	}

	public function getQueryType(){
	  return $this->queryType;
	}

                        	                   			private $flightNo;
    	                        
	public function setFlightNo($flightNo){
		$this->flightNo = $flightNo;
         $this->apiParas["flightNo"] = $flightNo;
	}

	public function getFlightNo(){
	  return $this->flightNo;
	}

                        	                   			private $bookingClass;
    	                        
	public function setBookingClass($bookingClass){
		$this->bookingClass = $bookingClass;
         $this->apiParas["bookingClass"] = $bookingClass;
	}

	public function getBookingClass(){
	  return $this->bookingClass;
	}

                        	                   			private $secondQueryFlag;
    	                        
	public function setSecondQueryFlag($secondQueryFlag){
		$this->secondQueryFlag = $secondQueryFlag;
         $this->apiParas["secondQueryFlag"] = $secondQueryFlag;
	}

	public function getSecondQueryFlag(){
	  return $this->secondQueryFlag;
	}

                        	                   			private $queryAdtFlag;
    	                        
	public function setQueryAdtFlag($queryAdtFlag){
		$this->queryAdtFlag = $queryAdtFlag;
         $this->apiParas["queryAdtFlag"] = $queryAdtFlag;
	}

	public function getQueryAdtFlag(){
	  return $this->queryAdtFlag;
	}

                        	                   			private $queryAdtNum;
    	                        
	public function setQueryAdtNum($queryAdtNum){
		$this->queryAdtNum = $queryAdtNum;
         $this->apiParas["queryAdtNum"] = $queryAdtNum;
	}

	public function getQueryAdtNum(){
	  return $this->queryAdtNum;
	}

                        	                   			private $userPin;
    	                        
	public function setUserPin($userPin){
		$this->userPin = $userPin;
         $this->apiParas["userPin"] = $userPin;
	}

	public function getUserPin(){
	  return $this->userPin;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $sortType;
    	                        
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sortType"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                            }





        
 

