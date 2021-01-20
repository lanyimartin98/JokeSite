<?php 
require_once('database.php');
require_once('config.php');
require_once(ROOT_DIR.'/frontend/listview.php');
if(isset($_GET['c'])){
    $array=getJoke($_GET['c']);
    generateListView($array);
    }
else echo "Válassz kategóriát!";
?>