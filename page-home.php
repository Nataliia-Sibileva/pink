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
            <?php $slider = ale_sliders_get_slider(ale_get_option('homesliderslug'));  ?>
            <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                            <?php if ($slide['image']) : ?>
                                <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" />
                            <?php endif; ?>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    </div>
</section>

<?php get_footer();

