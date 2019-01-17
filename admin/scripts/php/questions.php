<?php
	include("../../conn/conn.php");
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	$response["questions"] = array();
	$result = mysqli_query($conn,"select * from questions order by id desc");
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
				array_push($response["questions"], $temp);
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