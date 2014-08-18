<script>

$(document).ready(function(){
	$("#container").addClass("fundamental_container");
	window.fundamental_id = <?php echo $fundamental ?>;
	window.ToolHandler = new ToolHandler("tools_div");

	var referer = window.Helper.getParameterByName("ref");

	$("#backtotop").attr("href", window.site_url + "toolkit/tools?page="+referer);
});
</script>

<?php 

$tools = array();
//$tools_description = array();
$title = "";
$html="";



?>
<div id='toolkit_fundamental'>
	<div class='padding'>

		<h2 id="fundamental_title"></h2>
		<p id="fundamental_description"></p>
		
		
		<div id="tools_div">
			
		</div>
		<div id="dev_toggle" class="card_tile">
		

		</div>
		<div id="newToolLnk"></div>
		<div style="clear:both"></div>
		<a id='backtotop' href='#'>Back to Fundamentals</a>
		

	</div>
</div>