		<div id="resources" class="left_navigation">
				<div class="padding">	
					<h3>Resources</h3>
			
					<a href="<?echo URL ?>resources/page/articles">Articles</a>
					<br />
					<a href="<?echo URL ?>resources/page/books">Books</a>
					<br />
					<a href="<?echo URL ?>resources/page/tools">Tools</a>
	
				</div><!--end padding-->
		</div><!--end left_navigation-->
			
		<div id="resources" class="right_content">
			<div class="padding">
				<?php 
				
					//Load the proper content depending on which link was pressed
					$this->load->view($this->page)
				
				?>
				</div><!--end padding-->
		</div><!--end right_content-->