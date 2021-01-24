<?php 
require_once('database.php');
require_once('config.php');
require_once(ROOT_DIR.'/frontend/listview.php');
if(isset($_GET['route'])){
    switch ($_GET['route']) {
        case 'joke':
          generateListView(getJoke($_GET['category']));
          break;
        case 'register':
            require_once(ROOT_DIR.'/frontend/register.php');
          break;
          case 'login':
            require_once(ROOT_DIR.'/frontend/login.php');
          break;
          case 'logout':
            session_unset();
            header('Location:/jokessite/JokeSite');
          break;
          case 'add':
            require_once(ROOT_DIR.'/frontend/add.php');
            break;
        
      }
    }
else echo "Válassz kategóriát!";
?>