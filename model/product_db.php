<?php

	/*
		Given a style of case (reg, stand, ipad), get a list of the fabric types that
		case is sold in and return the result in a random order.
	*/
	function get_fabrics($style) {
		global $db;

		$query = "SELECT id, fabric
				  FROM products
				  WHERE style='$style' ORDER BY RAND()";

		$results = $db->query($query);
		return $results;
	}

	/*
		Given a product id, return a result set with all the info about that product.
	*/
	function get_product($id) {
		global $db;

		$query = "SELECT *
				  FROM products
				  WHERE id = $id";

		$result = $db->query($query);
		return $result;
	}

	/*
		Given a style of case (reg, stand, ipad), return a string with the pre-defined
		description of that style of case.
	*/
	function get_product_description($style) {
		global $db;

		$query = "SELECT value
				  FROM descriptions
				  WHERE style = '$style'";

		$result = $db->query($query);
		$description = $result->fetch();
		return $description['value'];
	}

?>
