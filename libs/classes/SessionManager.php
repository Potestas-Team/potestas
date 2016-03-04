<?php

	require_once(ROOT_LOCATION . "/libs/classes/Site.php");

	class Session {
		static public function init() {
			if (isset($_GET['noCookies'])) {
				return;
			}

			session_name("session");
			session_set_cookie_params(60 * 60 * 24 * 14, "/", "." . DOMAIN, false);
			session_start() OR die("SessionManager: " . "unable to start session");
			session_regenerate_id();
			global $_SESSION;
		
			if (!Session::active()) {
				Session::setValue("init", time());
				$sql = Site::getSQL();
				$sql->query("INSERT INTO `logSessions` (`init`, `userAgent`) VALUES (" . Session::getValue("init") . ", '" . $sql->real_escape_string($_SERVER['HTTP_USER_AGENT']) . "')");
				$result = $sql->query("SELECT LAST_INSERT_ID() AS ID");
				$id = $result->fetch_object();
				$id = $id->ID;					
				Session::setValue("id", $id);
			}
		}
		static public function getArray() {
			global $_SESSION;
			return $_SESSION;
		}
	
		static public function setValue($key, $value) {
			global $_SESSION;
			$_SESSION[$key] = $value;
		}

		static public function getValue($key) {
			global $_SESSION;
			return $_SESSION[$key];
		}
		static public function keyExists($key) {
			global $_SESSION;
			return isset($_SESSION[$key]);
		}
		static public function active() {
			return Session::keyExists("init");
		}
	}
