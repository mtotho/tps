$(document).ready(function(){


	var verifycookie = window.Helper.readCookie("tps-auth-verified");

	if(window.Helper.isNull(verifycookie)){
		//show first tab when page loads
		$('#reg_tabs a:first').tab('show');
	}else{

		//if not verified, go to verify tab
		if(verifycookie==0){
			$('#reg_tabs li:eq(1) a').tab('show');


		}else if(verifycookie==1){

			//verified but team is not created - go to team tab
			if(window.Helper.isNull(window.Helper.readCookie("tps-auth-team_id"))){
				$('#reg_tabs li:eq(2) a').tab('show');

			//team created, go to membership tab
			}else{
				window.team_id=window.Helper.readCookie("tps-auth-team_id");
				$('#reg_tabs li:eq(3) a').tab('show');
			}

			
		}

	}



	//registration click event
	$("#btnRegister").click(function(){
		console.log(window.user);
		//ajax call to register user, when done do below in success
		var email = $("#txtEmail").val();
		var password1 = $("#txtPassword").val();
		var password2 = $("#txtRPassword").val();

		if(password1==password2){

			var postData = {
				"user":{
					"email":email,
					"password":password1,
					"user_type":"team_leader"
				}
			}

			window.API.newUser(postData, function(data){
				//Assign new user data w/token to window user object and cookies
				window.Helper.createCookie("tps-auth-token", data.user.token,1);
				window.Helper.createCookie("tps-auth-email", data.user.email,1);
				window.Helper.createCookie("tps-auth-user_type", data.user.user_type,1);
				window.Helper.createCookie("tps-auth-verified", 0,1);

				window.user=data.user;

				$('#reg_tabs li:eq(1) a').tab('show');
			});

		}//end if password match
		else{
			alert("Passwords do not match.");
		}
	});



	$("#btnVerify").click(function(){

		var code=$("#txtVerifyCode").val();

		//ultimately check against database
		if(code==123){
			window.Helper.eraseCookie("tps-auth-verified");
			window.Helper.createCookie("tps-auth-verified", 1,1);

			$('#reg_tabs li:eq(2) a').tab('show');
		}


		console.log(code);

	});

	$("#btnCreateTeam").click(function(){

		var teamname = $("#txtTeamName").val();

		if(teamname!=""){

			var postData={
				"team":{
					"name":teamname,
					"leader":window.user.email
				}
			}

			window.API.newTeam(postData, function(response){
				window.Helper.createCookie("tps-auth-team_id", response.team.id,1);
				window.team_id = response.team.id;

				$('#reg_tabs li:eq(3) a').tab('show');
			});

		}

	});

	$("#btnCreateMembership").click(function(){

		var postData={
			"membership":{
				"qty_license": $("#qtyLicense").val(),
				"payment_type":$("#ddPaymentOption").val(),
				"contact_fname":$("#txtFName").val(),
				"contact_lname":$("#txtLName").val(),
				"contact_phone":$("#txtPhone").val(),
				"team_id":window.team_id
			},
			"user":window.user
			
		}

		window.API.newMembership(postData, function(response){
			window.location=window.site_url;

		});

	});

});
