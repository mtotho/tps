<div id="registration">

	<!-- Nav tabs -->
	<ul id="reg_tabs" class="nav nav-tabs" role="tablist">
	  <li><a class="active" role="tab" href="#account">Setting Up Your Account</a></li>
	  <li><a role="tab" href="#verify">Verify Account</a></li>
	  <li><a role="tab" href="#team">Your Team</a></li>
	  <li><a role="tab" href="#membership">Your Membership</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
	  
	  	<div class="tab-pane" id="account">
	  		<div class="col-md-4">

	  			<h4>Register Here</h4>

	  			<form style="margin:1em 0 5em 0;" role="form">
			  		<div class="form-group">
						<label for="txtEmail">Email </label>
						<input id="txtEmail" class="form-control"  type="email" placeholder="Enter email">
					 </div>

					<div class="form-group">
						<label for="txtPassword">Password </label>
						<input id="txtPassword" class="form-control" type="password" placeholder="Password">

						<label for="txtRPassword">Repeat Password </label>
						<input id="txtRPassword" class="form-control" type="password" placeholder="Password">
					</div>
					
					<input type="button" class="pull-right" id="btnRegister" value="Continue" />
				</form>

	  		</div>
 			<div class="col-md-4">
		  		<p style="margin:7em 0 5em 0;">With these credentials you may log into the site to access documents, purchase a membership, and manage team members</p>
			</div>
			<div class="col-md-4"></div>
  

	  </div>
	  <div class="tab-pane" id="verify">
	  		<div class="col-md-4">

				<form style="margin:1em 0 5em 0;" role="form">
			  		<div class="form-group">
						<label for="txtVerifyCode">Email Verification Code </label>
						<input id="txtVerifyCode" class="form-control"  type="text" placeholder="0x21A41ed">
					 </div>

					<input type="button" class="pull-right" id="btnVerify" value="Verify" />
				</form>

			</div>
			<div class="col-md-4">
	  			<p style="margin:2em 0 5em 0;">Please check your email for the verification code. This is to ensure your email address is valid.</p>
			</div>
			<div class="col-md-4"></div>
  
	  </div>
	  <div class="tab-pane" id="team">
	  	
	  		<div class="col-md-4">

				<form style="margin:1em 0 5em 0;" role="form">
			  		<div class="form-group">
						<label for="txtTeamName">Team Name </label>
						<input id="txtTeamName" class="form-control"  type="text" placeholder="Team Name">
					 </div>

					<input type="button" class="pull-right" id="btnCreateTeam" value="Create Team" />
				</form>

			</div>
			<div class="col-md-4">
	  			<p style="margin:2em 0 5em 0;">Please enter a Team Name. Later you can manage your team by adding team members. Team members will automatically be notified by email and have access
	  			to your membership.</p>
			</div>
			<div class="col-md-4"></div>


	  </div>
	  <div class="tab-pane" id="membership">
	  	
	  		<div class="col-md-4">

				<form style="margin:1em 0 5em 0;" role="form">
			  		<div class="form-group">
						<label for="qtyLicense">License Quantity </label>
						<input id="qtyLicense" class="form-control"  type="text" placeholder="Enter an integer number">
					 </div>

					 <div class="form-group">
				 		<label for="ddPaymentOption">Payment Type </label>
						<select id="ddPaymentOption" class='form-control'>
								<option value='paypal'>Paypal</option>
								<option value='contact'>Contact</option>
								<option value='free'>I don't want to pay (debug)</option>
						</select>

					 </div>

					 <hr />

					 <div class="form-group">
					 	<h4>Contact Information</h4>

					 	<label for="txtFName">First Name</label>
						<input id="txtFName" class="form-control"  type="text" placeholder="John">

						<label for="txtLName">Last Name</label>
						<input id="txtLName" class="form-control"  type="text" placeholder="Smith">
	

					 	<label for="txtPhone">Phone Number</label>
						<input id="txtPhone" class="form-control"  type="text" placeholder="555-555-5555">


					 </div>


					<input type="button" class="pull-right" id="btnCreateMembership" value="Create Membership" />
				</form>

			</div>
			<div class="col-md-4">
	  			<p style="margin:2em 0 5em 0;">With each membership you may purchase varying amount of licenses so that you may distribute them to your team members as you see fit.</p>
			</div>
			<div class="col-md-4"></div>

	  </div>
	</div>

</div>