<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class="hidden" hidden>
    <?php get_template_part( 'img/sprite-social.svg' ); ?>
</div>

	<header class="header">
            <div class="header-top">
                <div class="wrapper header-top__flex">
                    <div class="logo-header">
                        <picture>
                            <source srcset="<?php echo ale_get_option('moblogo'); ?>" media="(max-width: 660px)">
                            <source srcset="<?php echo ale_get_option('tabletlogo'); ?>" media="(max-width: 960px)">
                            <img src="<?php echo ale_get_option('sitelogo'); ?>"/>
                        </picture>
                    </div>
                    <nav class="nav main-nav--closed main-nav--nojs">
                        <button class="nav-toggle" type="button"></button>
                        <div class="main-nav__wrapper">
                            <?php
                            if ( has_nav_menu( 'header_menu' ) ) {
                                wp_nav_menu(array(
                                    'theme_location'=> 'header_menu',
                                    'menu'			=> 'Header Menu',
                                    'menu_class'	=> 'nav-items',
                                    'walker'		=> new Aletheme_Nav_Walker(),
                                    'container'		=> '',
                                ));
                            }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>

	</header>


