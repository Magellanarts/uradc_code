<!doctype html>
<html></html>
<head>
    <title><?php the_field('page_title'); ?></title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <?php wp_head(); ?>
</head>
<body>
<nav class="c-mobile-navigation js-mobile-navigation">
    <?php
                      $menuParameters = array(
                       'container'       => false,
    'echo' => false,
    'items_wrap' => '%3$s',
    'depth' => 0,
    'theme_location' => 'primary'
    );

    echo strip_tags(wp_nav_menu( $menuParameters ), '
    <ul>
        <li><a>' );

            ?>
</nav>
<div class="l-site-wrapper js-site-wrapper">
<header class="c-site-header">
    <div class="l-content-container">
        <a href="<?php echo site_url(); ?>" class="c-site-logo"><img src="<?php echo get_template_directory_uri(); ?>/i/header-logo.svg"></a>

        <div class="c-nav-toggle js-mobile-nav-btn"></div>
    </div>
</header>