<?php
echo "<h1>Submitted Information:</h1>";
echo '<fieldset>';
foreach ($_POST as $key => $value) {
	echo $key . ":  " . $value;
	echo '<br><br>';
}
echo '</fieldset>';
?>