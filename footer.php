
    <footer class="main-footer <?php if(!is_page_template('page-home.php') and !is_page_template('template-about.php')){ echo 'border-top-footer'; } ?>">
        <div class="wrapper" >
            <div class="footer-top">
                <div class="logo-footer">
                    <img src="<?php echo ale_get_option('footerlogo'); ?>"/>
                </div>
                <div class="social">
                    <div class="social-block">
                        <a class="tw">
                            <svg shape-rendering="geometricPrecision" class="social-svg">
                                <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/img/sprite-social.svg' ) : '' ; ?>#twitter">"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="social-block">
                        <a class="fb">
                            <svg shape-rendering="geometricPrecision" class="social-svg">
                                <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/img/sprite-social.svg' ) : '' ; ?>#facebook">"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="social-block">
                        <a class="youtube">
                            <svg shape-rendering="geometricPrecision" class="social-svg">
                                <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/img/sprite-social.svg' ) : '' ; ?>#youtube">"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="developer">
                    <p>Разработано</p>
                    <svg shape-rendering="geometricPrecision" class="html-svg">
                        <use xlink:href="<?php echo is_customize_preview() ? esc_url( get_template_directory_uri() . '/img/sprite-social.svg' ) : '' ; ?>#html">"></use>
                    </svg>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>