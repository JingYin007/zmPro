<?php
class SkuPriceUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.sku.price.update";
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
                                                        		                                    	                   			private $skuId;
    	                                                            
	public function setSkuId($skuId){
		$this->skuId = $skuId;
		$this->apiParas["sku_id"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $outerId;
    	                                                            
	public function setOuterId($outerId){
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId(){
	  return $this->outerId;
	}

                        	                   			private $price;
    	                        
	public function setPrice($price){
		$this->price = $price;
		$this->apiParas["price"] = $price;
	}

	public function getPrice(){
	  return $this->price;
	}

                        	                   			private $tradeNo;
    	                                                            
	public function setTradeNo($tradeNo){
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo(){
	  return $this->tradeNo;
	}

                        	                   			private $marketPrice;
    	                                                            
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
		$this->apiParas["market_price"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

                        	                   			private $jdPrice;
    	                                                            
	public function setJdPrice($jdPrice){
		$this->jdPrice = $jdPrice;
		$this->apiParas["jd_price"] = $jdPrice;
	}

	public function getJdPrice(){
	  return $this->jdPrice;
	}

                            }





        
 

