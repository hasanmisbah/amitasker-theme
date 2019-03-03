        <!-- About Area -->
        <section id="about">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>about us</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <img class="img-fluid" src="<?php echo esc_html__(get_theme_mod('about_images'), 'amitasker')?>" alt="">
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <p><?php echo esc_html__(get_theme_mod('about_text'), 'amitasker')?></p>
                        <div class="social">
                            <span class="h4">Follow us : </span>
                            <ul class="social-nav">
                                <li><a href="https://facebook.com/<?php echo esc_html__(get_theme_mod('facebook_icon'), 'amitasker') ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/<?php echo esc_html__(get_theme_mod('twitter_icon'), 'amitasker') ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://instagram.com/<?php echo esc_html__(get_theme_mod('instagram_icon'), 'amitasker') ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
            
            <div id="company-stats" class="container-fluid">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-3 col-12">
                            <div class="single-stats">
                                <span class="h2 counting"><?php echo esc_html__(get_theme_mod('clients_counts'), 'amitasker') ?></span>
                                <p class="lead">Happy Clients</p>
                            </div>
                        </div><!-- End Single stats -->

                        <div class="col-md-3 col-sm-3 col-12">
                            <div class="single-stats">
                                <span class="h2 counting"><?php echo esc_html__(get_theme_mod('project_counts'), 'amitasker') ?></span>
                                <p class="lead">Running projects</p>
                            </div>
                        </div><!-- End Single stats -->

                        <div class="col-md-3 col-sm-3 col-12">
                            <div class="single-stats">
                                <span class="h2 counting"><?php echo esc_html__(get_theme_mod('project_complete'), 'amitasker') ?></span>
                                <p class="lead">Completed projects</p>
                            </div>
                        </div><!-- End Single stats -->

                        <div class="col-md-3 col-sm-3 col-12">
                            <div class="single-stats">
                                <span class="h2 counting"><?php echo esc_html__(get_theme_mod('project_success'), 'amitasker') ?>%</span>
                                <p class="lead">Success Rate</p>
                            </div>
                        </div><!-- End Single stats -->

                    </div><!-- end Row -->
                </div><!-- end container -->
            </div><!-- end Company Stats -->
        </section>
        <!-- end About area -->