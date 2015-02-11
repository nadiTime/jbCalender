<?php
	function returnResponse($re){
		echo json_encode($re);
	}

	function returnError($obj){
		http_response_code(404);
		echo json_encode($obj);
		exit();
	}

	$response = array();
	$response['day']=1;
	$response['title']="nadi is fat";
	if(!isset($_GET['x'])) {
		returnError(array('error'=>'missing argument x'));
	}
	$response['x'] = $_GET['x'];
	returnResponse($response);