<?php
	    include("../../conn/conn.php");
		include("./globalfunctions.php");
		
		$response = array();
		$response["success"] = 0;
		$response["message"] ="";
		$response["cid"] =-1;
		
		$userName=$_REQUEST['email'];
		$password=$_REQUEST['password'];
	
		if(!isset($userName)||!isset($password))
		{
			updateResponse($response,0,"Email or password can't be empty");
			echo json_encode($response);
		}
		if(checkAdminPassword($userName,$password,$conn,$response))
		{
						
						$aid=getAdminId($userName,$conn);
						updateAdminSession($aid,1,$conn);
						session_start();
						$_SESSION['userName']=$userName;
						
						$cid=getCompanyIdByAdminName($userName,$conn);
						
						$response["cid"]=$cid;
						updateResponse($response,1,"Logged In");
		}
		else
		{
			updateResponse($response,0,"Email or Password does not match");
		} 	
	
		 echo json_encode($response);
	?>