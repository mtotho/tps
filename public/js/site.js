$(function(){
	window.Helper = new Helper();
	window.site_url = $("#site_url").attr("data-url");
	window.API = new ApiConnector();
	window.admin_user = false;
	window.valid_user = false;
	
});

$(document).ready(function(){
	

	var authcookie = window.Helper.readCookie("tps-auth-cookie");

	//debug
	authcookie=1;

	if(window.Helper.isNull(authcookie)){
		$("#authPanel").html("<a class='lnkLogin'>login</a>");
		window.valid_user = false;
	}else if(authcookie){
		$("#authPanel").html("<a class='lnkLogout'>logout</a>");
		window.valid_user = true;
		window.admin_user = true;
	}

});

$(document).on("click", ".lnkLogin", function(){
	window.location= window.site_url + "login";
});

$(document).on("click", ".lnkLogout", function(){
	window.Helper.eraseCookie("tps-auth-cookie");
	window.location= window.site_url;
});
