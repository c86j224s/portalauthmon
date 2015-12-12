<?php 
header("Content-Type:application/json");

$objs[3];

foreach ($objs as $key => $value) {
	$obj = new stdClass();
	$obj->name = "adoda";
	$obj->age = "31";
	$objs[$key] = $obj;
}

echo json_encode($objs);
?>