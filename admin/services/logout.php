<?php
	    include("../conn/conn.php");
		include("./globalfunctions.php");
		
		$response = array();
		$response["success"] = 0;
		$response["message"] ="";
		
		$userName=$_REQUEST['email'];
	
		if(!isset($userName))
		{
			updateResponse($response,0,"Email can not be empty");
			echo json_encode($response);
		}
		
		$uid=getUserId($userName,$conn);
		if($uid==-1)
			updateResponse($response,0,"No User Found");
		else
		{
			if(updateUserSession($uid,0,$conn))
				updateResponse($response,1,"Logged out");
			else
				updateResponse($response,0,"Failed to Logged out");
		}
 		
		 echo json_encode($response);
		 
?>