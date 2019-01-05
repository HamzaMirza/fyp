<?php
function insertSession($id,$date,$conn)
{
	$query="insert into user_session(uid,time,session_response) values($id,now(),1);";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		return 1;
	}
	else
	{
		return 0;
	}
				
}

function updateUserSession($id,$session,$conn)
{
	$query="update user_session set session_response='$session' where uid=$id";
	$result=mysqli_query($conn,$query);
	if($result)
	{
		return 1;
	}
	else
	{
		return 0;
	}
				
}

?>