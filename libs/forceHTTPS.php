<?php
	require_once(ROOT_LOCATION . "/libs/classes/URL.php");	

	if(!isset($_SERVER['HTTPS']) || ($_SERVER['HTTPS'] != "on")) {
		URL::redirect("https" . URL::getURL());
	}
