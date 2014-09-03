<script>
	$(document).ready(function(){

		window.teams = new Array();
		window.users = new Array();

		window.API.getUsers(function(response){
			for(var i=0; i<response.users.length; i++){
				var user = response.users[i];
				window.users[user.id]=user;
			}

			
		});

		window.API.getTeams(function(response){
			var teams = response.teams;
			for(var i=0; i<response.teams.length; i++){
				var team = response.teams[i];
				window.teams[team.id]=team;
			}

			paintTeams();

		});


		$("#btnNewTeam").click(function(){
			$("#ddTeamLeader").html("");	
			for(var id in window.users){
				var user = window.users[id];
				$("#ddTeamLeader").append("<option>"+user.email+"</option>");

			}
			$('#modal_new_team').modal({"show":true})
		});

		$("#btnSaveNewTeam").click(function(){

			var teamname = $("#txtTeamName").val();
			var teamleader = $("#ddTeamLeader").val();

			var newteam={
				"name":teamname,
				"leader":teamleader
			}

			window.API.newTeam({"team":newteam},function(response){
				var response_team = response.team;
				window.teams[response_team.id]=response_team;
				$("#modal_new_team").modal('hide');
				$("#txtTeamName").val("");
				paintTeams();
			});

		});

	});

	function paintTeams(){
		$("#table_teams").html("");

		var html = "";
		html+="<tr>";
		html+="	<th>Team Name</th>";
		html+="	<th>Leader</th>";
		html+="</tr>";	

		//Loop over all the tools, build the html for the card then add to pagehtml
		for(var id in window.teams){
			var team = window.teams[id];
			
			html+="<tr>";
			html+="	<td>"+team.name+"</td>";
			html+="	<td>"+team.leader+"</td>";
			html+="</tr>";	
		}

		$("#table_teams").html(html);
	}

</script>


<div id="cp">

	<ol class="breadcrumb">
	  <li><a href="<?php echo site_url() ?>cp/">Control Panel</a></li>
	  <li class="active">Toolkit</li>
	</ol>
	<div class="row">
		<div class="col-md-2">
			<ul class="nav">
					<li><a href="">Downloads</a></li>
					<li><a href="">Teams</a></li>
					<li><a href="">Memberships</a></li>
					<li><a href="">Tools</a></li>
			</ul>

		</div>

		<div class="col-md-10">
			<table id="table_downloads" class='table'></table>

			<table id="table_teams" class='table'></table>
			<button id='btnNewTeam' type="button" class="btn btn-success" style="margin-bottom:1em">New Team</button> 
			
			<div id='modal_new_team' class="modal fade">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title">Add New Team</h4>
			      </div>
			      <div class="modal-body">
			       	<div class="form-group">
						<label for="txtTeamName">Team Name </label>
						<input id="txtTeamName" class="form-control"  type="text" placeholder="Team Name">
					 </div>

					<div class="form-group">
						<label for="ddTeamLeader">Team Leader </label>
						<select id="ddTeamLeader" class='form-control'>
							
						</select>
					</div>

			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button id="btnSaveNewTeam" type="button" class="btn btn-primary">Add</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->




			<table id="table_tools" class='table'></table>


		</div>
		
	</div>

</div>