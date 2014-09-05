$(document).ready(function(){
	
	$('.article_type_bar').click(function(){
		
		//Display is set to none
		if($(this).parent().children(".article_type_content").css("display") == "none"){
			
			//Make the element visible
			$(this).parent().children(".article_type_content").css("display", "block");
		
		//Element is visible		
		}else{
			
			//make the element invisible
			$(this).parent().children(".article_type_content").css("display", "none");
			
		}
		
	});
	
	
	$('.article_description').click(function(){
		visibility = $(this).children(".article_description_content").css("display");
		
		if(visibility == "none"){
			$(this).children(".article_description_content").css("display", "block");
			$(this).children(".article_description_expand").html("<span>[-]</span> click to collapse description");
		}else{
			$(this).children(".article_description_content").css("display", "none");
			$(this).children(".article_description_expand").html("<span>[+]</span> click to expand description");
			
		}
		
		
	});
	
	$('.book_description').click(function(){
		visibility = $(this).children(".book_description_content").css("display");
		
		if(visibility == "none"){
			$(this).children(".book_description_content").css("display", "block");
			$(this).children(".book_description_expand").html("<span>[-]</span> click to collapse description");
		}else{
			$(this).children(".book_description_content").css("display", "none");
			$(this).children(".book_description_expand").html("<span>[+]</span> click to expand description");
			
		}
		
		
	});
	

});