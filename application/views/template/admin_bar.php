<div id="admin_bar">
	<ul>
		<li>Logged in as <?php echo $this->session->userdata('email'); ?></li>
		<li><a href="<?php echo URL ?>dashboard">Dashboard</a></li>
		<li><a href="<?php echo URL ?>dashboard/logout">Logout</a></li>
		
	</ul>
</div><!--end: admin_bar-->
