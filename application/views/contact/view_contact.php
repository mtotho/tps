<div id="contact">
		
<form method="post" id="frmContact" action="<?php echo URL ?>contact/send">
	<h3>Contact Us</h3>
	<p>Please contact us if you have any questions, inquiries, or if you have any resource suggestions.</p>
	
	<?php

		echo $this->session->userdata('frmValid_error');
		$this->session->unset_userdata('frmValid_error');
			
	?>
	
	<fieldset>
		
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname" /><br />
		
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" /><br />
	
	</fieldset>
	
	<fieldset>
	
		<label for="title">Title:</label>
		<input type="text" id="title" name="title" /><br />
		
		<label for="organization">Organization:</label>
		<input type="text" id="organization" name="organization" />  <br />  
	
	</fieldset>
	
	<fieldset>
	
		<label for="phone">Phone:</label>
		<input type="text" id="phone" name="phone" /><br />
		  
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" />
	
	</fieldset>
	
	<label for="message">Please enter a brief message:</label><br />
	<textarea id="message" name="message"></textarea>
	
	
     <input class="submit" name="Submit" type="submit" value="Submit" />

</form> 
	
<img src="<?php echo URL ?>public/images/contact/contact.jpg" alt="contact" id="imgContact" />	
	
</div><!--end contact-->
