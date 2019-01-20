<?php
	include("../../conn/conn.php");
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	$response["designations"] = array();
	$result = mysqli_query($conn,"select * from designation");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$temp = array();
				$temp["id"] = $row["id"];
				$temp["name"] = $row["name"];
				array_push($response["designations"], $temp);
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