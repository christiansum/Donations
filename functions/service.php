<?php
include_once("includes/JsonInfo.php");

header("Content-Type: application/json;charset=utf-8");
$objJson = new JsonInfo();
if ($objJson->getJson()){
	echo $objJson->getJson();
}else{
	echo array();
}


?>