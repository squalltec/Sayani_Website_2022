<?php
include "simple_html_dom.php";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://latitude.to/lat/25.29233/lng/55.41919");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	echo $response;
	curl_close($ch);

	

?>