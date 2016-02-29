<?php
	require_once(ROOT_LOCATION . "/libs/classes/URL.php");	

	if (isset($_COOKIE['cookies'])) {
		if (isset($_GET['noCookies'])) {
			URL::redirect(URL::getParameterString(array(), array("noCookies")));
		}
		if (isset($_GET['checkCookies'])) {
			URL::redirect(URL::getParameterString(array(), array("checkCookies")));
		}
	} else {
		if (isset($_GET['checkCookies'])) {
			URL::redirect(URL::getParameterString(array("noCookies"=>null), array("checkCookies")));
		}
		setcookie("cookies", "true", time() + (60 * 60 * 24 * 265), "/", "." . DOMAIN);
		if (!isset($_GET['noCookies']))
			URL::redirect(URL::getParameterString(array("checkCookies"=>null)));	
	}

	setcookie("cookies", "true", time() + (60 * 60 * 24 * 265), "/", "." . DOMAIN);
