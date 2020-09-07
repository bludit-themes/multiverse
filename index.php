<!DOCTYPE HTML>
<!--
	Multiverse by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<head>
		<?php include(THEME_DIR_PHP.'head.php'); ?>
	</head>
	
	<body class="is-preload">

		<!-- Wrapper -->
		
			<div id="wrapper">

				<!-- Header -->
				
					<header id="header">
						<h1><a href="<?php echo $site->url() ?>"><strong><?php echo $site->title(); ?><strong></h1>
						
						<nav>
						
							<ul>
								
								<li><a href="#footer" style="padding: 0 1.65em 0 0;"><?php $L->p('About') ?></a></li>

								<?php
								// Class name of the plugin
								$className = 'pluginTextarea';

								// Get the Plugin-Object
								$plugin = getPlugin($className);

								if (pluginActivated($className)) {
								?>

								<li><a href="#privacy" style="padding: 0 1.65em 0 0;"><?php echo $L->p('Privacy') ?></a></li>

								<?php } ?>

							</ul>
						
						</nav>
						
					</header>

				<!-- Main -->
				
					<div id="main">

						<?php foreach ($content as $page): ?>
							<article class="thumb">
								<a href="<?php echo $page->coverImage() ?>" class="image"><img src="<?php echo $page->coverImage() ?>" alt="" /></a>
								<h2><?php echo $page->title(); ?></h2>
								<?php echo $page->content(); ?>
							</article>
						<?php endforeach ?>

					</div>

				<!-- Footer -->
				
					<?php include(THEME_DIR_PHP.'footer.php'); ?>

			</div>

		<!-- Scripts -->
		

			<?php echo Theme::jquery(); ?>
			<?php echo Theme::js('js/jquery.min.js'); ?>
			<?php echo Theme::js('js/jquery.poptrox.min.js'); ?>
			<?php echo Theme::js('js/browser.min.js'); ?>
			<?php echo Theme::js('js/breakpoints.min.js'); ?>
			<?php echo Theme::js('js/util.js'); ?>
			<?php echo Theme::js('js/main.js'); ?>

		<!-- Load Bludit Plugins: Site Body End -->
		
			<?php Theme::plugins('siteBodyEnd'); ?>

	</body>
	
</html>
