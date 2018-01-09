<?php
require_once __DIR__ .'/config.php';
session_start();
$response = array();
$response["success"] = 0;
$session_response=explode("**",test_input($_REQUEST['response']));
$s_userName=$session_response[1];
		
		$sel_admin="select * from admin where userName='$s_userName'";
		$run_q=mysqli_query($connection,$sel_admin);
		$check_admin=mysqli_num_rows($run_q);
		if($check_admin<=0)
		{ 
			$response["success"] = 0;
			session_destroy();
			echo json_encode($response);
			exit();
		}
		else
		{
			$query="update session set session_response='0' where s_userName='$s_userName'";
			if($update_run=mysqli_query($connection,$query))
				$response["success"] = 1;
			session_destroy();
			echo json_encode($response);
		}
 function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

?>