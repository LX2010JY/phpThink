<?php
	interface ITarget {
		public function requester();
	}
	//美元金额计算 这两个可以共用ITarget接口吗，一种货币就新建一个未免太麻烦
	class DollarCalc {
		private $dollar;
		private $product;
		private $service;
		private $rate = 1;

		public function requestCalc($productNow,$serviceNow) {
			$this->product = $productNow;
			$this->service = $serviceNow;
			$this->dollar = $this->product + $this->service;
			return $this->requestTotal();
		}
		public function requestTotal() {
			$this->dollar *= $this->rate;
			return $this->dollar;
		}
	}
	//欧元金额计算
	class EuroCalc {
		private $euro;
		private $product;
		private $service;
		public $rate = 1; #private 不可继承

		public function requestCalc($productNow,$serviceNow) {
			$this->product = $productNow;
			$this->service = $serviceNow;
			$this->euro = $this->product + $this->service;
			return $this->requestTotal();
		}
		public function requestTotal() {
			$this->euro *= $this->rate;
			return $this->euro;
		}
	}
	//欧元适配器
	class EuroAdapter extends EuroCalc implements ITarget {
		public function __construct() {
			$this->rate = $this->requester();
		}
		public function requester() {
			$this->rate = 0.8111;
			return $this->rate;
		}
	}
	class Client {
		private $eurorequest;
		private $dollarrequest;
		public function __construct() {
			$this->eurorequest = new EuroAdapter();
			$this->dollarrequest = new DollarCalc();
			echo 'Euro: '.$this->MakeAdapterRequest($this->eurorequest).'<br>';
			echo 'Dollar:$'.$this->MakeDollarRequest($this->dollarrequest).'<br>';
		}
		private function MakeAdapterRequest(ITarget $req) {
			return $req->requestCalc(200,10);
		}
		private function MakeDollarRequest(DollarCalc $req) {
			return $req->requestCalc(200,10);
		}
	}

	$worker = new Client();