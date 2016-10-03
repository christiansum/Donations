<?php
include_once("../functions/includes/JsonInfo.php");

header("Content-Type: application/json;charset=utf-8");
$objJson = new JsonInfo();
if ($objJson->getJson()){
	echo $_GET['callback']."(".$objJson->getJson().")";
}else{
	echo $_GET['callback']."(".array().")";
}


?>