<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-offset-1">
					<div class="login_border">
						<div class="page_title">
							<h3>Start now<br> to grow your Business</h3>
						</div>
						<div class="feature_list">
							<ul class="hidden-xs hidden-sm">
								<li><img src="assets/images/arrow_tick.png"/> Get High Profile Employees</li>
								<li><img src="assets/images/arrow_tick.png"/> Better Plans for Business</li>
							</ul>
							<div class="form_div">
								<form  method="POST"  enctype="multipart/form-data">
								<div class="alert alert-danger hide" role="alert"  id="dangerAlert">
									  <a class="alert-link" id="errorMsg"></a>
								</div>
								  <div class="inner-addon right-addon">
									  <i class="glyphicon fa fa-envelope-o"></i>
									  <input type="email" class="form-control" placeholder="Email Address" name="email" required="true"/>
								  </div>
								  <div class="inner-addon right-addon">
									  <i class="glyphicon fa fa-lock fa_lg"></i>
									  <input type="password" class="form-control" placeholder="Password" name="password" required="true"/>
								  </div>
								  <label class="container_new hide"> Remember me
									<input type="checkbox" name="doRememberFlag">
									<span class="checkmark"></span>
								  </label>
								  <button type="submit" class="btn btn-default" style="display:none" id="submitButton">Signin</button>
								  <button type="button" class="btn btn-default"  onClick="reqLogin()">Signin</button>
								  <div class="forgot">
									  <a href="index.php?forgotpassword">You forgot your password? </a>
									  <div class="create_link">
										<p>If you don't have an account? <a href="index.php?register">Create one now</a></p>
									  </div>
								  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>