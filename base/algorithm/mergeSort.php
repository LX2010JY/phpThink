<?php 
/**
** 使用归并排序 TODO 大文件排序
**/
	class MergeSort {
		private $filename;
		private $rows;
		private $arr;
		public function __construct($arr=[],$path='',$rows=10000000){
			$this->rows = $rows;
			$this->arr = $arr;
			if(!$path) $this->filename = 'input.txt';
			else $this->filename = $path.'/'.$filename;
			$this->CreateRandNumFile();
		}
		//创建数字文件 千万条数据
		private function CreateRandNumFile() {
			if(file_exists($this->filename)) return;
			$myfile = fopen($this->filename,"w") or die("can not create file,sorry");
			for($i=0;$i<$this->rows;$i++) {
				$num = rand(1000000,9999999);
				fwrite($myfile, "$num\n");
				echo "the {$i} number insert in file..\n";
			}
			fclose($myfile);
			echo 'file create over \n';
		}
		//合并两个数组 
		private function MergeArray($left,$center,$right) {
			// $len_a = count($arr1);
			// $len_b = count($arr2);
			$tempc = [];
			$i = $left;$j=$center+1;
			while($i<=$center&&$j<=$right) {
				if($this->arr[$i]<$this->arr[$j]) {
					$tempc[] = $this->arr[$i];
					$i++;
				} else {
					$tempc[] = $this->arr[$j];
					$j++;
				}
			}
			while($i<=$center) {
				$tempc[] = $this->arr[$i];
				$i++;
			}
			while($j<=$right) {
				$tempc[] = $this->arr[$j];
				$j++;
			}
			for($i=$left,$j=0;$i<=$right;$i++,$j++) {
				$this->arr[$i] = $tempc[$j];
			}
		}
		//归并排序
		public function MergeDg($left,$right) {
			if($left<$right) {
				$center = floor(($right+$left)/2);
				$this->MergeDg($left,$center);
				$this->MergeDg($center+1,$right);
				$this->MergeArray($left,$center,$right);
			}
		}

		public function Msort() {
			$left = 0;
			$right = count($this->arr);
			$this->MergeDg($left,$right-1);
			var_dump($this->arr);
		}
	}
	$sort = new MergeSort(array(2332,34,34,53,2,4,3234,325,435,21));
	$sort->Msort();
