<script>

function ToolHandler(div){
	var instance = this;
	this.div = $("#"+div);
	this.tools = new Array();

	this.edit_mode=false;

	//get the list of tools and populate the array. paint the tools when done
	window.API.getTools(window.fundamental_id, function(data){
		
		for(var i=0; i<data.length; i++){
			var tool = data[i];
			instance.tools[tool.id]=tool;
		}
		instance.paint();
	
	});

	//lnkEdit click handler. Bind to document 
	$(document).on("click", ".lnkEdit", function(){
		
		var tool_id = $(this).attr("data-id"); //id for specific tool
		var tool = instance.tools[tool_id];	   //get entire tool from instance array

		var card_tile = $("[data-tool_id='"+tool_id+"']"); //select the card tile html object

		var tile_html = "";
		tile_html+=  "<img class='lnkDelete' data-id='"+ tool.id +"' src='"+window.site_url+"public/images/icons/delete.png' />";
		tile_html+=  "<img class='lnkSave' data-id='"+ tool.id +"' src='"+window.site_url+"public/images/icons/save.png' />";
		tile_html+=	"<input type='text' name='txtToolName' value= \"" +htmlEncode(tool.name)+ "\" />";
	
		tile_html+=	"<hr />";
		tile_html+=	"<textarea name='txtToolDescription'>" + tool.description + "</textarea>";
		
		card_tile.html(tile_html);
	});
	
	//lnkDelete(): when user clicks the delete link while editing a tool
	$(document).on("click", ".lnkDelete", function(){
		var tool_id = $(this).attr("data-id"); 

		var confirm = window.confirm("Are you sure you would like to delete this tool?");
		//console.log(confirm);
		if(confirm){
			window.API.deleteTool(tool_id, function(){
				instance.tools.splice(tool_id,1);
				instance.paint();
			});
		}
	});	

	//lnkSave click(): when user saves changes to a tool
	$(document).on("click", ".lnkSave", function(){
		
		var tool_id = $(this).attr("data-id"); 
		var tool = instance.tools[tool_id];

		var card_tile=$("[data-tool_id='"+tool_id+"']");

		tool.name = card_tile.find("[name='txtToolName']").val();
		tool.description = card_tile.find("textarea").val();

		instance.tools[tool.id]=tool;

		window.API.putTool(tool, function(){
			instance.paint();
		});
	});//end: lnkSave click 

	//lnkNewTool click function
	$(document).on("click","#lnkNewTool", function(){

		//create a random identifier for this new tool between 0 and 1000
		var uid = Math.round(1000*Math.random());

		var html="";
		html+="<div class='card_tile new_tool' data-uid='"+uid+"'>";
		html+=  "<a class='lnkNewSave' data-uid='"+uid+"'>save</a>";
		html+=  "<a class='lnkNewCancel' data-uid='"+uid+"' >cancel</a>";
		html+=	"<input type='text' name='txtToolName' value= 'Tool Name' />";

		html+=	"<hr />";
		html+=	"<textarea name='txtToolDescription'>Tool Description</textarea>";
		html+="</div>";

		$("#tools_div").append(html);

		
	});

	//lnkNewCancel(): cancels the creation of a new tool
	$(document).on("click",".lnkNewCancel", function(){
		var uid = $(this).attr("data-uid");
		
		var confirm = window.confirm("Are you sure you would like to cancel? You will lose any unsaved changes.");
		
		if(confirm){
			new_tile = $("div [data-uid='"+uid+"']");
			new_tile.remove();
		}

	});

	//lnkNewSave(): saves the creation of a new tool
	$(document).on("click",".lnkNewSave", function(){
		var uid = $(this).attr("data-uid");
		var card_tile=$("[data-uid='"+uid+"']");
		var toolname = card_tile.find("[name='txtToolName']").val();
		var tooldescription = card_tile.find("textarea").val();

		var new_tool = {
			//"id":tool_id,
			"name":toolname,
			"description":tooldescription,
			"fundamental_id":window.fundamental_id
		};

		//post new tool to database, grab newly created tool and put in array, then repaint
		window.API.postTool(new_tool, function(data){
			instance.tools[data.id]=data;
			instance.paint();
		});
	});

}

//paint(): draw the tools in the tool array to the screen
ToolHandler.prototype.paint = function paint(){

	var allhtml="";

	//Loop over all the tools, build the html for the card then add to pagehtml
	for(var key in this.tools){
		var tool = this.tools[key];
		var toolhtml="";

		toolhtml+="<div class='card_tile' data-tool_id='"+tool.id+"'>";

		toolhtml+=	"<h3>" + tool.name + "</h3>";
	
		toolhtml+=	"<hr />";
		toolhtml+=	"<p>" + tool.description + "</p>";
		toolhtml+="</div>";

		allhtml+=toolhtml;
	}

	this.div.html(allhtml);

	if(this.edit_mode){
		this.setEditMode(true);
	}


}

ToolHandler.prototype.setEditMode = function setEditMode(boolean){
	this.edit_mode=boolean;

	if(boolean==true){
		this.div.find(".card_tile").each(function(index){
			var tool_id = $(this).attr("data-tool_id");
			$(this).prepend("<img class='lnkEdit' data-id='"+ tool_id +"' src='"+window.site_url+"public/images/icons/edit.png' />");
		});

		var newLnkHtml="";
		newLnkHtml="<img id='lnkNewTool' src='"+window.site_url+"public/images/icons/new.png' />";
		$("#newToolLnk").html(newLnkHtml);	

	}else{
		$(".lnkEdit").remove(); //remove all the edit links
		$(".new_tool").remove(); //remove unsaved new tool tiles
		$("#newToolLnk").html(""); //remove the new tool link
	}
}

$(document).ready(function(){

	window.fundamental_id = <?php echo $fundamental ?>;
	window.ToolHandler = new ToolHandler("tools_div");
	

	$("input[name='rdoDevToggle'").change(function(){
		var id = $(this).attr('id');

		if(id=="rdoEnable"){
			window.ToolHandler.setEditMode(true);
		}else{
			window.ToolHandler.setEditMode(false);
		
		}
	});

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