<script>
$(document).ready(function(){


	$("#btnSignup").click(function(){
		window.location = window.site_url + "registration";
	})
});

</script>

<div id="home">
	
	<div id='row_product_info' class='row'>

		<div class="col-md-6"></div>
		<div class="col-md-6">
			<h3>Product</h3>
			<p>
Text about product. Text about product. Text 
about product. Text about product. Text about 
product. Text about product. Text about product. 
			</p>
		</div><!--end right column-->
		

	</div><!--end top row-->

	<div id="row_explore_tools" class='row'>

		<h4>Explore the Tools</h4>
		<div class="col-md-4">
			

				<p>Launch <br /> Your Team</p>
		</div>
		<div class="col-md-4">
			<p>Develop <br /> Your Team</p>
		</div>
		<div class="col-md-4">
			<p>Jumpstart <br /> Your Team</p>
		</div>


		<button id="btnSignup" type="button" class="btn btn-default btnCustom" ng-click="$location.path('registration')">Sign Up</button>
	</div>
	
</div><!--end: home-->
