<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<?php
	$app = JFactory::getApplication();
	$this->setTitle(  $app->getCfg( 'sitename' ) . ' - ' . $this->getTitle());
	?>
	<!-- Base CSS Stylesheet -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css">
	
	<!-- Dropdown menu CSS -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/dropdown/dropdown.css" media="screen" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/dropdown/theme.css" media="screen" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/dropdown/horizontal-centering.css" media="screen" type="text/css">
	
	<!-- Nivo-Slider -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
	$j = jQuery.noConflict();
    $j(window).load(function() {
		$j('#slider').nivoSlider({
			directionNav: false,
			controlNav: false
		});
    });
    </script>
	<jdoc:include type="head" />
</head>

<body>

	<!-- Header -->
	<div id="header-top" style="height: 90px; background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/headerbg.jpg'); background-repeat: repeat-x repeat-y;">
		
		<!-- Nivo Slider Images -->
		<div id="slider" class="nivoSlider" style="width: 980px; height: 90px; margin: auto;">
			<img src="/templates/westsenators/slider/toystory.jpg" data-thumb="/templates/westsenators/slider/toystory.jpg" alt="">
			<img src="/templates/westsenators/slider/walle.jpg" data-thumb="/templates/westsenators/slider/walle.jpg" alt="">
			<img src="/templates/westsenators/slider/nemo.jpg" data-thumb="/templates/westsenators/slider/nemo.jpg" alt="">
			<jdoc:include type="modules" name="banner" style="xhtml" />
		</div>
	</div>
	
	<!-- Navigation Menu -->
	<div id="header-main" style="height: 40px; background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/menubg.jpg'); background-repeat: repeat-x;">
		<div class="horizontal-centering"><div><div>
			<ul class="dropdown dropdown-horizontal">
				<jdoc:include type="modules" name="topmenu" style="xhtml" />
			</ul>
		</div></div></div>
	</div>

	<!-- Site Body -->
	<div id="sitebody" style="background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/bodybg.jpg'); background-repeat: repeat-x;" >
	<div id="wrapper" style="width: 980px; height: 700px; margin: auto; padding-top: 15px; background-color: white; background-image: url( '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/contentbg.jpg'); background-repeat: repeat-x;" >
	
		
	</div>
	</div>

	<!-- Footer -->
	<div id="footer" style="height: 30px; clear: both;">
		<jdoc:include type="modules" name="footer" style="xhtml" />
	</div>

</body>
</html>

<!--
<!-- Menu
<div id="menu-wrapper" style="width: 250px; float: left;">
	<div id="menu-top" style="height: 30px; background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/windowtopbg.jpg'); background-repeat: repeat-x; color: white;"></div>
	<div id="menu-main" style="height: 300px; padding: 10px; background-color: white; background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/contentbg.jpg'); background-repeat: repeat-x; border-bottom: 1px solid #D41;">
		<jdoc:include type="modules" name="leftmenu" headerLevel="3"/>
	</div>
</div>

<!-- Content window
<div id="content-wrapper" style="width: 715px; float: right;">
	<div id="content-top" style="height: 30px; background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/windowtopbg.jpg'); background-repeat: repeat-x;">&nbsp;</div>
	<div id="content-main" style="padding: 10px; background-color: white; background-image: url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/contentbg.jpg'); background-repeat: repeat-x; border-bottom: 1px solid #D41;">
		<jdoc:include type="component" />
	</div>
</div>
-->
