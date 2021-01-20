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
function getRandomJoke(){
  $conn=connect();
  $sql = "SELECT count(*) FROM `jokes`"; 
  $result = $conn->prepare($sql); 
  $result->execute(); 
  $number_of_rows = $result->fetchColumn(); 
  $random_num=rand(1,$number_of_rows);
  $stmt = $conn->prepare("SELECT full FROM jokes where id=?");
    $stmt->execute([$random_num]); 
    $array = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $array['full'];
}
?>