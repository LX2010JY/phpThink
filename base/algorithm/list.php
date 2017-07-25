<?php
	//作为链表基本数据块
	class Block {
		private $content;
		private $next = null;

		public function setContent($content) {
			$this->content = $content;
		}
		public function setNext($next) {
			$this->next = $next;
		}		
		public function getContent() {
			return $this->content;
		}
		public function getNext() {
			return $this->next;
		}
	}

	class ListTable {
		private $head;
		private $last;
		public function insert($val) {
			$block = new Block($val);
			$block->setContent($val);
			if(!$this->head) {
				$this->head = $block;
			} else {
				$this->last->setNext($block);
			}
			$this->last = $block;
		}
		public function length() {
			$p = $this->head;
			$len = 0;
			while($p) {
				$len++;
				$p = $p->getNext();
			}
			return $len;
		}
		public function del($k) {
			$p = $q = $this->head;
			$i = 1;
			if($k==1) {
				$this->head = $p->getNext();
				return;
			}
			while($p && $i < ($k-1)) {
				$p = $p->getNext();
				$i++;
			}
			$q = $p->getNext();
			if(!$q) echo "None";
			else {
				$p->setNext($q->getNext());
			}
		}
		public function display() {
			$p = $this->head;
			while($p) {
				echo $p->getContent()."<br>";
				$p = $p->getNext();
			}
		}
	}
	$list = new ListTable();
	$list->insert("luoxiao");
	$list->insert("yangmi");
	$list->insert("wukenaihe");
	$list->display();