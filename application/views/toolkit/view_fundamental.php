<script>

function ToolHandler(div){
	var instance = this;
	this.div = $("#"+div);
	this.tools = new Array();
	this.fundamental;

	if(window.admin_user){
		this.edit_mode=true;
	}else{
		this.edit_mode=false;
	}
	

	//get the list of tools and populate the array. paint the tools when done
	window.API.getTools(window.fundamental_id, function(data){
		var dbtools = data.tools;

		for(var i=0; i<dbtools.length; i++){
			var tool = dbtools[i];
			instance.tools[tool.id]=tool;
		}
		console.log(instance.tools);
		instance.fundamental = data.fundamental;
		
		instance.paint();
		
		instance.init();
	});

	//file input change: converts file into base64 dataurl and stores info into tool
	$(document).on('change','input[type=file]',function(event){
		var tool_id = $(this).attr("data-id"); //id for specific tool
		var tool = instance.tools[tool_id];
		var file = this.files[0];

		//tool.new_file_name=file.name;
	 	var FR= new FileReader();
        FR.onload = function(e) {
            var split = e.target.result.split(",");
           	tool.new_file ={
           		"name":file.name,
           		"type":split[0],
           		"base64":split[1]
           	};
        };       
        FR.readAsDataURL( this.files[0] );
        
		instance.tools[tool_id]=tool;
	});

	//lnkEdit click handler. Bind to document 
	$(document).on("click", ".lnkEdit", function(){
		
		var tool_id = $(this).attr("data-id"); //id for specific tool
		var tool = instance.tools[tool_id];	   //get entire tool from instance array

		var card_tile = $("[data-tool_id='"+tool_id+"']"); //select the card tile html object

		var tile_html = "";
		tile_html+=  "<a class='lnkCancel' data-id='"+tool.id+"' >cancel</a>";
		tile_html+=  "<a class='lnkDelete' data-id='"+ tool.id +"'>delete</a>";
		tile_html+=  "<a class='lnkSave' data-id='"+ tool.id +"'>save</a>";
		tile_html+=	"<input type='text' name='txtToolName' value= \"" +htmlEncode(tool.name)+ "\" />";
	
		tile_html+=	"<hr />";
		tile_html+=	"<textarea name='txtToolDescription'>" + tool.description + "</textarea>";
		tile_html+=	"<hr />";
		tile_html+=	"<p class='edit'>Current file: <span class='file-metadata'>" + tool.file_name+"</span></p>";
		tile_html+=	"<p class='edit'>Upload date: <span class='file-metadata'>" + tool.upload_date+"</span></p>"; 
		tile_html+=	"<hr />";
		tile_html+= "<label for='file-"+tool.id+"'>New File: </label>"
		tile_html+=	"<input name='file' id='file-"+tool.id+"' type='file' data-id='"+tool.id+"' />";
		
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
	
	//lnkDelete(): when user clicks the delete link while editing a tool
	$(document).on("click", ".lnkCancel", function(){
		var tool_id = $(this).attr("data-id"); 

		var confirm = window.confirm("Are you sure you would like to cancel editing? You will lose any changes.");
		//console.log(confirm);
		if(confirm){
			instance.paint();
		}
	});	
	//lnkSave click(): when user saves changes to a tool
	$(document).on("click", ".lnkSave", function(){
		
		var tool_id = $(this).attr("data-id"); 
		var tool = instance.tools[tool_id];

		var card_tile=$("[data-tool_id='"+tool_id+"']");

		tool.name = card_tile.find("[name='txtToolName']").val();
		tool.description = card_tile.find("textarea").val();


		//update tool and replace js tool with updated tool from database.
		window.API.putTool(tool, function(updated_tool){
			instance.tools[tool.id]=updated_tool;
			instance.paint();
		});
	});//end: lnkSave click 

	//lnkNewTool click function
	$(document).on("click","#lnkNewTool", function(){

		//create a random identifier for this new tool between 0 and 1000
		var uid = Math.round(1000*Math.random());

		var html="";
		html+="<div class='card_tile new_tool' data-uid='"+uid+"'>";
		html+=  "<a class='lnkNewCancel' data-uid='"+uid+"' >cancel</a>";
		html+=  "<a class='lnkNewSave' data-uid='"+uid+"'>save</a>";
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


	$(document).on("change", "input[name='rdoDevToggle']", function(){
		var id = $(this).attr('id');

		if(id=="rdoEnable"){
			instance.setEditMode(true);
		}else{
			instance.setEditMode(false);
		
		}
	});
	var saveData = (function () {
    	var a = document.createElement("a");
	    document.body.appendChild(a);
	    a.style = "display: none";
	    return function (data, fileName) {
	        var json = JSON.stringify(data),
	            blob = new Blob([json], {type: "octet/stream"}),
	            url = window.URL.createObjectURL(blob);
	        a.href = url;
	        a.download = fileName;
	        a.click();
	        window.URL.revokeObjectURL(url);
	    };
	}());

	//Tool download link
	$(document).on("click", ".tool_link", function(){
		var tool_id = $(this).attr("data-id"); 
		var tool = instance.tools[tool_id];
		//console.log(tool);
		if(!window.Helper.isNull(tool.file_name)){

			var confirm = window.confirm('Clicking okay will start the download of file: ' + tool.file_name);
			if(confirm){
				window.API.getFile(tool.file_id, function(file){	
					
					   	var pom = document.createElement('a');
					    pom.setAttribute('href', file.type+","+file.base64);
					    pom.setAttribute('download', file.name);
					    pom.click();
				
				});
			}
		}else{
			alert("no file");
		}
	});
}


ToolHandler.prototype.init = function init(){
	
	$("#fundamental_title").html(this.fundamental.name);
	$("#fundamental_description").html("<span>&gt; </span>"+this.fundamental.description);
}

//paint(): draw the tools in the tool array to the screen
ToolHandler.prototype.paint = function paint(){

	var allhtml="";

	//Loop over all the tools, build the html for the card then add to pagehtml
	for(var key in this.tools){
		var tool = this.tools[key];
		var toolhtml="";

		toolhtml+="<div class='card_tile' data-tool_id='"+tool.id+"'>";

		toolhtml+=	"<h3 class='tool_link' data-id='"+tool.id+"'>" + tool.name + "</h3>";
	
		toolhtml+=	"<hr />";
		toolhtml+=	"<p>" + tool.description + "</p>";
		toolhtml+="</div>";

		allhtml+=toolhtml;
	}

	this.div.html(allhtml);


	if(window.admin_user){
		var togglehtml ="";
		togglehtml+='<p>Edit Mode</p>';
		togglehtml+='<hr />';
		togglehtml+='<label for="rdoEnable">Enable</label>';
		togglehtml+='<input type="radio" id="rdoEnable" name="rdoDevToggle" /> ';
		togglehtml+='<label for="rdoDisable">Disable</label>';
		togglehtml+='<input type="radio" id="rdoDisable" name="rdoDevToggle" />';	
			
			
		$("#dev_toggle").html(togglehtml);
		
		if(this.edit_mode){
			$("#rdoEnable").attr('checked',true);
		}else{
			$("#rdoDisable").attr('checked', true);
		}

	}else{
		$("#dev_toggle").remove();
	}

	if(this.edit_mode){
		this.setEditMode(true);
	}


}

ToolHandler.prototype.setEditMode = function setEditMode(boolean){
	this.edit_mode=boolean;

	if(boolean==true){
		this.div.find(".card_tile").each(function(index){
			var tool_id = $(this).attr("data-tool_id");
			$(this).prepend("<a class='lnkEdit' data-id='"+ tool_id +"'>edit</a>");
		});

		var newLnkHtml="";
		newLnkHtml="<button id='lnkNewTool' type='button' class='btn btn-success'>New Tool</button>";
		$("#newToolLnk").html(newLnkHtml);	

	}else{
		$(".lnkEdit").remove(); //remove all the edit links
		$(".new_tool").remove(); //remove unsaved new tool tiles
		$("#newToolLnk").html(""); //remove the new tool link
	}
}

$(document).ready(function(){
	$("#container").addClass("fundamental_container");
	window.fundamental_id = <?php echo $fundamental ?>;
	window.ToolHandler = new ToolHandler("tools_div");
	



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
		<a id='backtotop' href='<?php echo site_url('toolkit/tools?page=2') ?>'>Back to Fundamentals</a>
		

	</div>
</div>