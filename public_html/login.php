<?php
 include '../PHP/authenticate.php'
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Getränkemanagement | Login</title>
	<link rel="stylesheet" href="/CSS/login.css">
	<script type="text/javascript" src="/JS/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/JS/jquery.validate.js"></script>
  <script type="text/javascript" src="/JS/form.js"></script>
	<meta charset="UTF-8">
	<body>
    <h1 id="title" style="margin-top: 5%;">CGI-Getränkemanager</h1>
        <div class="form">
				<form class="form1" action="" method="post">
          <h2>Bitte melden Sie sich an</h2>
					<div class="row">
					<input type="email" name="email" placeholder="E-Mail Adresse" required >
				</div>
				<div class=row>
					<input type="password" name="password" placeholder="Passwort" required>
				</div>
					<button type="submit" name="submit" id="button">Anmelden</button>
				</form>
		</div>
</body>
</html>
