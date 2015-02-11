<?php
	require_once('functions.php');
	checkCookieLogged();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Calendar</title>
		<style>
			body{
					background-color: #bbbbbb;
			}
			
		</style>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.2.js"></script>
		<script src="main.js"></script>
	</head>

		

	<body>
		<?php
			if(isset($_GET['connection']));
		 ?>

		<div id="wrapper">
			<form name="login-form" class="login-form" action="handleUsers.php" method="GET">
			
				<div class="header">
					<h1>Register</h1>
				</div>
				<div class="content">
					<input name="email" type="email" id = "RegEmail" class="input username" placeholder="Email" required="required"/>
					<div class="user-icon"></div>
					<input name="password" type="password" id="RegPassword" class="input password" placeholder="Password" required="required"/>
					<div class="pass-icon"></div>
					<input name="date" type="date" id="RegDate" class="input password" required="required"/>		
				</div>
				<div class="footer">
				<input type="submit" id="registerButton" name="register" value="Register" class="button" />
				<a href = "login.php" class="register">Login</a>
				</div>
			</form>
		</div>
		<div class="gradient"></div>

	</body>
</html>