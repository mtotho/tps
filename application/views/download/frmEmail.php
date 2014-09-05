<form action="<?php echo URL?>download/checkEmail" method="POST">
	
	<fieldset>
		<label for="txtEmail">Email:</label>
		<input id="txtEmail" type="text" name="email" /><br />
		<input type="hidden" name="download" value = "<?php echo $this->input->get('download') ?>" />
	</fieldset>
	
	<input type="submit" value="Download" />
	
</form>
