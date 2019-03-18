        <!-- Start Home Area -->
        <section id="home" class="d-flex align-items-center">
            <div class="container">
                <div class="row home-content">
                    <div class="col-md-7 col-12 col-sm-7">
                        <div class="hero-text">
                            <h1><?php echo esc_html__(get_theme_mod('hero_text'), 'amitasker') ?> </h1>
                            <p> <?php echo esc_html__(get_theme_mod('hero_subtext'), 'amitasker') ?> </p>
                            <?php if(get_theme_mod('hero_link')) : ?>
                                <a href="<?php echo esc_html__(get_theme_mod('hero_link'), 'amitasker') ?>" class="hvr-underline-from-center btn btn-secondary btn-ami btn-lg"><?php echo esc_html__(get_theme_mod('hero_btn'), 'amitasker') ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-5 sm-5 col-12">
                        <div class="container">
                            <div class="row">
                                <?php 
                                    if (is_active_sidebar('home-right')):
                                        dynamic_sidebar('home-right');
                                    endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Area -->