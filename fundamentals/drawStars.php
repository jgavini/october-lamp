<?php
$test = array(4,3,"hello", "Joshua", "Jun", 5);

function draw_stars($array){
	foreach ($array as $key => $value) {
		if (is_numeric($value)) {
			for ($i=1; $i <= $value ; $i++) { 
			echo "*";
			}
		}
		if(gettype($value) == "string"){
			$firstLetter = strtolower($value[0]);
			for ($i=0; $i < strlen($value) ; $i++) { 
				echo "$firstLetter";
			}

		}
		echo '<br />';
	}
}
draw_stars($test);
?>