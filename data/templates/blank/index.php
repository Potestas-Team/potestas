<?php

	function _getTemplateName() {
		return "blank";
	}

	function _printTemplateTop($template) {
		$texts = $template->getTexts();
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $texts[0]; ?></title>
		<meta charset="UTF-8">
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="https://data.hanm.at/templates/blank/styles/blank.css">
	</head>
	<body>
<?php
	}

	function _printTemplateInnerSeperator($template) {
	}

	function _printTemplateBottom($template) {
		$texts = $template->getTexts();
?>
		<div id="bottomText"><?php echo $texts[1]; ?></div>
	</body>
</html>
<?php
	}


	@include("../general.php");
