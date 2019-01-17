<?php
	include("../../conn/conn.php");
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	$response["admins"] = array();
	$cid=$_REQUEST['cid'];
	
	$result = mysqli_query($conn,
	"SELECT a.* from admin a where c_id=$cid");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$temp = array();
				$temp["id"] = $row["id"];
				$temp["name"] = $row["name"];
				$temp["email"] = $row["userName"];
				
				array_push($response["admins"], $temp);
			}
			$response["success"] = 1;
			$response["message"] = "Date Fetched";
		}
		else
		{
			$response["success"] = 0;
			$response["message"] = "Failed to fetch the data";
		} 
	}
	echo json_encode($response);



?>