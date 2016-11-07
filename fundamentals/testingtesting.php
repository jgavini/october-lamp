<?php
session_start();
	if (isset($_SESSION['value'])) {
		$_SESSION['value']++;
	}
	else{
		$_SESSION['value'] = 1;
	}
	echo "number of visits:  " . $_SESSION['value'];

?>