<?php 
require_once('database.php');
require_once('config.php');
require_once(ROOT_DIR.'/frontend/listview.php');
require_once(ROOT_DIR.'/frontend/moderation.php');
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
            if($_SESSION['credidentals']=='user'){
            require_once(ROOT_DIR.'/frontend/add.php');
            }else{
              header('Location:/jokessite/JokeSite/');
            }
            break;
            case 'mod':
              if($_SESSION['credidentals']=='moderator'){
                generateModeration(getUnApprovedJokes());
              }else{
                header('Location:/jokessite/JokeSite/');
              }
              break;
            case 'approve':
              if($_SESSION['credidentals']=='moderator'){
                  approve($_GET['id']);
                  header('Location:/jokessite/JokeSite/');
                }else{
                  header('Location:/jokessite/JokeSite/');
                }
                break;
             case 'decline':
                  if($_SESSION['credidentals']=='moderator'){
                      decline($_GET['id']);
                      header('Location:/jokessite/JokeSite/');
                    }else{
                      header('Location:/jokessite/JokeSite/');
                    }
                    break;
        
      }
    }
else echo "Válassz kategóriát!";
?>