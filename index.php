<?php

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

$sitename = $app->get( 'sitename' );

// Include Header Information
$doc->addStyleSheet( 'templates/' . $this->template . '/css/style.css' );
$doc->addStyleSheet( 'templates/' . $this->template . '/css/unsemantic-grid-responsive.css' );
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' );

?><!DOCTYPE html>
<html>
<head>
<jdoc:include type="head" />
</head>

<body>
	<jdoc:include type="modules" name="notification-position" />

	<div id="header-wrapper">
		<div id="header" >
			<a href="/"><img src="/templates/westsenators/images/header-wp-logo.png" style="margin: 20px;"></a>
		</div>
		<jdoc:include type="modules" name="header-position" title="Header" />
	</div>

	<div id="navdropshadow"></div>
	
	<!-- Site Body -->	
	<div id="sitebody" class="grid-container">

			<jdoc:include type="modules" name="top-position" />
			
			<!-- Content on Desktop -->
			<div class="grid-25" style="min-height: 100px">
				<jdoc:include type="modules" name="left-position" />
			</div>
			
			<div class="grid-75" style="min-height: 100px">
				<jdoc:include type="component" />
			</div>
			
			<!-- Footer -->
			<div id="footer" style="background-color: rgb(58, 58, 58); color: white; clear:both; margin: 0 -10px;">
			
				<div style="width: 50%">
					<div style="padding: 10px; float: left"><img src="/templates/westsenators/images/wp-logo-small.png"></div>
					<div style="width: 33.333%; float: left">
						Washington-Nile Local Schools<br>
						15332 US Hwy. 52<br>
						West Portsmouth, OH 45663<br>
					</div>
					<div style="width: 33.333%; float: left">
						Phone: (740)-858-1111<br>
						Fax: (740)-858-1110<br>
					</div>
				</div>
			
			
			
			<!--	<div class="grid-container" style="padding: 30px 0px;">
					<jdoc:include type="modules" name="bottom-position" />
					<div class="grid-50 center">
						<img src="/templates/westsenators/images/header-wp-logo.png" alt="" />
					</div>
					<div class="grid-50 center">
						<address>
						Washington-Nile Local Schools<br>
						15332 US Hwy. 52<br>
						West Portsmouth, OH 45663<br>
						phone: (740)-858-1111<br>
						fax: (740)-858-1110<br>
						</address>
					</div>
				</div> -->
				<div class="grid-container" style="background-color: rgb(23, 23, 23); clear: both;">
					<div class="copyright">
						&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
					</div>
				</div>
			</div>
	</div>
	
	
	
	
	<jdoc:include type="modules" name="debug-position" />
</body>
</html>
