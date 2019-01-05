<?php
	    include("../../conn/conn.php");
		include("./globalfunctions.php");
		
		$response = array();
		$response["success"] = 0;
		$response["message"] ="";
		
		$userName=$_REQUEST['email'];
		$password=$_REQUEST['password'];
	
		if(!isset($userName)||!isset($password))
		{
			updateResponse($response,0,"Email or password can't be empty");
			echo json_encode($response);
		}
		if(checkAdminPassword($userName,$password,$conn,$response))
		{
						updateResponse($response,1,"Logged In");
						$aid=getAdminId($userName,$conn);
						updateAdminSession($aid,1,$conn);
						session_start();
						$_SESSION['userName']=$userName;
		}
		else
		{
			updateResponse($response,0,"Email or Password does not match");
		} 	
	
		 echo json_encode($response);
	?>