<?php
class VcItemNewProductCreateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.newProduct.create";
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
                                    	                        	                   			private $applyId;
    	                                                            
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

                        	                                            		                                    	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $cid1;
    	                        
	public function setCid1($cid1){
		$this->cid1 = $cid1;
         $this->apiParas["cid1"] = $cid1;
	}

	public function getCid1(){
	  return $this->cid1;
	}

                        	                   			private $cid2;
    	                        
	public function setCid2($cid2){
		$this->cid2 = $cid2;
         $this->apiParas["cid2"] = $cid2;
	}

	public function getCid2(){
	  return $this->cid2;
	}

                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $zhBrand;
    	                                                            
	public function setZhBrand($zhBrand){
		$this->zhBrand = $zhBrand;
         $this->apiParas["zh_brand"] = $zhBrand;
	}

	public function getZhBrand(){
	  return $this->zhBrand;
	}

                        	                   			private $enBrand;
    	                                                            
	public function setEnBrand($enBrand){
		$this->enBrand = $enBrand;
         $this->apiParas["en_brand"] = $enBrand;
	}

	public function getEnBrand(){
	  return $this->enBrand;
	}

                        	                   			private $model;
    	                        
	public function setModel($model){
		$this->model = $model;
         $this->apiParas["model"] = $model;
	}

	public function getModel(){
	  return $this->model;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $webSite;
    	                                                            
	public function setWebSite($webSite){
		$this->webSite = $webSite;
         $this->apiParas["web_site"] = $webSite;
	}

	public function getWebSite(){
	  return $this->webSite;
	}

                        	                   			private $originalPlace;
    	                                                            
	public function setOriginalPlace($originalPlace){
		$this->originalPlace = $originalPlace;
         $this->apiParas["original_place"] = $originalPlace;
	}

	public function getOriginalPlace(){
	  return $this->originalPlace;
	}

                        	                   			private $warranty;
    	                        
	public function setWarranty($warranty){
		$this->warranty = $warranty;
         $this->apiParas["warranty"] = $warranty;
	}

	public function getWarranty(){
	  return $this->warranty;
	}

                        	                   			private $shelfLife;
    	                                                            
	public function setShelfLife($shelfLife){
		$this->shelfLife = $shelfLife;
         $this->apiParas["shelf_life"] = $shelfLife;
	}

	public function getShelfLife(){
	  return $this->shelfLife;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $width;
    	                        
	public function setWidth($width){
		$this->width = $width;
         $this->apiParas["width"] = $width;
	}

	public function getWidth(){
	  return $this->width;
	}

                        	                   			private $height;
    	                        
	public function setHeight($height){
		$this->height = $height;
         $this->apiParas["height"] = $height;
	}

	public function getHeight(){
	  return $this->height;
	}

                        	                   			private $marketPrice;
    	                                                            
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
         $this->apiParas["market_price"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

                        	                   			private $purchasePrice;
    	                                                            
	public function setPurchasePrice($purchasePrice){
		$this->purchasePrice = $purchasePrice;
         $this->apiParas["purchase_price"] = $purchasePrice;
	}

	public function getPurchasePrice(){
	  return $this->purchasePrice;
	}

                        	                   			private $memberPrice;
    	                                                            
	public function setMemberPrice($memberPrice){
		$this->memberPrice = $memberPrice;
         $this->apiParas["member_price"] = $memberPrice;
	}

	public function getMemberPrice(){
	  return $this->memberPrice;
	}

                        	                   			private $salerCode;
    	                                                            
	public function setSalerCode($salerCode){
		$this->salerCode = $salerCode;
         $this->apiParas["saler_code"] = $salerCode;
	}

	public function getSalerCode(){
	  return $this->salerCode;
	}

                        	                   			private $purchaserCode;
    	                                                            
	public function setPurchaserCode($purchaserCode){
		$this->purchaserCode = $purchaserCode;
         $this->apiParas["purchaser_code"] = $purchaserCode;
	}

	public function getPurchaserCode(){
	  return $this->purchaserCode;
	}

                        	                   			private $upc;
    	                        
	public function setUpc($upc){
		$this->upc = $upc;
         $this->apiParas["upc"] = $upc;
	}

	public function getUpc(){
	  return $this->upc;
	}

                        	                   			private $packing;
    	                        
	public function setPacking($packing){
		$this->packing = $packing;
         $this->apiParas["packing"] = $packing;
	}

	public function getPacking(){
	  return $this->packing;
	}

                        	                   			private $packType;
    	                                                            
	public function setPackType($packType){
		$this->packType = $packType;
         $this->apiParas["pack_type"] = $packType;
	}

	public function getPackType(){
	  return $this->packType;
	}

                        	                   			private $skuUnit;
    	                                                            
	public function setSkuUnit($skuUnit){
		$this->skuUnit = $skuUnit;
         $this->apiParas["sku_unit"] = $skuUnit;
	}

	public function getSkuUnit(){
	  return $this->skuUnit;
	}

                        	                   			private $pkgInfo;
    	                                                            
	public function setPkgInfo($pkgInfo){
		$this->pkgInfo = $pkgInfo;
         $this->apiParas["pkg_info"] = $pkgInfo;
	}

	public function getPkgInfo(){
	  return $this->pkgInfo;
	}

                        	                   			private $itemNum;
    	                                                            
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["item_num"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $introHtml;
    	                                                            
	public function setIntroHtml($introHtml){
		$this->introHtml = $introHtml;
         $this->apiParas["intro_html"] = $introHtml;
	}

	public function getIntroHtml(){
	  return $this->introHtml;
	}

                        	                   			private $introMobile;
    	                                                            
	public function setIntroMobile($introMobile){
		$this->introMobile = $introMobile;
         $this->apiParas["intro_mobile"] = $introMobile;
	}

	public function getIntroMobile(){
	  return $this->introMobile;
	}

                        	                   			private $videoId;
    	                                                            
	public function setVideoId($videoId){
		$this->videoId = $videoId;
         $this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId(){
	  return $this->videoId;
	}

                                                                        		                                    	                   			private $wreadme;
    	                        
	public function setWreadme($wreadme){
		$this->wreadme = $wreadme;
         $this->apiParas["wreadme"] = $wreadme;
	}

	public function getWreadme(){
	  return $this->wreadme;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $pid;
                              public function setPid($pid ){
                 $this->pid=$pid;
                 $this->apiParas["pid"] = $pid;
              }

              public function getPid(){
              	return $this->pid;
              }
                                                                                                                                                                                                                                                                                                                                              private $vid;
                              public function setVid($vid ){
                 $this->vid=$vid;
                 $this->apiParas["vid"] = $vid;
              }

              public function getVid(){
              	return $this->vid;
              }
                                                                                                                                                                                                                                                                                                                                              private $remark;
                              public function setRemark($remark ){
                 $this->remark=$remark;
                 $this->apiParas["remark"] = $remark;
              }

              public function getRemark(){
              	return $this->remark;
              }
                                                                                                                                                                                                                                                                                                                                              private $vname;
                              public function setVname($vname ){
                 $this->vname=$vname;
                 $this->apiParas["vname"] = $vname;
              }

              public function getVname(){
              	return $this->vname;
              }
                                                                                                                                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $attId;
                              public function setAttId($attId ){
                 $this->attId=$attId;
                 $this->apiParas["att_id"] = $attId;
              }

              public function getAttId(){
              	return $this->attId;
              }
                                                                                                                                                                                                                                                                                                                                              private $values;
                              public function setValues($values ){
                 $this->values=$values;
                 $this->apiParas["values"] = $values;
              }

              public function getValues(){
              	return $this->values;
              }
                                                                                                                }





        
 

