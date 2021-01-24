<?php
		require_once('config.php');
        require_once('database.php');
            
            if (isset($_POST['reg']) && !empty($_POST['username']) 
               && !empty($_POST['password_1']) && !empty($_POST['password_2']) && $_POST['password_1']==$_POST['password_2']) {
				try{
					register($_POST['username'],$_POST['password_1']);
					header('Location: /CarDB/?r=login');
				}catch(Exception $e){
					echo "Hiba történt a regisztrációkor!";
				}
               }
            
         ?>
<form method="POST">
<table class="table table-striped">
  	<tr>
  	  <td><label>Felhasználónév:</label></td>
  	  <td><input type="text" name="username" value=""></td>
	</tr>
	<tr>
  	  <td><label>Jelszó:</label></td>
  	  <td><input type="password" name="password_1"></td>
	</tr>
	<tr>
  	  <td><label>Jelszó újra:</label></td>
  	  <td><input type="password" name="password_2"></td>
	</tr>
  	<tr>
  	 <td colspan=2> <button class="btn btn-primary" type="submit" class="btn" name="reg">Regisztráció</button></td>
	</tr>
	</table>
  	<p>
  	<a href="/CarDB/?r=login">Bejelentkezés</a>
	  </p>
	  
  </form>
