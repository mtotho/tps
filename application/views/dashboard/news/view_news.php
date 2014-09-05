<div id="addNews">
	<h3>Add/Edit News</h3>
	<hr />
	
	<div id="news_preview">	
		<h4>Preview</h4>
		<div id="news">
			<div id="newsFeed">
				
				<?php
			
				//List current news 1 article at a time
				$news_list= $this->News_model->readNews();
				
				foreach($news_list as $news_item){
				?>	
					<h5><?php echo $news_item->title ?></h5>
					<?php if($news_item->description_line != ''){ ?>
					<p><em><?php echo $news_item->description_line?></em></p>	
					<?php }?>
					
					<p><span class="date"><?php echo $news_item->event_date ?></span>: <?php echo $news_item->event_location;?></p>
					
					<?php if($news_item->event_date2 != ''){ ?>
						
						<p><span class="date"><?php echo $news_item->event_date2 ?></span>: <?php echo $news_item->event_location2;?></p>	
					
					<?php		
				   	}
					if($news_item->event_date3 != ''){ ?>
					
						<p><span class="date"><?php echo $news_item->event_date3 ?></span>: <?php echo $news_item->event_location3 ;?></p>	
					
					<?php	
					}					
					?>
					
					<a href="<?php echo $news_item->details_url ?>" target="_blank"><?php echo $news_item->details_text ?></a>
					<a id="<?php echo $news_item->id?>" class="DeleteNewsItem">X</a>
					<hr />
				<?php	
				}//end: foreach
				?>	
					
			</div><!--end: newsfeed-->
		</div>	
	</div><!--end: news_preview-->
	
	<hr />
	
	<h4>Add New Item</h4>
	
	<form action="<?php echo URL ?>dashboard/news/addNews" method="post">
		
		<fieldset>
			<label for="txtNewsTitle">News Title:</label>
			<input type="text" id="txtNewsTitle" name="txtNewsTitle" /><br />
			
			<label for="txtDescriptionLine">Description Line:</label>
			<input type="text" id="txtDescriptionLine" name="txtDescriptionLine" /><br />
		</fieldset>
		
		<fieldset>
			<legend>Event</legend>
			
			<label for="txtLocation">Location:</label>
			<input type="text" id="txtLocation" name="txtLocation" /><br />
			
			<label for="txtDate">Date:</label>
			<input type="text" id="txtDate" name="txtDate" /><br />
			
		</fieldset>
		
		<fieldset id="event2">
			<legend>Event2</legend>
			
			<label for="txtLocation2">Location:</label>
			<input type="text" id="txtLocation2" name="txtLocation2" /><br />
			
			<label for="txtDate2">Date:</label>
			<input type="text" id="txtDate2" name="txtDate2" /><br />
			
		</fieldset>
		
		<fieldset id="event3">
			<legend>Event3</legend>
			
			<label for="txtLocation3">Location:</label>
			<input type="text" id="txtLocation3" name="txtLocation3" /><br />
			
			<label for="txtDate3">Date:</label>
			<input type="text" id="txtDate3" name="txtDate3" /><br />
			
		</fieldset>
		
		<a id="addEvent">Add Event</a>
		<fieldset>
			<legend>Details (Link to external site)</legend>
			
			<label for="txtLinkText">Link Text:</label>
			<input type="text" id="txtLinkText" name="txtLinkText" /><br />
			
			<label for="txtLinkURL">Link URL:</label>
			<input type="text" id="txtLinkURL" name="txtLinkURL" /><br />
		</fieldset>
		
		<input type="submit" value = "Add Item" />
		
	</form>
</div><!--end: addNews-->