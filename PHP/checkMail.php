<?php
if(isset($_POST['email']) && !empty($_POST['email'])){
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  if($email){
    require "db.php";
    $query = $mysqli->prepare("SELECT `email` FROM `User` WHERE `email`= :email");
    $query->bindValue(":email", $email);

    if($query->execute())){
      echo "E-mail already taken";
    }
    else{
      echo "Valid Email";
    }
    $query->closeCursor();
    $query = null;
    $mysqli = null;

  }
  else{
    echo "Invalid Email";
  }
}
?>
