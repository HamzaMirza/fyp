	<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-offset-1">
					<div class="login_border">
						<div class="page_title">
							<h3>Start now<br> to grow your Business</h3>
						</div>
						<div class="feature_list">
							<div class="form_div">
								<form >
								<div class="alert alert-danger hide" role="alert"  id="dangerAlert">
									  <a  class="alert-link" id="errorMsg"></a>
								</div>
								<div class="inner-addon right-addon">
									  <i class="glyphicon fa fa-envelope-o"></i>
									  <input type="text" class="form-control" placeholder="Full Name" name="name" required/>
								  </div>
								  <div class="inner-addon right-addon">
									  <i class="glyphicon fa fa-envelope-o"></i>
									  <input type="email" class="form-control" placeholder="Email Address" name="email" required/>
								  </div>
								  <div class="inner-addon right-addon">
									  <i class="glyphicon fa fa-home "></i>
									  <input type="text" class="form-control" placeholder="Company name" name="company" required id="autocomplete" placeholder="Enter your address" />
								  </div>
								  <div class="inner-addon right-addon">
									  <i class="glyphicon fa fa-lock fa_lg"></i>
									  <input type="password" class="form-control" placeholder="Create Password" name="password" required/>
								  </div>
								  <div class="inner-addon right-addon">
									  <i class="glyphicon fa fa-lock fa_lg"></i>
									  <select class="form-control select" placeholder="Category" name="category_id" id="category_id" required>
									  </select>
								  </div>
								  <label class="container_new"> <a href="#" class="term_link">I have read and accepted the terms and conditions</a>
									<input type="checkbox" name="checkbox" required>
									<span class="checkmark"></span>
								  </label>
								  <button type="submit" class="btn btn-default" style="display:none" id="submitButton" >Create an Account</button>
								  <button type="button" class="btn btn-default" onClick="reqSignUp()">Create an Account</button>
								  <div class="forgot">
									  <div class="create_link">
										<p>You Already have an account? <a href="index.php?login">Login Now</a></p>
									  </div>
								  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>