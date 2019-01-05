<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-offset-1">
					<div class="login_border">
						<div class="page_title">
							<h3>Grow your business</h3>
						</div>
						<div class="feature_list">
							<div class="form_div">
								<div class="alert alert-success hide" role="alert"  id="successAlert">
									  <a class="alert-link">Reset link has been emailed to you.<br/> Redirection you in <span id="counter"></span>  secondes</a>
								</div>
								<div class="error_div hide" id="req">Required Field *</div>
								<form action="" method="post">
								  <h4>Forgot your password? </h4>
								  <div class="inner-addon right-addon">
									  <i class="glyphicon fa fa-envelope-o"></i>
									  <input type="email" class="form-control" id="email" placeholder="Your email address" name="email" required />
								  </div>
								  <button type="submit" class="btn btn-default" style="display:none;" id="submitButton">Send</button>
								  <button type="button" class="btn btn-default" onClick="reqRecovery()">Send</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>