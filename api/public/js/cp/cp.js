$(document).ready(function(){

	//var auth_data = {"user":window.user};
	
	if(window.user.valid==0 || !(window.user.user_type=="admin" || window.user.user_type=="super_admin")){
			
			//console.log(user);

			//Not valid user, redirect to login page
			window.location="http://google.com";
	}else{
		
	}

});