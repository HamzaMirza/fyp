<?php

session_start();
$s_userName=$_SESSION['userName'];
include("conn/conn.php");
	$query="update session set session_response='0' where s_userName='$s_userName'";
		$update_run=mysqli_query($conn,$query);

session_destroy();


echo "<script>window.open('admin_login.php?logout=You Successfully logged out!','_self');</script>";


?>