<form action="<?php echo URL?>download/firstTime" method="POST">
	
	<fieldset>
	
		<label for="txtFname">First Name:</label>
		<input id="txtFname" type="text" name="fname" /><br />
		
		<label for="txtLname">Last Name:</label>
		<input id="txtLname" type="text" name="lname" /><br />
		
	</fieldset>
	
	<fieldset>
	
		<label for="txtTitle">Title:</label>
		<input id="txtTitle" type="text" name="title" /><br />
		
		<label for="txtOrganization">Organization:</label>
		<input id="txtOrganization" type="text" name="organization" /><br />
		
	</fieldset>
	
	<fieldset>
	
		<label for="txtPhone">Phone:</label>
		<input id="txtPhone" type="text" name="phone" /><br />
		
		<label for="txtEmail">Email:</label>
		<input id="txtEmail" type="text" name="email" /><br />
		
	</fieldset>
	
	<input type="hidden" name="download" value="<?php echo $_GET['download'] ?>" />
	
	<input type="submit" value="Download" />
	
</form>
