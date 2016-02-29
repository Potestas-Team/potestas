<?php
require_once (ROOT_LOCATION . "/libs/classes/Site.php");
require_once (ROOT_LOCATION . "/libs/classes/SessionManager.php");

class Logger {

	static function logLogin($username, $success) {
		if (Session::active()) {
			$logSession = Session::getValue("id");
			$ip = $_SERVER['REMOTE_ADDR'];

			$sql = Site::getSQL();
			$sql -> query("INSERT INTO `logLogin` (`logSessionFK`,`ip`,`username`,`time`,`success`) VALUES (" . intval($logSession) . ", '" . $sql -> real_escape_string($ip) . "', '" . $sql -> real_escape_string($username) . "', " . time() . ", '" . intval($success) . "');");

			return true;
		}
		return false;
	}

	static function logLink($id, $referrer) {
		if (Session::active()) {
			$logSession = Session::getValue("id");
			$ip = $_SERVER['REMOTE_ADDR'];

			$userId = null;
			if (UserManager::isLoggedIn()) {
				$userId = UserManager::getLoggedInObject() -> ID;
			}

			$sql = Site::getSQL();
			$sql -> query("INSERT INTO `logLinks` (`time`, `logSessionFK`,`ip`,`userFK`,`linkFK`, `referrer`) VALUES (" . time() . ", " . intval($logSession) . ", '" . $sql -> real_escape_string($ip) . "', " . intval($userId) . ", '" . intval($id) . "', '". $sql->real_escape_string($referrer) . "')");

			return true;
		}
		return false;
	}

	static function logPage($host, $file, $parameters) {
		if (Session::active()) {
			$logSession = Session::getValue("id");
			$ip = $_SERVER['REMOTE_ADDR'];

			$userId = null;
			if (UserManager::isLoggedIn()) {
				$userId = UserManager::getLoggedInObject() -> ID;
			}

			$sql = Site::getSQL();
			$sql -> query("INSERT INTO `logMain` (`time`, `logSessionFK`,`ip`,`userFK`,`host`,`file`,`parameters`) VALUES (" . time() . ", " . intval($logSession) . ", '" . $sql -> real_escape_string($ip) . "', " . intval($userId) . ", '" . $sql -> real_escape_string($host) . "', '" . $sql -> real_escape_string($file) . "', '" . $sql -> real_escape_string($parameters) . "');");

			return true;
		}
		return false;
	}

}
?>
