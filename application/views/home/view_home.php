<div id="home">
	
	<div class="two_column_left">
		
		<div id="teamQuotes">
			
			<div id="quoteSlideshow">
				
			</div>
			
		</div><!--end: teamQuotes-->
		
		<div class="content_frame">
			  <p>
            If you are hearing any of these comments, you have come to the right place. We have collected the resources needed to develop high performing teams and brought them all together on this site for your convenience and immediate use. The information on this website has been carefully reviewed. You can count on Team Performance Solutions!
                            </p>
		</div>
		
	</div><!--end: two_column_left-->
	
	<div class="two_column_right">
	
		<div id="news">
			<div id="newsHead">
				<h4>News</h4>
			</div>
			
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
					
					<hr />
				<?php	
				}//end: foreach
				?>	
				
			</div>
		
		</div><!--end: news-->
					
	</div><!--end two_column_right-->
	
</div><!--end: home-->
