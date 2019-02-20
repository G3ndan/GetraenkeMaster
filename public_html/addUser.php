<?php
require "../PHP/checkValidUser.php";
if($_SESSION['id'] != 1 ){
  header("Location: http://localhost/index.php");
  die();
}
include '../PHP/newUser.php'
?>
<!DOCTYPE html>
<html lang="de" >
  <?php include '../PHP/head.php'; ?>
    <title>Benutzer Hinzufügen</title>
    <script type="text/javascript" src="/JS/form.js"></script>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/login.css">
  </head>
  <body>
    <?php include '../PHP/menu.php'; ?>
    <div class="form">
    <form class="form1" action="" method="post">
      <div class="row">
      <input type="email" name="email" placeholder="E-Mail Adresse" required >
    </div>
    <div class=row>
      <input type="password" name="password" placeholder="Passwort" required>
    </div>
      <button type="submit" name="button" id="button">Hinzufügen</button>
    </form>
  </div>
  </body>
</html>
