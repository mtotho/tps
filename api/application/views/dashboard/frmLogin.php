<form id="login" action="<?php echo URL?>dashboard/loginDo" method="post">
	<h3>Login</h3>
	<fieldset>
		
		<label for="txtEmail">Email</label>
		<input type="text" id="txtEmail" name="txtEmail" /><br />
		
		<label for="txtPassword">Password</label>
		<input type="password" id="txtPassword" name="txtPassword" /><br />
		
	</fieldset>	
	
	<input type="submit" value="login" />
</form>
