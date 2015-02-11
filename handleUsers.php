<?php
	require_once('functions.php');
	if(isset($_GET['login']))checkUser($_GET['email'],$_GET['password']);
	if(isset($_GET['register'])) registerUser($_GET['email'],$_GET['password'],$_GET['date']);
	if(isset($_GET['logout'])) logoutUser();