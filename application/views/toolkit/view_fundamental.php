<script>

function repaint_all(){

	$("#tools_div").html("");

	$("#newToolLnk").html("");
	for(var key in window.tools){
		var tool = window.tools[key];
		//window.tools[tool.id]=tool;

		var html="";


		html+="<div class='card_tile' data-tool_id='"+tool.id+"'>";
		if(window.edit_mode){
			html+=  "<img class='lnkEdit' data-id='"+ tool.id +"' src='"+window.site_url+"public/images/icons/edit.png' />";
		}
		html+=	"<h3>" + tool.name + "</h3>";
	
		html+=	"<hr />";
		html+=	"<p>" + tool.description + "</p>";
		html+="</div>";

		$("#tools_div").append(html);
	}


	if(window.edit_mode){
		var newLnkHtml="";
		newLnkHtml="<img id='lnkNewTool' src='"+window.site_url+"public/images/icons/new.png' />";
		$("#newToolLnk").html(newLnkHtml);	


		bindEditMode();
	}
}

function repaint_tool(tool){
	var div = $("div[data-tool_id='"+tool.id+"'");

	var html="";
	html+=  "<a class='lnkEdit' data-id='"+ tool.id +"'>edit</a>";
	html+=	"<h3>" + tool.name + "</h3>";
	html+=	"<hr />";
	html+=	"<p>" + tool.description + "</p>";

	div.html(html);

	bindEditMode();
}
function bindEditMode(){


	$(".lnkEdit").click(function(){
			
			var tool_id = $(this).attr("data-id");
		
			//console.log(tools);
			var tool = window.tools[tool_id];

			var card_tile = $("[data-tool_id='"+tool_id+"']");

			var tile_html = "";
			//console.log(htmlEncode(tool.name));
			
			//console.log();
			tile_html+=  "<img class='lnkDelete' data-id='"+ tool.id +"' src='"+window.site_url+"public/images/icons/delete.png' />";
			tile_html+=  "<img class='lnkSave' data-id='"+ tool.id +"' src='"+window.site_url+"public/images/icons/save.png' />";
			tile_html+=	"<input type='text' name='txtToolName' value= \"" +htmlEncode(tool.name)+ "\" />";
		
			tile_html+=	"<hr />";
			tile_html+=	"<textarea name='txtToolDescription'>" + tool.description + "</textarea>";

			card_tile.html(tile_html);

			$("input[type='text'").change(function(){
				//console.log("derp");
			});

			$(".lnkDelete").click(function(){
				console.log("delete");

				var confirm = window.confirm("Are you sure you would like to delete this tool?");
				//console.log(confirm);
				if(confirm){
					window.API.deleteTool(tool_id, function(){
						location.reload();
					});
				}
			});


			$(".lnkSave[data-id='"+tool_id+"']").click(function(){
				console.log("just once");
				//if($(this).attr("data-id")==tool_id)
				var card_tile=$("[data-tool_id='"+tool_id+"']");

				var toolname = card_tile.find("[name='txtToolName']").val();
				var tooldescription = card_tile.find("textarea").val();

				var updated_tool = {
					"id":tool_id,
					"name":toolname,
					"description":tooldescription,
					"fundamental_id":tool.fundamental_id
				};

				window.API.putTool(updated_tool, function(){
					repaint_tool(updated_tool);
					//location.reload();
				});
			});
			//console.log(card_tile);
			//console.log(tool);
			
		});
		
	$("#lnkNewTool").click(function(){


		var uid = Math.round(1000*Math.random());
		//console.log(uid);

		var html="";
		html+="<div class='card_tile' data-uid='"+uid+"'>";
		html+=  "<a class='lnkNewSave'>save</a>";
		html+=  "<a class='lnkCancel' data-uid='"+uid+"' >cancel</a>";
		html+=	"<input type='text' name='txtToolName' value= 'Tool Name' />";

		html+=	"<hr />";
		html+=	"<textarea name='txtToolDescription'>Tool Description</textarea>";
		html+="</div>";

		$("#tools_div").append(html);

		$(".lnkCancel").click(function(){
			var uid = $(this).attr("data-uid");
			
			var confirm = window.confirm("Are you sure you would like to cancel? You will lose any unsaved changes.");
			
			if(confirm){
				new_tile = $("div [data-uid='"+uid+"']");
				new_tile.remove();
			}

		});

		$(".lnkNewSave").click(function(){
		//$(".lnkSave").click(function(){
			
			var card_tile=$("[data-uid='"+uid+"']");
			//console.log(card_tile);
			var toolname = card_tile.find("[name='txtToolName']").val();
			var tooldescription = card_tile.find("textarea").val();

			var new_tool = {
				//"id":tool_id,
				"name":toolname,
				"description":tooldescription,
				"fundamental_id":window.fundamental_id
			};

			//console.log(new_tool)
			window.API.postTool(new_tool, function(){
				location.reload();
			});
		});

	});


}

$(document).ready(function(){

	
	//window.API = new ApiConnector();
	window.fundamental_id = <?php echo $fundamental ?>;
	
	window.tools = new Array();
	window.edit_mode=false;

	var tool ={
		"name":"sample tool",
		"description": "sample description",
		"fundamental_id":1
	}

	$("input[name='rdoDevToggle'").change(function(){
		var id = $(this).attr('id');


		if(id=="rdoEnable"){
			window.edit_mode=true;

		}else{
			window.edit_mode=false;
		}


		repaint_all();
	});



	window.API.getTools(fundamental_id, function(data){
		//console.log(data);

		for(var i=0; i<data.length; i++){
			var tool = data[i];
			window.tools[tool.id]=tool;

		
		}

		repaint_all();
		//bindEditMode();
	});
		




	

	//window.API.postTool(tool, function(data){
		

		//console.log(data);
	//});

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

		<h2>Fundamental > <span>Tools</span></h2>
		
		
		<div id="tools_div">
			
		</div>
		<div id="dev_toggle" class="card_tile">
			<p>Edit Mode</p>
			<hr />
			<label for="rdoEnable">Enable</label>
			<input type="radio" id="rdoEnable" name="rdoDevToggle" /> 
			<label for="rdoDisable">Disable</label>
			<input type="radio" id="rdoDisable" checked='true' name="rdoDevToggle" />

		</div>
		<div id="newToolLnk"></div>
		<a id='backtotop' href='<?php echo URL ?>toolkit/tools?page=2'>Back to Fundamentals</a>
		<div style="clear:both"></div>
	</div>
</div>