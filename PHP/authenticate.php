<?php
session_start();

if(isset($_POST['email']) && !empty($_POST['email'])){
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  if($email && (strlen($email) < 50 )){
    if(isset($_POST['password']) && !empty($_POST['password'])){
      if(strlen($_POST['password']) < 52){
        $passwd = $_POST['password'];
        require "db.php";

        $query = $mysqli->prepare("SELECT * FROM `User` WHERE `email`= :email");
        $query->bindValue(":email", $email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        $query->closeCursor();
        $query = null;
        $mysqli = null;

        if(password_verify($passwd, $user['password'])){
          $_SESSION['user'] = $email;
          $_SESSION['id'] = (int)$user['user_id'];
          header("Location: http://localhost/index.php");
          die();
        }
        else{
          session_destroy();
        }
      }
    }
  }
}


?>
