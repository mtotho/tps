<form id="login" action="<?php echo URL?>dashboard/registerDo" method="post">
	<h3>Register</h3>
	<fieldset>
		
		<label for="txtEmail">Email</label>
		<input type="text" id="txtEmail" name="txtEmail" /><br />
		
		<label for="txtPassword">Password</label>
		<input type="password" id="txtPassword" name="txtPassword" /><br />
		
		<label for="txtTPSPASS">TPS Password</label>
		<input type="password" id="txtTPSPASS" name="txtTPSPASS" /><br />
		
	</fieldset>	
	
	<input type="submit" value="register" />
</form>
