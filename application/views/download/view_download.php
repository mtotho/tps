<div id="download">

	<?php
	
	//	echo "<p style=\"color:red\">".$this->session->userdata('frmValid_error')."</p>";
		//$this->session->unset_userdata('frmValid_error');
	?>
	
	<div class="two_column_left">
		<h3>Download</h3>
		
		<p>Is this your first time downloading from Team Performance Solutions?</p>
		
		<div id="optBox">
			<a href="<?php echo URL ?>download/form/frmFull?download=<?php echo $download ?>" id="btnYes" class="btnAnchor">Yes</a>
			<a href="<?php echo URL ?>download/form/frmEmail?download=<?php echo $download ?>" id="btnNo" class="btnAnchor">No</a>
			<hr />
		</div>
		<?php echo $this->formSelected ?>
		<div id="frmInsert"></div>
			
	</div>
	
	<div class="two_column_right">
		<img src="<?php echo URL?>public/images/download/pdfdownload.gif" alt="pdf" />
	</div>

</div><!--end: downloads-->