<?php
class PopLvyouDujiaOrderMessageConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.dujia.order.message.confirm";
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
                                                        		                                    	                   			private $messageId;
    	                        
	public function setMessageId($messageId){
		$this->messageId = $messageId;
         $this->apiParas["messageId"] = $messageId;
	}

	public function getMessageId(){
	  return $this->messageId;
	}

                        	                            }





        
 

