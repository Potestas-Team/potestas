<?php
	class URL {
		static public function getParameterString($addArray = array(), $removeArray = array(), $url = null) {
			global $_GET;
			if (!isset($url))
				$url = $_GET;		
			$string = "?";
			foreach ($url as $key => $value) {
				if (!count($removeArray)) {
					if (strlen($string) == 1)
						$string = "?";
					else
						$string .= "&";
					$string .= urlencode($key);
					if ($value)
						$string .= "=" . urlencode($value);
				} else 
					foreach ($removeArray as $i => $name) {
						if ($key != $name) {
							if (strlen($string) == 1)
								$string = "?";
							else
								$string .= "&";
							$string .= urlencode($key);
							if ($value)
								$string .= "=" . urlencode($value);
							break;
						}
					}
			}
			foreach ($addArray as $key => $value) {
				if (strlen($string) == 1)
					$string = "?";
				else
					$string .= "&";
				if (!isset($value))
					$string .= urlencode($key);
				else
					$string .= urlencode($key) . "=" . urlencode($value);
			}
			return $string;
		}
		static public function redirect($url) {
			header("LOCATION: " . $url);
			exit();
		}
		static public function getURL() {
			global $_SERVER;
			return "//" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		}

		static public function getFile($real = false) {
			global $_SERVER;
			if ($real)
				return $_SERVER['PHP_SELF'];

			$url = getenv('REQUEST_URI');
			if (strpos($url, "?") > 0)
				$url = substr($url, 0, strpos($url, "?"));
			if (substr($url, strlen($url) - 1) == "/")
				$url = substr($url, 0, strlen($url) - 1);
			if (strlen($url) == 0)
				$url = "/";	

			return $url;
		}

		static public function getHost() {
			global $_SERVER;
			return substr($_SERVER['HTTP_HOST'], 0, strpos($_SERVER['HTTP_HOST'], "."));
		}
	}
