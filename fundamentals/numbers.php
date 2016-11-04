<?php 
session_start();

if (!isset($_POST['number'])) {
	$_POST['number'] = rand(1,100);
}
$number = $_POST['number'];

?>
