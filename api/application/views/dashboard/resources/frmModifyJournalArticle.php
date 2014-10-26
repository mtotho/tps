<h3>Modify Article: <em><?php echo $title ?></em></h3>
<form action = "<?php echo URL?>dashboard/resources/modifyResourceDo" method="POST">
		<fieldset>
			<legend>Article Type</legend>
			<select id="ArticleTypeDD" name="ddArticleType">
				
				<option selected="selected"><?php echo $article_type ?></option>
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
			<input id="txtAuthors"type="text" name="txtAuthors" value ="<?php echo $author_string ?>"/> <br />	
			
			<label for="year">Year</label>
			<input id="year"type="text" name="txtYear" value="<?php echo $year ?>"/> <br />	
			
			<label for="title">Title</label>
			<input id="title" type="text" name="txtTitle" value="<?php echo $title ?>"/> <br />	
			
			<input type="hidden" name="ArticleID" value = "<?php echo $id ?>" />
		</fieldset>	
		
		<?php
		
		if($citation_definition == "generic"){
			
			$checkedGeneric = "checked";
			$checkedJournal = null;
			
		}else{
			$checkedGeneric = null;
			$checkedJournal = "checked";
			
		}
		
		?>
		
		<fieldset>
			<legend>Citation Definition</legend>
			<label for="rdoGeneric">Generic</label>
			<input id="rdoGeneric" type="radio" name="rdoCitation" value="generic" <?php echo $checkedGeneric ?>/><br />
			
			<label for="rdoJournal">Journal</label>
			<input id="rdoJournal" type="radio" name="rdoCitation" value="journal" <?php echo $checkedJournal ?>/><br />
		</fieldset>
		
		
		
		<fieldset id="fldsetGeneric">
			<legend>Generic</legend>
			
			<label for="txtInSecondaryAuthor">In Secondary Author</label>
			<input id="txtInSecondaryAuthor" type="text" name="txtGenericInSecondaryAuthor" value="<?php echo $generic_SecondaryAuthor ?>"/> <br />	
			
			<label for="txtSecondaryTitle">Secondary Title</label>
			<input id="txtSecondaryTitle" type="text" name="txtGenericSecondaryTitle" value="<?php echo $generic_SecondaryTitle ?>"/> <br />	
			
			<label for="txtEdition">Edition</label>
			<input id="txtEdition" type="text" name="txtGenericEdition" value="<?php echo $generic_Edition ?>"/> <br />
			
			<label for="txtVolume">Volume</label>
			<input id="txtVolume" type="text" name="txtGenericVolume" value="<?php echo $generic_Volume ?>"/> <br />		
			
			<label for="txtPages">Pages</label>
			<input id="txtPages" type="text" name="txtGenericPages" value="<?php echo $generic_Pages ?>"/> <br />		
			
			<label for="txtPlacePublished">Place Published</label>
			<input id="txtPlacePublished" type="text" name="txtGenericPlacePublished" value="<?php echo $generic_PublishLocation ?>"/> <br />		
			
			<label for="txtPublisher">Publisher</label>
			<input id="txtPublisher" type="text" name="txtGenericPublisher" value="<?php echo $generic_Publisher ?>"/> <br />		
			
			
		</fieldset>
		
		
		<fieldset id="fldsetJournal">
			<legend>Journal</legend>
	
			<label for="journal">Journal Title</label>
			<input id="journal" type="text" name="txtJournalTitle" value="<?php echo $journal_title ?>"/> <br />	
			
			<label for="txtVolume">Volume</label>
			<input id="txtVolume" type="text" name="txtJournalVolume" value="<?php echo $journal_volume ?>"/> <br />	
			
			<label for="txtIssue">Issue</label>
			<input id="txtIssue" type="text" name="txtJournalIssue" value="<?php echo $journal_issue ?>"/> <br />	
			
			<label for="pages">Pages</label>
			<input id="pages"type="text" name="txtJournalPages" value="<?php echo $journal_pages ?>"/> <br />	
	
		</fieldset>	
		
		<fieldset>
			<legend>Description</legend>
			<p>Optional: Add extra italicized text to the end of the citation</p>
			<textarea name="txtDescription"><?php echo $description ?></textarea>			
			
		</fieldset>
		
			
		<fieldset>
			<legend>Downloadable File</legend>
			<select id="fileDD" name="selectedFile">
				<option selected="selected"><?php echo $download_file ?></option>
				<?php
					
				$this->load->model('Download_model');
				$files = $this->Download_model->readTable('downloads_files');	
							
				foreach($files as $file){
							
					echo "<option>$file->filename</option>";
				}
				?>
				
		
			</select><br /><br />
			
			<label for="txtFileURL">File URL (Leave above dropdown blank)</label>
			<input type="text" id="txtFileURL" name="txtFileURL" value="<?php echo $fileURL ?>"/>
		</fieldset>
	
		<input type="submit" value="Modify" />
		<a id="<?php echo $id ?>" class="DeleteResourceItem">Delete Article</a>
		
	</form>