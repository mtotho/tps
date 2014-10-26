var app = angular.module('tpsApp', ['ngRoute','ngCookies']);

app.config(function ($routeProvider) {

    $routeProvider
	    .when('/', 
		    {
		        controller: 'HomeController',
		        templateUrl: 'app/views/view_home.html'
		    })
	    .when('/admin',
	    	{
	    		controller:'AdminController',
	    		templateUrl:'app/views/view_admin.html'
	    	})
	    .when('/toolkit/',
	    	{
	    		controller:'OverviewController',
	    		templateUrl:'app/views/view_overview.html'
	    	})
	    .when('/toolkit/tools/',
	    	{
	    		controller:'ToolkitController',
	    		templateUrl:'app/views/view_toolkit.html'
	    	})
	    .when('/about/',
	    	{
	    		controller:'AboutController',
	    		templateUrl:'app/views/view_about.html'
	    	})
	    .when('/purchasing/',
	    	{
	    		controller:'PurchasingController',
	    		templateUrl:'app/views/view_purchasing.html'
	    	})
	    .when('/registration/',
	    	{
	    		controller:'RegistrationContrller',
	    		templateUrl:'app/views/view_registration.html'
	    	})
		.when('/login',
		    {
		      	controller: 'loginController',
		        templateUrl: 'app/views/view_login.html'
		    }
    	);

});


$(document).ready(function(){
	window.debug = true;


});
$(window).resize(function(){
	//autosize();
});

function autosize(){
	var headerheight=$("header").outerHeight();
	var windowheight=$(window).outerHeight();

	var targetheight = windowheight - headerheight;


	var namewidth = $(".name_panel h3").width();
	//console.log(namewidth);

	//$(".name_panel").width(namewidth);


	$("#map_canvas").height(targetheight);
}