app.controller('ToolkitController', function($scope, api, auth,$location, $cookieStore, $routeParams){
	
	$scope.toolkits = new Object();
	$scope.fundamentals = new Object();
	$scope.tools = new Object();

	var toolsOpen = false;
	var fundamentalsOpen = false;

	function init(){
		$('.collapse').collapse({
		  toggle: false
		});




		loadRemoteData();
	}
	init();

	$scope.toolkitSelect = function(tkid){
		fundamentalsOpen = true;
		toolsOpen=false;

		$scope.fundamentals = $scope.toolkits[tkid].fundamentals;
		
		console.log($scope.fundamentals);
		$(".fundamental_tile").removeClass("active");
		$(".toolkit_sel").removeClass("active");
		$("#toolkit_selector div:nth-child("+tkid+") div").addClass("active");

		//$('.collapse').collapse('hide');
		$("#tool_panel").collapse("hide");
		$("#fundamental_selector .collapse").collapse('show');
	}

	$scope.fundamentalSelect = function(findex){
		

		$scope.tools = $scope.fundamentals[findex].tools;
		console.log($scope.tools);
		if(!toolsOpen){
			//$("#tool_panel").collapse("hide");
		}

		$(".fundamental_tile").removeClass("active");
		$("#fundamental_selector div div:nth-child("+(findex+1)+") .fundamental_tile").addClass("active");



		$("#tool_panel").collapse("show");
		goToByScroll("tool_panel");	
		toolsOpen=true;
	}

	$scope.gotoPath = function(path){
		$location.path(path);
	}
	

	function loadRemoteData(){
		
		api.getTools().then(function(response){
			$scope.toolkits=response;
		});		


	}
	function goToByScroll(id){
      // Remove "link" from the ID
	    id = id.replace("link", "");
	      // Scroll
	    $('html,body').animate({
	        scrollTop: $("#"+id).offset().top},
	        'slow');
	}
	function applyStudyArea(studyarea){
	}	

});