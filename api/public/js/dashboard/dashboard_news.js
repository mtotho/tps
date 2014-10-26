$(document).ready(function(){

	

	$(".DeleteNewsItem").click(function(){
 
		//call function with unique id (each id corresponds to table entry)

		//deleteNewsEntry($(this).attr('id'));		

		confirmation = confirm("Are you sure you would like to remove this news entry?");

		siteURL = $("#dashURL").attr("value");

		if(confirmation==true){

			location.assign(siteURL + "dashboard/news/ajaxNewsDelete/" + $(this).attr('id'));	
		
		}

	

		
	});

	

	$("#addEvent").click(function(){

		

	

	

		if($("#event2").css("display")=="none"){

			

		

			$("#event2").css("display", "block");

			

		}else if($("#event3").css("display") == "none"){

			

			$("#event3").css("display", "block");

			

			$("#addEvent").css("display","none");

		}

		

		

	})

	

});



function deleteNewsEntry(id){

	

	confirmation = confirm("Are you sure you would like to remove this news entry?");

	siteURL = $("#dashURL").attr("value");
	//If True, run an ajax call to delete entry

	if(confirmation==true){


		 $.ajax({

			type: "POST",

			url: siteURL + "dashboard/news/ajaxNewsDelete",

			data: {id: id}

		}).done(function(html){
			alert(html);
		});

		

		//reload the page

		location.reload();

		

	}

}

