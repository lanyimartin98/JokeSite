<?php
require_once('config.php');
function connect(){
try {
  $conn = new PDO(CONNECTION_STRING,USER_NAME,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}
function getJoke($category){
    $conn=connect();
    $joke=array();
    $resp=array();
    $stmt = $conn->prepare("SELECT full FROM jokes where category=?");
    $stmt->execute([$category]); 
    $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $array;
    
}
?>