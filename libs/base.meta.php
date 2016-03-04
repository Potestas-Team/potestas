<?php
	if (!defined("ROOT_LOCATION"))
		die("critical: root location not defined");

	require_once(ROOT_LOCATION . "/libs/classes/URL.php");
	
	// require_once(ROOT_LOCATION . "/libs/forceHTTPS.php");

	require_once(ROOT_LOCATION . "/libs/classes/SessionManager.php");
	require_once(ROOT_LOCATION . "/libs/classes/VirtualSessionManager.php");
	require_once(ROOT_LOCATION . "/libs/classes/HashGenerator.php");
	require_once(ROOT_LOCATION . "/libs/classes/Menu.php");
	require_once(ROOT_LOCATION . "/libs/classes/Template.php");
	require_once(ROOT_LOCATION . "/libs/classes/Site.php");
	require_once(ROOT_LOCATION . "/libs/classes/Logger.php");

	require_once(ROOT_LOCATION . "/libs/miscellaneous.php");

	Site::init();

	# the following needs sql

	Logger::logPage(URL::getHost(), URL::getFile(), substr(URL::getParameterString(), 1));

	include_once(ROOT_LOCATION . "/libs/checkForCookies.php");
