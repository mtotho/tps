
app.controller('navController', function($scope, api,auth,$location){
	//$scope.array = [];
	//$scope.template.url="partials/part_createStudyArea.html";
	//init (optional)
	
	$scope.isLoggedIn = false;

	function init(){
		

	
	}
	


	init();
	$scope.$on('$routeChangeSuccess', function () {
		if(auth.isLoggedIn()){
			$scope.user=auth.getUser();
			$scope.isLoggedIn=true;
		}else{
			$scope.isLoggedIn=false;
		}


		var path=$location.path().substring(1);

		$("header .nav li").removeClass("active");
		$scope.userNavText="Admin Panel";

		switch(path){
			case "":{
				
				//$("header .nav li:nth-child(1)").addClass("active");
				break;
			}
			case "toolkit/":{
				$("header .nav li:nth-child(1)").addClass("active");

				break;
			}
			case "toolkit/tools/":{
				$("header .nav li:nth-child(2)").addClass("active");
				break;
			}
			case "about/":{
				$("header .nav li:nth-child(3)").addClass("active");
				break;
			}
			case "resources/":{
				$("header .nav li:nth-child(4)").addClass("active");
				break;
			}
			case "purchasing/":{
				$("header .nav li:nth-child(5)").addClass("active");
				break;
			}
			case "login":{
					
				$("header .nav li:nth-child(6)").addClass("active");
				break;
			}
			case "admin":{
				$scope.userNavText="Logout";
				$("header .nav li:nth-child(7)").addClass("active");

				break;
			}
			default:{
				;
				break;
			}
		}

		console.log(path);

	});
	$scope.gotoPath = function(path){
		$location.path(path);
	}
	$scope.logout = function(){
		if(!angular.isUndefined(auth.getUser())){

			auth.destroySession();
			$scope.userstatus="login";
			$location.path("/login");

		}else{
			
			$location.path("/login");
		}
		
		
	}

	function loadRemoteData(){
		
	}
	function applyStudyArea(){
	
	}

});