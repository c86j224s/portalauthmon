<?php 
header("Content-Type:application/json");

$objs = array();

for($index = 0; $index < 3; $index++) {
	$obj = new stdClass();
	$obj->name = "adoda"+$index;
	$obj->age = "31";
	$objs[$index] = $obj;
}

echo json_encode($objs);
?>