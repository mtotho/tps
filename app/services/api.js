app.service('api', function($http, $q, auth){
	//var user = userService.getUser();

	var url="api/";
	var studyareas = new Array();

	this.getTools = function(){
		var toolGet = $http.get(url+"tool");
		return toolGet.then(handleSuccess, handleError);
	}
	this.postTool = function(tool){
		var post = $http.post(url+"tool",tool);
		return post.then(handleSuccess, handleError);
	}
	this.putTool = function(tool){
		var put = $http.put(url+"tool", tool);
		return put.then(handleSuccess, handleError);
	}
	this.deleteTool = function(tool_id){
		var del = $http.delete(url+"tool?tool_id="+qid);
		return del.then(handleSuccess, handleError);
	}


	
	this.getUsers = function(){
		var user = auth.getUser();

		var get = $http.get(url+"user?auth_email="+user.email+"&auth_token="+user.token);
		return get.then(handleSuccess, handleError);	
	}

	this.postMarker = function(data){
		//var postData={
			//"placemarker":marker
		//}
		var markerPost = $http.post(url+"placemarker", data);
		return markerPost.then(handleSuccess, handleError);
	}


	function handleError(response){
		console.log(response);
		if(
			!angular.isObject(response.data) || 
			!response.data.message
		){
			return($q.reject("An unknown error occured"));
		}
		return($q.reject(response.data.message));
		
	}

	function handleSuccess(response){
		return(response.data);
	}



});