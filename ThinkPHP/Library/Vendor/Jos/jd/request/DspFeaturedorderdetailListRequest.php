<?php
class DspFeaturedorderdetailListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.featuredorderdetail.list";
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
                                                        		                                    	                        	                        	                   	                    		private $mySelfList;
    	                        
	public function setMySelfList($mySelfList){
		$this->mySelfList = $mySelfList;
         $this->apiParas["mySelfList"] = $mySelfList;
	}

	public function getMySelfList(){
	  return $this->mySelfList;
	}

                        	                   			private $mediaid;
    	                        
	public function setMediaid($mediaid){
		$this->mediaid = $mediaid;
         $this->apiParas["mediaid"] = $mediaid;
	}

	public function getMediaid(){
	  return $this->mediaid;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $adgroupid;
    	                        
	public function setAdgroupid($adgroupid){
		$this->adgroupid = $adgroupid;
         $this->apiParas["adgroupid"] = $adgroupid;
	}

	public function getAdgroupid(){
	  return $this->adgroupid;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $clickStartTime;
    	                        
	public function setClickStartTime($clickStartTime){
		$this->clickStartTime = $clickStartTime;
         $this->apiParas["clickStartTime"] = $clickStartTime;
	}

	public function getClickStartTime(){
	  return $this->clickStartTime;
	}

                        	                   			private $clickEndTime;
    	                        
	public function setClickEndTime($clickEndTime){
		$this->clickEndTime = $clickEndTime;
         $this->apiParas["clickEndTime"] = $clickEndTime;
	}

	public function getClickEndTime(){
	  return $this->clickEndTime;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $unionid;
    	                        
	public function setUnionid($unionid){
		$this->unionid = $unionid;
         $this->apiParas["unionid"] = $unionid;
	}

	public function getUnionid(){
	  return $this->unionid;
	}

                        	                   			private $realTime;
    	                        
	public function setRealTime($realTime){
		$this->realTime = $realTime;
         $this->apiParas["realTime"] = $realTime;
	}

	public function getRealTime(){
	  return $this->realTime;
	}

                                                                        		                                    	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

