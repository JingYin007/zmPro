<?php
class DspAdkcunitGoodspriceUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.goodsprice.update";
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
                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $inFee;
    	                        
	public function setInFee($inFee){
		$this->inFee = $inFee;
         $this->apiParas["inFee"] = $inFee;
	}

	public function getInFee(){
	  return $this->inFee;
	}

                        	                   			private $searchFee;
    	                        
	public function setSearchFee($searchFee){
		$this->searchFee = $searchFee;
         $this->apiParas["searchFee"] = $searchFee;
	}

	public function getSearchFee(){
	  return $this->searchFee;
	}

                        	                        	                        	                   			private $mobilePriceCoef;
    	                        
	public function setMobilePriceCoef($mobilePriceCoef){
		$this->mobilePriceCoef = $mobilePriceCoef;
         $this->apiParas["mobilePriceCoef"] = $mobilePriceCoef;
	}

	public function getMobilePriceCoef(){
	  return $this->mobilePriceCoef;
	}

}





        
 

