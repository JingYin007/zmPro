<?php
class WareAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "360buy.ware.add";
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
                                                        		                                    	                   			private $tradeNo;
    	                                                            
	public function setTradeNo($tradeNo){
		$this->tradeNo = $tradeNo;
		$this->apiParas["trade_no"] = $tradeNo;
	}

	public function getTradeNo(){
	  return $this->tradeNo;
	}

                        	                   			private $wareLocation;
    	                                                            
	public function setWareLocation($wareLocation){
		$this->wareLocation = $wareLocation;
		$this->apiParas["ware_location"] = $wareLocation;
	}

	public function getWareLocation(){
	  return $this->wareLocation;
	}

                        	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

                        	                   			private $shopCategory;
    	                                                            
	public function setShopCategory($shopCategory){
		$this->shopCategory = $shopCategory;
		$this->apiParas["shop_category"] = $shopCategory;
	}

	public function getShopCategory(){
	  return $this->shopCategory;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $upcCode;
    	                                                            
	public function setUpcCode($upcCode){
		$this->upcCode = $upcCode;
		$this->apiParas["upc_code"] = $upcCode;
	}

	public function getUpcCode(){
	  return $this->upcCode;
	}

                        	                   			private $optionType;
    	                                                            
	public function setOptionType($optionType){
		$this->optionType = $optionType;
		$this->apiParas["option_type"] = $optionType;
	}

	public function getOptionType(){
	  return $this->optionType;
	}

                        	                   			private $itemNum;
    	                                                            
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
		$this->apiParas["item_num"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $stockNum;
    	                                                            
	public function setStockNum($stockNum){
		$this->stockNum = $stockNum;
		$this->apiParas["stock_num"] = $stockNum;
	}

	public function getStockNum(){
	  return $this->stockNum;
	}

                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
		$this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $producter;
    	                        
	public function setProducter($producter){
		$this->producter = $producter;
		$this->apiParas["producter"] = $producter;
	}

	public function getProducter(){
	  return $this->producter;
	}

                        	                   			private $wrap;
    	                        
	public function setWrap($wrap){
		$this->wrap = $wrap;
		$this->apiParas["wrap"] = $wrap;
	}

	public function getWrap(){
	  return $this->wrap;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
		$this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $wide;
    	                        
	public function setWide($wide){
		$this->wide = $wide;
		$this->apiParas["wide"] = $wide;
	}

	public function getWide(){
	  return $this->wide;
	}

                        	                   			private $high;
    	                        
	public function setHigh($high){
		$this->high = $high;
		$this->apiParas["high"] = $high;
	}

	public function getHigh(){
	  return $this->high;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
		$this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $costPrice;
    	                                                            
	public function setCostPrice($costPrice){
		$this->costPrice = $costPrice;
		$this->apiParas["cost_price"] = $costPrice;
	}

	public function getCostPrice(){
	  return $this->costPrice;
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

                        	                   			private $notes;
    	                        
	public function setNotes($notes){
		$this->notes = $notes;
		$this->apiParas["notes"] = $notes;
	}

	public function getNotes(){
	  return $this->notes;
	}

                        	                   			private $wareImage;
    	                                                            
	public function setWareImage($wareImage){
		$this->wareImage = $wareImage;
		$this->apiParas["ware_image"] = $wareImage;
	}

	public function getWareImage(){
	  return $this->wareImage;
	}

                        	                   			private $packListing;
    	                                                            
	public function setPackListing($packListing){
		$this->packListing = $packListing;
		$this->apiParas["pack_listing"] = $packListing;
	}

	public function getPackListing(){
	  return $this->packListing;
	}

                        	                   			private $service;
    	                        
	public function setService($service){
		$this->service = $service;
		$this->apiParas["service"] = $service;
	}

	public function getService(){
	  return $this->service;
	}

                        	                   			private $skuProperties;
    	                                                            
	public function setSkuProperties($skuProperties){
		$this->skuProperties = $skuProperties;
		$this->apiParas["sku_properties"] = $skuProperties;
	}

	public function getSkuProperties(){
	  return $this->skuProperties;
	}

                        	                   			private $attributes;
    	                        
	public function setAttributes($attributes){
		$this->attributes = $attributes;
		$this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes(){
	  return $this->attributes;
	}

                        	                   			private $skuPrices;
    	                                                            
	public function setSkuPrices($skuPrices){
		$this->skuPrices = $skuPrices;
		$this->apiParas["sku_prices"] = $skuPrices;
	}

	public function getSkuPrices(){
	  return $this->skuPrices;
	}

                        	                   			private $skuStocks;
    	                                                            
	public function setSkuStocks($skuStocks){
		$this->skuStocks = $skuStocks;
		$this->apiParas["sku_stocks"] = $skuStocks;
	}

	public function getSkuStocks(){
	  return $this->skuStocks;
	}

                        	                   			private $propertyAlias;
    	                                                            
	public function setPropertyAlias($propertyAlias){
		$this->propertyAlias = $propertyAlias;
		$this->apiParas["property_alias"] = $propertyAlias;
	}

	public function getPropertyAlias(){
	  return $this->propertyAlias;
	}

                        	                   			private $outerId;
    	                                                            
	public function setOuterId($outerId){
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId(){
	  return $this->outerId;
	}

                        	                   			private $isPayFirst;
    	                                                                        
	public function setIsPayFirst($isPayFirst){
		$this->isPayFirst = $isPayFirst;
		$this->apiParas["is_pay_first"] = $isPayFirst;
	}

	public function getIsPayFirst(){
	  return $this->isPayFirst;
	}

                        	                   			private $isCanVat;
    	                                                                        
	public function setIsCanVat($isCanVat){
		$this->isCanVat = $isCanVat;
		$this->apiParas["is_can_vat"] = $isCanVat;
	}

	public function getIsCanVat(){
	  return $this->isCanVat;
	}

                        	                   			private $isImported;
    	                                                            
	public function setIsImported($isImported){
		$this->isImported = $isImported;
		$this->apiParas["is_imported"] = $isImported;
	}

	public function getIsImported(){
	  return $this->isImported;
	}

                        	                   			private $isHealthProduct;
    	                                                                        
	public function setIsHealthProduct($isHealthProduct){
		$this->isHealthProduct = $isHealthProduct;
		$this->apiParas["is_health_product"] = $isHealthProduct;
	}

	public function getIsHealthProduct(){
	  return $this->isHealthProduct;
	}

                        	                   			private $isShelfLife;
    	                                                                        
	public function setIsShelfLife($isShelfLife){
		$this->isShelfLife = $isShelfLife;
		$this->apiParas["is_shelf_life"] = $isShelfLife;
	}

	public function getIsShelfLife(){
	  return $this->isShelfLife;
	}

                        	                   			private $shelfLifeDays;
    	                                                                        
	public function setShelfLifeDays($shelfLifeDays){
		$this->shelfLifeDays = $shelfLifeDays;
		$this->apiParas["shelf_life_days"] = $shelfLifeDays;
	}

	public function getShelfLifeDays(){
	  return $this->shelfLifeDays;
	}

                        	                   			private $isSerialNo;
    	                                                                        
	public function setIsSerialNo($isSerialNo){
		$this->isSerialNo = $isSerialNo;
		$this->apiParas["is_serial_no"] = $isSerialNo;
	}

	public function getIsSerialNo(){
	  return $this->isSerialNo;
	}

                        	                   			private $isAppliancesCard;
    	                                                                        
	public function setIsAppliancesCard($isAppliancesCard){
		$this->isAppliancesCard = $isAppliancesCard;
		$this->apiParas["is_appliances_card"] = $isAppliancesCard;
	}

	public function getIsAppliancesCard(){
	  return $this->isAppliancesCard;
	}

                        	                   			private $isSpecialWet;
    	                                                                        
	public function setIsSpecialWet($isSpecialWet){
		$this->isSpecialWet = $isSpecialWet;
		$this->apiParas["is_special_wet"] = $isSpecialWet;
	}

	public function getIsSpecialWet(){
	  return $this->isSpecialWet;
	}

                        	                   			private $wareBigSmallModel;
    	                                                                                    
	public function setWareBigSmallModel($wareBigSmallModel){
		$this->wareBigSmallModel = $wareBigSmallModel;
		$this->apiParas["ware_big_small_model"] = $wareBigSmallModel;
	}

	public function getWareBigSmallModel(){
	  return $this->wareBigSmallModel;
	}

                        	                   			private $warePackType;
    	                                                                        
	public function setWarePackType($warePackType){
		$this->warePackType = $warePackType;
		$this->apiParas["ware_pack_type"] = $warePackType;
	}

	public function getWarePackType(){
	  return $this->warePackType;
	}

                        	                   			private $inputPids;
    	                                                            
	public function setInputPids($inputPids){
		$this->inputPids = $inputPids;
		$this->apiParas["input_pids"] = $inputPids;
	}

	public function getInputPids(){
	  return $this->inputPids;
	}

                        	                   			private $inputStrs;
    	                                                            
	public function setInputStrs($inputStrs){
		$this->inputStrs = $inputStrs;
		$this->apiParas["input_strs"] = $inputStrs;
	}

	public function getInputStrs(){
	  return $this->inputStrs;
	}

                        	                   			private $hasCheckCode;
    	                                                                        
	public function setHasCheckCode($hasCheckCode){
		$this->hasCheckCode = $hasCheckCode;
		$this->apiParas["has_check_code"] = $hasCheckCode;
	}

	public function getHasCheckCode(){
	  return $this->hasCheckCode;
	}

                        	                   			private $adContent;
    	                                                            
	public function setAdContent($adContent){
		$this->adContent = $adContent;
		$this->apiParas["ad_content"] = $adContent;
	}

	public function getAdContent(){
	  return $this->adContent;
	}

                        	                   			private $listTime;
    	                                                            
	public function setListTime($listTime){
		$this->listTime = $listTime;
		$this->apiParas["list_time"] = $listTime;
	}

	public function getListTime(){
	  return $this->listTime;
	}

                            }





        
 

