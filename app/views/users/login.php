<!--<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>FILE ME UP - Login</title>
  	<link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
  	<link href="styles/main.css" rel="stylesheet">
</head>

<body>-->

<ul>
<?php

	foreach($params['errors'] as $error) {
		echo "<li>$error</li>";
	}

?>
</ul>
<form method="post">
	Email: <br />
	<input type="text" name="email"><br />
	Password: <br />
	<input type="password" name="password"> <br />
	<br />
	<input type="submit" value="Log in">
</form>

	<!--<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>-->