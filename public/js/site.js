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
	//authcookie=1;

	if(window.Helper.isNull(authcookie)){
		$("#authPanel").html("<a class='lnkLogin'>login</a>");
		window.valid_user = false;
	}else if(authcookie){
		$("#authPanel").html("<a class='lnkLogout'>logout</a>");
		window.valid_user = true;
		window.admin_user = true;
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
	}


}