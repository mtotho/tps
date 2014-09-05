<script>
$(document).ready(function(){
	$(".toolkit_go").click(function(){
		console.log("derp");
		window.location = window.site_url + "toolkit/tools";
	});
});
</script>
<div id="toolkit_landing">
	<a name=""></a>
	<ol class="breadcrumb">
	  <li><a class="active">Overview</a></li>
	
	</ol>
	<div class='row'>

		<div class="col-md-3">
			<ul id="tool_nav" class="nav">
				<li><a href="#overview">Team Tools Overview</a></li>
				<li><a class="toolkit_go" href="#">Team Performance Tools</a></li>
				<li><a href="#purchasing">Purchasing and Tool Access</a></li>
			</ul>
		</div><!--end left column-->
		<div class="col-md-9 right_col">

			<div class="row">

				
				<h3>Team Performance Tools Overview</h3>
				<p> describe our framework of the 
fundamentals, three circles, research, putting the tools in context, purpose of 
tools, features, benefits, who uses, need to purchase, team roadmap </p>
				

			<p>Maecenas ullamcorper lectus non hendrerit luctus. Vestibulum facilisis erat in ullamcorper rutrum. Vivamus egestas metus in ornare tempus. Curabitur vitae consectetur felis. Integer pellentesque aliquam vulputate. In hac habitasse platea dictumst. Donec et feugiat enim, id feugiat lorem. Maecenas odio justo, pretium quis dolor eget, imperdiet eleifend quam. Etiam ac hendrerit risus, scelerisque auctor dolor. Phasellus ac tempus neque. Vestibulum faucibus purus enim, et rhoncus ante lacinia at. Donec tincidunt viverra justo, ut dictum arcu sodales finibus. Vestibulum hendrerit quam non tortor viverra commodo. Maecenas a congue urna. Vivamus dictum libero sit amet ipsum elementum pellentesque.</p>

			<p>Nullam non mauris maximus, egestas felis sit amet, rutrum eros. Integer orci risus, viverra quis congue vel, fermentum non eros. Ut porttitor convallis magna, at sagittis libero mattis a. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec eget eros a diam rhoncus commodo. Vestibulum et auctor magna, non consectetur diam. Donec vitae lectus ut arcu placerat molestie. Pellentesque egestas interdum sem nec lobortis. Curabitur maximus consequat dictum. Nam sed nibh at quam auctor aliquam vitae blandit orci. Nullam fringilla mi ut quam tincidunt feugiat.</p>
			
			
			</div>

		
			<div class="row">


				<a name="purchasing"></a>

				<h3>Purchasing Options</h3>
				<hr />
						<p>(THIS may get its own page)</p>
				<h4>Leasing Options</h4>
				<p>Here lie some options</p>

				<h4>Licensing Agreement</h4>
				<p>Here is our agreement</p>

				<h4>Payment Options</h4>
				<p>We offer a couple of ways to lease our tools</p>
				<ol>
					<li>Purchase Order</li>
					<li>Credit Card payment via Paypal</li>
				</ol>

				<h4>Membership</h4>
				<p>An individual may purchase a membership, or a team can purchase many memberships.</p>
				<p>A team leader can set up a team, purchase licenses for all the team members and distribute license codes so team members may register</p>
				<p>Team leaders will be able to manage team members, track downloads and see other statistics.</p>
				<p>If you are already a member you may login <a href="<?php echo site_url("login") ?>">here</a>.</p>
				

				
			</div>

		 	<a class="back_to_top" href="">Back to Top</a>
		</div><!--end right column-->
		

		<div class="clearfix"></div>
		
		
		<br />
	</div><!--end top row-->
</div>