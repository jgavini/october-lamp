<?php
$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
echo '<select>';
for ($i=0; $i < count($states); $i++) { 
	echo '<option>' . $states[$i] . '</option>';
}
echo '</select>';
echo '<br />' . '<br />';
echo '<select>';
foreach ($states as $key) {
	echo '<option>' . $key . '</option>';
}
echo '</select>';
array_push($states, 'NJ', 'NY', 'DE');
echo '<br />' . '<br />';
echo '<select>';
foreach ($states as $key) {
	echo '<option>' . $key . '</option>';
}
echo '</select>';
?>