<?php
	include("../conn/conn.php");
	include("./globalfunctions.php");
	
	
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	
	$userName=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$name=$_REQUEST['name'];

	
	if(!isset($userName)||!isset($password)||!isset($name))
	{
		updateResponse($response,0,"Name or password or email can't be empty");
		echo json_encode($response);
	}
	
	if(!checkUser($userName,$conn,$response))
		insertUser($userName,$password,$conn,$response,$name);
	
	echo json_encode($response);
	





?>