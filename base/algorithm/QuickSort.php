<?php
	class QuickSort {
		private $arr;
		public function __construct($arr=[]) {
			$this->arr = $arr;
		}
		private function swap($i,$k) {
			$temp = $this->arr[$i];
			$this->arr[$i] = $this->arr[$j];
			$this->arr[$j] = $temp;
		}
		private function partition($low,$high) {
			$pivot = $this->arr[$low];
			while($low<$high) {
				while($low<$high&&$this->arr[$high]>=$pivot) {
					$high--;
				}
				$this->arr[$low] = $this->arr[$high];
				// $this->swap($low,$high);
				while($low<$high && $this->arr[$low]<=$pivot) {
					$low++;
				}
				// $this->swap($low,$high);
				$this->arr[$high] = $this->arr[$low];
			}
			$this->arr[$low] = $pivot;
			return $low;
		}
		private function quickDg($low,$high) {
			if($low<$high) {
				$povit = $this->partition($low,$high);
				$this->quickDg($low,$povit-1);
				$this->quickDg($povit+1,$high);
			}
		}
		public function Qsort() {
			$this->quickDg(0,count($this->arr)-1);
			var_dump($this->arr);
		}
	}
	$sort = new QuickSort([23,12,232,34,345,34,534,654,345,345,54,4342,23523,5,34,534,342,13]);
	$sort->Qsort();