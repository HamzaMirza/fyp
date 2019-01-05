<?php
	    include("../../conn/conn.php");
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
		
		$aid=getAdminId($userName,$conn);
		if($aid==-1)
			updateResponse($response,0,"No User Found");
		else
		{
			if(updateAdminSession($aid,0,$conn))
				updateResponse($response,1,"Logged out");
			else
				updateResponse($response,0,"Failed to Logged out");
		}
 		
		 echo json_encode($response);
		 
?>