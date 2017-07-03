<?php
class DspAdkcunitAdvanceduserinterestsUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.advanceduserinterests.update";
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
                                                        		                                    	                   			private $expenceRange;
    	                        
	public function setExpenceRange($expenceRange){
		$this->expenceRange = $expenceRange;
         $this->apiParas["expenceRange"] = $expenceRange;
	}

	public function getExpenceRange(){
	  return $this->expenceRange;
	}

                        	                   			private $priceBegin;
    	                        
	public function setPriceBegin($priceBegin){
		$this->priceBegin = $priceBegin;
         $this->apiParas["priceBegin"] = $priceBegin;
	}

	public function getPriceBegin(){
	  return $this->priceBegin;
	}

                        	                   			private $priceEnd;
    	                        
	public function setPriceEnd($priceEnd){
		$this->priceEnd = $priceEnd;
         $this->apiParas["priceEnd"] = $priceEnd;
	}

	public function getPriceEnd(){
	  return $this->priceEnd;
	}

                        	                   			private $actionBrowse;
    	                        
	public function setActionBrowse($actionBrowse){
		$this->actionBrowse = $actionBrowse;
         $this->apiParas["actionBrowse"] = $actionBrowse;
	}

	public function getActionBrowse(){
	  return $this->actionBrowse;
	}

                        	                   			private $actionBuy;
    	                        
	public function setActionBuy($actionBuy){
		$this->actionBuy = $actionBuy;
         $this->apiParas["actionBuy"] = $actionBuy;
	}

	public function getActionBuy(){
	  return $this->actionBuy;
	}

                        	                   			private $actionCycle;
    	                        
	public function setActionCycle($actionCycle){
		$this->actionCycle = $actionCycle;
         $this->apiParas["actionCycle"] = $actionCycle;
	}

	public function getActionCycle(){
	  return $this->actionCycle;
	}

                        	                   			private $actionCycleBuy;
    	                        
	public function setActionCycleBuy($actionCycleBuy){
		$this->actionCycleBuy = $actionCycleBuy;
         $this->apiParas["actionCycleBuy"] = $actionCycleBuy;
	}

	public function getActionCycleBuy(){
	  return $this->actionCycleBuy;
	}

                        	                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                                                    	}





        
 

