<style>
.panel-heading
{
    color: white !important;
    background: red !important;
}
.panel-footer {
    background-color: brown;
}
</style>
<div class="container">
	<div class="col-md-4 col-md-offset-4" style="margin-top:80px;">
	</div>
</div>
<div class="container">
<div class="row" >
<div class="col-md-4 col-md-offset-3">

	<form method="post">
	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> <span text-align="center">Insert Admin</span></h3>
  </div>
  <div class="panel-body">
  	<div><p id="login_fail" style="color:red;font-weight: bold;"></p></div>
  						<fieldset>
 					 <div class="form-group">
			    		    <input class="form-control" placeholder="username" name="adminuser" type="text" required="" value="">
			    		</div>
			    			<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="adminpass" type="password" required="" value="">
			    		
			    		</div>
			    		<button type="submit" name="adminsubmit" value="adminsubmit" class="btn btn-danger btn-large pull-right">Register</button>
			    		</fieldset>
  

  </div>
  <div class="panel-footer">
  </div>
</div>
		

	</form> 
	</div>
	</div>

	</div>
	
	<?php
	include("conn/conn.php");

		if(isset($_POST['adminsubmit']))
		{
			$adminuser = "";
			$adminpass="";
			foreach($_REQUEST as $key => $item)
			{
				if($key=='adminuser')
					$adminuser=$item;
				else if($key=='adminpass')
					$adminpass=$item;
				
			}
			
			
			if($adminuser=='')
			{
				echo "<script> 
				var error=document.getElementById('login_fail');
				error.innerHTML='Fields are Required';
				</script>" ;
			}
		 if($adminpass=='')
		 {
			echo "<script> 
			var error=document.getElementById('login_fail');
			error.innerHTML='Fields are Required';
			</script>" ;
		 }
		 
		  if(!checkUser($adminuser,$conn))
		{
			$query="insert into admin(id,userName,password) values('','".$adminuser."','".$adminpass."')";
			$run_qu=mysqli_query($conn,$query);
			if($run_qu)
			{
				echo "<script> 
					var error=document.getElementById('login_fail');
					error.innerHTML='Admin Inserted';
					</script>" ;

			}
			else
			{
				echo "<script> 
					var error=document.getElementById('login_fail');
					error.innerHTML='User Exists';
					</script>" ;

			}
						
		}
		else
		{
				echo "<script> 
					var error=document.getElementById('login_fail');
					error.innerHTML='User Exists';
					</script>" ;
		}
		}
		
		
		function checkUser($userName,$conn)
		{
			$result = mysqli_query($conn,"select * from admin where userName='$userName'");
			if($result)
			{
				if (mysqli_num_rows($result) > 0) 
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	?>