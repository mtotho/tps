$(document).ready(function(){
	
	$(".DeleteNewsItem").click(function(){
		//call function with unique id (each id corresponds to table entry)
		deleteNewsEntry($(this).attr('id'));	
	});
	
});