<?php
	include("../../conn/conn.php");
	include("./globalfunctions.php");
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	
	$userName=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$name=$_REQUEST['name'];
	$company=$_REQUEST['company_name'];
	$category_id=$_REQUEST['category_id'];

	
	if(!isset($userName)||!isset($password)||!isset($company))
	{
		updateResponse($response,0,"User name or password or company name can't be empty");
		echo json_encode($response);
	}
	
	if(!checkUser($userName,$company,$conn,$response,$category_id))
		insertCompany($userName,$password,$company,$conn,$response,$category_id,$name);
	
	echo json_encode($response);


	


			




?>