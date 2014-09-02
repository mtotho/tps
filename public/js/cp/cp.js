$(document).ready(function(){

	var auth_data = {"user":window.user};

	window.API.authenticate(auth_data, function(auth){
		var user = auth.user;
		if(user.valid==0 || user.user_type!="admin"){
			
			//Not valid user, redirect to login page
			window.location="http://google.com";
		}else{
			
		}
	});


});