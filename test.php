<?php 
header("Content-Type:application/json");
$obj = new stdClass();
$obj->name = "adoda";
$obj->age = "31";

echo json_encode($obj);
?>