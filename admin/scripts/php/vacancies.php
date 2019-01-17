<?php
	include("../../conn/conn.php");
	$response = array();
	$response["success"] = 0;
	$response["message"] ="";
	$response["vacancies"] = array();
	$cid=$_REQUEST['cid'];
	
	$result = mysqli_query($conn,
	"SELECT v.*,d.name as designation,rt.name as role FROM `vacancy` v join designation d on v.designationid=d.id join roletype rt on v.roletypeid=rt.id where v.cid= ".$cid." order by v.date desc");
	if($result)
	{
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$temp = array();
				$temp["seats"] = $row["seats"];
				$temp["experience"] = $row["minexperience"]." years";
				$temp["city"] = $row["city"];
				$temp["vid"] = $row["id"];
				$temp["salary"] = $row["avgsalary"];
				$temp["role"] = $row["role"];
				$temp["lastdate"] = $row["lastDate"];
				$temp["date"] = $row["Date"];
				$temp["designation"] = $row["designation"];
				
				array_push($response["vacancies"], $temp);
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