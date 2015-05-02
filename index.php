<?php

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

$sitename = $app->get( 'sitename' );

// Include Header Information
$doc->addStyleSheet( 'templates/' . $this->template . '/css/simplegrid.css' );
$doc->addStyleSheet( 'templates/' . $this->template . '/css/style.css' );
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' );

// Load JQuery
//JHtml::_('jquery.framework');

$doc->addScriptDeclaration('

	/* Toggle mobile menu selections */
	jQuery(document).ready(function() {
		jQuery("#mobilemenu ul").children("li").each(function() {
			jQuery(this).click(function() {
				/* Hide everything */
				jQuery("#mobilemenu ul").children("li").not(this).children("ul").each(function() {
					jQuery(this).hide();
				});
			
				/* Toggle the currently clicked item */
				jQuery(this).children("ul").toggle();
			});
		});
	});
');

?><!DOCTYPE html>
<html>
<head>
<jdoc:include type="head" />
</head>

<body>
	<jdoc:include type="modules" name="notification" />

	<!-- HEADER SECTION -->
	<div id="header">
		<div class="grid">
			<!-- WNLS LOGO -->
			<div class="logo-full">
				<a href="/"><img src="/templates/westsenators/images/header-wp-logo.png" style="margin: 20px;"></a>
			</div>
			<div class="logo-mobile center">
				<a href="/"><img src="/templates/westsenators/images/header-wp-logo.png" style="margin: 20px;"></a>
			</div>
			<!-- Other stuff would go here -->
		</div>
		
		<!-- OTHER HEADER MODULES -->
		<jdoc:include type="modules" name="header" title="Header" />
	</div>
	
	<!-- MAINMENU -->
	<?php if($this->countModules( 'mainmenu' )) : ?>
	<div id="mainmenu">
		<jdoc:include type="modules" name="mainmenu" />
	</div>
	<?php endif; ?>
	
	<!-- MOBILEMENU -->
	<?php if($this->countModules( 'mobilemenu' )) : ?>
	<div id="mobilemenu">
		<jdoc:include type="modules" name="mobilemenu" />
	</div>
	<?php endif; ?>

	<!-- DROPSHADOW -->
	<div id="dropshadow"></div>

	<!-- CONTENT SECTION -->	
	<div id="content" class="grid">
		
		<?php if($this->countModules( 'user-top' )) : ?>
		<!-- TOP CONTENT SECTION -->
		<div class="grid grid-pad">
			<div class="col-1-1">
				<jdoc:include type="modules" name="user-top" style="xhtml" />
			</div>
		</div>
		<?php endif; ?>
		
		<div class="grid grid-pad">
			<!-- MAIN CONTENT SECTION -->
			<?php if($this->countModules( 'user-left' )) : ?>
			<div class="col-8-12 push-right">
				<jdoc:include type="component" />
			</div>

			<!-- LEFT CONTENT SECTION -->
			<div class="col-4-12">
				<jdoc:include type="modules" name="user-left" style="xhtml" />
			</div>	
			<?php else: ?>
			<div class="col-1-1">
				<jdoc:include type="component" />
			</div>
			<?php endif; ?>
		</div>
		
		<?php if($this->countModules( 'user-bottom' )) : ?>
		<!-- BOTTOM CONTENT SECTION -->
		<div class="grid grid-pad">
			<div class="col-1-1">
				<jdoc:include type="modules" name="user-bottom" style="xhtml" />
			</div>
		</div>
		<?php endif; ?>
	</div>
	
	<!-- FOOTER SECTION -->
	<div id="footer" class="grid">
		<div class="grid grid-pad">
			<div class="col-1-3 center">
				<img src="/templates/westsenators/images/wp-logo-small.png" alt="Porstmouth West logo" />
			</div>
			<div class="col-1-3 center">
				<address>
					Washington-Nile Local Schools<br>
					15332 US Hwy. 52<br>
					West Portsmouth, OH 45663<br>
				</address>
			</div>
			<div class="col-1-3 center">
				phone: (740)-858-1111<br>
				fax: (740)-858-1110<br>
			</div>
		</div>
	</div>
	<div id="copyright" class="grid">
		&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
	</div>

	<!-- DEBUG SECTION -->
	<jdoc:include type="modules" name="debug" />
</body>
</html>
