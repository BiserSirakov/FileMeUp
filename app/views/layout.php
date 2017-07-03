<?php
	if (array_key_exists('user', $_SESSION))
		$user = $_SESSION['user'];
		// var_dump($user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>FILE ME UP</title>
	<link href="styles/material.min.css" rel="stylesheet">
  	<link href="styles/main.css" rel="stylesheet">
</head>	

<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header mdl-layout__header--waterfall site-header">
			<div class="mdl-layout__header-row site-logo-row">
				<span class="mdl-layout__title">
					<a href="/FileMeUp">
						<div class="site-logo"></div>
					</a>
					<span class="site-description">FILE ME UP</span>
				</span>
			</div>
			<div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
				<nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
					<?php 
						if ($user) {
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
					if ($user) {
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
	
	<script src="js/material.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>