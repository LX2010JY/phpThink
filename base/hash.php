<?php
	class hashTable {
		private $collection;
		private $size = 100;

		//初始化哈希表大小
		public function __construct($size='') {
			$size = is_int($size) ? $size : $this->size;
			$this->collection = new SplFixedArray($size); //这是一个和C语言数组一样的数组，已连续数字作为键值，长度固定
		}	

		//生成散列值
		private function _hashAlgorithm($key) {
			//规则 ：key的ASCII 之和 除以 哈希表长度 取余数
			$len = strlen($key);
			$hashValue = 0;
			for($i=0;$i<$len;$i++) {
				$hashValue += ord($key[$i]);
			}
			return ($hashValue%($this->size));
		}

		//哈希表添加数据
		public function set($key,$val) {
			$index = $this->_hashAlgorithm($key);
			$this->collection[$index] = $val;
		}
		//根据键名获取值
		public function get($key) {
			$index = $this->_hashAlgorithm($key);
			return $this->collection[$index];
		}
		//删除键值
		public function del($key) {
			$index = $this->_hashAlgorithm($key);
			if(isset($this->collection[$index])) {
				unset($this->collection[$idnex]);
				return 1;
			} else {
				return 0;
			}
		}
		//判断是否存在
		public function exist($key) {
			$index = $this->_hashAlgorithm($key);
			if(isset($this->collection[$index])) {
				return 1;
			} else {
				return 0;
			}			
		}
		//获取大小
		public function size() {
			$size = 0;
			$len = count($this->collection);
			for($i=0;$i<$len;$i++) {
				if($this->$collection[$i]) {
					$size++;
				}
			}
			return $size;
		}
		//获取value序列
		public function val() {
			$size = 0;
			$len = count($this->collection);
			for($i=0;$i<$len;$i++) {
				if($this->collection[$i]) {
					echo $i .': '. $this->collection[$i] ."<br>";
				}
			}
		}
	}
	$hash = new hashTable(200);
	$hash->set('key1','tianjin');
	$hash->set('key2','wentian');
	$hash->set('key3','ai,wunai');

	$hash->val();	
