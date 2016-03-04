<?php
	die();
	require_once(dirname(__FILE__) . "/../core.php");
	
	// (C) 2001 The phpBB Group 
	require_once(dirname(__FILE__) . "/sql_parser.php");
	
	$sql = Site::getSQL();
	
	$file = dirname(__FILE__) . "/schema.sql";
	$schema = @fread(@fopen($file, "r"), @filesize($file)) or die(": (");
	$schema = remove_remarks($schema);
	$schema = remove_comments($schema);
	$schema = split_sql_file($schema, ";");
	
	for($i = 0; $i < count($schema); $i++) {
		echo $i . ": " . $schema[$i] . " ";
		$sql->query($schema[$i]) or die("<span style='color: red;'>fail!</span><br /><br />" . $sql->error);
		echo "<span style='color: green;'>okay</span><br />";
	}
