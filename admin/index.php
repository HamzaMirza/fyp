<?php 
 //include("./scripts/chk_loginsession.php");
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
	<title>THE SMART INTERVIEWER</title>
	<link rel='shortcut icon' type='image/x-icon' href='assets/images/favicon.png' />
  </head>
  <body class="hide_now">
	<header>
		<!-- Start Navigation -->
		<nav class="navbar navbar-default navbar-sticky bootsnav">

			<!-- Start Top Search -->
			<div class="top-search">
				<div class="container">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-search"></i></span>
						<input type="text" class="form-control" placeholder="Search">
						<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
					</div>
				</div>
			</div>
			<!-- End Top Search -->

			<div class="container">            
				<!-- Start Atribute Navigation -->
				<div class="attr-nav">
					<ul>
						<li class="pro_btn"><a href="index.php?login">Login</a></li>
					</ul>
				</div>
				<!-- End Atribute Navigation -->

				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<!--button type="button" class="navbar-toggle nav_tab" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button -->
					<a class="navbar-brand"  href="index.php"><img src="assets/images/logo.png" class="img-responsive" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
					<li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
    <!-- End Navigation -->
	</header>
	
	
	<section id="login_div">
		<!-- Content -->
		<?php 
			if(isset($_GET['login']))
				include("login.php");
			else if(isset($_GET['forgotpassword']))
				include("forgotpassword.php");
			else if(isset($_GET['register']))
				include("register.php");
			else
				include("home.php");
		?>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-3">
					<div class="footer_section">
						<div class="footer_logo">
							<a  href="index.php" ><img src="assets/images/footer-logo.png"/></a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6">
					<div class="footer_section">
						<div class="footer_app">
							<p>THE SMART INTERVIEWER</p>
							<ul>
								<li><a href="#" ><img src="assets/images/googleplay.jpg" class="img-responsive" alt="google play store"/></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-3">
					<div class="footer_section">
						<div class="social_media">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a  href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</footer>
  
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootsnav.js"></script>
  <script src="scripts/js/index.js"></script>
  </body>
  </html>
	