<?php
@session_start();
if(!isset($_SESSION['userName'])){

	echo "<script>window.open('admin_login.php','_self');</script>";
}
else{
	include("conn/conn.php");
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
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<?php echo "<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> "?>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://use.fontawesome.com/2068589c33.js"></script>
<?php echo '<link rel="stylesheet" href="styles/AdminLTE.css" media="all" />'; ?>
<?php echo '<link rel="stylesheet" href="styles/admin_styles.css" media="all" />'; ?>
	<title>Admin Area</title>
<style>
nav,.navbar-default{
min-height: 58px!important;
    height: 80px!important;
    padding: 15px 10px!important;
    background: rgba(255,49,93,1)!important;}
.navbar-brand1
{
  color:white !important;
font-size: 40px;
    letter-spacing: 10px;
    text-shadow: 1px 2px 3px black;
    font-family: fantasy, monospace;
	  float: none !important; 
         line-height: 40px  !important; 
}
.navbar-nav>li a
{
  color:white !important;
}
#side
{
    margin-top: 25px;
    border: 2px solid red;
    border-left: none;
    border-bottom: none;
    border-top: none;
    vertical-align: middle;
 margin-bottom: 25px;
    top: 100%;
}
@media screen and (max-width:786px)
{
.navbar-brand1
{
  color:white !important;
font-size: 20px;
    letter-spacing: 2px;
    text-shadow: 1px 2px 3px black;
    font-family: fantasy, monospace;
	  float: none !important; 
         line-height: 10px  !important; 
}
nav,.navbar-default{

    height: 48px!important;
    padding: 15px 10px!important;
    background: rgba(255,49,93,1)!important;}
.navbar-nav
{
	    margin-top: -10px;
}
#side
{
    margin-top: 25px;
 margin-bottom: 25px;
    border-bottom: 2px solid red;
    border-left: none;
    border-right: none;
    border-top: none;
    vertical-align: middle;
}
}

</style>
	</head>
		
	<body>
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<span style="text-align:center;"> 
				<a class="navbar-brand1" >THE SMART INTERVIEWER</a>
</span>
		
		
			<div class="col-xs-1 col-sm-1 pull-right" id="menus">
				<ul class="nav navbar-nav navbar-right">

					<li ><a href="logout.php" class="pull-right">LOGOUT </a>
	
					</li>
				
				
				</ul>
			</div>
			
		</div

		<div class="row" >
			<div class="col-xs-12 col-md-2" id="side">
				<ul class="nav nav-pills nav-stacked">

				<li role="presentation"><a href="index.php?viewAllQuestions">View All Questions</a></li>
				<li role="presentation"><a href="index.php?view_Users">View All Users</a></li>
				<li role="presentation"><a href="index.php?addquestions">Add Questions</a></li>
				<li role="presentation"><a href="index.php?addAdmin">Add Admins</a></li>
					</ul>

			</div>

			<div class="col-xs-10 col-md-10" style="margin-top:25px;">

				<?php
				if(!isset($_GET['addquestions']) AND !isset($_GET['view_Users']) AND !isset($_GET['addAdmin'])){

					//echo " <h2 style='text-align:center;color:red;font-family:Impact'>THE SMART INTERVIEWER</h2>";
				} 

					include("conn/conn.php");


						function test_input($data) {
						$data = trim($data);
  						$data = stripslashes($data);
 						$data = htmlspecialchars($data);
 						 return $data;
                          }

					if(isset($_GET['addquestions'])){

						include("addquestions.php");

					}
					if(isset($_GET['view_Users'])){
						include("view_users.php");
					}
					if(isset($_GET['viewAllQuestions'])){
						include("viewAllQuestions.php");
					}
					if(isset($_GET['addAdmin'])){
						include("addAdmin.php");
					}
					

				?>


			</div>

		</div>




</body>
</html>
<?php
  }
?>