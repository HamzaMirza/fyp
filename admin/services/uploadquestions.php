<?php
	$success=0;
	include("../conn/conn.php");
	
	if(
	$result = mysqli_query
	(
		$conn,
		"INSERT INTO `questions`( `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`,`draft`,`time`) VALUES (
		'".$_REQUEST['inputQuestion']."',
		'".$_REQUEST['inputAnswer']."',
		'".$_REQUEST['inputAnswer1']."',
		'".$_REQUEST['inputAnswer2']."',
		'".$_REQUEST['inputAnswer3']."',
		'".$_REQUEST['inputAnswer4']."',
		".$_REQUEST['draft'].",
		'".$_REQUEST['time']."')"
	) )
	$success=1;
 echo '<script> location.href="../index.php?addquestions&success='.$success.'";</script>';
?>
