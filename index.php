<?php
	// connect_db.php is a script that connects to the database
	require('model/connect_db.php');
	// product_db.php are functions used to access the database
	require('model/product_db.php');
	// misc_functions.php are functions used throughout the website
	require('model/misc_functions.php');

	// Check if a specific page has been requested, if not show default of home.php
	if (isset($_POST['action'])) {
		$action = $_POST['action'];
	} else if (isset($_GET['action'])) {
		$action = $_GET['action'];
	} else {
		$action = 'home';
	}

	//	The page that is displayed in based on the $action variable.
	if ($action == 'home') {
		include('view/home.php');
	} else if ($action == 'aboutme') {
		include('view/aboutme.php');
	} else if ($action == 'contactme') {
		include('view/contactme.php');
	} else if ($action == 'store') {
		include('view/store.php');
	} else if ($action == 'displaycases'){
		// if the displaycases action is set without a style, this is an error
		if(!isset($_GET['style'])) {
			echo 'An error has occured, please try again';
		} else {

			$style = $_GET['style'];
		}
		$results = get_fabrics($style);	
		include('view/product_list.php');
	} else if ($action == 'productlisting') {
		$current_product = get_product($_GET['id']);
		$current_product = $current_product->fetch();
		$description = get_product_description($current_product['style']);
		include("view/product_listing.php");
	}
?>
