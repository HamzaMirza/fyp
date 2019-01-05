<?php
include("conn/conn.php");
@session_start();
if(!isset($_SESSION['userName'])){

	echo "<script>window.open('masterlayout.php?home','_self');</script>";
}
else{
	
	$response="1";
	$s_userName=$_SESSION['userName'];

	$query1="select * from session where s_userName='$s_userName'";
	$run_q=mysqli_query($conn,$query1);

	$checking=mysqli_num_rows($run_q);
	if($checking==0){
		$query2="insert into session(session_response,s_userName,time,checking) values('$response','$s_userName',now(),'yes');";
		$run_que=mysqli_query($conn,$query2);

	}
	else{
	$query3="update session set session_response='$response' where s_userName='$s_userName'";
		$update_run=mysqli_query($conn,$query3);
	}
}
?>