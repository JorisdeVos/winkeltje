<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php require_once 'header.php';?>
	<main>
	  <form action="backend/loginController.php" method="POST">
		  	<div class="form-group">
		  		<label for="username">Gebruikersnaam</label>
                <input type="text" name="username" id="username"?>
            </div>
		  	<div class="form-group">
		  		<label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password"?>
            </div>
		  	<input id="login"type="submit" name="submit" value="login">  
		</form>
	</main>
  <?php require_once 'footer.php';?>
</body>
</html>