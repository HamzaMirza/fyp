<?php
	include("../../conn/conn.php");
	$response["success"] = 0;
	$response["message"] = "";
	
	$q=$_REQUEST['question'];
	$a1=$_REQUEST['ans1'];
	$a2=$_REQUEST['ans2'];
	$a3=$_REQUEST['ans3'];
	$a4=$_REQUEST['ans4'];
	$c=$_REQUEST['correct'];
	$d=$_REQUEST['draft'];
	$t=$_REQUEST['time'];
	$id=$_REQUEST['id'];
	if(	$result = mysqli_query($conn,"update `questions` set `question`='$q',`ans1`='$a1',`ans2`='$a2',`ans3`='$a3',`ans4`='$a4',`correct`='$c',`draft`=$d,`time`='$t' where id=$id") )
	{
		$response["success"]=1;
		$response["message"] = "Successfully Updated Question";
	}
	else 
		$response["message"] = "Failed To update Question";
	echo json_encode($response);
?>
