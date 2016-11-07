<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style type="text/css">
		h1,p{
			text-align: center;
			margin-top: 20px;
		}
		#survey{
			text-align: center;
		}
	</style>
	<title>The Great Game of Numbers</title>
</head>
<body>
<h1>Welcome to the Great Number Game!</h1>
<p>I am thinking of a number between 1 and 100</p>
<p>TAKE A GUESS</p>
<form action="numbers.php" method="POST" id="survey">
		<label><input type="text" name="guess"></label>
		<label><input type="hidden" name="number"></label>
		<button>SUBMIT</button>
</form>
</body>
</html>

