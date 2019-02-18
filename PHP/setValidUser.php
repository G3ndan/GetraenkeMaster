<?php
session_start();
if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
  session_destroy();
  header("Location: http://localhost/login.php");
  die();
}
else{
  require "db.php";
  $query = $mysqli->prepare("SELECT `email` FROM `User` WHERE `email` = :email");
  $query->bindValue(":email", $_SESSION['user']);
  if($query->execute()){
    $query->closeCursor();
    $query = null;
    $mysqli = null;
    $_SESSION['validUser'] = true;
  }
  else{
    $query->closeCursor();
    $query = null;
    $mysqli = null;
    session_destroy();
    header("Location: http://localhost/login.php");
    die();
  }
}
?>
