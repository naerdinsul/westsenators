<?php

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Include CSS Stylesheets
$doc->addStyleSheet( $this->baseurl . '/templates/' . $this->template . '/css/style.css');
$doc->addStyleSheet( $this->baseurl . '/templates/' . $this->template . '/css/unsemantic-grid-responsive.css');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

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
</head>

<body>

	<!-- Header -->
	<div id="header-wrapper">
		<jdoc:include type="modules" name="header" style="xhtml" />
		<div id="header">
		<a href="/"><img src="/templates/westsenators/images/header-wp-logo.png" style="margin: 20px;"></a>
		</div>
	</div>
	
	<!-- Navigation Menu -->
	<jdoc:include type="modules" name="navmenu" style="xhtml" />
	<div id="navdropshadow"></div>
	
	<!-- Site Body -->
	<div id="sitebody" class="grid-container">
			<!-- Breadcrumb -->
			<div id="breadcrumb">
				<jdoc:include type="modules" name="breadcrumb" />
			</div>
			
			<!-- Content on Desktop -->
			<div class="hide-on-mobile">
				<div class="grid-25" style="min-height: 100px">
					<jdoc:include type="modules" name="leftmenu" />
				</div>
				
				<div class="grid-75" style="min-height: 100px">
					<jdoc:include type="component" />
				</div>
			</div>

			<!-- Content on Mobile -->
			<div class="hide-on-desktop">
				<div class="grid-100" style="min-height: 1000px">
					<jdoc:include type="component" />
					<jdoc:include type="modules" name="leftmenu" />
				</div>
			</div>
	</div>
	
	<!-- Footer -->
	<div id="footer" style="background: url(/templates/westsenators/images/bg-footer.png) repeat; border-top: 1px solid white; padding: 30px;">
	<div class="grid-container">
		<!--<jdoc:include type="modules" name="footer" style="xhtml" />-->
		<div class="grid-33 center">
			<img src="/templates/westsenators/images/header-wp-logo.png" alt="" />
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
			&copy;2014, Washington-Nile Local Schools
		</div>
	</div>
	</div>
</body>
</html>
