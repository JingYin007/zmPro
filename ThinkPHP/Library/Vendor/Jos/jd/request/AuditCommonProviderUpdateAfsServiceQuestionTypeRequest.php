<?php
class AuditCommonProviderUpdateAfsServiceQuestionTypeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.AuditCommonProvider.updateAfsServiceQuestionType";
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
                                    	                   			private $afsServiceIds;
    	                        
	public function setAfsServiceIds($afsServiceIds){
		$this->afsServiceIds = $afsServiceIds;
         $this->apiParas["afsServiceIds"] = $afsServiceIds;
	}

	public function getAfsServiceIds(){
	  return $this->afsServiceIds;
	}

                        	                   			private $questionTypeCid1;
    	                        
	public function setQuestionTypeCid1($questionTypeCid1){
		$this->questionTypeCid1 = $questionTypeCid1;
         $this->apiParas["questionTypeCid1"] = $questionTypeCid1;
	}

	public function getQuestionTypeCid1(){
	  return $this->questionTypeCid1;
	}

                        	                   			private $questionTypeCid2;
    	                        
	public function setQuestionTypeCid2($questionTypeCid2){
		$this->questionTypeCid2 = $questionTypeCid2;
         $this->apiParas["questionTypeCid2"] = $questionTypeCid2;
	}

	public function getQuestionTypeCid2(){
	  return $this->questionTypeCid2;
	}

                        	                   			private $customerExpect;
    	                        
	public function setCustomerExpect($customerExpect){
		$this->customerExpect = $customerExpect;
         $this->apiParas["customerExpect"] = $customerExpect;
	}

	public function getCustomerExpect(){
	  return $this->customerExpect;
	}

                                            		                                    	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $operatorNick;
    	                        
	public function setOperatorNick($operatorNick){
		$this->operatorNick = $operatorNick;
         $this->apiParas["operatorNick"] = $operatorNick;
	}

	public function getOperatorNick(){
	  return $this->operatorNick;
	}

                        	                   			private $operatorRemark;
    	                        
	public function setOperatorRemark($operatorRemark){
		$this->operatorRemark = $operatorRemark;
         $this->apiParas["operatorRemark"] = $operatorRemark;
	}

	public function getOperatorRemark(){
	  return $this->operatorRemark;
	}

                        	                   			private $operatorDate;
    	                        
	public function setOperatorDate($operatorDate){
		$this->operatorDate = $operatorDate;
         $this->apiParas["operatorDate"] = $operatorDate;
	}

	public function getOperatorDate(){
	  return $this->operatorDate;
	}

                        	                   			private $platformSrc;
    	                        
	public function setPlatformSrc($platformSrc){
		$this->platformSrc = $platformSrc;
         $this->apiParas["platformSrc"] = $platformSrc;
	}

	public function getPlatformSrc(){
	  return $this->platformSrc;
	}

                            }





        
 

