<?php
	class MenuEntry {
		private $name = "Menuentry";
		private $url  = "#";
		private $here = false;
		
		public function __construct($name = "Menuentry", $url = "#", $here = false) {
			$this->name = $name;
			$this->url  = $url;
			$this->here = $here;
		}
		public function setName($name) {
			$this->name = $name;
		}
		public function getName() {
			return $this->name;
		}
		public function setURL($url) {
			$this->url = $url;
		}
		public function getURL() {
			return $this->url;
		}
		public function setHere($here) {
			$this->here = $here;
		}
		public function getHere() {
			return $this->here;
		}
	}

	class Menu {
		private $name = "Menu";
		private $here = false;
		private $entryList = Array();		

		public function __construct($name = "Menuentry", $here = false) {
			$this->name = $name;
			$this->here = $here;
		}
		public function setName($name) {
			$this->name = $name;
		}
		public function getName() {
			return $this->name;
		}
		public function setHere($here) {
			$this->here = $here;
		}
		public function getHere() {
			return $this->here;
		}
		public function addEntry($entry) {
			$this->entryList[] = $entry;
		}
		public function setEntryList($entryList) {
			$this->entryList = $entryList;
		}
		public function getEntryList() {
			return $this->entryList;
		}
	}
