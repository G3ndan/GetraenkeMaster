<?php
session_start();
if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
  session_destroy();
  header("Location: http://localhost/login.php");
  die();
}
else{
  require_once "db.php";
  $query = $mysqli->prepare("SELECT `email` FROM `User` WHERE `email` = :email");
  $query->bindValue(":email", $_SESSION['user']);
  if($query->execute()){
    $query = null;
    $mysqli = null;
    $_SESSION['validUser'] = true;
  }
  else{
    $query = null;
    $mysqli = null;
    session_destroy();
    header("Location: http://localhost/login.php");
    die();
  }
}
?>
