<?php
$A = array(2, 4, 10, 16);
function multiply($array, $factor){
	$newArray = array();
	for ($i=0; $i < count($array); $i++) { 
		array_push($newArray, $array[$i] * $factor);
	}
	return $newArray;
}
$B = multiply($A, 5);
var_dump($B);
?>