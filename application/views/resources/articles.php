<h3>Articles</h3>
<p>Here is a list of Articles. Click on a heading to expand and most articles available for free download.</p>

<?php

	$query = "SELECT*FROM resource_ArticleTypes ORDER BY `order`";
	
	$query = $this->db->query($query);
	$article_types= $query->result();
				
	foreach($article_types as $article_type){
		?>
		 
		<div class="article_type_group">
			
			<div class="article_type_bar">
				<h4><?php echo $article_type->article_type?></h4>	
			</div>
			
			
			<div class="article_type_content">
			
			<?php
			
			$query = "SELECT*FROM resource_journalArticles 
					  WHERE article_type = '$article_type->article_type'
					  ORDER BY `author_string` 
					  ;";
			$query = $this->db->query($query);
			$articles = $query->result();
			
			//Loop through each article that has THIS type
			foreach($articles as $article){
				
				$download_file = $article->download_file;
				if($download_file != ""){
					$anchor_string = "href=\"".URL."download?download=".$download_file."\" target=\"_blank\"";	
				}elseif($article->fileURL !=""){
					$anchor_string = 'href="'.$article->fileURL.'" target="_blank"';
				}else{
					$anchor_string = 'class="no_click"';
				}
				
				
				//Switch the citation definition type so we can format it properly
				switch($article->citation_definition){
					
					//generic: generic citation 
					case "generic":
						?>
						
						<a <?php echo $anchor_string; ?>>
							<span class="citation_author"><?php echo $article->author_string;?></span><span class="citation_year">(<?php echo $article->year?>).</span>
							<?php echo $article->title ?>.
							
							<?php if($article->generic_SecondaryAuthor !=''){echo $article->generic_SecondaryAuthor."(Eds.),"; }?>
							
							<?php if($article->generic_SecondaryTitle !=''){?>  
								<span class="citation_secondaryTitle"><?php echo $article->generic_SecondaryTitle?></span> <?php }?>
							
							<?php if($article->generic_Edition!=''){echo ", ".$article->generic_Edition; }?>
						    <?php if($article->generic_Volume !=''){echo ", ".$article->generic_Volume; }?>
						    <?php if($article->generic_Pages  !=''){echo "(pp. ".$article->generic_Pages.")."; }else{echo '.';}?>
							<?php if($article->generic_PublishLocation !=''){echo '<span class="citation_placedPublished">'.$article->generic_PublishLocation.'</span>';} if($article->generic_Publisher!=''){echo ':';}?>
							<?php if($article->generic_Publisher!=''){echo '<span class="citation_publisher">'.$article->generic_Publisher.'.</span>';}?>
							<?php if($article->description !=''){echo "<div class=\"article_description\"><em>$article->description</em></div>";} ?>
						</a>
						<br />
						<?php
						break;
						
						
					case "journal":
						
						?>
						
						<a <?php echo $anchor_string ?>>
							<span class="citation_author"><?php echo $article->author_string ?></span><?php if($article->year !=''){echo '<span class="citation_year">('.$article->year.')</span>';} ?>
							<?php echo $article->title ?>, <em><?php if($article->journal_title!=''){echo $article->journal_title.',';}?></em>
							<?php if($article->journal_volume !=''){echo $article->journal_volume; }?><?php if($article->journal_issue  !=''){echo '('.$article->journal_issue.')'; }?><?php if($article->journal_pages  !=''){echo ": (pp. ".$article->journal_pages.")."; }?>
							
							<?php if($article->description !=''){ ?>
									
								<div class="article_description">
									<a class="article_description_expand"><span>[+]</span> click to expand description</a>
									
									<p class="article_description_content"><?php echo $article->description ?></p>
									
								</div>
								
							<?php }	?>
						</a>

						<br />
						<?php
						break;
				}//end: switch
			}//end:foreach				
			?>	
			
			</div>
		</div>
		
		
		
		
		<?php
	}
?>