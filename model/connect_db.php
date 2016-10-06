<?php

	/****************************************************************************
		This script connects to a database by creating a PDO object called $db.
		If connecting to the database fails, it will create an error message 
		string based on the exception thrown by the PDO object. It will then
		include a php page to display the error to the user.
	*****************************************************************************/

	// Set the login credentials for the PDO object
	$dsn = 'mysql:host=localhost;dbname=cathykrohndesigns';
	$user = 'root';
	$pass = 'refinnej8!';

	// Attempt to login to the datbase, display error if failed
	try {
		$db = new PDO($dsn, $user, $pass);
	} catch(PDOException $e) {
		$errorMessage = $e->getMessage();
		echo '<p>Unable to connect to the database: '.$errorMessage.'<p>';
		include 'database_error.php';
	}
?>
