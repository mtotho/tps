<script>
$(document).ready(function(){
	$('.collapse').collapse({
		  toggle: false
	});

	$("#toolkit_selector .toolkit_sel").click(function(){
		var tkid=$(this).attr("data-tkid");
		$(".fundamental_tile").removeClass("active");
		$('.collapse').collapse('hide');

		$("#tk"+tkid).collapse('show');

	});

	$(document).on("click", ".fundamental_tile", function(){
		$(".fundamental_tile").removeClass("active");
		$(this).addClass("active");
		var fid=$(this).attr("data-fid");

		$("#tool_panel").html("");
		//$("#tool_panel").collapse("hide");
		var th = new ToolHandler("tool_panel", fid);

		$("#tool_panel").collapse("show");

		goToByScroll("tool_panel");	
		//console.log(fid);
	})

	$("#navTheTools").addClass("active");

	//var cat_id=parseInt(window.Helper.getParameterByName("page"));

	for(var i=1; i<=3; i++){
		window.API.getFundamentals(i,function(data){
			
			var cat_id=data.cat_id;
			var html="";

			var colmd = 12/(data.fundamentals.length);
			if(data.fundamentals.length>3){
				colmd=4;
			}
			for(var j =0; j<data.fundamentals.length; j++){

				//console.log(colmd);
				var fundamental = data.fundamentals[j];
				html+="<div class='col-md-"+colmd+" tile_outer'>";
				html+=	"<div class='fundamental_tile' data-fid='"+fundamental.id+"'>";
			
				html+=	"</div>";
				html+=	"		<p>"+fundamental.name + "</p>";
				html+="</div>";
			}
			console.log(html);
			var div = "#tk"+cat_id;
			
			$(div).html(html);

			//auto_resize();
		});

	}
	

	var title="Tools Home";
	var description="";
	var landinghtml="";
	/*

	if(cat_id!=cat_id){

		landinghtml+="<h2>Team Performance Tools</h2>";
		landinghtml+="<p>(Some sort of landing content for the toolkit goes here)</p>";
		landinghtml+="<h4>Starting a Team</h4>";
		landinghtml+="<ul>";
		landinghtml+="	<li>Building the Foundation for Team Success</li>";
		landinghtml+="  <li>Tips for Virtual Teams</li>";
		landinghtml+="	<li>Teaming Skills</li>";
		landinghtml+="</ul>";	

		landinghtml+="<h4>Developing Your Team</h4>";
		landinghtml+="<ul>";
		landinghtml+="	<li>Goals and Objectives</li>";
		landinghtml+="  <li>Roles and Responsibilities</li>";
		landinghtml+="	<li>Processess and Procedures</li>";
		landinghtml+="	<li>Relationships</li>";
		landinghtml+="	<li>Team Leadership</li>";
		landinghtml+="	<li>External Environment</li>";	
		landinghtml+="</ul>";
		
		landinghtml+="<h4>Assessing and Identifying Your Team's Needs</h4>";
		landinghtml+="<ul>";
		landinghtml+="	<li>Milestones and Lessons Learned ActivitiesS</li>";
		landinghtml+="  <li>Quick Team Assessments</li>";
		landinghtml+="	<li>Team Assessments that Include Team Member Input</li>";
		landinghtml+="</ul>";	

		$("#fundamentals").html(landinghtml);

	
		$("#fundamental_title").remove();
		$("#fundamental_description").remove();
	}
	

	//$("")


	switch(cat_id){
		case 1:
			$("#fundamental_title").addClass("green_theme");
			$(".fundamentals").addClass("green_theme");
			title = "Starting Your Team";
			description = "Click on a Fundamental below to view sample Tools. This page may include other instructional information";
			break;

		case 2:
			$("#fundamental_title").addClass("blue_theme");
			$(".fundamentals").addClass("blue_theme");
			title="Developing Your Team";
			description= "Click on a Fundamental below to view sample Tools. This page may include other instructional information";
			break;

		case 3:
			$("#fundamental_title").addClass("purple_theme");
			$(".fundamentals").addClass("purple_theme");
			title="Assessing Your Team";
			description= "Click on a Fundamental below to view sample Tools. This page may include other instructional information";
			break;
	}
	
	if(cat_id%1===0){

		
		$("#fundamental_title").html("<span class='label label-default'>"+title+"</span>");
		$("#fundamental_description").html(description);
	

	
		$(document).on('click', '.fundamentals',function(){
			var fundamental_id = $(this).attr("data-name");

			window.location="tools/"+fundamental_id+"?ref="+cat_id;
		});

	}
*/
	
			

});
function goToByScroll(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    $('html,body').animate({
        scrollTop: $("#"+id).offset().top},
        'slow');
}

</script>

<div id="toolkit">

	<div id="toolkit_selector" class="row">


		
		<div class="col-md-4">
		
			<div class="toolkit_sel" data-tkid="1">

				<p>Launch <br />Your Team</p>

			</div>
		
		</div>

		<div class="col-md-4">
			<div class="toolkit_sel" data-tkid="2"><p>Develop <br /> Your Team</p></div>
		</div>


		<div class="col-md-4">
			<div class="toolkit_sel" data-tkid="3"><p>Assess <br />Your Team</p></div>
		</div>


	</div>

	<div id="fundamental_selector" class="row">
		<div id="tk1" class="panel-collapse collapse">
	

		</div>
		<div id="tk2" class="panel-collapse collapse ">
		
		</div>
		<div id="tk3" class="panel-collapse collapse">
		
		</div>
	</div>

	<div id="tool_panel" class="row panel-collapse collapse">
	tools
	</div>
	<!--

	<div class="left_navigation">
			<div class="padding">	
		
				
				

			</div><!--end padding-->
<!--		</div><!--end left_navigation-->
	<!--	
	<div class="right_content">
		<div class="padding">
				<?php

				/*
				$page_title="Team Tools Toolkit landing page";
				$page_description="";
				$buttons = array(); //array of "id"->1, "text"->"button text"
				$content="
					<p>Here might go some more information about the toolkit, including instructional and purchasing info</p>
					<a href='".URL."toolkit/'>Go Back to Overview</a>

				";


				//simulating responses (really taken from db ultimately dynamically)
				switch($this->input->get("page")){
					case 1:
						$page_title="This is a placeholder tool";
						$page_description="In this spot will go a description of specified tool.";
						/*$btnTemp=array();
						$btnTemp['id']=1;
						$btnTemp['text']="Convincing Senior Management and Team Leaders to Invest Time in Team Development Activities";
						$buttons[]=$btnTemp;*//*
						break;
					case 2:

						$page_title="Team Fundamentals";
						$page_description="Click on a Fundamental below to view sample Tools. This page may include other instructional information";



						break;
					case 3:
						$page_title="This is a placeholder tool";
						$page_description="In this spot will go a description of specified tool.";

						break;
					case 4:
						break;
					case 5:
						break;
					case 6:
						break;
					case 7:
					

					

						break;*/
				//}

				?>

			
		
			
		<div id="dialog"></div>				
		</div>end padding-->
		
	<!--</div>end right_content-->

</div>