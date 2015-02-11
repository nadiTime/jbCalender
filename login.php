<?php
	require_once('functions.php');
	checkCookieLogged();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Calendar</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.2.js"></script>
		<script src="main.js"></script>
	</head>

	<body>
		<?php
			if(isset($_GET['connection'])) echo"<span>login failed</span>";
		 ?>
		<div id="wrapper">
			<form name="login-form" class="login-form" action="handleUsers.php" method="GET">
			
				<div class="header">
					<h1>Login</h1>
				</div>
				<div class="content">
				<input name="email" type="email" class="input username" placeholder="Email" required="required"/>
				<div class="user-icon"></div>
				<input name="password" type="password" class="input password" placeholder="Password" required="required"/>
				<div class="pass-icon"></div>		
				</div>
				<div class="footer">
				<input type="submit" name="login" value="Login" class="button" />
				<a href = "register.php"class="register">Register</a>
				</div>
			</form>
		</div>
		<div class="gradient"></div>
	</body>
</html>
