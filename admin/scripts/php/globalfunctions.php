<?php
include("./sessions.php");

function updateResponse(&$response,$success,$message)
{
		$response["success"] = $success;
		$response["message"] = $message;
}

function getAdminId($userName,$conn)
{
	$id=-1;
	$result = mysqli_query($conn,"select * from admin where userName='$userName'");
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

function getCompanyId($company,$conn)
{
	$id=-1;
	$result = mysqli_query($conn,"select * from campany where name='$company'");
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
function checkCompany($company,$conn,&$response,$category_id)
{
	$result = mysqli_query($conn,"select * from campany where name='$company' and cat_id=$category_id");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			updateResponse($response,0,"Company already exists");
			return true;
		}
		else
		{
			return false;
		}
	}
	return false;
}
function checkUser($userName,$company,$conn,&$response,$category_id)
{
	$result = mysqli_query($conn,"select * from admin where userName='$userName'");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			updateResponse($response,0,"User already exists");
			return true;
		}
		else
		{
			return checkCompany($company,$conn,$response,$category_id);
		}
	}
	return false;
}

function insertUser($userName,$password,$company_id,$conn,&$response,$name)
{
	$now = new DateTime();
	$query="insert into admin(userName,password,c_id,name) values('".$userName."','".$password."',".$company_id.",'".$name."')";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		$aid=getAdminId($userName,$conn);
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
function insertCompany($userName,$password,$company,$conn,&$response,$category_id,$name)
{
	$query="insert into campany(name,cat_id) values('".$company."',".$category_id.")";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		$company_id=getCompanyId($company,$conn);
		insertUser($userName,$password,$company_id,$conn,$response,$name);
	}
	else
	{
		updateResponse($response,0,"Failed to insert company".$company);
	}
				
}
function checkAdminPassword($userName,$password,$conn,&$response)
{
	
	$result = mysqli_query($conn,"select * from admin where userName='$userName' and password=$password");
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
		updateResponse($response,0,"Failed to log in admin");
		return false;
	}

}
?>