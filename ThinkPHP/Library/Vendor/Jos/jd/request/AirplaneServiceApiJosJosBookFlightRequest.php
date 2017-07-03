<?php
class AirplaneServiceApiJosJosBookFlightRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.airplane.service.api.jos.JosBookFlight";
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
                                                        		                                                        		                                    	                   			private $orderPrice;
    	                        
	public function setOrderPrice($orderPrice){
		$this->orderPrice = $orderPrice;
         $this->apiParas["orderPrice"] = $orderPrice;
	}

	public function getOrderPrice(){
	  return $this->orderPrice;
	}

                        	                   			private $userId;
    	                        
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["userId"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                        	                   			private $customerName;
    	                        
	public function setCustomerName($customerName){
		$this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
	}

	public function getCustomerName(){
	  return $this->customerName;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $userLevel;
    	                        
	public function setUserLevel($userLevel){
		$this->userLevel = $userLevel;
         $this->apiParas["userLevel"] = $userLevel;
	}

	public function getUserLevel(){
	  return $this->userLevel;
	}

                        	                   			private $clientIpAddress;
    	                        
	public function setClientIpAddress($clientIpAddress){
		$this->clientIpAddress = $clientIpAddress;
         $this->apiParas["clientIpAddress"] = $clientIpAddress;
	}

	public function getClientIpAddress(){
	  return $this->clientIpAddress;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $venderName;
    	                        
	public function setVenderName($venderName){
		$this->venderName = $venderName;
         $this->apiParas["venderName"] = $venderName;
	}

	public function getVenderName(){
	  return $this->venderName;
	}

                                                    	                   			private $isSafe;
    	                        
	public function setIsSafe($isSafe){
		$this->isSafe = $isSafe;
         $this->apiParas["isSafe"] = $isSafe;
	}

	public function getIsSafe(){
	  return $this->isSafe;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $tripType;
                              public function setTripType($tripType ){
                 $this->tripType=$tripType;
                 $this->apiParas["tripType"] = $tripType;
              }

              public function getTripType(){
              	return $this->tripType;
              }
                                                                                                                                                                                                                                                                                                                       private $departure;
                              public function setDeparture($departure ){
                 $this->departure=$departure;
                 $this->apiParas["departure"] = $departure;
              }

              public function getDeparture(){
              	return $this->departure;
              }
                                                                                                                                                                                                                                                                                                                       private $arrival;
                              public function setArrival($arrival ){
                 $this->arrival=$arrival;
                 $this->apiParas["arrival"] = $arrival;
              }

              public function getArrival(){
              	return $this->arrival;
              }
                                                                                                                                                                                                                                                                                                                       private $depdate;
                              public function setDepdate($depdate ){
                 $this->depdate=$depdate;
                 $this->apiParas["depdate"] = $depdate;
              }

              public function getDepdate(){
              	return $this->depdate;
              }
                                                                                                                                                                                                                                                                                                                       private $arrdate;
                              public function setArrdate($arrdate ){
                 $this->arrdate=$arrdate;
                 $this->apiParas["arrdate"] = $arrdate;
              }

              public function getArrdate(){
              	return $this->arrdate;
              }
                                                                                                                                                                                                                                                                                                                       private $deptime;
                              public function setDeptime($deptime ){
                 $this->deptime=$deptime;
                 $this->apiParas["deptime"] = $deptime;
              }

              public function getDeptime(){
              	return $this->deptime;
              }
                                                                                                                                                                                                                                                                                                                       private $arrtime;
                              public function setArrtime($arrtime ){
                 $this->arrtime=$arrtime;
                 $this->apiParas["arrtime"] = $arrtime;
              }

              public function getArrtime(){
              	return $this->arrtime;
              }
                                                                                                                                                                                                                                                                                                                       private $seatcode;
                              public function setSeatcode($seatcode ){
                 $this->seatcode=$seatcode;
                 $this->apiParas["seatcode"] = $seatcode;
              }

              public function getSeatcode(){
              	return $this->seatcode;
              }
                                                                                                                                                                                                                                                                                                                       private $airways;
                              public function setAirways($airways ){
                 $this->airways=$airways;
                 $this->apiParas["airways"] = $airways;
              }

              public function getAirways(){
              	return $this->airways;
              }
                                                                                                                                                                                                                                                                                                                       private $flightNo;
                              public function setFlightNo($flightNo ){
                 $this->flightNo=$flightNo;
                 $this->apiParas["flightNo"] = $flightNo;
              }

              public function getFlightNo(){
              	return $this->flightNo;
              }
                                                                                                                                                                                                                                                                                                                       private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                                                                                                                                                                                                       private $oiltax;
                              public function setOiltax($oiltax ){
                 $this->oiltax=$oiltax;
                 $this->apiParas["oiltax"] = $oiltax;
              }

              public function getOiltax(){
              	return $this->oiltax;
              }
                                                                                                                                                                                                                                                                                                                       private $buildfee;
                              public function setBuildfee($buildfee ){
                 $this->buildfee=$buildfee;
                 $this->apiParas["buildfee"] = $buildfee;
              }

              public function getBuildfee(){
              	return $this->buildfee;
              }
                                                                                                                                                                                                                                                                                                                       private $fareitemid;
                              public function setFareitemid($fareitemid ){
                 $this->fareitemid=$fareitemid;
                 $this->apiParas["fareitemid"] = $fareitemid;
              }

              public function getFareitemid(){
              	return $this->fareitemid;
              }
                                                                                                                                                                                                                                                                                                                       private $fullPrice;
                              public function setFullPrice($fullPrice ){
                 $this->fullPrice=$fullPrice;
                 $this->apiParas["fullPrice"] = $fullPrice;
              }

              public function getFullPrice(){
              	return $this->fullPrice;
              }
                                                                                                                                                                                                                                                                                                                       private $childOilTax;
                              public function setChildOilTax($childOilTax ){
                 $this->childOilTax=$childOilTax;
                 $this->apiParas["childOilTax"] = $childOilTax;
              }

              public function getChildOilTax(){
              	return $this->childOilTax;
              }
                                                                                                                                                                                                                                                                                                                       private $iOilTax;
                              public function setIOilTax($iOilTax ){
                 $this->iOilTax=$iOilTax;
                 $this->apiParas["iOilTax"] = $iOilTax;
              }

              public function getIOilTax(){
              	return $this->iOilTax;
              }
                                                                                                                                                                                                                                                                                                                       private $commisionPoint;
                              public function setCommisionPoint($commisionPoint ){
                 $this->commisionPoint=$commisionPoint;
                 $this->apiParas["commisionPoint"] = $commisionPoint;
              }

              public function getCommisionPoint(){
              	return $this->commisionPoint;
              }
                                                                                                                                                                                                                                                                                                                       private $policyId;
                              public function setPolicyId($policyId ){
                 $this->policyId=$policyId;
                 $this->apiParas["policyId"] = $policyId;
              }

              public function getPolicyId(){
              	return $this->policyId;
              }
                                                                                                                                                                                                                                                                                                                       private $venderPrice;
                              public function setVenderPrice($venderPrice ){
                 $this->venderPrice=$venderPrice;
                 $this->apiParas["venderPrice"] = $venderPrice;
              }

              public function getVenderPrice(){
              	return $this->venderPrice;
              }
                                                                                                                                                                                                                                                                                                                       private $childVenderPrice;
                              public function setChildVenderPrice($childVenderPrice ){
                 $this->childVenderPrice=$childVenderPrice;
                 $this->apiParas["childVenderPrice"] = $childVenderPrice;
              }

              public function getChildVenderPrice(){
              	return $this->childVenderPrice;
              }
                                                                                                                                                                                                                                                                                                                       private $childSalePrice;
                              public function setChildSalePrice($childSalePrice ){
                 $this->childSalePrice=$childSalePrice;
                 $this->apiParas["childSalePrice"] = $childSalePrice;
              }

              public function getChildSalePrice(){
              	return $this->childSalePrice;
              }
                                                                                                                                                                                                                                                                                                                       private $depCityCode;
                              public function setDepCityCode($depCityCode ){
                 $this->depCityCode=$depCityCode;
                 $this->apiParas["depCityCode"] = $depCityCode;
              }

              public function getDepCityCode(){
              	return $this->depCityCode;
              }
                                                                                                                                                                                                                                                                                                                       private $arrCityCode;
                              public function setArrCityCode($arrCityCode ){
                 $this->arrCityCode=$arrCityCode;
                 $this->apiParas["arrCityCode"] = $arrCityCode;
              }

              public function getArrCityCode(){
              	return $this->arrCityCode;
              }
                                                                                                                                                                                                                                                                                                                       private $depCityName;
                              public function setDepCityName($depCityName ){
                 $this->depCityName=$depCityName;
                 $this->apiParas["depCityName"] = $depCityName;
              }

              public function getDepCityName(){
              	return $this->depCityName;
              }
                                                                                                                                                                                                                                                                                                                       private $arrCityName;
                              public function setArrCityName($arrCityName ){
                 $this->arrCityName=$arrCityName;
                 $this->apiParas["arrCityName"] = $arrCityName;
              }

              public function getArrCityName(){
              	return $this->arrCityName;
              }
                                                                                                                                                                                                                                                                                                                       private $airwaysCn;
                              public function setAirwaysCn($airwaysCn ){
                 $this->airwaysCn=$airwaysCn;
                 $this->apiParas["airwaysCn"] = $airwaysCn;
              }

              public function getAirwaysCn(){
              	return $this->airwaysCn;
              }
                                                                                                                                                                                                                                                                                                                       private $isStop;
                              public function setIsStop($isStop ){
                 $this->isStop=$isStop;
                 $this->apiParas["isStop"] = $isStop;
              }

              public function getIsStop(){
              	return $this->isStop;
              }
                                                                                                                                                                                                                                                                                                                       private $stopCity;
                              public function setStopCity($stopCity ){
                 $this->stopCity=$stopCity;
                 $this->apiParas["stopCity"] = $stopCity;
              }

              public function getStopCity(){
              	return $this->stopCity;
              }
                                                                                                                                                                                                                                                                                                                       private $depairdrome;
                              public function setDepairdrome($depairdrome ){
                 $this->depairdrome=$depairdrome;
                 $this->apiParas["depairdrome"] = $depairdrome;
              }

              public function getDepairdrome(){
              	return $this->depairdrome;
              }
                                                                                                                                                                                                                                                                                                                       private $arrairdrome;
                              public function setArrairdrome($arrairdrome ){
                 $this->arrairdrome=$arrairdrome;
                 $this->apiParas["arrairdrome"] = $arrairdrome;
              }

              public function getArrairdrome(){
              	return $this->arrairdrome;
              }
                                                                                                                                                                                                                                                                                                                       private $discount;
                              public function setDiscount($discount ){
                 $this->discount=$discount;
                 $this->apiParas["discount"] = $discount;
              }

              public function getDiscount(){
              	return $this->discount;
              }
                                                                                                                                                                                                                                                                                                                       private $depTerminal;
                              public function setDepTerminal($depTerminal ){
                 $this->depTerminal=$depTerminal;
                 $this->apiParas["depTerminal"] = $depTerminal;
              }

              public function getDepTerminal(){
              	return $this->depTerminal;
              }
                                                                                                                                                                                                                                                                                                                       private $arrTerminal;
                              public function setArrTerminal($arrTerminal ){
                 $this->arrTerminal=$arrTerminal;
                 $this->apiParas["arrTerminal"] = $arrTerminal;
              }

              public function getArrTerminal(){
              	return $this->arrTerminal;
              }
                                                                                                                                                                                                                                                                                                                       private $total;
                              public function setTotal($total ){
                 $this->total=$total;
                 $this->apiParas["total"] = $total;
              }

              public function getTotal(){
              	return $this->total;
              }
                                                                                                                                                                                                                                                                                                                       private $ticketChange;
                              public function setTicketChange($ticketChange ){
                 $this->ticketChange=$ticketChange;
                 $this->apiParas["ticketChange"] = $ticketChange;
              }

              public function getTicketChange(){
              	return $this->ticketChange;
              }
                                                                                                                                                                                                                                                                                                                       private $ticketTurn;
                              public function setTicketTurn($ticketTurn ){
                 $this->ticketTurn=$ticketTurn;
                 $this->apiParas["ticketTurn"] = $ticketTurn;
              }

              public function getTicketTurn(){
              	return $this->ticketTurn;
              }
                                                                                                                                                                                                                                                                                                                       private $ticketBack;
                              public function setTicketBack($ticketBack ){
                 $this->ticketBack=$ticketBack;
                 $this->apiParas["ticketBack"] = $ticketBack;
              }

              public function getTicketBack(){
              	return $this->ticketBack;
              }
                                                                                                                                                                                                                                                                                                                       private $promotionId;
                              public function setPromotionId($promotionId ){
                 $this->promotionId=$promotionId;
                 $this->apiParas["promotionId"] = $promotionId;
              }

              public function getPromotionId(){
              	return $this->promotionId;
              }
                                                                                                                                                                                                                                                                                                                       private $originalPrice;
                              public function setOriginalPrice($originalPrice ){
                 $this->originalPrice=$originalPrice;
                 $this->apiParas["originalPrice"] = $originalPrice;
              }

              public function getOriginalPrice(){
              	return $this->originalPrice;
              }
                                                                                                                                                                                                                                                                                                                       private $discountId;
                              public function setDiscountId($discountId ){
                 $this->discountId=$discountId;
                 $this->apiParas["discountId"] = $discountId;
              }

              public function getDiscountId(){
              	return $this->discountId;
              }
                                                                                                                                                                                                                                                                                                                       private $saleDiscountType;
                              public function setSaleDiscountType($saleDiscountType ){
                 $this->saleDiscountType=$saleDiscountType;
                 $this->apiParas["saleDiscountType"] = $saleDiscountType;
              }

              public function getSaleDiscountType(){
              	return $this->saleDiscountType;
              }
                                                                                                                                                                                                                                                                                                                       private $productCode;
                              public function setProductCode($productCode ){
                 $this->productCode=$productCode;
                 $this->apiParas["productCode"] = $productCode;
              }

              public function getProductCode(){
              	return $this->productCode;
              }
                                                                                                                                                                                                                                                                                                                       private $beforeDiscount;
                              public function setBeforeDiscount($beforeDiscount ){
                 $this->beforeDiscount=$beforeDiscount;
                 $this->apiParas["beforeDiscount"] = $beforeDiscount;
              }

              public function getBeforeDiscount(){
              	return $this->beforeDiscount;
              }
                                                                                                                                                                                                                                                                                                                       private $afterDiscount;
                              public function setAfterDiscount($afterDiscount ){
                 $this->afterDiscount=$afterDiscount;
                 $this->apiParas["afterDiscount"] = $afterDiscount;
              }

              public function getAfterDiscount(){
              	return $this->afterDiscount;
              }
                                                                                                                                                                                                                                                                                                                       private $childSeatCode;
                              public function setChildSeatCode($childSeatCode ){
                 $this->childSeatCode=$childSeatCode;
                 $this->apiParas["childSeatCode"] = $childSeatCode;
              }

              public function getChildSeatCode(){
              	return $this->childSeatCode;
              }
                                                                                                                                                                                                                                                                                                                       private $childDiscount;
                              public function setChildDiscount($childDiscount ){
                 $this->childDiscount=$childDiscount;
                 $this->apiParas["childDiscount"] = $childDiscount;
              }

              public function getChildDiscount(){
              	return $this->childDiscount;
              }
                                                                                                                                                                                                                                                                                                                       private $flightinfo;
                              public function setFlightinfo($flightinfo ){
                 $this->flightinfo=$flightinfo;
                 $this->apiParas["flightinfo"] = $flightinfo;
              }

              public function getFlightinfo(){
              	return $this->flightinfo;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                        private $certtype;
                              public function setCerttype($certtype ){
                 $this->certtype=$certtype;
                 $this->apiParas["certtype"] = $certtype;
              }

              public function getCerttype(){
              	return $this->certtype;
              }
                                                                                                                                                                                                                                                                                                                       private $certid;
                              public function setCertid($certid ){
                 $this->certid=$certid;
                 $this->apiParas["certid"] = $certid;
              }

              public function getCertid(){
              	return $this->certid;
              }
                                                                                                                                                                                                                                                                                                                       private $psgname;
                              public function setPsgname($psgname ){
                 $this->psgname=$psgname;
                 $this->apiParas["psgname"] = $psgname;
              }

              public function getPsgname(){
              	return $this->psgname;
              }
                                                                                                                                                                                                                                                                                                                       private $psgsex;
                              public function setPsgsex($psgsex ){
                 $this->psgsex=$psgsex;
                 $this->apiParas["psgsex"] = $psgsex;
              }

              public function getPsgsex(){
              	return $this->psgsex;
              }
                                                                                                                                                                                                                                                                                                                       private $psgtype;
                              public function setPsgtype($psgtype ){
                 $this->psgtype=$psgtype;
                 $this->apiParas["psgtype"] = $psgtype;
              }

              public function getPsgtype(){
              	return $this->psgtype;
              }
                                                                                                                                                                                                                                                                                                                       private $psgbirthdate;
                              public function setPsgbirthdate($psgbirthdate ){
                 $this->psgbirthdate=$psgbirthdate;
                 $this->apiParas["psgbirthdate"] = $psgbirthdate;
              }

              public function getPsgbirthdate(){
              	return $this->psgbirthdate;
              }
                                                                                                                                                                                                                                                                                                                       private $mobileNo;
                              public function setMobileNo($mobileNo ){
                 $this->mobileNo=$mobileNo;
                 $this->apiParas["mobileNo"] = $mobileNo;
              }

              public function getMobileNo(){
              	return $this->mobileNo;
              }
                                                                                                                                                                                                                                                                                                                       private $insureType;
                              public function setInsureType($insureType ){
                 $this->insureType=$insureType;
                 $this->apiParas["insureType"] = $insureType;
              }

              public function getInsureType(){
              	return $this->insureType;
              }
                                                                                                                                                                                                                                                                                                                       private $insurecount;
                              public function setInsurecount($insurecount ){
                 $this->insurecount=$insurecount;
                 $this->apiParas["insurecount"] = $insurecount;
              }

              public function getInsurecount(){
              	return $this->insurecount;
              }
                                                                                                                                                                                                                                                                                                                       private $ticketPrice;
                              public function setTicketPrice($ticketPrice ){
                 $this->ticketPrice=$ticketPrice;
                 $this->apiParas["ticketPrice"] = $ticketPrice;
              }

              public function getTicketPrice(){
              	return $this->ticketPrice;
              }
                                                                                                                                                                                                                                                                                                                       private $tax;
                              public function setTax($tax ){
                 $this->tax=$tax;
                 $this->apiParas["tax"] = $tax;
              }

              public function getTax(){
              	return $this->tax;
              }
                                                                                                                                                                                                    		                                    	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $tele;
    	                        
	public function setTele($tele){
		$this->tele = $tele;
         $this->apiParas["tele"] = $tele;
	}

	public function getTele(){
	  return $this->tele;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $fax;
    	                        
	public function setFax($fax){
		$this->fax = $fax;
         $this->apiParas["fax"] = $fax;
	}

	public function getFax(){
	  return $this->fax;
	}

                                                                        		                                    	                   			private $dispatchId;
    	                        
	public function setDispatchId($dispatchId){
		$this->dispatchId = $dispatchId;
         $this->apiParas["dispatchId"] = $dispatchId;
	}

	public function getDispatchId(){
	  return $this->dispatchId;
	}

                        	                   			private $deliverytype;
    	                        
	public function setDeliverytype($deliverytype){
		$this->deliverytype = $deliverytype;
         $this->apiParas["deliverytype"] = $deliverytype;
	}

	public function getDeliverytype(){
	  return $this->deliverytype;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $tele;
    	                        
	public function setTele($tele){
		$this->tele = $tele;
         $this->apiParas["tele"] = $tele;
	}

	public function getTele(){
	  return $this->tele;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $fax;
    	                        
	public function setFax($fax){
		$this->fax = $fax;
         $this->apiParas["fax"] = $fax;
	}

	public function getFax(){
	  return $this->fax;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $district;
    	                        
	public function setDistrict($district){
		$this->district = $district;
         $this->apiParas["district"] = $district;
	}

	public function getDistrict(){
	  return $this->district;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $postcode;
    	                        
	public function setPostcode($postcode){
		$this->postcode = $postcode;
         $this->apiParas["postcode"] = $postcode;
	}

	public function getPostcode(){
	  return $this->postcode;
	}

                        	                   			private $bookdelivdate;
    	                        
	public function setBookdelivdate($bookdelivdate){
		$this->bookdelivdate = $bookdelivdate;
         $this->apiParas["bookdelivdate"] = $bookdelivdate;
	}

	public function getBookdelivdate(){
	  return $this->bookdelivdate;
	}

                        	                   			private $bookdelivtime;
    	                        
	public function setBookdelivtime($bookdelivtime){
		$this->bookdelivtime = $bookdelivtime;
         $this->apiParas["bookdelivtime"] = $bookdelivtime;
	}

	public function getBookdelivtime(){
	  return $this->bookdelivtime;
	}

                        	                   			private $needinvoice;
    	                        
	public function setNeedinvoice($needinvoice){
		$this->needinvoice = $needinvoice;
         $this->apiParas["needinvoice"] = $needinvoice;
	}

	public function getNeedinvoice(){
	  return $this->needinvoice;
	}

                        	                   			private $travelSkyId;
    	                        
	public function setTravelSkyId($travelSkyId){
		$this->travelSkyId = $travelSkyId;
         $this->apiParas["travelSkyId"] = $travelSkyId;
	}

	public function getTravelSkyId(){
	  return $this->travelSkyId;
	}

                        	                   			private $insurInvoice;
    	                        
	public function setInsurInvoice($insurInvoice){
		$this->insurInvoice = $insurInvoice;
         $this->apiParas["insurInvoice"] = $insurInvoice;
	}

	public function getInsurInvoice(){
	  return $this->insurInvoice;
	}

                                                                        		                                    	                   			private $onlineMoney;
    	                        
	public function setOnlineMoney($onlineMoney){
		$this->onlineMoney = $onlineMoney;
         $this->apiParas["onlineMoney"] = $onlineMoney;
	}

	public function getOnlineMoney(){
	  return $this->onlineMoney;
	}

                        	                   			private $isCouponJing;
    	                        
	public function setIsCouponJing($isCouponJing){
		$this->isCouponJing = $isCouponJing;
         $this->apiParas["isCouponJing"] = $isCouponJing;
	}

	public function getIsCouponJing(){
	  return $this->isCouponJing;
	}

                        	                   			private $isCouponDong;
    	                        
	public function setIsCouponDong($isCouponDong){
		$this->isCouponDong = $isCouponDong;
         $this->apiParas["isCouponDong"] = $isCouponDong;
	}

	public function getIsCouponDong(){
	  return $this->isCouponDong;
	}

                        	                   			private $couponJingIds;
    	                        
	public function setCouponJingIds($couponJingIds){
		$this->couponJingIds = $couponJingIds;
         $this->apiParas["couponJingIds"] = $couponJingIds;
	}

	public function getCouponJingIds(){
	  return $this->couponJingIds;
	}

                        	                   			private $couponDongIds;
    	                        
	public function setCouponDongIds($couponDongIds){
		$this->couponDongIds = $couponDongIds;
         $this->apiParas["couponDongIds"] = $couponDongIds;
	}

	public function getCouponDongIds(){
	  return $this->couponDongIds;
	}

                        	                   			private $couponJingMoney;
    	                        
	public function setCouponJingMoney($couponJingMoney){
		$this->couponJingMoney = $couponJingMoney;
         $this->apiParas["couponJingMoney"] = $couponJingMoney;
	}

	public function getCouponJingMoney(){
	  return $this->couponJingMoney;
	}

                        	                   			private $couponDongMoney;
    	                        
	public function setCouponDongMoney($couponDongMoney){
		$this->couponDongMoney = $couponDongMoney;
         $this->apiParas["couponDongMoney"] = $couponDongMoney;
	}

	public function getCouponDongMoney(){
	  return $this->couponDongMoney;
	}

                        	                   			private $balanceMoney;
    	                        
	public function setBalanceMoney($balanceMoney){
		$this->balanceMoney = $balanceMoney;
         $this->apiParas["balanceMoney"] = $balanceMoney;
	}

	public function getBalanceMoney(){
	  return $this->balanceMoney;
	}

                        	                   			private $isBalance;
    	                        
	public function setIsBalance($isBalance){
		$this->isBalance = $isBalance;
         $this->apiParas["isBalance"] = $isBalance;
	}

	public function getIsBalance(){
	  return $this->isBalance;
	}

                        	                   			private $paymentPassword;
    	                        
	public function setPaymentPassword($paymentPassword){
		$this->paymentPassword = $paymentPassword;
         $this->apiParas["paymentPassword"] = $paymentPassword;
	}

	public function getPaymentPassword(){
	  return $this->paymentPassword;
	}

                                                    	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                   			private $sourceType;
    	                        
	public function setSourceType($sourceType){
		$this->sourceType = $sourceType;
         $this->apiParas["sourceType"] = $sourceType;
	}

	public function getSourceType(){
	  return $this->sourceType;
	}

                        	                   			private $userName;
    	                        
	public function setUserName($userName){
		$this->userName = $userName;
         $this->apiParas["userName"] = $userName;
	}

	public function getUserName(){
	  return $this->userName;
	}

                        	                   			private $ipAddress;
    	                        
	public function setIpAddress($ipAddress){
		$this->ipAddress = $ipAddress;
         $this->apiParas["ipAddress"] = $ipAddress;
	}

	public function getIpAddress(){
	  return $this->ipAddress;
	}

                        	                   			private $orderPrice;
    	                        
	public function setOrderPrice($orderPrice){
		$this->orderPrice = $orderPrice;
         $this->apiParas["orderPrice"] = $orderPrice;
	}

	public function getOrderPrice(){
	  return $this->orderPrice;
	}

                        	                   			private $orderCd;
    	                        
	public function setOrderCd($orderCd){
		$this->orderCd = $orderCd;
         $this->apiParas["orderCd"] = $orderCd;
	}

	public function getOrderCd(){
	  return $this->orderCd;
	}

                        	                   			private $uuid;
    	                        
	public function setUuid($uuid){
		$this->uuid = $uuid;
         $this->apiParas["uuid"] = $uuid;
	}

	public function getUuid(){
	  return $this->uuid;
	}

                        	                   			private $payType;
    	                        
	public function setPayType($payType){
		$this->payType = $payType;
         $this->apiParas["payType"] = $payType;
	}

	public function getPayType(){
	  return $this->payType;
	}

                        	                   			private $paymentPassword;
    	                        
	public function setPaymentPassword($paymentPassword){
		$this->paymentPassword = $paymentPassword;
         $this->apiParas["paymentPassword"] = $paymentPassword;
	}

	public function getPaymentPassword(){
	  return $this->paymentPassword;
	}

                            }





        
 

