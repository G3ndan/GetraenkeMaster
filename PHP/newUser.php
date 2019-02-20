<?php
error_reporting(0);
session_start();
if(isset($_SESSION['id']) && $_SESSION['id'] == 1){
  if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if($email && $email < 50){
      if(isset($_POST['password']) && !empty($_POST['password'])){
        if($_POST['password'] < 52){

          $passwd = password_hash($_POST['password'], PASSWORD_BCRYPT);

          require "db.php";

          $query = $mysqli->prepare("INSERT INTO `User`(`email`, `password`) VALUES (:email, :password)");
          $query->bindValue(":email", $email);
          $query->bindValue(":password", $passwd);
          $query->execute();
          $query->closeCursor();
          $query = null;
          $mysqli = null;
        }
      }
    }
  }
}





?>
