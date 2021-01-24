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
    $stmt = $conn->prepare("SELECT full,approved FROM jokes where category=?");
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
function register($username, $password){
  $conn=connect();
  $stmt = $conn->prepare("INSERT INTO users(username, password) VALUES(?,?)");
  $stmt->execute([$username,sha1($password)]);         
}
function login($username, $password){
  $conn=connect();
  $sql = "SELECT count(*) as login, isModerator FROM `users` WHERE username = ? AND password=?"; 
  $stmt = $conn->prepare($sql); 
  $stmt->execute([$username,sha1($password)]); 
  $array = $stmt->fetch(PDO::FETCH_ASSOC);
  if($array['login']==1&&$array['isModerator']==1){
      return 'moderator';
  }
  elseif($array['login']==1){
      return 'user';
  }
  else{
    return 'notregistered';
  }
}
function getCategories(){
  $conn=connect();
  $joke=array();
  $resp=array();
  $stmt = $conn->prepare("SELECT * FROM categories");
  $stmt->execute(); 
  $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $array;
  
}
function addJoke($joke,$category){
  $conn=connect();
  $stmt = $conn->prepare("INSERT INTO jokes(full, category) VALUES(?,?)");
  $stmt->execute([$joke,$category]); 
}
function getUnApprovedJokes(){
  $conn=connect();
  $joke=array();
  $resp=array();
  $stmt = $conn->prepare("SELECT * FROM `jokes` where isnull(approved)");
  $stmt->execute(); 
  $array = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $array;
  
}
?>