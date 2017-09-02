<?php
defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

$sitename = $app->get( 'sitename' );
$path = JURI::base( true ) . '/templates/' . $this->template;

// Include Header Information
$doc->addStyleSheet( $path . '/css/simplegrid.css' );
$doc->addStyleSheet( $path . '/css/style.css' );
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1' );

// Include extra Javascript
$doc->addScriptDeclaration('

	/* Toggle mobile menu selections */
	jQuery(document).ready(function() {
		jQuery(".mobile-horiznav ul").children("li").each(function() {
			jQuery(this).click(function() {
				/* Hide everything */
				jQuery(".mobile-horiznav ul").children("li").not(this).children("ul").each(function() {
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
	<?php if($this->countModules( 'notification' )) : ?>
	<!-- NOTIFICATION SECTION -->
	<jdoc:include type="modules" name="notification" />
	<?php endif; ?>

	<!-- HEADER SECTION -->
	<div class="header">
		<!-- WNLS LOGO -->
		<div class="grid">
			<div class="col-1-2">
				<a href="<?php JURI::base( true ) ?>"><img src="<?php echo $path ?>/images/dome-logo.png" alt="Portsmouth West Dome logo"></a>
			</div>
			<div class="col-1-2">
				<img id="header-secondary-image" src="<?php echo $path ?>/images/header-right.png" alt="Welcome to the ROCK!">
			</div>
		</div>
		
		<!-- OTHER HEADER MODULES -->
		<jdoc:include type="modules" name="header" title="Header" style="xhtml" />
	</div>

	<!-- DROPSHADOW -->
	<div class="dropshadow"></div>

	<!-- CONTENT SECTION -->	
	<div class="grid content">
		<?php if($this->countModules( 'user-banner' )) : ?>
		<!-- BANNER SECTION -->
		<jdoc:include type="modules" name="user-banner" style="xhtml" />
		<?php endif; ?>
		
		<?php if($this->countModules( 'user-top' )) : ?>
		<!-- TOP CONTENT SECTION -->
		<div class="grid-pad">
			<div class="col-1-1">
				<jdoc:include type="modules" name="user-top" style="xhtml" />
			</div>
		</div>
		<?php endif; ?>
		
		<div class="grid grid-pad">
			<?php
			// THREE-COLUMN LAYOUT WITH MODULES IN USER-LEFT AND USER-RIGHT
			if($this->countModules( 'user-left and user-right' )) : ?>
			<!-- LEFT CONTENT SECTION -->
			<div class="col-3-12">
				<jdoc:include type="modules" name="user-left" style="xhtml" />
			</div>

			<!-- MAIN CONTENT SECTION -->
			<div class="col-6-12">
				<jdoc:include type="component" />
			</div>

			<!-- RIGHT CONTENT SECTION -->
			<div class="col-3-12 push-right">
				<jdoc:include type="modules" name="user-right" style="xhtml" />
			</div>
			<?php
			// TWO COLUMN LAYOUT WITH MODULES IN ONLY USER-LEFT
			elseif($this->countModules( 'user-left' )) : ?>
			<!-- MAIN CONTENT SECTION -->
			<div class="col-8-12 push-right">
				<jdoc:include type="component" />
			</div>
			
			<!-- LEFT CONTENT SECTION -->
			<div class="col-4-12">
				<jdoc:include type="modules" name="user-left" style="xhtml" />
			</div>
			<?php
			// TWO COLUMN LAYOUT WITH MODULES IN ONLY USER-RIGHT
			elseif($this->countModules( 'user-right' )) : ?>
			<!-- MAIN CONTENT SECTION -->
			<div class="col-8-12">
				<jdoc:include type="component" />
			</div>
			
			<!-- RIGHT CONTENT SECTION -->
			<div class="col-4-12">
				<jdoc:include type="modules" name="user-right" style="xhtml" />
			</div>
			<?php
			// COLAPSE LEFT AND RIGHT COLUMN SINCE THERE ARE NO MODULES THERE
			else:
			?>
			<!-- MAIN CONTENT SECTION -->
			<div class="col-1-1">
				<jdoc:include type="component" />
			</div>
			<?php endif; ?>
		</div>

		<?php if($this->countModules( 'user-bottom' )) : ?>
		<!-- BOTTOM CONTENT SECTION -->
		<div class="grid-pad">
			<div class="col-1-1">
				<jdoc:include type="modules" name="user-bottom" style="xhtml" />
			</div>
		</div>
		<?php endif; ?>
	</div>
	
	<!-- FOOTER SECTION -->	
	<div class="grid footer">
		<?php if($this->countModules( 'footer' )) : ?>
		<div class="grid-pad col-1-1">
			<jdoc:include type="modules" name="footer" style="xhtml" />
		</div>
		<?php endif; ?>
		<div class="grid grid-pad">
			<div class="col-1-3 center"">
				<strong>Washington-Nile Local Schools</strong><br>
				15332 US Hwy. 52<br>
				West Portsmouth, OH 45663<br>
				<span class="phone-label">Phone:</span>(740)-858-1111<br>
				<span class="phone-label">Fax:</span>(740)-858-1110<br>
			</div>
			<div class="col-1-3 center">
				<img src="<?php echo $path ?>/images/wp-logo-small.png" alt="Porstmouth West WP logo">
			</div>
			<div class="col-1-3 center">
				<strong>Portsmouth West Elementary</strong><br>
				<span class="phone-label">Phone:</span>(740)-858-1116<br>
				<span class="phone-label">Fax:</span>(740)-858-1118<br><br>
				<strong>Portsmouth West Middle School</strong><br>
				<span class="phone-label">Phone:</span>(740)-858-6668<br>
				<span class="phone-label">Fax:</span>(740)-858-0331<br><br>
				<strong>Portsmouth West High School</strong><br>
				<span class="phone-label">Phone:</span>(740)-858-1103<br>
				<span class="phone-label">Fax:</span>(740)-858-3054<br><br>
			</div>
		</div>
	</div>
	<div class="grid copyright">
		&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
	</div>

	<?php if($this->countModules( 'debug' )) : ?>
	<!-- DEBUG SECTION -->
	<jdoc:include type="modules" name="debug" />
	<?php endif; ?>
</body>
</html>
