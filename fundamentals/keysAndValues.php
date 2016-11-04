<?php
$users = array("first_name" => "Michael", "last_name" => "Choi");
$number = "There are " . count($users) . " keys in this array";
$first = "The value in the key 'first_name' is " . $users["first_name"] . ".";
$last = "The value in the key 'last_name' is " . $users["last_name"] . ".";
$keys = "first_name" . '<br />' . "last_name";
echo $number . '<br />' . $keys . '<br />' . $first . '<br />' . $last;
?>
