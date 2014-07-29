<script>
$(document).ready(function(){

	var cat_id=2;

	window.API.getFundamentals(cat_id,function(data){

		var html="";
		for(var i =0; i<data.length; i++){
			var fundamental = data[i];
			html+="<p class='fundamental_short_desc'>"+fundamental.short_description+"</p>";
			html+="<div id='tf"+fundamental.id+"' data-name='"+fundamental.id+"' class='fundamentals'>";
			html+=	"<div class='padding'>";
			html+=		fundamental.name;
			html+="	</div>";

			html+="</div>";

		}
		$("#fundamentals").html(html);
	});


	$(document).on('click', '.fundamentals',function(){
		var fundamental_id = $(this).attr("data-name");

		window.location="tools/"+fundamental_id;
	})
});


</script>

<div id="toolkit">

	<div class="left_navigation">
			<div class="padding">	
		
				<h3><a href="<?echo URL?>toolkit/tools">Toolkit</a></h3>
				<ul>
					<li><a class='green_theme' href="<?php echo URL ?>toolkit/tools?page=1">Starting Your Team</a></li>
					<li><a class='blue_theme' href="<?php echo URL ?>toolkit/tools?page=2">Developing Your Team</a></li>
					<li><a class='purple_theme' href="<?php echo URL ?>toolkit/tools?page=3">Assessing Your Team</a></li>
					<!--<li><a href="<?echo URL ?>toolkit?page=2">Specific Elsai Teams: IPT, Regulatory, Clinical</a></li>
					<li><a href="<?echo URL ?>toolkit?page=3">Starting/Reinvigorating a Team</a></li>
					<li><a href="<?echo URL ?>toolkit?page=4">Team Building Essentials</a></li>
					<li><a href="<?echo URL ?>toolkit?page=5">Team Assessments &amp; Lessons Learned</a></li>
					<li><a href="<?echo URL ?>toolkit?page=6">Team Emotional Intelligence</a></li>-->
					<!--<li><a href="<?echo URL ?>toolkit?page=7">Generic Tool</a></li>-->


				</ul>
				

			</div><!--end padding-->
		</div><!--end left_navigation-->
		
	<div class="right_content">
		<div class="padding">
				<?php
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
						$buttons[]=$btnTemp;*/
						break;
					case 2:

						$page_title="Team Fundamentals";
						$page_description="Click on a Fundamental below to view sample Tools. This page may include other instructional information";


						$content="
							
								<div id='fundamentals'>
									<img src='".URL."public/images/resources/TeamFundamentals_text.png' />
									<div id='tf1' data-name='1' class='fundamentals'>
										<div class='padding'>
											GOALS &amp; OBJECTIVES
										</div>
									</div>
									<div id='tf2'  data-name='2' class='fundamentals'>
										<div class='padding'>
											ROLES &amp; RESPONSIBILITIES
										</div>
									</div>
									<div id='tf3'  data-name='3' class='fundamentals'>
										<div class='padding'>
											PROCESSES &amp; PROCEDURES
										</div>
									</div>
									<div id='tf4' data-name='4' class='fundamentals'>
										<div class='padding'>
											RELATIONSHIPS
										</div>
									</div>
									<div id='tf5' data-name='5' class='fundamentals'>
										<div class='padding'>
											LEADERSHIP
										</div>
									</div>
									<div id='tf6' data-name='6' class='fundamentals'>
										<div class='padding'>
											EXTERNAL ENVIRONMENT
										</div>
									</div>
									<div style='clear:both'></div>
								</div>
								";


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
					

					

/*

						$btn =  array();
						$btn['id']=2;
						$btn['text'] = "This is a tool button. Clicking it will show tools in this category";
						$buttons[]=$btn;

						$btn2 =  array();
						$btn2['id']=3;
						$btn2['text'] = "This is a another tool button. Clicking it will show tools in a different category";
						$buttons[]=$btn2;*/
						break;
				}

			//	echo $content;
				?>

				<h3><?php echo $page_title ?></h3>
				<p><?php echo $page_description ?></p>
				
				
				<div id="fundamentals">

				</div>
				<?php 
				//echo $content;
/*
				foreach($buttons as $button){
					$btnId = $button['id'];
					$btnText = $button['text'];

					echo "<div class='tool_button' data-id='".$btnId."'>";
					echo 	"<div class='padding'>";
					echo 		"<p>".$btnText."</p>";
					echo 	"</div>";
					echo "</div>";

				}
*/

				?>


		<div id="dialog"></div>				
		</div><!--end padding-->
		
	</div><!--end right_content-->

</div>