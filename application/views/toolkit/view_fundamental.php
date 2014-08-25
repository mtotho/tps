<script>

$(document).ready(function(){
	$("#container").addClass("fundamental_container");
	window.fundamental_id = <?php echo $fundamental ?>;
	window.ToolHandler = new ToolHandler("tools_div");

	var referer = window.Helper.getParameterByName("ref");
	var ref_url= window.site_url + "toolkit/tools?page="+referer;
	//set backtotop link to send to previous page
	$(".back_to_top").attr("href", ref_url);
	

	var toolkit_name = "";
	switch(referer){
		case "1":
			toolkit_name="Starting Your Team";
			break;
		case "2":
			toolkit_name= "Developing Your Team";
			break;
		case "3":
			toolkit_name = "Assessing Your Team";
			break;
	}

	$("#bcLastPagelnk").html(toolkit_name);
	$("#bcLastPagelnk").attr("href",ref_url);
	$("#bcTeamTools").attr("href",window.site_url + "toolkit/tools");

});
</script>

<?php 

$tools = array();
//$tools_description = array();
$title = "";
$html="";



?>
<div id='toolkit_fundamental'>
	<ol class="breadcrumb">
	  <li><a id ="bcTeamTools" href="#">Team Tools</a></li>
	  <li id="bcLastPage"><a id="bcLastPagelnk" href="#"></a></li>
	  <li id="bcThisPage" class="active"></li>
	</ol>

	<!--<h2 id="fundamental_title"></h2>-->
	<p class='fundamental_header'><span id="fundamental_title"></span> <span id="fundamental_description"></span></p>
	<p class='avail_tool'>Available Tools</p>
	
	<div id="tools_div">
		
	</div>
	<hr />
	<a class='back_to_top' href='#'>Back to Fundamentals</a>
	<div id="dev_toggle">
	

	</div>
	<div id="newToolLnk"></div>
	<div style="clear:both"></div>
	
	


</div>