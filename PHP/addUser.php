<?php
session_start();
if(isset($_SESSION['admin']) && $_SESSION['admin'] === true){
  if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if($email && isset($_POST['password']) && !empty($_POST['password'])){
      $passwd = password_hash($_POST['password'], PASSWORD_BCRYPT);

      require_once "db.php";

      $query = $mysqli->prepare("INSERT INTO `User`(`email`, `password`) VALUES (:email, :password)");
      $query->bindValue(":email", $email);
      $query->bindValue(":password", $passwd);
      $query->execute();
      echo "User successfully added";
    }
  }
  else{
    echo "Invalid E-mail or Password";
  }
}
else{
  echo "Invalid Rights";
}




?>
