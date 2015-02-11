<?php
		require_once('functions.php');
		checkCookieIndex();
		var_dump($_COOKIE['id']);
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
		<div class="headerIndex">
			<h1>My Calendar</h1>
			<div id="userDetails"></div>
		</div>
		<div id="left">
			<div id="buttons">
				<input type="button" value="Add Note" id="addEvent" class="Indexbutton"/>
				<input type="button" value="update user" id="updateUser" class="Indexbutton"/>
				<form action="handleUsers.php">
			   	 	<input type="submit" name="logout" value="logout" class="Indexbutton">
				</form>
			</div> 
			<div id="popup">
				<form action="handleEvent.php" method="GET">
					<h1>Add Event</h1>
					title: <input type="text" name="title"></input><br>
					content: <input type="text" name="data"></input><br>
					day: 	<select name="day">
							    <option value=1>sunday</option>
							    <option value=2>monday</option>
							    <option value=3>tuesday</option>
							    <option value=4>wednsday</option>
							    <option value=5>thursday</option>
							    <option value=6>friday</option>
							    <option value=7>saturday</option>
						  	</select>
					<input type="submit" name="newEvent" value="create"/>
					<input type="hidden" name="user_id" value= <?php echo $_COOKIE['id']?>/>	
				</form>
				<button class="close" >X</button>
			</div>
			<div id="popupUpdate">
				<form action="handleEvent.php" method="GET">
					<h1>Update Event</h1>
					title: <input id="popupTitle" type="text" name="title" ></input><br>
					content: <input id="popupData"type="text" name="data" ></input><br>
					day: 	<select id="select" name="day">
							    <option value=1>sunday</option>
							    <option value=2>monday</option>
							    <option value=3>tuesday</option>
							    <option value=4>wednsday</option>
							    <option value=5>thursday</option>
							    <option value=6>friday</option>
							    <option value=7>saturday</option>
						  	</select>
					<input type="submit" name="updateEvent" value="update"/>
					<input type="hidden" name="user_id" value= <?php echo $_COOKIE['id']?>></input>
					<input type="hidden" id="noteId" name="note_id" ></input>
				</form>
				<button class="close" >X</button>
			</div>
			<div id="popupUpdateUser">
				<form action="handleEvent.php" method="GET">
					<h1>Update User</h1>
					email: <input id="popupEmail" type="email" name="email" ></input><br>
					password: <input id="popupPassword"type="password" name="password" ></input><br>
					re-password: <input id="popupPasswordValidate"type="password" name="password" ></input><br>
					date of birth: 	<input id="popupAge" type="date" name="date"/>
					<input type="submit" name="updateUser" value="update"/>
					<input type="hidden" name="id" value= <?php echo $_COOKIE['id']?>/>
				</form>
				<button class="close" >X</button>
			</div>
		</div>
		
		
		<div id="calender">
			<div id="calenderContent">
				<div>
					<div class="day_label">Sunday</div>
					<div class="day_label">Monday</div>
					<div class="day_label">Tuesday</div>
					<div class="day_label">Wednesday</div>
					<div class="day_label">Thursday</div>
					<div class="day_label">Friday</div>
					<div class="day_label">Saturday</div>
					<div class="cb"></div>
				</div>
				<div>
					<div id="1" class="day"><?php getNote(1)?></div>
					<div id="2" class="day"><?php getNote(2)?></div>
					<div id="3" class="day"><?php getNote(3)?></div>
					<div id="4" class="day"><?php getNote(4)?></div>
					<div id="5" class="day"><?php getNote(5)?></div>
					<div id="6" class="day"><?php getNote(6)?></div>
					<div id="7" class="day"><?php getNote(7)?></div>
					<div class="cb"></div>
				</div>
			</div>
		</div>

		
	</body>
</html>
