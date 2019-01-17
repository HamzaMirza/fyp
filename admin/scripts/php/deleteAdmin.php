<?php
	include("../../conn/conn.php");
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	$aid=$_REQUEST['id'];
	
	$result = mysqli_query($conn,
	"delete from admin where id=$aid");
	if($result)
	{
		$response["success"] = 1;
		$response["message"] = "Deleted";
		
	}
	else
	{
		$response["success"] = 0;
		$response["message"] = "Failed to delete admin";
	} 
	echo json_encode($response);



?>