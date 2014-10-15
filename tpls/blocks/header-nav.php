<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// get params
$sitename  = $this->params->get('sitename');
$slogan    = $this->params->get('slogan', '');
$logotype  = $this->params->get('logotype', 'text');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', 'templates/' . T3_TEMPLATE . '/images/logo.png') : '';
$logoimgsm = ($logotype == 'image' && $this->params->get('enable_logoimage_sm', 0)) ? $this->params->get('logoimage_sm', '') : false;

if (!$sitename) {
	$sitename = JFactory::getConfig()->get('sitename');
}

?>

<!-- HEADER -->
<header id="t3-header" class="container t3-header">

	<nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
		<div class="row">
			<!-- OFF CANVAS (col-xs-2)-->
			<?php if ($this->getParam('addon_offcanvas_enable')) : ?>
				<?php $this->loadBlock ('off-canvas') ?>
			<?php endif ?>
			<!-- //OFF CANVAS -->
			
			<div class="navbar-header col-xs-8 col-sm-3 col-md-2">
				<!-- LOGO -->
				<div class="<?php echo $logosize ?> logo">
					<div class="logo-<?php echo $logotype, ($logoimgsm ? ' logo-control' : '') ?>">
						<a href="<?php echo JURI::base(true) ?>" title="<?php echo strip_tags($sitename) ?>">
							<h1 class=""><?php echo $sitename ?></h1>
							<small class="site-slogan"><?php echo $slogan ?></small>
						</a>
					</div>
				</div>
				<!-- //LOGO -->
			</div>

			<!-- MAIN NAVIGATION -->
			<div class="col-sm-9 col-md-10">
				<div class="t3-navbar navbar-collapse collapse">
					<jdoc:include type="<?php echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') ?>" />
				</div>
			</div>
			<!-- //MAIN NAVIGATION -->

		</div>
	</nav>

</header>
<!-- //HEADER -->
