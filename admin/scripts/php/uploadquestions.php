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
	$id=$_REQUEST['c_id'];
	if(	$result = mysqli_query($conn,"INSERT INTO `questions`( `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct`,`draft`,`time`,`c_id`) VALUES ( '$q', '$a1', '$a2',	'$a3', '$a4', '$c', $d, '$t', $id )") )
	{
		$response["success"]=1;
		$response["message"] = "Successfully Inserted Question";
	}
	else 
		$response["message"] = "Failed To Insert Question";
	echo json_encode($response);
?>
