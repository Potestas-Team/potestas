<?php
	class Template {
		private $menus = array();
		private $texts = array();

		public function __construct($templateName, $siteName, $load = true) {
			if ($load)
				include(ROOT_LOCATION . "/data/templates/" . $templateName . "/index.php");
			$this->texts[] = $siteName;
		}

		public function addMenu($menu) {
			$this->menus[] = $menu;
		}

		public function addText($text) {
			$this->texts[] = $text;
		}

		public function printTop() {
			_printTemplateTop($this);
		}

		public function printInnerSeperator() {
			_printTemplateInnerSeperator($this);
		}

		public function printBottom() {
			_printTemplateBottom($this);
		}

		public function getMenus() {
			return $this->menus;
		}

		public function getTexts() {
			return $this->texts;
		}
	}

