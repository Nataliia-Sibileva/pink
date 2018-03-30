<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
                        <img src="<?php echo ale_get_option('sitelogo'); ?>"/>
                    </div>
                    <nav class="nav">
                        <ul class="nav-items">
                            <li class="nav-item">
                                <a class="nav-link">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Фотографии</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Конкурс</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">HTML Academy</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

	</header>


