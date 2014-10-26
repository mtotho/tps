$(document).ready(function(){
	
	//On Click Handler for the delete resource link
	$(".DeleteResourceItem").click(function(){
		deleteArticle($(this).attr('id'));
	});
	
	//On Focus Handler for the 'Author String' Field on the add resource form
	$("#txtAuthors").focus(function(){

		if($(this).attr('value') == "e.g. 'Druskat, V.U., & Wolff, S. B.'"){
			$(this).attr('value', '');
			$(this).css('color', 'black');
			$(this).css('font-style', 'normal');
		}		
	});

	//JQUERYUI Handles sorting for Article_types
	$(function() {
	 $( "#sortable" ).sortable({
	   update: function(event,ui)
	        {
	          //create an array with the new order
	          var order = $( "#sortable" ).sortable('toArray');
	          for(var key in order) {
		          var val = order[key];
		          var part = val.split("_");
		          //update each hidden field used to store the list item position
		          
		         document.getElementById("order"+part[1]).value = key;
		         
	           }
	        }
	  });
	});
	
	$(function() {
		$( "#accordion" ).accordion({
			active: false,
			autoHeight:true
			});
	});
	
	//Call radioCheck function for modify form
 	radioCheck();
	
	//Radio button switch handlers. 
	$("#rdoGeneric").click(function(){
		
		$("#fldsetGeneric").css('display', 'block');
		$("#fldsetJournal").css('display', 'none');
	});
	
	$("#rdoJournal").click(function(){
		
		$("#fldsetGeneric").css('display', 'none');
		$("#fldsetJournal").css('display', 'block');
	});
	
	
	
});

function radioCheck(){
	
	if($("#rdoGeneric").attr("checked")=='checked'){
		
		$("#fldsetGeneric").css('display', 'block');
		$("#fldsetJournal").css('display', 'none');
		
	}else{
		$("#fldsetGeneric").css('display', 'none');
		$("#fldsetJournal").css('display', 'block');
		
	}	
}


function deleteArticle(id){
	
	confirmation = confirm("Are you sure you would like to remove this resource?");
	
	//If True, run an ajax call to delete entry
	if(confirmation==true){
		
		request = $.ajax({
			type: "POST",
			url: "/dashboard/resources/ajaxArticleDelete",
			data: {id: id}
		});
		
		//reload the page
		location.assign("http://mvc.teamperformancesolutions.com/dashboard");
		
	}
}

