			<div id="services" class="left_navigation">
				<div class="padding">	
					<h3>Consultants</h3>
					
					<h4>Founding Members</h4>	
					<a href="<?echo URL ?>services/page/eileen/bio">Eileen Flynn</a>
					<a href="<?echo URL ?>services/page/matthew/bio">Matthew Mangino</a>
					<a href="<?echo URL ?>services/page/steven/bio">Steven B. Wolff</a>
					
					<br />
					
					<h4>Associate Members</h4>
					<a href="<?echo URL ?>services/page/george/bio">George M. Chewning</a>
					<a href="<?echo URL ?>services/page/vanessa/bio">Vanessa Druskat</a>
					<a href="<?echo URL ?>services/page/jan/bio">Jan Stefanski</a>
					
					<br />
					
					<div class="content_frame">
						<p>Experienced team consultants are invited to apply for inclusion on the TPS website by <a href="<?php echo URL ?>contact">contacting us</a></p>
					</div>
				</div><!--end padding-->
			</div><!--end left_navigation-->
			
			<div id="services" class="right_content">
			<div class="padding">
				<?php 
				
					//Load the proper content depending on which link was pressed
					$this->load->view($this->page)
				
				?>
				</div><!--end padding-->
			</div><!--end right_content-->