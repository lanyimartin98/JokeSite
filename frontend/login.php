<?php  
        require_once(ROOT_DIR.'/backend/database.php');
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				try{
					if(login($_POST['username'],$_POST['password'])=="moderator"){
                        session_start();
                        $_SESSION['credidentals'] = 'moderator';
                        header('Location: /jokessite/JokeSite/');
                    }
                    elseif(login($_POST['username'],$_POST['password'])=="user"){
                        session_start();
                        $_SESSION['credidentals'] = 'moderator';
                        header('Location: /jokessite/JokeSite/');
                    }
                    else{
                        echo 'Hibás bejelentkezési adatok!';
                    }
					
				}catch(Exception $e){
					echo "Adatbázis hiba történt!";
				}
               }
            
         ?>
<form  method = "POST">
<table class="table table-striped">
  
  <tbody>
    <tr>
    <td><label>Felhasználónév: </label></td>
    <td><input name = "username" type = "text" placeholder = "" required></td>
    </tr>
    <tr>
    <td> <label>Jelszó:</label></td>
    <td><input name = "password" type = "password" placeholder = "" pattern = ".{5,}" required></td>
    </tr>
    <tr>
    <td colspan=2><button class="btn btn-primary" type = "submit" class = "submit" name = "login">Belépés</button></td>
    </tr>
  </tbody>
</table>
    </form>
    <p>
  	  <a href="/jokessite/JokeSite?route=register">Regisztráció</a>
  	</p>