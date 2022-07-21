<?php

//it doesnot work on hostinger.
//you will have to keep this script on domain.com or any other hosting and then call it!!

	include "simple_html_dom.php";

$loc1=$_POST['loc1'];
$loc2=$_POST['loc2'];

$loc1=str_replace(" ","+",$loc1);
$loc2=str_replace(" ","+",$loc2);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://www.google.com/search?q=".$loc1."+to+".$loc2);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	//echo $response;
	curl_close($ch);

	$html = new simple_html_dom();
	$html->load($response);

	foreach($html->find('div[class=BNeawe deIvCb AP7Wnd]') as $link)
		
			echo $link->innertext . "<br>";
			

?>
