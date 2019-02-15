<?php
session_start();

$email = $_SESSION['user'];
if(isset($_POST['pwOld']) && !empty($_POST['pwOld'])){
  $passOld = $_POST['pwOld'];
  if(isset($_POST['pwNew1']) && !empty($_POST['pwNew1'])){
    $passNew = $_POST['pwNew1'];
    if(isset($_POST['pwNew2']) && !empty($_POST['pwNew2'])){
      $passNew2 = $_POST['pNew2'];
      if($passNew == $passNew2){

        $passNew = password_hash($passnew, PASSWORD_BCRYPT);
        require "db.php";
        $check = $mysqli->prepare("SELECT `password` FROM `User` WHERE `email`= :email");
        $check->bindValue(":email", $email);
        if($check->execute()){

          $temp = $check->fetch(PDO::FETCH_NUM);
          $check = null;
          if(password_verify($passOld, $temp[0]) && !password_verify($passNew, $temp[0])){
            $query = $mysqli->prepare("UPDATE `User` SET `password`= :password WHERE `email` = :email");
            $query->bindValue(":password", $passNew);
            $query->bindValue(":email", $email);
            if($query->execute()){
              echo "Password successfully changed";
            }
            else{
              echo "I don't even know what could've went wrong";
            }
            $query->closeCursor();
            $query = null;
          }
          else{
            echo "Wrong Password";
          }
        }
        else{
          echo "User doesn't exist";
        }
        $mysqli = null;
      }
      else{
        echo "Passwords don't match";
      }
    }
    else{
      echo "Please repeat new Password";
    }
  }
  else{
    echo "Please enter new Password";
  }
}


?>
