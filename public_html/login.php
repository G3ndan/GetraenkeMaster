<?php include "../PHP/authenticate.php" ?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title>Getränkemanagement | Login</title>
	<link rel="stylesheet" href="/CSS/login.css?v1">
	<script type="text/javascript" src="/JS/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="/JS/functions.js"></script>
	<script type="text/javascript" src="/JS/jquery.validate.js"></script>
  <script type="text/javascript" src="/JS/form.js"></script>
	<meta charset="UTF-8">
	<body>
		<div class="form">
				<h1 id="title">CGI Getränkemanager</h1>
				<form class="form1" action="" method="post">
					<input type="email" name="email" placeholder="E-Mail Adresse" >
					<input type="password" name="password" placeholder="Passwort">
					<button type="submit" name="submit" id="button">Sign in</button>
				</form>
		</div>
</body>
</html>
