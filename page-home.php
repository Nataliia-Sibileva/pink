<?php
/*
  * Template name: Home
  * */
get_header(); ?>

<section class="home-slide">
    <div class="wrapper slide">
        <div class="slide-text">
            <h1>Взгляните на жизнь иначе!</h1>
            <a>Скачать приложение</a>
            <div class="systems">
                 <svg shape-rendering="geometricPrecision" class="operating-system apple">
                     <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/img/sprite-social.svg' ) : '' ; ?>#apple">"></use>
                 </svg>
                <svg shape-rendering="geometricPrecision" class="operating-system">
                    <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/img/sprite-social.svg' ) : '' ; ?>#android">"></use>
                </svg>
                <svg shape-rendering="geometricPrecision" class="operating-system">
                    <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/img/sprite-social.svg' ) : '' ; ?>#windows">"></use>
                </svg>

            </div>
            <p class="slide-p">Доступно для iPhone, iPad, Android, Windows Phone, OS X, Windows 8</p>
        </div>
        <div class="slide-image">
            <img src="<?php echo ale_get_option('iphone'); ?>"/>
        </div>
    </div>
</section>

<?php get_footer();

