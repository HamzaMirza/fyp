<?php
	include("../../conn/conn.php");
	include("./globalfunctions.php");
	$response["success"] = 0;
	$response["message"] = "";
	
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$name=$_REQUEST['name'];
	$cid=$_REQUEST['cid'];
	
	if(!isset($email)||!isset($password)||!isset($name))
	{
		updateResponse($response,0,"User name or password or name can't be empty");
		echo json_encode($response);
	}
	if(!checkUserOnly($email,$conn,$response)){
		if(	$result = mysqli_query($conn,"INSERT INTO `admin`( `username`, `password`,`name`,`c_id`) VALUES ( '$email', '$password','$name',$cid )") )
		{
			$response["success"]=1;
			$response["message"] = "Successfully Inserted Admin";
		}
		else 
			$response["message"] = "Failed To Insert Admin";
	}
	
	echo json_encode($response);
?>
