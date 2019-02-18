<?php
session_start();
if(!isset($_SESSION['validUser']) || empty($_SESSION['validUser'])){
  session_destroy();
  header("Location: http://localhost/login.php");
  die();
  if(!$_SESSION['validUser'] === true){
    session_destroy();
    header("Location: http://localhost/login.php");
    die();
  }
}

?>
