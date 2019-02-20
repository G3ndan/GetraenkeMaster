<?php
  require '../PHP/checkValidUser.php';
  require '../PHP/changePw.php';
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
        <form class="form1" action="" method="post">
          <input type="password" name="pwOld" placeholder="Aktuelles Passwort">
          <input type="password" name="pwNew1" placeholder="Neues Passwort">
          <input type="password" name="pwNew2" placeholder="Passwort wiederholen">
          <button type="submit" name="submit" id="button">Passwort Ändern</button>
        </form>
    </div>
  </body>
</html>
