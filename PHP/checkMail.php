<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  if($email){
    include "db.php";
    $query = $mysqli->prepare("SELECT `email` FROM `User` WHERE `email`= :email");
    $query->bindValue(":email", $email);
    $query->execute();

    if($query->fetch(PDO::FETCH_NUM)){
      echo "E-mail already taken";
    }
    else{
      echo "Valid Email";
    }

    $mysqli = null;

  }
  else{
    echo "Invalid Email";
  }
}
?>
