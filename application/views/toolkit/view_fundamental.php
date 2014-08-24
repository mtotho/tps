<script>

$(document).ready(function(){
	$("#container").addClass("fundamental_container");
	window.fundamental_id = <?php echo $fundamental ?>;
	window.ToolHandler = new ToolHandler("tools_div");

	var referer = window.Helper.getParameterByName("ref");

	//set backtotop link to send to previous page
	$(".back_to_top").attr("href", window.site_url + "toolkit/tools?page="+referer);
});
</script>

<?php 

$tools = array();
//$tools_description = array();
$title = "";
$html="";



?>
<div id='toolkit_fundamental'>

	<h2 id="fundamental_title"></h2>
	<p id="fundamental_description"></p>
	
	
	<div id="tools_div">
		
	</div>
	<hr />
	<a class='back_to_top' href='#'>Back to Fundamentals</a>
	<div id="dev_toggle">
	

	</div>
	<div id="newToolLnk"></div>
	<div style="clear:both"></div>
	
	


</div>