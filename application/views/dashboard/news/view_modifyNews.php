<?php
	$newsItems = $this->News_model->readNews();
?>

<h3>Manage News Items</h3>

<p>Select a news item from the drop down to modify</p>

<form style="width:auto" action="<?php echo URL ?>dashboard/news/view/view_modifyNews" method="post">
	<select name="newsSelected">
		
		<?php
		foreach($newsItems as $newsItem){
		
			echo "<option>$newsItem->title</option>";	
			
		}
		?>
	</select>
	
	<input type="submit" value="Modify" />

</form>

<br />

<?php
	$newsSelected = $this->input->post('newsSelected');
	
	if($newsSelected != ''){
		
		$query = "SELECT*FROM homepage_news WHERE title = '$newsSelected';";
		
		$query = $this->db->query($query);	
		$news_item = $query->result_array();
		
?>		

	<form action="<?php echo URL ?>dashboard/news/updateItem" method="post">
		
		<fieldset>
			<label for="txtNewsTitle">News Title:</label>
			<input type="text" id="txtNewsTitle" name="txtNewsTitle" value="<?php echo $news_item[0]['title'] ?>" /><br />
			
			<label for="txtDescriptionLine">Description Line:</label>
			<input type="text" id="txtDescriptionLine" name="txtDescriptionLine" value = "<?php echo $news_item[0]['description_line']?>"/><br />
			
			<input type="hidden" name="originalTitle" value ="<?php echo $newsSelected;?>" />
		</fieldset>
		
		<fieldset>
			<legend>Event</legend>
			
			<label for="txtLocation">Location:</label>
			<input type="text" id="txtLocation" name="txtLocation" value="<?php echo $news_item[0]['event_location'] ?>"><br />
			
			<label for="txtDate">Date:</label>
			<input type="text" id="txtDate" name="txtDate" value ="<?php echo $news_item[0]['event_date'] ?>" /><br />
			
		</fieldset>
		
		<fieldset>
			<legend>Event2</legend>
			
			<label for="txtLocation2">Location:</label>
			<input type="text" id="txtLocation2" name="txtLocation2" value="<?php echo $news_item[0]['event_location2'] ?>" /><br />
			
			<label for="txtDate2">Date:</label>
			<input type="text" id="txtDate2" name="txtDate2" value="<?php echo $news_item[0]['event_date2'] ?>"/><br />
			
		</fieldset>
		
		<fieldset>
			<legend>Event3</legend>
			
			<label for="txtLocation3">Location:</label>
			<input type="text" id="txtLocation3" name="txtLocation3" value ="<?php echo $news_item[0]['event_location3'] ?>"/><br />
			
			<label for="txtDate3">Date:</label>
			<input type="text" id="txtDate3" name="txtDate3" value="<?php echo $news_item[0]['event_date3'] ?>" /><br />
			
		</fieldset>
		
	
		<fieldset>
			<legend>Details (Link to external site)</legend>
			
			<label for="txtLinkText">Link Text:</label>
			<input type="text" id="txtLinkText" name="txtLinkText" value="<?php echo $news_item[0]['details_text'] ?>" /><br />
			
			<label for="txtLinkURL">Link URL:</label>
			<input type="text" id="txtLinkURL" name="txtLinkURL" value="<?php echo $news_item[0]['details_url'] ?>" /><br />
		</fieldset>
		
		<input type="submit" value = "Update" />
		<a id="<?php echo  $news_item[0]['id']?>" class="DeleteNewsItem">Delete News Item</a>
		
	</form>


<?php }//end if

?>	
	