<?php
        require_once(ROOT_DIR.'/backend/database.php');
            
            if (isset($_POST['reg']) && !empty($_POST['username']) 
               && !empty($_POST['password_1']) && !empty($_POST['password_2']) && $_POST['password_1']==$_POST['password_2']) {
				try{
					register($_POST['username'],$_POST['password_1']);
					header('Location: /jokessite/JokeSite/?route=login');
				}catch(Exception $e){
					echo "Hiba történt a regisztrciókor!";
				}
               }
            
         ?>
<form method="POST">
<table class="jokebody">
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
  	 <td colspan=2> <button type="submit" class="btn" name="reg">Regisztráció</button></td>
	</tr>
	</table>
  	<p>
  	<a class="button button1" href="/jokessite/JokeSite/?route=login">Bejelentkezés</a>
	  </p>
	  
  </form>
