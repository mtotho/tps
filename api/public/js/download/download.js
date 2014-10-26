$(document).ready(function(){
	
	$('#btnYes').click(function(){
		$('#btnYes').css("background", "#4b6a86");
		$('#btnNo').css("background", "#8fb7db");
	});
	
	$('#btnNo').click(function(){
		$('#btnNo').css("background", "#4b6a86");
		$('#btnYes').css("background", "#8fb7db");
	});
	
});

function formLoad(type){
	
	request = $.ajax({
		type: "POST",
		url: "/download/frmSelect",
		data: {type: type}
	});
	
	request.done(function(html){
		
		$("#frmInsert").html(html);
		
	});
	
}
