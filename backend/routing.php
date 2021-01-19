<?php 
require_once('database.php');
require_once('listview.php');
if(isset($_GET['c'])){
    $array=getJoke($_GET['c']);
    generateListView($array);
    }
else echo "Válassz kategóriát!";
?>