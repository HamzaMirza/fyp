<?php
function insertSession($id,$date,$conn)
{
	$query="insert into admin_session(aid,time,session_response) values($id,now(),1);";
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
function updateAdminSession($id,$session,$conn)
{
	$query="update admin_session set session_response='$session' where aid=$id";
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