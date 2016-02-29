<?php
	define("ROOT_LOCATION", dirname(__FILE__) . "/../../..");
	require_once(ROOT_LOCATION . "/config/general.php");
	require_once(ROOT_LOCATION . "/libs/classes/Site.php");
	Site::init();

	$success = true;

	if (!isset($_GET['id'])) 
		$success = false;
	else {
		$sql = Site::getSQL();
		$result = $sql->query("SELECT image, LENGTH(image) AS size FROM images WHERE ID = " . intval($_GET['id']));

		if (!$result->num_rows)
			$success = false;
	}

	if (!$success) {
		header("HTTP/1.0 404 Not Found");
		exit();
	}

	$image = $result->fetch_object();

	header("Content-Type: image/png");
	header("Content-Length: " . $image->size);

	echo $image->image;
	

