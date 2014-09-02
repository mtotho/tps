$(function(){
	window.Helper = new Helper();
	window.site_url = $("#site_url").attr("data-url");
	window.API = new ApiConnector();
	window.admin_user = false;
	window.valid_user = false;
	window.user = new Array();



	var authcookie = window.Helper.readCookie("tps-auth-token");

	//debug
	//authcookie=1;

	if(window.Helper.isNull(authcookie)){
	
		//window.valid_user = false;
		window.user = {
			"valid":false
		};

	}else if(authcookie){

		//window.valid_user = true;
		//window.admin_user = true;

		window.user = {
			"valid":true,
			"email":window.Helper.readCookie("tps-auth-email"),
			"token":authcookie,
			"user_type":window.Helper.readCookie("tps-auth-user_type")

		};
	}
	
});

$(document).ready(function(){
	
	if(window.user.valid){
		$("#authPanel").html("<a class='lnkLogout'>logout</a>");
	}else{
		$("#authPanel").html("<a class='lnkLogin'>login</a>");
	}


	auto_resize();
});

$(window).resize(function(){
	auto_resize();
});

$(document).on("click", ".lnkLogin", function(){
	window.location= window.site_url + "login";
});

$(document).on("click", ".lnkLogout", function(){
	window.Helper.eraseCookie("tps-auth-cookie");
	window.location= window.site_url;
});


function auto_resize(){
	//gather heights:
	var container_h = $(".container").outerHeight();
	var window_h = $(window).height()-7;

	console.log(container_h);
	console.log(window_h);

	//footer
	if(window_h>(container_h+30)){
		$("footer").height(window_h-container_h);
	}else{
		$("footer").css("height", "3em")
	}


}