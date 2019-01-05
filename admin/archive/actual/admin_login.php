<?php
session_start();
include("conn/conn.php");

?> 
<style>

.panel-heading
{
        color: chartreuse!important;
    background: black !important;
    text-align: center;
}
.panel-footer{
        background: black!important;
    opacity: .87!important;
}
</style>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://use.fontawesome.com/2068589c33.js"></script>
<?php echo '<link rel="stylesheet" href="styles/admin_style.css" media="all" />'; ?>
	<title>Admin Login</title>
	</head>

	<body style="background:rgba(0,0,0,0.78);">
<div class="container">
	<div class="col-md-4 col-md-offset-4" style="margin-top:80px;">
	
	</div>
</div>
<div class="container">
<div class="row" >
<div class="col-md-4 col-md-offset-4">

	<form action="" method="post">
	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> <span text-align="center">Admin</span></h3>
  </div>
  <div class="panel-body">
  	<div><p id="login_fail" style="color:red;font-weight: bold;"></p></div>
  						<fieldset>
 					 <div class="form-group">
			    		    <input class="form-control" placeholder="username" name="admin_user" type="text" required="">
			    		</div>
			    			<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="admin_pass" type="password" required="">
			    		
			    		</div>
			    		<button type="submit" name="admin_submit" value="admin_submit" class="btn btn-success pull-right btn-large">Login</button>
			    		</fieldset>
  

  </div>
  <div class="panel-footer">
  </div>
</div>
		

	</form> 
	</div>
	</div>
	<h2 style="color:#95f442;text-align: center;"><?php  echo @$_GET['logout']; ?></h2>

	</div>


	<?php
	function test_input($data) {

 			 $data = trim($data);
  			$data = stripslashes($data);
 	 		$data = htmlspecialchars($data);
  			return $data;
			}

		if(isset($_POST['admin_submit'])){
		  $adminuser = test_input($_POST['admin_user']);
		 if($adminuser==''){
		 	echo "<script> 
		var error=document.getElementById('login_fail');
		error.innerHTML='Fields are Required';
		</script>" ;
		 }

		  $adminpass = test_input($_POST['admin_pass']);
		 if($adminpass==''){
		 	echo "<script> 
		var error=document.getElementById('login_fail');
		error.innerHTML='Fields are Required';
		</script>" ;
		 }
		

		$sel_admin="select * from admin where userName='$adminuser' AND password='$adminpass'";

		$run_q=mysqli_query($conn,$sel_admin);

		$check_admin=mysqli_num_rows($run_q);
		
		if($check_admin==0){ 
echo "<script> 
		var error=document.getElementById('login_fail');
		error.innerHTML='Wrong Email or Password';
		</script>" ;

		exit();

		}
else{

		$_SESSION['userName']=$adminuser;
			echo 
			"<script>window.open('index.php?logged_in','_self')</script>";
		
		
		

		}
	}
		

	?>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script 
     src="https://code.jquery.com/jquery-2.2.2.min.js" 
     integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" 
     crossorigin="anonymous"></script>
 <script 
     src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
     integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
     crossorigin="anonymous"></script>	
</body>
</html>