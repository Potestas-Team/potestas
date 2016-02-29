<?php
	function isUserAllowed($requiredGroups) {
		if (!UserManager::isLoggedIn())
			URL::redirect("https://accounts." . DOMAIN . "/login/" . URL::getParameterString(array("return"=>URL::getURL()), array(), array()));

		$unmetDependencies = array();
		if (isset($requiredGroups)) {
			$userGroups = UserManager::getLoggedInUserGroups();
			
			foreach($requiredGroups as $requiredGroup) {
				$check = false;
				foreach ($userGroups as $userGroup) {
					if ($userGroup->name == $requiredGroup) {
						$check = true;
						break;
					}
				}
				if (!$check)
					$unmetDependencies[] = $requiredGroup;
			}
		}
		if (count($unmetDependencies)) {
			// "user not allowed, unmet dependency group: " . implode(", ", $umetDependencies));
			return false;
		}
		return true;
	}

