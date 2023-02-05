<!doctype html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title(' | ',true, "right").bloginfo('name') ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<?php wp_head(); ?>
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	</head>
	<body>
		
		<nav class="py-2 bg-light border-bottom">

            <?php 
            wp_nav_menu(array(
                "menu" => "mfd-menu-superior", 
                "menu_class" => "nav me-auto", 
                "container_class" => "container d-flex flex-wrap",
                'list_item_class'  => 'nav-item',
                'link_class'   => 'nav-link link-dark px-2'
            )); 
            ?>
        </nav>
        <header class="py-3 mb-4 border-bottom">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="<?php get_home_url(); ?>" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4"><?php bloginfo('name'); ?></span>
                </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
                    <input type="search" class="form-control" placeholder="Procurar..." aria-label="Procurar">
                </form>
            </div>
        </header>
        <main class="container-fluid">