<?php
var_dump($_POST);

if (isset($_POST['page_number'])){
	echo "<h1>Okay, you are requesting a page</h1>";
}
else{
	echo "<h1>You are not requesting a page I made.</h1>";
}
?>