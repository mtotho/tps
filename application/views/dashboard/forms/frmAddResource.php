
<form action = "<?php echo URL?>dashboard/addResource/true" method="POST">
	
	<fieldset>
		<legend>Article Type</legend>
		<label for="gei">GEI</label>
		<input id="gei" type="radio" name="rdoType" value="GEI" /><br />
		
		<label for="team">Team Articles</label>
		<input id="team" type="radio" name="rdoType" value="Team" /><br />
				
		<label for="other">Other Articles</label>
		<input id="other" type="radio" name="rdoType" value="Other" /><br />
		
	</fieldset>
	
	<fieldset>
		<legend>Basic Info</legend>
		<label for="title">Title</label>
		<input id="title" type="text" name="txtTitle"/> <br />	
		
		<label for="authors">Authors</label>
		<input id="authors"type="text" name="txtAuthors"/> <br />	
		
		<label for="year">Year</label>
		<input id="year"type="text" name="txtYear"/> <br />	
	</fieldset>	
	
	
	
	<fieldset>
		<legend>Source</legend>
		<label for="journal">Journal</label>
		<input id="journal" type="text" name="txtJournal"/> <br />	
		
		<label for="pages">Pages</label>
		<input id="pages"type="text" name="txtPages"/> <br />	
		
		<label for="publisher">Publisher</label>
		<input id="publisher"type="text" name="txtPublisher"/> <br />
		
		<label for="conference">Conference</label>
		<input id="conference"type="text" name="txtConference"/> <br />
		
		<label for="location">Location</label>
		<input id="location"type="text" name="txtLocation"/> <br />		
	</fieldset>	
	
	<fieldset>
		
		<label for="description">Description</label><br />
		<textarea id="description" name="txtDescription"></textarea>
	</fieldset>
	
	<input type="submit" value="Add Article" />

</form>

<div id="addArticleResults">
	
</div>
