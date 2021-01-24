<!doctype html>
<?php
session_start();
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
<div>
<?php if(isset($_SESSION['credidentals'])):?>
	<a class="button button1" href="/jokessite/JokeSite/?route=logout">Kilépés</a>
<?php if($_SESSION['credidentals']=='moderator'):?>
<a class="button button1" href="/jokessite/JokeSite/?route=joke&category=2">Moderáció</a>
<?php elseif($_SESSION['credidentals']=='user'):?>
<a class="button button1" href="/jokessite/JokeSite/?route=add">Hozzáadás</a>
<?php endif;?>
<?php else:?>
<a class="button button1" href="/jokessite/JokeSite/?route=login">Belépés</a>
<?php endif;?>
</div>		
	<h1 style="color:Black;"> Rettenetesen Fárasztó Tréfák </h1>
	<p>Válassz egy tréfa témát!</p>
	
	<div class="container">
		<div class="button-wrapper">
			<a class="button button1" href="/jokessite/JokeSite/?route=joke&category=2">Iskola</a>
			<a class="button button2" href="/jokessite/JokeSite/?route=joke&category=1">Rendőr</a>
			<a class="button button3" href="/jokessite/JokeSite/?route=joke&category=3">Sport</a>
			<a class="button button4" href="/jokessite/JokeSite/?route=joke&category=4">Állatos</a>
			<a class="button button5" href="/jokessite/JokeSite/?route=joke&category=5">Orvos</a>
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
