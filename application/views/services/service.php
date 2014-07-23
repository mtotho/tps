<?php

switch($this->service){
	case "teamlaunches":
		$serviceTitle = "Team Launches";
		$serviceContent = "The consultants listed on this site are deeply skilled in designing and facilitating structured kick-off meetings to help teams hit the ground running, and accelerate their progress.  Team launches frequently include helping members understand the team&apos;s purpose and scope: clarifying team member expectations - goals, objectives and metrics; defining leader and team member roles, responsibilities and interdependencies; clarifying key processes for decision making, issue resolution, problem solving, communicating and managing meetings; deepening members&apos; understanding of each other; and beginning to build a climate of high engagement, collaboration and trust.";
		$serviceImage = URL."public/images/services/imgTeamLaunches.jpg";
		break;
		
	case "processimprovements":
		$serviceTitle = "Process Improvements";
		$serviceContent = "Consultants can help teams adopt and fine-tune their team processes and practices and adopt those that research indicates best enable teams to enhance their performance, meet their milestones and deliver exceptional results.  This may include processes and practices for how best to share documents, stay in touch, make decisions, resolve problems and conflicts, manage team meetings, document decisions and actions, use email or manage stakeholder relationships.";
		$serviceImage = URL."public/images/services/imgProcessImprovements.jpg";
		$imgClass = "ProcessImprovements";
		break;
		
	case "skillstraining":
		$serviceTitle = "Skills Training";
		$serviceContent = "TPS consultants offer a wide range of blended learning skill development courses and workshops to help team leaders and members address critical performance needs – leading virtual teams, decision making and problem solving, influencing and negotiations, conflict and issue resolution, motivation and engagement, rewards and recognition, enhancing creativity and innovation, stakeholder management, managing difficult conversations, and communication styles to name a few.  TPS consultants typically customize their offerings to fit your unique needs and interests.";
		$serviceImage = URL."public/images/services/imgSkills.jpg";
		break;
		
	case "teameiworkshops":
		$serviceTitle = "Team Emotional Intelligence Workshops";
		$serviceContent = "Two of the consultants listed on this website – Steve Wolff and Vanessa Druskat have researched and published extensively on the topic of Team Emotional Intelligence.  You can find their white papers and research articles in the TPS Resources tab.  They can provide workshops that teach the basics of team emotional intelligence and provide tools that team can use immediately to put these concepts into use.";
		$serviceImage = URL."public/images/services/imgTei.jpg";
		$imgClass="tei";
		break;
		
	case "teamcompetencies":
		$serviceTitle = "Team Competencies and Measures";
		$serviceContent = "Competencies that characterize top performing team leaders and team members can be a powerful tool for selecting, assessing, and developing top performing teams. TPS has identified consultants who are steeped in developing competency models, and, in implementing practical, team-based competency assessment and development processes and tools.  They can help you identify and develop the competencies that truly make a difference.";
		$serviceImage = URL."public/images/services/imgTeamCompetencies.jpg";
		break;
		
	case "lessonslearned":
		$serviceTitle = "Lessons Learned";
		$serviceContent = "Whether managing one project or overseeing multiple projects, the value of conducting meaningful lessons-learned meetings can be very powerful.  High performing teams take actions to facilitate team learning and improvement.  Doing so can make the difference between total project success and missing key milestones and project delays.  The consultants listed are all experienced at designing and facilitating processes and meeting to identify what’s working well and what needs to improve.";
		$serviceImage = URL."public/images/services/imgLessons.jpg";
		$imgClass = "LessonsLearned";
		break;
		
	case "teamleaderdev":
		$serviceTitle = "Team Leader Development";
		$serviceContent = "Consultants listed in this tab have a deep understanding of the competencies and best practices that leaders of top performing teams demonstrate.  They also are experienced and skilled executive coaches who can use a variety of tools and techniques to help team leaders identify and learn what they need to do to enhance their leadership effectiveness.";
		$serviceImage = URL."public/images/services/imgTeamLeader.jpg";
		break;
		
	case "assimilating":
		$serviceTitle = "Assimilating New Team Leaders";
		$serviceContent = "When a new leader joins a team, or when a team is just starting, team members often have concerns regarding the leader&apos;s expectations, management style and perceptions.  These concerns need to be addressed and clarified in order for the leader to get off to a good start and to allay any apprehensions that may exist.  The TPS consultants listed on this site are skilled at helping a new leader get up to speed, quickly promote a positive team climate, reduce apprehensions and establish an open flow of communication with members.";
		$serviceImage = URL."public/images/services/imgAssimilating.jpg";
		break;
		
	case "meetingdesign":
		$serviceTitle = "Meeting Design and Facilitation";
		$serviceContent = "The consultants listed are skilled at designing special meetings for kick-offs, vision/mission/values identification, planning and goal setting, role clarification, resolving difficult issues, technical and functional updates, milestone reviews, team development, skills training, etc.  Each brings a structured approach that will help you to clearly define your overall meeting objectives and desired outcomes, and, each of the sessions that comprise your meeting.  They are also experienced facilitators who will collaborate with you and others to deliver a meeting that&apos;s informative, engaging, impactful and fun.";
		$serviceImage = URL."public/images/services/imgMeetingDesign.jpg";
		break;
		
	case "teamassessments":
		$serviceTitle = "Assessing Team Performance";
		$serviceContent = "The consultants listed on this tab have worked with and studied top-performing teams for decades. They know what makes them successful. They also have a number of tools in their diagnostic tool kit.  For example, they are all certified in the team assessment tools featured on this website.  These surveys, in particular, enable teams to gauge how they are doing against those behaviors, practices and norms which research indicates drive high team performance. However, consultants can also conduct one-on-one interviews with team members and/or with key stakeholders, if a survey is not desired or needed.  They are also skilled at facilitating open, real-time discussions with team members to identify opportunities for improvement.";
		$serviceImage = URL."public/images/services/imgTeamAssessments.jpg";
		break;
}
?>
<div id="each_service">
	<h3><?php echo $serviceTitle ?></h3>
	
	<img src="<?php echo $serviceImage ?>" alt="serviceImage" />
	
	<div class="content_frame">
		<p>
	    <?php echo $serviceContent ?>
	    </p>
	</div>
	
	<div style="clear:both"></div>
	<hr />
	<a href="<?php echo URL ?>services">Back to Services</a>
</div><!--end each_service-->