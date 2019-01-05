<?php
include("./session.php");

function updateResponse(&$response,$success,$message)
{
		$response["success"] = $success;
		$response["message"] = $message;
}

function checkUser($userName,$conn,&$response)
{
	$result = mysqli_query($conn,"select * from users where userName='$userName'");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			updateResponse($response,0,"User already exists");
			return true;
		}
		else
		{
			return false;
		}
	}
	return false;
}
function checkUserPassword($userName,$password,$conn,&$response)
{
	
	$result = mysqli_query($conn,"select * from users where userName='$userName' and password=$password");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		updateResponse($response,0,"Failed to log in the user");
		return false;
	}

}
function insertUser($userName,$password,$conn,&$response,$name)
{
	
	$now = new DateTime();
	$query="insert into users(userName,password,name) values('".$userName."','".$password."','".$name."')";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		
		$aid=getUserId($userName,$conn);
		if(insertSession($aid,$now->format('Y-m-d H:i:s'),$conn)==1)
		{
			updateResponse($response,1,"Successfully inserted session");
		}
		else
			updateResponse($response,0,"Failed to insert session");
	}
	else
	{
		updateResponse($response,0,"Failed to insert user");
	}
				
}

function getUserId($userName,$conn)
{
	$id=-1;
	$result = mysqli_query($conn,"select * from users where userName='$userName'");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
				$id=$row["id"];
			return $id;
		}
		else
		{
			return $id;
		}
	}
	return $id;
}
?>