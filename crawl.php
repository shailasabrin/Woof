<?php
include("classes/DomDocumentParser.php");

function followLinks($url){
	$parser = new DomDocumentParser($url);


}

$startUrl ="https://www.shailasabrin.com";
followLinks($startUrl);

?>
