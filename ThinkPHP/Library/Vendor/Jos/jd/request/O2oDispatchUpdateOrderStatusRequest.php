<?php
class O2oDispatchUpdateOrderStatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.o2o.dispatch.updateOrderStatus";
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
                                                        		                                    	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $accessToken;
    	                        
	public function setAccessToken($accessToken){
		$this->accessToken = $accessToken;
         $this->apiParas["accessToken"] = $accessToken;
	}

	public function getAccessToken(){
	  return $this->accessToken;
	}

                                                                        		                                    	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $orderStatus;
    	                                                            
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["order_status"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $dmId;
    	                                                            
	public function setDmId($dmId){
		$this->dmId = $dmId;
         $this->apiParas["dm_id"] = $dmId;
	}

	public function getDmId(){
	  return $this->dmId;
	}

                        	                   			private $dmName;
    	                                                            
	public function setDmName($dmName){
		$this->dmName = $dmName;
         $this->apiParas["dm_name"] = $dmName;
	}

	public function getDmName(){
	  return $this->dmName;
	}

                        	                   			private $dmMobile;
    	                                                            
	public function setDmMobile($dmMobile){
		$this->dmMobile = $dmMobile;
         $this->apiParas["dm_mobile"] = $dmMobile;
	}

	public function getDmMobile(){
	  return $this->dmMobile;
	}

                        	                   			private $dmLat;
    	                                                            
	public function setDmLat($dmLat){
		$this->dmLat = $dmLat;
         $this->apiParas["dm_lat"] = $dmLat;
	}

	public function getDmLat(){
	  return $this->dmLat;
	}

                        	                   			private $dmLng;
    	                                                            
	public function setDmLng($dmLng){
		$this->dmLng = $dmLng;
         $this->apiParas["dm_lng"] = $dmLng;
	}

	public function getDmLng(){
	  return $this->dmLng;
	}

                        	                   			private $updateTime;
    	                                                            
	public function setUpdateTime($updateTime){
		$this->updateTime = $updateTime;
         $this->apiParas["update_time"] = $updateTime;
	}

	public function getUpdateTime(){
	  return $this->updateTime;
	}

                            }





        
 

