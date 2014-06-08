<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<?php
	$app = JFactory::getApplication();
	$this->setTitle(  $app->getCfg( 'sitename' ) . ' - ' . $this->getTitle());
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/unsemantic-grid-responsive.css" type="text/css">

	<!-- Nivo Slider -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
	/*$j = jQuery.noConflict();
    $j(window).load(function() {
		$j('#slider').nivoSlider({
			directionNav: false,
			controlNav: false
		});
    });*/
    </script>
	
	<!-- JQuery functions -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#mobileNav').children('li').each(function() {
				$(this).click(function() {
					/* Hide everything */
					$('#mobileNav').children('li').not(this).children('ul').each(function() {
						$(this).hide();
					});
				
					/* Toggle the currently clicked item */
					$(this).children('ul').toggle();
				});
			});
		});
    </script>
	<jdoc:include type="head" />
</head>

<body>

	<!-- Header -->
	<div id="header-wrapper">
		<div id="header">
		<a href="/"><img src="/templates/westsenators/images/header-wp-logo.png" style="margin: 20px;"></a>
		</div>
		<!--<jdoc:include type="modules" name="banner" style="xhtml" />-->
	</div>
	
	<!-- Navigation Menu -->
	<jdoc:include type="modules" name="navmenu" style="xhtml" />
	<div id="navdropshadow"></div>
	
	<!-- Site Body -->
	<div id="sitebody" class="grid-container">
			<!-- Breadcrumb -->
			<div id="breadcrumb">
				<jdoc:include type="modules" name="breadcrumb" />
				<!--HOME | HIGHSCHOOL | ATHLETICS | BAND-->
			</div>
			
			
			<div class="hide-on-mobile">
				<div class="grid-25" style="height: 1000px"></div>
				<div class="grid-75" style="height: 1000px"></div>
			</div>
			<div class="hide-on-desktop">
				<div class="grid-100" style="height: 1000px"></div>
			</div>
		
		<!--<div class="clearfix" style="background-color: white">
		</div>-->
	</div>
	
	<!-- Footer -->
	<div id="footer" style="background: url(/templates/westsenators/images/bg-footer.png) repeat; border-top: 1px solid white; padding: 30px;">
	<div class="grid-container">
		<!--<jdoc:include type="modules" name="footer" style="xhtml" />-->
		<div class="grid-33 center">
			<img src="http://placekitten.com/g/100/100" alt="">
		</div>
		<div class="grid-33 center">
			<div>
			Washington-Nile Local Schools<br>
			15332 US Hwy. 52<br>
			West Portsmouth, OH 45663<br>
			</div>
		</div>
		<div class="grid-33 center">
			Jeff Stricklett, Superintendent<br>
			Sherry Patterson, Treasurer<br>
			phone: (740)-858-1111<br>
			fax: (740)-858-1110<br>
		</div>
	</div>
	<div class="grid-container">
		<div class="copyright">
			&copy;2014, Washinton-Nile Local Schools
		</div>
	</div>
	</div>
</body>
</html>
