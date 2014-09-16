<script>
$(document).ready(function(){
	$("#navTheTools").addClass("active");

	var cat_id=parseInt(window.Helper.getParameterByName("page"));

	if(cat_id==cat_id){
		window.API.getFundamentals(cat_id,function(data){

			var html="";
			for(var i =0; i<data.length; i++){
				var fundamental = data[i];
				html+="<div class='fundamental_container'>";
			
				html+="		<div id='tf"+fundamental.id+"' data-name='"+fundamental.id+"' class='fundamentals'>";
				//html+=	"		<div class='padding'>";
				html+=				fundamental.name;
				//html+="			</div>";
				html+="		</div>";
				html+="     <div class='short_desc_container'>";
				html+="			<p class='fundamental_short_desc'>"+fundamental.short_description+"</p>";
				html+="		</div>";
				html+="<div style='clear:both'></div>";
				html+="</div>";
			}
			
			$("#fundamentals").html(html);

			auto_resize();
		});
	}

	var title="Tools Home";
	var description="";
	var landinghtml="";
	

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

	
			

});


</script>

<div id="toolkit">

	<div class="row">
		<div class="col-md-3 left_col">

			<!--<h3><a href="<?php echo site_url() ?>toolkit/tools">Team Toolkit</a></h3>-->
			<ul class="nav">
					<li><a class='green_theme' href="<?php echo site_url() ?>toolkit/tools?page=1">Starting Your Team</a></li>
					<li><a class='blue_theme' href="<?php echo site_url() ?>toolkit/tools?page=2">Developing Your Team</a></li>
					<li><a class='purple_theme' href="<?php echo site_url() ?>toolkit/tools?page=3">Assessing Your Team</a></li>
			</ul>
		</div>

		<div class="col-md-9 right_col">
			<h3 id='fundamental_title'></h3>
			<p id='fundamental_description'></p>
			
			
			<div id="fundamentals">

			</div>
		</div>
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