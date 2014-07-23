			<!--<input type="hidden" id="dashURL" value="<?php echo site_url() ?>" />
			<?php echo site_url() ?>-->

			<div id="dashboard" class="left_navigation">

				<div class="padding">

					<h3><a href="<?php echo URL?>dashboard/">Dashboard</a></h3>

						

					<h4>Downloads</h4>

					<a class="left_navigation_links" href="<?php echo URL?>dashboard/DownloadTable">View Download Table</a>

					<a class="left_navigation_links" href="<?php echo URL?>dashboard/ViewDownloads">View All Files</a>		

					<a class="left_navigation_links" href="<?php echo URL?>dashboard/upload">Upload a File</a>	

					

					<br />

					

					<h4>Resources</h4>

					<a class="left_navigation_links" href="<?php echo URL?>dashboard/resources/view/article_types">Article Types (Categories)</a>

					<a class="left_navigation_links" href="<?php echo URL?>dashboard/resources/view/addResourceLanding">Create Resource</a>

					<a class="left_navigation_links" href="<?php echo URL?>dashboard/resources/view/view_ModifyResource">Modify Resource</a>

					

					<br />

					

					<h4>News</h4>

					<a class="left_navigation_links" href="<?php echo URL?>dashboard/news/view/view_news">Add/Preview News Items</a>	

					<a class="left_navigation_links" href="<?php echo URL?>dashboard/news/view/view_modifyNews">Modify News Items</a>		

						

					<br />	

					<h4>Site Settings</h4>

				

				

				</div><!--end padding-->

			</div><!--end left_navigation-->

	

			<div id="dashboard" class="right_content">

				<div class="padding">

				

					<?php echo $this->load->view($this->content, $this->page_data); ?>

					

				</div><!--end padding-->

			</div><!--end right_content-->

