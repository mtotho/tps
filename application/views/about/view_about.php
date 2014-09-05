			<div id="about" class="left_navigation">
				<div class="padding">
					
					<h3>About</h3>
						
					<h4>Founders</h4>
					<a href="<?echo site_url("about/page/eileen") ?>">Eileen Flynn</a>
					<a href="<?echo site_url("about/page/matthew") ?>">Matthew Mangino</a>
					<a href="<?echo site_url("about/page/steven") ?>">Steven B. Wolff</a>
					
					<br />
					
					<h4>Criteria for Inclusion</h4>
					<a href="<?echo site_url("about/page/assessments") ?>">Team Assessments</a>
					<a href="<?echo site_url("about/page/consultants") ?>">Consultants</a>
					<a href="<?echo site_url("about/page/articles") ?>">Articles</a>
				</div><!--end padding-->
			</div><!--end left_navigation-->
	
			<div id="about" class="right_content">
				<div class="padding">
				<?php 
				
				//Load the proper content depending on which link was pressed
				$this->load->view($this->page)
				
				?>
				</div><!--end padding-->
			</div><!--end right_content-->
