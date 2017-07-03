<?php
class PopLvyouJingdianInfoUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.lvyou.jingdian.info.update";
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

                        	                   			private $jingdianName;
    	                        
	public function setJingdianName($jingdianName){
		$this->jingdianName = $jingdianName;
         $this->apiParas["jingdianName"] = $jingdianName;
	}

	public function getJingdianName(){
	  return $this->jingdianName;
	}

                        	                   			private $nameEntireEn;
    	                        
	public function setNameEntireEn($nameEntireEn){
		$this->nameEntireEn = $nameEntireEn;
         $this->apiParas["nameEntireEn"] = $nameEntireEn;
	}

	public function getNameEntireEn(){
	  return $this->nameEntireEn;
	}

                        	                   			private $nameSimpleEn;
    	                        
	public function setNameSimpleEn($nameSimpleEn){
		$this->nameSimpleEn = $nameSimpleEn;
         $this->apiParas["nameSimpleEn"] = $nameSimpleEn;
	}

	public function getNameSimpleEn(){
	  return $this->nameSimpleEn;
	}

                        	                   			private $jingdianSubject;
    	                        
	public function setJingdianSubject($jingdianSubject){
		$this->jingdianSubject = $jingdianSubject;
         $this->apiParas["jingdianSubject"] = $jingdianSubject;
	}

	public function getJingdianSubject(){
	  return $this->jingdianSubject;
	}

                        	                   			private $jingdianGrade;
    	                        
	public function setJingdianGrade($jingdianGrade){
		$this->jingdianGrade = $jingdianGrade;
         $this->apiParas["jingdianGrade"] = $jingdianGrade;
	}

	public function getJingdianGrade(){
	  return $this->jingdianGrade;
	}

                        	                   			private $jingdianOpentimeDesc;
    	                        
	public function setJingdianOpentimeDesc($jingdianOpentimeDesc){
		$this->jingdianOpentimeDesc = $jingdianOpentimeDesc;
         $this->apiParas["jingdianOpentimeDesc"] = $jingdianOpentimeDesc;
	}

	public function getJingdianOpentimeDesc(){
	  return $this->jingdianOpentimeDesc;
	}

                        	                   			private $jingdianTelephone;
    	                        
	public function setJingdianTelephone($jingdianTelephone){
		$this->jingdianTelephone = $jingdianTelephone;
         $this->apiParas["jingdianTelephone"] = $jingdianTelephone;
	}

	public function getJingdianTelephone(){
	  return $this->jingdianTelephone;
	}

                        	                   			private $jingdianOneCategoryId;
    	                        
	public function setJingdianOneCategoryId($jingdianOneCategoryId){
		$this->jingdianOneCategoryId = $jingdianOneCategoryId;
         $this->apiParas["jingdianOneCategoryId"] = $jingdianOneCategoryId;
	}

	public function getJingdianOneCategoryId(){
	  return $this->jingdianOneCategoryId;
	}

                        	                   			private $jingdianTwoCategoryId;
    	                        
	public function setJingdianTwoCategoryId($jingdianTwoCategoryId){
		$this->jingdianTwoCategoryId = $jingdianTwoCategoryId;
         $this->apiParas["jingdianTwoCategoryId"] = $jingdianTwoCategoryId;
	}

	public function getJingdianTwoCategoryId(){
	  return $this->jingdianTwoCategoryId;
	}

                        	                   			private $jingdianThreeCategoryId;
    	                        
	public function setJingdianThreeCategoryId($jingdianThreeCategoryId){
		$this->jingdianThreeCategoryId = $jingdianThreeCategoryId;
         $this->apiParas["jingdianThreeCategoryId"] = $jingdianThreeCategoryId;
	}

	public function getJingdianThreeCategoryId(){
	  return $this->jingdianThreeCategoryId;
	}

                        	                   			private $jingdianFourCategoryId;
    	                        
	public function setJingdianFourCategoryId($jingdianFourCategoryId){
		$this->jingdianFourCategoryId = $jingdianFourCategoryId;
         $this->apiParas["jingdianFourCategoryId"] = $jingdianFourCategoryId;
	}

	public function getJingdianFourCategoryId(){
	  return $this->jingdianFourCategoryId;
	}

                        	                   			private $countryId;
    	                        
	public function setCountryId($countryId){
		$this->countryId = $countryId;
         $this->apiParas["countryId"] = $countryId;
	}

	public function getCountryId(){
	  return $this->countryId;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $areaId;
    	                        
	public function setAreaId($areaId){
		$this->areaId = $areaId;
         $this->apiParas["areaId"] = $areaId;
	}

	public function getAreaId(){
	  return $this->areaId;
	}

                        	                   			private $addressDesc;
    	                        
	public function setAddressDesc($addressDesc){
		$this->addressDesc = $addressDesc;
         $this->apiParas["addressDesc"] = $addressDesc;
	}

	public function getAddressDesc(){
	  return $this->addressDesc;
	}

                        	                   			private $jingdianDesc;
    	                        
	public function setJingdianDesc($jingdianDesc){
		$this->jingdianDesc = $jingdianDesc;
         $this->apiParas["jingdianDesc"] = $jingdianDesc;
	}

	public function getJingdianDesc(){
	  return $this->jingdianDesc;
	}

                            }





        
 

