<script>
$(document).ready(function(){
	window.th=new ToolHandler("tool_panel");
	$('.collapse').collapse({
		  toggle: false
	});

	//Main toolkit select click
	$("#toolkit_selector .toolkit_sel").click(function(){
		var tkid=$(this).attr("data-tkid");
		$(".fundamental_tile").removeClass("active");
	
		$(".toolkit_sel").removeClass("active");
		$(this).addClass("active");

		$('.collapse').collapse('hide');
		$("#tk"+tkid).collapse('show');
		auto_resize();
	});


	//fundamental click
	$(document).on("click", ".fundamental_tile", function(){
		$(".fundamental_tile").removeClass("active");
		$(this).addClass("active");
		var fid=$(this).attr("data-fid");

		$("#tool_panel").html("");
		//$("#tool_panel").collapse("hide");

		//Pain the tools of this fundamental id
		window.th.paint(fid);

		//expand tool panel
		$("#tool_panel").collapse("show");

		//nicely scroll to top of tools
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

				window.th.preload(fundamental.id);
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

				<div class="arrow"></div>
			</div>
		
		</div>

		<div class="col-md-4">
			<div class="toolkit_sel" data-tkid="2">
				<p>Develop <br /> Your Team</p>
				<div class="arrow"></div>
			</div>

		</div>


		<div class="col-md-4">
			<div class="toolkit_sel" data-tkid="3">
				<p>Assess <br />Your Team</p>
				<div class="arrow"></div>
			</div>
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