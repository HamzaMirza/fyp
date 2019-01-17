<?php
	include("../../conn/conn.php");
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	$response["scores"] = array();
	$cid=$_REQUEST['cid'];
	
	$result = mysqli_query($conn,
	"SELECT concat(u.fname,' ',u.lname) as Name,u.cv,u.education,t.vacancyid,t.score FROM `testscore` t join users u on t.uid=u.id where t.cid= ".$cid." order by t.date desc");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$temp = array();
				$temp["name"] = $row["Name"];
				$temp["cv"] = $row["cv"];
				$temp["education"] = $row["education"];
				$temp["vid"] = $row["vacancyid"];
				$temp["score"] = $row["score"];
				array_push($response["scores"], $temp);
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