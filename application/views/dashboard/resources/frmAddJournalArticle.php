<div id="dashboard_resources">

	<a href="<?php echo URL?>dashboard/resources/view/addResourceLanding">Go Back</a>
	
	<br />
	<img id="imgResourceCitations"src="<?php echo URL?>public/images/dashboard/genericResourceCitation.png" alt="Citation" />
	<img id="imgResourceCitations"src="<?php echo URL?>public/images/dashboard/journalArticleCitation.png" alt="Citation" />
	
	<form action = "<?php echo URL?>dashboard/resources/addJournalArticle" method="POST">
		<fieldset>
			<legend>Article Type</legend>
			<select id="ArticleTypeDD" name="ddArticleType">
				<?php
					
				$query = "SELECT*FROM resource_ArticleTypes ORDER BY `order`";	
				$query = $this->db->query($query);
				$article_types= $query->result();
							
				foreach($article_types as $article_type){
							
					echo "<option>$article_type->article_type</option>";
				}
				?>			
			</select>
			
		</fieldset>
		
		<fieldset>
			<legend>Basic Info</legend>
			
			<label for="txtAuthors">Author String</label>
			<input id="txtAuthors"type="text" name="txtAuthors" value ="e.g. &apos;Druskat, V.U., & Wolff, S. B.&apos;"/> <br />	
			
			<label for="year">Year</label>
			<input id="year"type="text" name="txtYear"/> <br />	
			
			<label for="title">Title</label>
			<input id="title" type="text" name="txtTitle"/> <br />	
		</fieldset>	
		
		<fieldset>
			<legend>Citation Definition</legend>
			<label for="rdoGeneric">Generic</label>
			<input id="rdoGeneric" type="radio" name="rdoCitation" value="generic" /><br />
			
			<label for="rdoJournal">Journal</label>
			<input id="rdoJournal" type="radio" name="rdoCitation" value="journal" /><br />
		</fieldset>
		
		
		
		<fieldset id="fldsetGeneric">
			<legend>Generic</legend>
			
			<label for="txtInSecondaryAuthor">In Secondary Author</label>
			<input id="txtInSecondaryAuthor" type="text" name="txtGenericInSecondaryAuthor"/> <br />	
			
			<label for="txtSecondaryTitle">Secondary Title</label>
			<input id="txtSecondaryTitle" type="text" name="txtGenericSecondaryTitle"/> <br />	
			
			<label for="txtEdition">Edition</label>
			<input id="txtEdition" type="text" name="txtGenericEdition"/> <br />
			
			<label for="txtVolume">Volume</label>
			<input id="txtVolume" type="text" name="txtGenericVolume"/> <br />		
			
			<label for="txtPages">Pages</label>
			<input id="txtPages" type="text" name="txtGenericPages"/> <br />		
			
			<label for="txtPlacePublished">Place Published</label>
			<input id="txtPlacePublished" type="text" name="txtGenericPlacePublished"/> <br />		
			
			<label for="txtPublisher">Publisher</label>
			<input id="txtPublisher" type="text" name="txtGenericPublisher"/> <br />		
			
			
		</fieldset>
		
		
		<fieldset id="fldsetJournal">
			<legend>Journal</legend>
	
			<label for="journal">Journal Title</label>
			<input id="journal" type="text" name="txtJournalTitle"/> <br />	
			
			<label for="txtVolume">Volume</label>
			<input id="txtVolume" type="text" name="txtJournalVolume"/> <br />	
			
			<label for="txtIssue">Issue</label>
			<input id="txtIssue" type="text" name="txtJournalIssue"/> <br />	
			
			<label for="pages">Pages</label>
			<input id="pages"type="text" name="txtJournalPages"/> <br />	
	
		</fieldset>	
		
		<fieldset>
			<legend>Description</legend>
			<p>Optional: Add extra italicized text to the end of the citation</p>
			<textarea name="txtDescription"></textarea>			
			
		</fieldset>
		
			
		<fieldset>
			<legend>Downloadable File</legend>
			<select id="fileDD" name="selectedFile">
				<option></option>
				<?php
					
				$this->load->model('Download_model');
				$files = $this->Download_model->readTable('downloads_files');	
							
				foreach($files as $file){
							
					echo "<option>$file->filename</option>";
				}
				?>
				
			</select> <br /><br />
			
			<label for="txtFileURL">File URL (Leave above dropdown blank)</label>
			<input type="text" id="txtFileURL" name="txtFileURL" />
		</fieldset>
	
		<input type="submit" value="Add Article" />
	
	</form>
	
	<div id="addArticleResults">
		
	</div>

</div>
