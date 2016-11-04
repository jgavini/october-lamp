<?php
$example = array(2, 4, 10, 16);
function multiply($array){
	$newArray = array();
	for ($i=0; $i < count($array); $i++) { 
		array_push($newArray, $array[$i] * 5 );
	}
	return $newArray;
}
echo multiply($example);
?>