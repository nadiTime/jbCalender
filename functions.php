<?php
	function checkCookieIndex(){

		if(!isset($_COOKIE['id'])){
			header("Location:login.php");
		}
	}
	function checkCookieLogged(){
		if(isset($_COOKIE['id'])){
			header("Location:index.php");
		}
	}
		
			
	

	function getNote($day){
		$user=$_COOKIE['id'];
		$noteArray = getQuery("SELECT title,content,id FROM notes WHERE user_id = $user AND day=$day");
		if(!$noteArray) return;
		foreach($noteArray as $note){
			if(empty($noteArray)) continue;
			$id = $note['id'];
			$content = $note['content'];
			$title = $note['title'];
			echo "<span title=$title noteId= $id class='note'>$content<p class='deletenote'>x</p></span><br>";

		}
	}
	
	function addEvent($title,$data,$day,$userId){
		$query="INSERT INTO notes(`user_id`,`title`,`content`,`day`) VALUES('$userId','$title','$data','$day')";
		$sqlObj= connect();
		$answer= $sqlObj->query($query);
		$sqlObj->close();
		if($answer)return true;
		else return false;

	}
	function updateEvent($title,$data,$day,$userId,$note_id){
		$sqlObj= connect();
		$query = "UPDATE notes SET title = '$title',content='$data',day='$day' WHERE user_id = $userId AND id=$note_id";
		$answer= $sqlObj->query($query);
		if(!$answer) {
			var_dump($title);
			var_dump($data);
			var_dump($day);
			var_dump($userId);
			var_dump($note_id);
			var_dump($answer);
			die;
		}
		else header("Location:index.php");

	}

	function deleteEvent($eventId){
		$sqlObj= connect();
		$query = "DELETE FROM notes WHERE id= '$eventId' limit 1";
		$answer = $sqlObj->query($query);
		if(!$answer) header(("Location:index.php?delete=failed"));
		else header("Location:index.php");
	}

	function connect(){
		$sqlObj= new mysqli('localhost','root','','calender');
		if($sqlObj->connect_errno) return false;
		else return $sqlObj;
	}

	function getQuery($query){
		$sqlObj= connect();
		if($sqlObj->connect_errno)return false;
		$answer = $sqlObj->query($query);
		if(!$answer){
			return false;
		}
		$array = array();
		while($row = $answer->fetch_assoc()) {
		$array[] = $row;	
		}
		return $array;
	}
	function checkUser($email,$password){
		$query = "SELECT id FROM users WHERE email = '$email' AND password='$password'";
		$details=getQuery($query);
		if(!$details) header('Location:login.php?connection=failed');
		else {
			setcookie("id", $details[0]['id'] , time()+3600*3);
			header('Location:index.php');}
	}
	function registerUser($email,$password,$date){
		$passwordCheck = checkPassword($password);
		$emailCheck = filter_var($email, FILTER_VALIDATE_EMAIL);
		if($passwordCheck&&$emailCheck){
			$query="INSERT INTO users(`email`,`password`,`dob`) VALUES('$email','$password','$date')";
			$sqlObj= connect();
			$answer= $sqlObj->query($query);
			$id = $sqlObj->insert_id;
			$sqlObj->close();
			if($answer) {
				setcookie("id", $id , time()+3600*3);
				header('Location:index.php');
			}
			else header('Location:register.php?register=failed');
		}
		else header('Location:register.php?email=failed&password=failed');
	}
	function checkPassword($pass){
		if(strlen($pass)<5||strlen($pass)>10) return false;
		else return true;
	}
	function logoutUser(){
		setcookie ("id", "", time() - 3600);
		header('Location:login.php');
	}

	function getUser($id){
		$query = "SELECT email,dob,password FROM users WHERE id = '$id'";
		$user=getQuery($query);
		echo json_encode($user[0]);
	}