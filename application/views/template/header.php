<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Team Performance Solutions is a one-stop resource for trusted information and resources concerning high-performing teams." />		
	<meta name="keywords" content="consulting, team development, team consulting, team assessments" />
	<meta name="author" content="Team Performance Solutions" />
	
	<title><?php echo $this->data['page_title']?></title>
	
	<link rel="stylesheet" href="<?php echo site_url("public/js/fancyBox/source/jquery.fancybox.css?v=2.1.0") ?>" />
	
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


	<!--<link rel="stylesheet" href="<?php echo site_url("public/css/reset.css") ?>" />-->
	<link rel="stylesheet" href="<?php echo site_url("public/css/newstyle.css") ?>" />
	

	<!--
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<link type="text/css" href="<?php echo site_url("public/css/ui-lightness/jquery-ui-1.10.4.custom.css") ?>" rel="Stylesheet" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>-->
			

	
	<script type="text/javascript" src="<?php echo site_url("public/js/fancyBox/source/jquery.fancybox.pack.js?v=2.1.0") ?>"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="<?php echo site_url('public/js/api/Helper.js') ?>"></script>
	<script type="text/javascript" src="<?php echo site_url('public/js/api/ApiConnector.js') ?>"></script>				
	<script type="text/javascript" src="<?php echo site_url('public/js/site.js') ?>"></script>
	

	<?php
		if(isset($this->js)){
			
			foreach($this->js as $js){
				echo '<script type="text/javascript" src="'.site_url($js).'"></script>';
			}
		}
	 
	?>

</head>
<body>	
	<div class="container">
		<?php
			//Load Admin Bar if user is logged in
			if($this->session->userdata('valid')==1){
				$this->load->view('template/admin_bar');
			}
		?>
		
		
		<header>
			
			<div id="authPanel"></div>
			<a href="<?php echo site_url("#home") ?>"><img id="imgHeaderLogo" src="<?php echo site_url("public/images/headerLogo.png") ?>" alt="Team Performance Solutions"  border="none"/></a> 
            <h1>Team Performance Solutions&trade;</h1>
            <h2>Harnessing the power of teams</h2>
            
          	<!--
            	<p>(267)<span>-</span>614<span>-</span>3612</p>
                <p><a href="mailto:info@teamperformancesolutions.com" target="_blank">info@teamperformancesolutions.com</a></p>
             
			-->
         	
			<div class='clearfix'></div>
	
		</header>
		
			<ul class='nav nav-pills pull-right'>
				<li><a href="<?php echo site_url() ?>">Home</a></li>
				<li><a href="<?php echo site_url("about#about") ?>">About TPS</a></li>
				<li><a href="<?php echo site_url("services#services") ?>">Services</a></li>
				<li><a href="<?php echo site_url("assessments#assessments") ?>">Assessments</a></li>
				<li><a href="<?php echo site_url("resources") ?>">Resources</a></li>
				<li><a href="<?php echo site_url("toolkit") ?>">Toolkit (dev)</a></li>
				<li><a href="<?php echo site_url("contact") ?>">Contact Us</a></li>
			</ul>
			
			<div class='clearfix'></div>
		<div id="site_url" data-url="<?php echo site_url() ?>"></div>
		<div class="content">
		