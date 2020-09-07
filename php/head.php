<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

<!-- Dynamic title tag -->
<?php echo Theme::headTitle(); ?>

<!-- Dynamic description tag -->
<?php echo Theme::headDescription(); ?>

<!-- Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- CSS: Styles for this theme -->
<?php echo Theme::css('css/main.css'); ?>
<noscript><?php echo Theme::css('css/noscript.css'); ?></noscript>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
