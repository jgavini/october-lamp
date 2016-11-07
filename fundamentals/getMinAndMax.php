<?php
$numbers = array(12,43,3,104,98);
function printMinMax($array){
$maxvalue = $array[0];
$minvalue = $array[0];
	for ($i=1; $i < count($array); $i++) { 
		if ($array[$i] > $maxvalue) {
		$maxvalue = $array[$i];
		}
		if ($array[$i] < $minvalue) {
		$minvalue = $array[$i];
		}
	}
	$newarray = array("max" => $maxvalue, "min" => $minvalue);
	foreach ($newarray as $key => $value) {
		echo $key . ':  ' . $value . '<br />';
	}

}

printMinMax($numbers);
?>