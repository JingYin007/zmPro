<?php
class PopLvyouJingdianChargeItemAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.jingdian.charge.item.add";
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
                                                        		                                    	                        	                   			private $jingdianId;
    	                        
	public function setJingdianId($jingdianId){
		$this->jingdianId = $jingdianId;
         $this->apiParas["jingdianId"] = $jingdianId;
	}

	public function getJingdianId(){
	  return $this->jingdianId;
	}

                        	                   			private $chargeItemName;
    	                        
	public function setChargeItemName($chargeItemName){
		$this->chargeItemName = $chargeItemName;
         $this->apiParas["chargeItemName"] = $chargeItemName;
	}

	public function getChargeItemName(){
	  return $this->chargeItemName;
	}

                        	                   			private $ticketKindName;
    	                        
	public function setTicketKindName($ticketKindName){
		$this->ticketKindName = $ticketKindName;
         $this->apiParas["ticketKindName"] = $ticketKindName;
	}

	public function getTicketKindName(){
	  return $this->ticketKindName;
	}

                        	                   			private $marketPrice;
    	                        
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
         $this->apiParas["marketPrice"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

                            }





        
 

