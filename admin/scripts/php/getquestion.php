<?php
	include("../../conn/conn.php");
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	$id=$_REQUEST['id'];
	$response["question"] = array();
	$result = mysqli_query($conn,"select * from questions where id=$id");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$temp = array();
				$temp["id"] = $row["id"];
				$temp["question"] = $row["question"];
				$temp["ans1"] = $row["ans1"];
				$temp["ans2"] = $row["ans2"];
				$temp["ans3"] = $row["ans3"];
				$temp["ans4"] = $row["ans4"];
				$temp["correct"] = $row["correct"];
				$temp["time"] = $row["time"];
				$temp["draft"] = $row["draft"];
				array_push($response["question"], $temp);
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