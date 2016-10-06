<?php

	/***************************************************
		Misc functions used through out the website.
	***************************************************/

	// Format the name of a case
	function format_case_name($style, $fabric) {
		// Begin creating the title based on the style of the case
		if($style == 'regular') {
			$title = 'Tablet Case';		
		} else if($style == 'standable') {
			$title = 'Standable Tablet Case';
		} else if($style == 'ipad') {
			$title = 'iPad Tablet Case';	
		}

		// Create an array of all the words in the fabric name using the explode function
		$pieces = explode(" ", $fabric);
		$word_count = count($pieces);

		// Create new string from $pieces, capitalizing each word
		$formatted_name = "";
		for($i = 0; $i != $word_count; $i++) {
			$formatted_name .= ucfirst($pieces[$i]).' ';
		}

		// Append the $title string to the end of the formatted name
		$formatted_name .= $title;
		return $formatted_name;
	}
?>
