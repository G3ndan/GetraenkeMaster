<?php
require "../PHP/checkValidUser.php";
if($_SESSION['id'] != 1){
  header("Location: http://localhost/index.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="de" >
  <head>
    <meta charset="utf-8">
    <title>Benutzer Hinzufügen</title>
    <script type="text/javascript" src="/JS/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/JS/jquery.validate.js"></script>
    <script type="text/javascript" src="/JS/form.js"></script>
    <link rel="stylesheet" href="/css/login.css">
  </head>
  <body>
    <form class="form1" action="../PHP/newUser.php" method="post">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Passwort">
      <button type="submit" name="button">Hinzufügen</button>
    </form>
  </body>
</html>
