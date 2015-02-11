<?php
	require_once('functions.php');
	if(isset($_GET['newEvent'])) addEvent($_GET['title'],$_GET['data'],$_GET['day'],$_GET['user_id']);
	if(isset($_GET['updateEvent'])) updateEvent($_GET['title'],$_GET['data'],$_GET['day'],$_GET['user_id'],$_GET['note_id']);
	if(isset($_GET['id'])) deleteEvent($_GET['id']);

	header("Location:index.php");