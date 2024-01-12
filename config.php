<?php
	require_once __DIR__ . "/vendor/autoload.php";
	
	try {

		$con = new MongoDB\Client("mongodb://localhost:27017");

		$db = $con->dbFoodiest;

		$collection = $db->user;

	} catch (Exception $e) {
		die("Error" . $e->getMessage());
	}
	
?>