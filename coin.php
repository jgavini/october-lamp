<?php
echo "Starting the program" . '<br />' . '<br />';
$heads = 0;
$tails = 0;
for ($i=1; $i < 5001; $i++) { 
	$coin = rand(1,2);
	if ($coin == 1) {
		$heads++;
		echo "Attempt #" . $i . ": Throwing a coin... It's a head! ... Got " . $heads . " head(s) so far and " . $tails . " tail(s) so far" . "<br />";
	}
	else{
		$tails++;
		echo "Attempt #" . $i . ": Throwing a coin... It's a head! ... Got " . $heads . " head(s) so far and " . $tails . " tail(s) so far" . "<br />";
	}
}
echo '<br />' . '<br />' . "Ending the program - thank you!";
?>