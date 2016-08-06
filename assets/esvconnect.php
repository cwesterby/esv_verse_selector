<?php

	$ref = $_POST['ref'];

	// $passage = urlencode("Genesis 1:1 - Genesis 1:1");
	$passage = urlencode($ref);
	$key = "195f2ae0089ba1f2";
	$options = "include-headings=false";
	$options .= "&include-footnotes=false";
	$options .= "&include-audio-link=false";
	$options .= "&include-short-copyright=false";
	$options .= "&output-format=plain-text";
	$url = "http://www.esvapi.org/v2/rest/passageQuery?key=$key&passage=$passage&$options";
	$ch = curl_init($url); 	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
?>