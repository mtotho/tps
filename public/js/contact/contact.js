$(document).ready(function(){
	
	$('#frmContact').submit(function(){
		
		formValid = true;
		msg = "You must correct the following fields: \n";
		
		if($("input:first").val()==""){
			formValid=false;
			$("input:first").css("background-color", "#feff99");
			msg = msg + "First Name \n";
		}
		
		if($('#lname').val()==""){
			formValid=false;
			$('#lname').css("background-color", "#feff99");
			msg = msg + "Last Name \n";
		}
		
		if($('#email').val()==""){
			formValid=false;
			$('#email').css("background-color", "#feff99");
			msg = msg + "Email \n";
		}
		
		if($('#message').val()==""){
			formValid=false;
			$('#message').css("background-color", "#feff99");
			msg = msg + "Message \n";
		}
		
		alert(msg);
		return formValid;
	});
	
});
