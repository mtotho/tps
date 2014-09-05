<script>
$(document).ready(function(){
	$("#btnLogin").click(function(){

		var email = $("#txtEmail").val();
		var password = $("#txtPassword").val();
		console.log(password);
		var data={
			"user":{
				"email":email,
				"password":password
			}
		};

		window.API.login(data, function(data){

			if(data.user.valid==1){
				
				window.Helper.createCookie("tps-auth-token", data.user.token,1);
				window.Helper.createCookie("tps-auth-email", data.user.email,1);
				window.Helper.createCookie("tps-auth-user_type", data.user.user_type,1);
				window.location = window.site_url;
			}else{
				alert("invalid email or pass");
			}
			
		});


	});
});


</script>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  	<form style="margin:5em 0 5em 0;" role="form">
  		<div class="form-group">
			<label for="txtEmail">Email </label>
			<input id="txtEmail" class="form-control"  type="email" placeholder="Enter email">
		 </div>

		<div class="form-group">
			<label for="txtPassword">Password </label>
			<input id="txtPassword" class="form-control" type="password" placeholder="Password">
		</div>
		
		<input type="button" id="btnLogin" value="login" />
	</form>

  </div>
  <div class="col-md-4"></div>
</div>



