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

		window.API.authenticate(data, function(data){

			if(data.valid==true){
				window.Helper.createCookie("tps-auth-cookie", true,1);
				window.location = window.site_url;
			}else{
				alert("invalid email or pass");
			}
			
		});


	});
});


</script>


<label for="txtEmail">Email </label>
<input id="txtEmail" type="text" />

<br /><br />
<label for="txtPassword">Password </label>
<input id="txtPassword" type="password" />

<br />
<input type="button" id="btnLogin" value="login" />