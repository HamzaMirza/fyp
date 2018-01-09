<?php
	    require_once __DIR__ .'/config.php';
		$response = array();
		$response["success"] = 0;
		$response["message"] ="";
		$response["session_response"]="not assigned";
		$response["userName"]="not assigned";
		$userName=test_input($_REQUEST['userName']);
		$password=test_input($_REQUEST['password']);
		if(!isset($userName)||!isset($password))
		{
			$response["message"] ="User name or password can't be empty";
			echo json_encode($response);
			exit();
		}
		
		
		
		
		
		$result = mysqli_query($connection,"select * from admin where userName='$userName'");
		if($result)
		{
			if (mysqli_num_rows($result) > 0) 
			{
				while ($row = mysqli_fetch_array($result)) 
				{
					if ($row["password"]==$password)
					{
						$response["success"] = 1;
						$response["message"] = "logged In";
						session_start();
						$response1="1";
						$_SESSION['userName']=$userName;

						$query1="select * from session where s_userName='$userName'";
						$run_q=mysqli_query($connection,$query1);

						$checking=mysqli_num_rows($run_q);
						if($checking==0)
						{
							$query2="insert into session(session_response,s_userName,time,checking) values('$response1','$userName',now(),'yes');";
							$run_que=mysqli_query($connection,$query2);
						}
						else
						{
							$query3="update session set session_response='$response1' where s_userName='$userName'";
							$update_run=mysqli_query($connection,$query3);
						}
						$response["session_response"]=$response1."**".$userName."**".rand(0,10000);
						$response["userName"]=$userName;
					}
					else if ($row["password"]!=$password)
					{
						$response["success"] = 0;
						$response["message"] = "password does not match";
					}
				}
				
					
			}
			else
			{
						$response["success"] = 0;
						$response["message"] = "user name does not match";
			}
		}
		else
		{
			$response["success"] = 0;
			$response["message"] = "failed";
			
		}				
		 echo json_encode($response);	
		 function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		exit();
	?>