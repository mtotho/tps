$(function(){
	window.site_url = $("#site_url").attr("data-url");
	window.API = new ApiConnector();
	window.Helper = new Helper();
});

$(document).ready(function(){




	//$(docum	ent).tooltip();
	$(".fundamentals").click(function(){
		var fundamental_id = $(this).attr("data-name");

		window.location="tools/"+fundamental_id;

		var tools =  new Array();
		var tool_descriptions = new Array();

		/*
		switch(fundamental_id){
			case "tf1":
				tools.push("Team Charter");
				tools.push("Setting Goals");

				tool_descriptions.push("To create agreement on how the team will work together to make binding decisions and share accountability for meeting project goals and objectives.");
				tool_descriptions.push("To provide direction, avoid chaos and motivate members by clarifying and communicating what the team is striving to accomplish.");
				break;
			case "tf2":
				tools.push("Roles and Accountabilities Matrix(RACI)");
				tools.push("Clarifying Roles");
				tool_descriptions.push("To clarify team roles and accountabilities in a detailed manner. This matrix will help the team delineate specific responsibilities associated with each role involved in the project.");
				tool_descriptions.push("To clarify individual roles by allowing team member articulate their role on the team, how they are dependent on others to be successful, and their working style.");
				break;
			case "tf3":
				tools.push("Team Launch");
				tools.push("Operating Norms");
				tools.push("Guidelines for Effective Decision Making");
				tools.push("Meeting Management");
				tools.push("Working With Virtual Teams");
				tools.push("Teleconferencing Tips for Effective Meetings");

				tool_descriptions.push("To help the team get a smooth start right up front. Provides the team with an aligned starting place around objectives, purpose, scope, goals, roles, expectations and deliverables.");
				tool_descriptions.push("To help teams create operating norms to guide team communications, meeting management, decision making, conflict management, etc.");
				tool_descriptions.push("To make more effective decisions and to prevent unnecessary rework of previously made decisions.");
				tool_descriptions.push("To prepare for and execute the meeting, and to conduct post-meeting follow-up.");
				tool_descriptions.push("Information to help manage the added complexity when meetings are conducted via teleconference or when the team is dispersed across different locations.");
				tool_descriptions.push("Reminders about how to conduct effective teleconferencing meetings");
				break;
			case "tf4":

				tools.push("Building your Working Relationships");
				tools.push("Team Effectiveness Check-in");
				tools.push("Giving and Receiving Feedback");

				tool_descriptions.push("To establish more effective working relationships with each other on the team.");
				tool_descriptions.push("To understand the impact of the team's behavior on the performance of the team and to discuss what behaviors need to stop, start and continue.");
				tool_descriptions.push("To understand how to provide constructive and effective individual feedback.");
				break;
			case "tf5":

				tools.push("Effective Team Leader Checklist");
				tools.push("New Leader Assimilation");
				tools.push("Establishing a Strong Co-Leader Relationship");
				tool_descriptions.push("To help team leaders assess their leadership abilities and determine their effectiveness as a team leader. Team members may also use this checklist to assess their own team leadership abilities.");
				tool_descriptions.push("To work together with the new leader to clarify objectives, directions and expectations, openly exchange views, and identify and provide recommendations.");
				tool_descriptions.push("To build a strong relationship between two co-leaders of a team.");
				break;
			case "tf6":

				tools.push("Stakeholder Analysis");
				tools.push("Effective Influencing");
				tools.push("Communications Plan");
				tool_descriptions.push("To identify and build the commitment of those persons or groups who have an interest (stake) in your team.");
				tool_descriptions.push("To help team members and team leaders build rapport and trust, and manage resistance with others, whom they have no direct control and formal agreement to cooperate, via effective influencing.");
				tool_descriptions.push("To build an effective communication strategy that enables the team to efficiently and effectively communicate to team members and external stakeholders.");
				break;

		}
		html="";
		html+="<table id='tableTools'>";
		html+=	"<tr>";
		html+=		"<th>Tool</th>";
		html+=		"<th>This Tool Helps Teams:</th>";
		html+=	"</tr>";


		for(var i=0; i<tools.length;i++){
			html+=	"<tr>";
			html+=		"<td class='colLeft'>" + tools[i] + "</td>";
			html+=		"<td class='colRight'>" + tool_descriptions[i] + "</td>";
			html+=	"</tr>";
		}

		
		html+="</table>";

		$("#dialog").html(html);

		var new_position=$("#dialog").offset();
		window.scrollTo(new_position.left, new_position.top);*/
	});
	/*
	$(".tool_button").click(function(){
		var btnId = $(this).attr("data-id");
		

		var btnTitle = $(this).find("p").html();
	//	console.log(btnTitle);

		//Would fetch relevant tools from database for popout with button id, but we can fake it for now

		var dlg = $("#dialog").dialog({
			height: "auto",
			width: 1000,
			title: btnTitle
		});

		//table contents
		var questions_addressed = new Array();
		var tools = new Array();
		var tooltip = "";

		//console.log(btnId);
		//simulate dynamic content by switching on button id
		switch(btnId){
			case "1":
				questions_addressed.push("Whats the value added or business case for doing team building?");
				//tools.push("");
				var t1 = {
					"tooltip":"This PowerPoint presentation is designed to allow someone to present the case for why teams should invest..",
					"title":"The Business Case For Team Building"
				};

				var t2 = {
					"tooltip":"This PowerPoint presentation is designed to allow someone to present the case for why teams should invest..",
					"title":"Recommended Articles, Books, and Research Papers on Team Building"
				};
				tools.push(t1);
				tools.push(t2);

				break;

			case "2":
				questions_addressed.push("Some sort of question that will be addressed with the tool on the right");
				questions_addressed.push("Another question to be answered");

				var t1 = {
					"tooltip":"tooltip",
					"title":"Nifty tool"
				};
				tools.push(t1);
				break;

			case "3":
				questions_addressed.push("some question to be answered");
				questions_addressed.push("some question to be answered 2");
				questions_addressed.push("some question to be answered 3");

				var t1 = {
					"tooltip":"tooltip",
					"title":"Generic Tool Name 1"
				};
				var t2 = {
					"tooltip":"tooltip",
					"title":"Generic Tool Name 2"
				};
				tools.push(t1);
				tools.push(t2);
				break;
		}

		var questionDiv ="";
		questionDiv += "<div class='questions_addressed'>";
		questionDiv += "	<ul>";
		for(var i=0; i<questions_addressed.length; i++){
			questionDiv+=	"<li>" + questions_addressed[i] + "</li>";
		}	
		questionDiv += "	</ul>";
		questionDiv += "</div>";
		//console.log(questionDiv);

		var toolDiv = "";
		toolDiv += "<div class='dialog_tools'>";
		toolDiv += 		"<ul>";
		for(var i=0; i<tools.length; i++){
			toolDiv+=	"<li title='"+tools[i].tooltip+"'>" + tools[i].title + "</li>";
		}	
		toolDiv += "	</ul>";
		toolDiv += "</div>";
		

		var html = "";
		html+="<table>";
		html+=	"<tr>";
		html+=		"<th>Questions Addressed by These Tools</th>";
		html+=		"<th>Tools</th>";
		html+=	"</tr>";
		html+=	"<tr>";
		html+=		"<td>" + questionDiv + "</td>";
		html+=		"<td>" + toolDiv + "</td>";
		html+=	"</tr>";
		html+="</table>";
	
		//console.log(html);

		dlg.html(html);


	})*/
});

function htmlEncode(value){

  //create a in-memory div, set it's inner text(which jQuery automatically encodes)
  //then grab the encoded contents back out.  The div never exists on the page.
  console.log($('<div/>').text(value).html());
  return $('<div/>').text(value).html();
}

function htmlDecode(value){
  return $('<div/>').html(value).text();
}