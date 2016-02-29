<?php
	require_once(ROOT_LOCATION . "/libs/classes/ErrorHandler.php");
	require_once(ROOT_LOCATION . "/libs/classes/SessionManager.php");
	require_once(ROOT_LOCATION . "/libs/classes/UserManager.php");

	if (!defined("ROOT_LOCATION"))
		die("critical: root location not defined");

	class Site {
		static private $sql;

		static public function init() {
			include(ROOT_LOCATION . "/config/mysql.nogit.php");
			Site::$sql = new mysqli($MYSQL_HOSTNAME, $MYSQL_USERNAME, $MYSQL_PASSWORD, $MYSQL_DATABASE);
			if (Site::$sql->connect_errno) {
				if (DEBUG)
					ErrorHandler::unformatedError("Site", "MySQLi connection failed: " . Site::$sql->connect_error);
				else
					ErrorHandler::unformatedError("Site", "There is some fatal error with the database-connection.");
			}

			Session::init();
			UserManager::init();
		}
		static public function getSQL() {
			return Site::$sql;
		}
	}
