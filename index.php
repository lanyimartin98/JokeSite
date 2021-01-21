<!doctype html>
<?php
require_once('./backend/database.php');
require_once('./backend/config.php');
?>
<html lang="hu">

<head>
	<meta charset="UTF-8">
	
	<title> Rettenetesen Fárasztó Tréfák</title>
	<meta name="description" content="Rettenetesen Fárasztó Tréfák">
	
	<link rel="stylesheet" href='./assets/rftstyles.css' type="text/css">
	
<head>
<body>
		
	<h1 style="color:Black;"> Rettenetesen Fárasztó Tréfák </h1>
	<p>Válassz egy tréfa témát!</p>
	
	<div class="container">
		<div class="button-wrapper">
			<a class="button button1" href="/jokessite/JokeSite/?c=2">Iskola</a>
			<a class="button button2" href="/jokessite/JokeSite/?c=1">Rendőr</a>
			<a class="button button3" href="/jokessite/JokeSite/?c=3">Sport</a>
			<a class="button button4" href="/jokessite/JokeSite/?c=4">Állatos</a>
			<a class="button button5" href="/jokessite/JokeSite/?c=5">Orvos</a>
		</div>
	</div>
	
	<hr>
	<div class="container">
	<div class="random">
	<?php
	getRandomJoke()
	?>
	</div>
	<div>
		<?php
			require_once('./backend/routing.php');
			?>
	</div>
	<div class="random">
	<?php
	getRandomJoke()
	?>
	</div>
	</div>
</body>

</html>