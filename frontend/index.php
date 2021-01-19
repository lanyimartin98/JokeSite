<!doctype html>
<?php
require_once('database.php');
?>
<html lang="hu">

<head>
	<meta charset="UTF-8">
	
	<title> Rettenetesen Fárasztó Tréfák</title>
	<meta name="description" content="Rettenetesen Fárasztó Tréfák">
	
	<link rel="stylesheet" href="./assets/rftstyles.css" type="text/css">
	
<head>
<body>
		
	<h1 style="color:Black;"> Rettenetesen Fárasztó Tréfák </h1>
	<p>Válassz egy tréfa témát!</p>
	
	<div class="container">
		<div class="button-wrapper">
			<a class="button button1" href="/jokesite/?c=2">Iskola</a>
			<a class="button button2" href="/jokesite/?c=1">Rendőr</a>
			<a class="button button3" href="/jokesite/?c=3">Sport</a>
			<a class="button button4" href="/jokesite/?c=4">Állatos</a>
			<a class="button button5" href="/jokesite/?c=5">Orvos</a>
		</div>
	</div>
	
	<hr>
	<div class="container">
	<div class="random">test</div>
	<div>
		<?php
			require_once('routing.php');
			?>
	</div>
	<div class="random">test</div>
	</div>
</body>

</html>
