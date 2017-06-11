<?php
	if (array_key_exists('user_email', $_SESSION))
		$user_email = $_SESSION['user_email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>FILE ME UP</title>
  	<link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
  	<link href="styles/main.css" rel="stylesheet">
</head>

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

		<?php
			if ($user_email)
				echo '<a href="#" id="upload-file-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp"><i class="material-icons">add</i></a>';
		?>

		<div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="upload-file-button">Upload</div>

		<dialog class="mdl-dialog">
			<h4 class="mdl-dialog__title">Upload new file</h4>
			<div class="mdl-dialog__content">
				<p>
					Allowing us to collect data will let us get you the information you want faster.
				</p>
			</div>
			<div class="mdl-dialog__actions">
				<button type="button" class="mdl-button">Agree</button>
				<button type="button" class="mdl-button close">Disagree</button>
			</div>
		</dialog>

		<header class="mdl-layout__header mdl-layout__header--waterfall site-header">
			<div class="mdl-layout__header-row site-logo-row">
				<span class="mdl-layout__title">
					<div class="site-logo"></div>
					<span class="site-description">FILE ME UP</span>
				</span>
			</div>
			<div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
				<nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
					<?php 
						if ($user_email) {
							echo '<a class="mdl-navigation__link" href="index.php">Home</a>';
							echo '<a class="mdl-navigation__link" href="index.php?q=categories/all">Categories</a>';
							echo '<a class="mdl-navigation__link" href="index.php?q=users/logout">Log out</a>';
						}
						else {
							echo '<a class="mdl-navigation__link" href="index.php?q=users/login">Log in</a>';
							echo '<a class="mdl-navigation__link" href="index.php?q=users/register">Register</a>';
						}
					?>
				</nav>
			</div>
		</header>

		<div class="mdl-layout__drawer mdl-layout--small-screen-only">
			<nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
				<?php 
					if ($user_email) {
						echo '<a class="mdl-navigation__link" href="index.php">Home</a>';
						echo '<a class="mdl-navigation__link" href="index.php?q=categories/all">Categories</a>';
						echo '<a class="mdl-navigation__link" href="index.php?q=users/logout">Log out</a>';
					}
					else {
						echo '<a class="mdl-navigation__link" href="index.php?q=users/login">Log in</a>';
						echo '<a class="mdl-navigation__link" href="index.php?q=users/register">Register</a>';
					}
				?>
			</nav>	
		</div>

		<main class="mdl-layout__content">
			<div class="site-content">
        		<div class="container">

					<?php echo $content; ?>

        		</div>
      		</div>
          	<footer class="mdl-mini-footer" style="text-align: center">
				<div class="footer-container">
					<div class="mdl-logo">&copy; FILE ME UP <br> Проект по Уеб технологии, Бисер Сираков 61867</div>
				</div>
			</footer>  
    	</main>
	</div>
	
	<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>