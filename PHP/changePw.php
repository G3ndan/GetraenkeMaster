<?php
error_reporting(0);
session_start();
$email = $_SESSION['user'];
if(isset($_POST['pwOld']) && !empty($_POST['pwOld'])){
  if(strlen($_POST['pwOld']) < 52){
    $passOld = $_POST['pwOld'];
    if(isset($_POST['pwNew1']) && !empty($_POST['pwNew1'])){
      if(strlen($_POST['pwNew1']) < 52){
        $passNew = $_POST['pwNew1'];
        if(isset($_POST['pwNew2']) && !empty($_POST['pwNew2'])){
          if(strlen($_POST['pwNew2']) < 52){
            $passNew2 = $_POST['pwNew2'];
            if(($passNew == $passNew2) && ($passNew != $passOld)){

              $hashPass = password_hash($passNew, PASSWORD_BCRYPT);
              require "db.php";
              $check = $mysqli->prepare("SELECT `password` FROM `User` WHERE `email`= :email");
              $check->bindValue(":email", $email);
              if($check->execute()){

                $temp = $check->fetch(PDO::FETCH_NUM);
                $check->closeCursor();
                $check = null;

                if(password_verify($passOld, $temp[0]) && !password_verify($passNew, $temp[0])){
                  $query = $mysqli->prepare("UPDATE `User` SET `password`= :password WHERE `email` = :email");
                  $query->bindValue(":password", $hashPass);
                  $query->bindValue(":email", $email);
                  $query->execute();
                  $query->closeCursor();
                  $query = null;
                }
              }
              else{
                $check->closeCursor();
                $check = null;
              }
              $mysqli = null;
            }
          }
        }
      }
    }
  }
}


?>
