<?php
  require '../PHP/checkValidUser.php';
?>
<html lang="en" dir="ltr">
    <?php include '../PHP/head.php'; ?>
    <title>Getränkemanagement | Change Password</title>
  <link rel="stylesheet" href="/CSS/style.css">
  <link rel="stylesheet" href="/CSS/login.css">
  <script type="text/javascript" src="/JS/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/JS/jquery.validate.js"></script>
  <script type="text/javascript" src="JS/form.js"></script>
  </head>
  <body>
    <?php include '../PHP/menu.php'?>
    <div class="form">
        <form class="form1" onsubmit="validate();" method="post">
          <input type="password" name="password_cu" placeholder="Aktuelles Passwort">
          <input type="password" name="password" placeholder="Neues Passwort">
          <input type="password" name="password_rep" placeholder="Passwort wiederholen">
          <button type="submit" name="submit" id="button">Passwort Ändern</button>
        </form>
    </div>
  </body>
</html>
