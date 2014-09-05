		<div id="assessments" class="left_navigation">
				<div class="padding">	
					<h3>Team Assessments</h3>
			
					<a href="<?echo URL ?>assessments/page/atp">Accelerating Performance Team Surveys</a>
	
					<br />
					<br />
					<a href="<?echo URL ?>assessments/page/tei">Team Emotional Intelligence Survey</a>
	
				</div><!--end padding-->
			</div><!--end left_navigation-->
			
		<div id="assessments" class="right_content">
			<div class="padding">
				<?php 
				
					//Load the proper content depending on which link was pressed
					$this->load->view($this->page)
				
				?>
				</div><!--end padding-->
		</div><!--end right_content-->