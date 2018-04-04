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

<section class="info">
    <div class="info-head wrapper">
        <h2 class="info-head__quetion">Устали от серости мегаполиса?</h2>
        <h2>Нам есть, что вам предложить!</h2>
    </div>
    <div class="info-main">
        <div class="wrapper info-main__flex">
            <div class="info-img">
                <img src="<?php echo ale_get_option('mobgrey'); ?>"/>
            </div>
            <div class="info-img">
                <img src="<?php echo ale_get_option('mobpink'); ?>"/>
            </div>
            <div class="info-img">
                <img src="<?php echo ale_get_option('mobsmile'); ?>"/>
            </div>
            <div class="info-body">
                <div class="info-text">
                    <h3>Поднимает настроение</h3>
                    <p>Приложение позволит вам победить осеннюю хандру и депрессию буквально в несколько кликов!</p>
                </div>
                <div class="info-text">
                    <h3>Меняет мир вокруг</h3>
                    <p>Сделайте снимок и украсьте его смайликом или текстовой подписью, чтобы усилить эффект</p>
                </div>
                <div class="info-text">
                    <h3>Заводит новых друзей</h3>
                    <p>Ставьте лайки, комментируйте, делитесь фотографиями с друзьями и заводите новых</p>
                </div>

            </div>
        </div>
    </div>
    <div class="info-effect">
        <div class="info-effect__flex">
            <div class="effect-img"></div>
            <div class="effect-text">
                <h3>Эффект на 24 часа!</h3>
                <p>Британские ученые провели исследования и доказали,
                    что положительный эффект от использования приложения длится целые сутки!</p>
                <a>Узнать больше об исследовании</a>
            </div>
        </div>
    </div>



</section>


<section class="slide-reviews">
    <div class="wrapper">
        <div class="slide-rs">
            <ul class="slides">
            <?php $slider = ale_sliders_get_slider(ale_get_option('slidersrw'));  ?>
            <?php if($slider):?>
                <?php foreach ($slider['slides'] as $slide) : ?>
                    <li>
                        <figure>
                            <?php if ($slide['image']) : ?>
                                <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['title']; ?>" />
                            <?php endif; ?>
                            <?php if($slide['title'] or $slide['description'] or $slide['html']){ ?>
                                <div class="sliderw-text">
                                    <?php if($slide['title']){ echo '<p class="reviews-autor">'.$slide['title'].'</p>'; } ?><br />
                                    <?php if($slide['html']){ echo '<p class="reviews-years">'.$slide['html'].'</p>'; } ?><br />
                                    <?php if($slide['description']){ echo '<p class="reviews-text">'.$slide['description'].'</p>'; } ?><br />
                                </div>
                            <?php } ?>
                        </figure>
                    </li>
                <?php endforeach; ?>
            <?php endif;?>
            </ul>
        </div>
    </div>
</section>

<?php get_footer();

