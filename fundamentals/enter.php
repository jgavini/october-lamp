<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript" href=""></script>
	<title></title>
	<style type="text/css">
		#survey{
			display: block;
		}
		#survey label{
			display: block;
			margin-bottom: 10px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
<h1>FILL OUT THIS SURVEY.  YOU DON'T HAVE A CHOICE</h1>
<form action="result.php" method="POST" id="survey">
	<fieldset>
		<legend></legend>
		<label>Your Name:<input type="text" name="name"></label>
		<label>Dojo Location:
			<select name="location">
				<option>Burbank</option>
				<option>San Jose</option>
				<option>Seattle</option>
			</select>
		</label>
		<label>Favorite Language:
			<select name="language">
				<option>English</option>
				<option>Spanish</option>
				<option>Spangish</option>
			</select>
		</label>
		<label>Comment (optional):
			<textarea name="comment" rows="5" cols="40"></textarea>
		</label>
		<button>SUBMIT</button>
	</fieldset>
</form>
</body>
</html>