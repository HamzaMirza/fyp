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
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: block;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
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
<div class="login-page">

  <div class="form">
	<form class="register-form" action="" method="post">
<img style="width: 100%;" src="http://lotfashion.shop/se.png">
<h2 style="font-size:18px; color:#4CAF50;text-align: center;padding-bottom: 30px;">Admin Login</h2>
			    		    <input placeholder="Username" name="admin_user" type="text" required="">
			    			<input placeholder="Password" name="admin_pass" type="password" required="">
			    		<button type="submit" name="admin_submit" value="admin_submit">Login</button>
  
	<h2 style="font-size:14px; color:#4CAF50;text-align: center;"><?php  echo @$_GET['logout']; ?></h2>

	</form> 


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
</div></div>	
</body>
</html>