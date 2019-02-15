<?php
session_start();

if(isset($_POST['email']) && !empty($_POST['email'])){
  $email = $_POST['email'];//filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  if($email && isset($_POST['password']) && !empty($_POST['password'])){
    $passwd = $_POST['password'];
    require_once "db.php";

    $query = $mysqli->prepare("SELECT * FROM `User` WHERE `email`= :email");
    $query->bindValue(":email", $email);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    $mysqli = null;

    if(password_verify($passwd, $user['password'])){
      $_SESSION['user'] = $email;
      $_SESSION['id'] = $user['user_id'];
      header("Location: http://localhost/index.php");
      die();
    }
    else{
      echo "Failed to log in";
      session_destroy();
    }
  }
}


?>
