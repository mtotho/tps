<script>

$(document).ready(function(){

	window.users= new Array();

	window.API.getUsers(function(response){
		for(var i=0; i<response.users.length; i++){
			var user = response.users[i];
			window.users[user.id]=user;
		}

		paint();
	});

	$("#btnNewUser").click(function(){
		$('#modal_new_user').modal({"show":true})
	});

	$("#btnSaveNewUser").click(function(){

		var email = $("#txtEmail").val();
		var password1 = $("#txtPassword").val();
		var password2 = $("#txtPassword2").val();

		if(password1!=password2){
			//notify passwords dont match
		}else{

			var user={
				"email":email,
				"password":password1,
				"user_type":"standard"
			}

			var post = {"user":user};
			window.API.newUser(post,function(newuser){

				window.users[newuser.id]=user;

				$("#modal_new_user").modal('hide');
				$("#txtEmail").val("");
				$("#txtPassword").val("");
				$("#txtPassword2").val("");

				paint();

			});

		}
		//var newuser={

		//}

	});

});	

$(document).on("click",".lnkEditUser", function(){
		var user_id = $(this).attr('data-user-id');
		var user = window.users[user_id];

		window.user_edit_id=user_id;

		//update fields with existing data
		$("#txtEditEmail").val(user.email);
		$("#ddEditUserType").val(user.user_type);

	
		$("#modal_edit_user").modal({"show":true});
});



$(document).on("click",".btnSaveUser", function(){
	var user_id = window.user_edit_id;

	var newemail = $("#txtEditEmail").val();
	var usertype = $("#ddEditUserType").val();

	var updateduser = {
		"id":user_id,
		"email":newemail,
		"user_type":usertype
	};

	window.API.updateUser({"user":updateduser},function(response){
		var user = response.user;

		window.users[user.id]=user;
		paint();
	});

	$("#modal_edit_user").modal('hide');
});


function paint(){
	//delete
	$("#table_users").html("");

	var usertable = "";
	usertable+="<tr>";
	usertable+="	<th>Email</th>";
	usertable+="	<th>User Type</th>";
	usertable+="	<th></th>";
	usertable+="</tr>";	

	//Loop over all the tools, build the html for the card then add to pagehtml
	for(var id in window.users){
		var user = window.users[id];
		
		usertable+="<tr>";
		usertable+="	<td>"+user.email+"</td>";
		usertable+="	<td>"+user.user_type+"</td>";
		usertable+="    <td><a class='lnkEditUser' data-user-id='"+user.id+"'>Edit</a></td>";
		usertable+="</tr>";	
	}

	$("#table_users").html(usertable);

}

</script>

<div id="cp">

	<ol class="breadcrumb">
	  <li><a href="<?php echo site_url() ?>cp/">Control Panel</a></li>
	  <li class="active">Users</li>
	</ol>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<button id='btnNewUser' type="button" class="btn btn-success" style="margin-bottom:1em">New User</button> 
			<table id="table_users" class='table'></table>

			
		</div>
		<div class="col-md-1"></div>

		<div id='modal_new_user' class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Add New User</h4>
		      </div>
		      <div class="modal-body">
		       	<div class="form-group">
					<label for="txtEmail">Email </label>
					<input id="txtEmail" class="form-control"  type="email" placeholder="Enter email">
				 </div>

				<div class="form-group">
					<label for="txtPassword">Password </label>
					<input id="txtPassword" class="form-control" type="password" placeholder="Password">
				</div>

				<div class="form-group">
					<label for="txtPassword2">Repeat Password </label>
					<input id="txtPassword2" class="form-control" type="password" placeholder="Password">
				</div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button id="btnSaveNewUser" type="button" class="btn btn-primary">Add</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->


		<div id='modal_edit_user' class="modal fade">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">Edit User</h4>
		      </div>
		      <div class="modal-body">
		       	<div class="form-group">
					<label for="txtEditEmail">Email </label>
					<input id="txtEditEmail" class="form-control"  type="email" placeholder="Enter email">
				 </div>

				<div class="form-group">
					<label for="ddEditUserType">User Type </label>
					<select id="ddEditUserType" class='form-control'>
							<option value='admin'>admin</option>
							<option value='super_admin'>super admin</option>
							<option value='standard'>standard</option>
					</select>
				 </div>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button id="btnSaveUser" type="button" class="btn btn-primary btnSaveUser">Update User</button>
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	</div>

</div>