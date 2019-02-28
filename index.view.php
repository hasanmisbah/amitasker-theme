        <!-- Start Home Area -->
        <section id="home" class="d-flex align-items-center">
            <div class="container">
                <div class="row home-content">
                    <div class="col-md-7 col-12 col-sm-7">
                        <div class="hero-text">
                            <h1><?php echo esc_html__(get_theme_mod('hero_text'), 'amitasker') ?> </h1>
                            <p> <?php echo esc_html__(get_theme_mod('hero_subtext'), 'amitasker') ?> </p>
                            <a href="<?php echo esc_html__(get_theme_mod('hero_link'), 'amitasker') ?>" class="hvr-underline-from-center btn btn-secondary btn-ami btn-lg"><?php echo esc_html__(get_theme_mod('hero_btn'), 'amitasker') ?></a>
                        </div>
                    </div>
                    <div class="col-md-5 sm-5 col-12">
                        <img class="img-fluid" src="<?php echo esc_html__(get_theme_mod('hero_images'), 'amitasker')?>">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Area -->


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
                                <li><a href="https://twitter.com/<?php echo esc_html__(get_theme_mod('facebook_icon'), 'amitasker') ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://instagram.com/<?php echo esc_html__(get_theme_mod('facebook_icon'), 'amitasker') ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
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
        <?php
            require_once get_template_directory(). '/partial/onepage/section-services.php';
        ?>
        <!-- Packages area -->
        <section id="packages">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Our Packages</h2>
                        </div><!-- End Section Title -->
                    </div>

                    <!-- single Packages -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="single-package">
                            <h2 class="package-title">Basic</h2>
                            <span>Facebook Page Management</span>
                            <ul class="package-item">
                                <li>Professionally crafted contents</li>
                                <li>Customer targeting analysis</li>
                                <li>Custom graphics creation</li>
                                <li>Engage broader audience</li>
                                <li>Specific campaigns</li>
                                <li>Build brand awareness</li>
                                <li>Response and chat</li>
                                <li>Monitor campaigns</li>
                            </ul>
                            <a href="#" class="btn btn-ami btn-primary">Choose Plan</a>
                        </div>
                    </div><!-- Single Package -->

                    <!-- single Packages -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="single-package">
                            <h2 class="package-title">Ultimate</h2>
                            <span>Facebook, twitter and instagram</span>
                            <ul class="package-item">
                                <li>Professionally crafted contents</li>
                                <li>Customer targeting analysis</li>
                                <li>Custom graphics creation</li>
                                <li>Engage broader audience</li>
                                <li>Specific campaigns</li>
                                <li>Build brand awareness</li>
                                <li>Response and chat</li>
                                <li>Monitor campaigns</li>
                            </ul>
                            <a href="#" class="btn btn-ami btn-primary">Choose Plan</a>
                        </div>
                    </div><!-- Single Package -->

                    <!-- single Packages -->
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="single-package">
                            <h2 class="package-title">Platinum</h2>
                            <span>All Of Social Media and one addons</span>
                            <ul class="package-item">
                                <li>Professionally crafted contents</li>
                                <li>Customer targeting analysis</li>
                                <li>Custom graphics creation</li>
                                <li>Engage broader audience</li>
                                <li>Specific campaigns</li>
                                <li>Build brand awareness</li>
                                <li>Response and chat</li>
                                <li>Monitor campaigns</li>
                            </ul>
                            <a href="#" class="btn btn-ami btn-primary">Choose Plan</a>
                        </div>
                    </div><!-- Single Package -->
                </div><!-- end row -->
            </div>
            <div class="container-fluid" id="cta-package">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-9 col-md-9 col-lg-9">
                            <div class="cta-large">
                                <h2>Need Custom Packages?</h2>
                                <p>We also Offer custom Package for our customer needs, tell us and get your free
                                    quotes.</p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3 col-md-3 col-lg-3">
                            <div class="cta-btn">
                                <a href="#" class="btn btn-ami btn-primary">Contact US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Packages area -->

        <!-- Our team Area -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Our Team</h2>
                        </div><!-- End Section Title -->
                    </div>
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="team-top">
                            <img class="img-fluid" src="./assets/img/team.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="team-top">
                            <h3>Skilled Team of Creators</h3>
                            <div class="skill-bar">
                                <div class="skillgraph">
                                    <div class="legend">
                                        <div class="skills">
                                            <ul>
                                                <li class="seo">SEO</li>
                                                <li class="smm">SMM</li>
                                                <li class="web">Web Design</li>
                                                <li class="gfx">Graphics Design</li>
                                            </ul>
                                        </div>
                                    </div><!-- end legend area -->

                                    <div id="diagram">
                                        <div class="get">
                                            <div class="arc"><span class="text">SMM</span>
                                                <input class="percent" type="hidden" value="80" />
                                                <input class="color" type="hidden" value="#0097aa" />
                                            </div>
                                            <div class="arc"><span class="text">SEO</span>
                                                <input class="percent" type="hidden" value="90" />
                                                <input class="color" type="hidden" value="#f58d00" />
                                            </div>
                                            <div class="arc"><span class="text">Web Design</span>
                                                <input class="percent" type="hidden" value="95" />
                                                <input class="color" type="hidden" value="#00a9ec" />
                                            </div>
                                            <div class="arc"><span class="text">Graphics Design</span>
                                                <input class="percent" type="hidden" value="98" />
                                                <input class="color" type="hidden" value="#d32c2c" />
                                            </div>
                                        </div>
                                    </div><!-- end diagram -->
                                </div><!-- end skill graph -->
                            </div><!-- end skill bar -->
                        </div><!-- end team top -->
                    </div><!-- end skill collumn -->
                </div><!-- end row -->

                <!-- team Member area -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Meet Our Awesome Team Members</h2>
                        </div><!-- End Section Title -->
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="team-member">
                            <div class="picture">
                                <img class="img-fluid" src="./assets/img/client1.png">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Michele Miller</h3>
                                <h4 class="title">Head of Idea</h4>
                            </div>
                            <ul class="social">
                                <li><a href="#" class="fab fa-facebook" aria-hidden="true"></a></li>
                                <li><a href="#" class="fab fa-twitter" aria-hdiden="true"></a></li>
                                <li><a href="#" class="fab fa-google-plus" aria-hidden="true"></a></li>
                                <li><a href="#" class="fab fa-linkedin" aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="team-member">
                            <div class="picture">
                                <img class="img-fluid" src="./assets/img/client2.png">
                            </div>
                            <div class="team-content">
                                <h3 class="name">John Doe</h3>
                                <h4 class="title">Web Developer</h4>
                            </div>
                            <ul class="social">
                                <li><a href="#" class="fab fa-facebook" aria-hidden="true"></a></li>
                                <li><a href="#" class="fab fa-twitter" aria-hdiden="true"></a></li>
                                <li><a href="#" class="fab fa-google-plus" aria-hidden="true"></a></li>
                                <li><a href="#" class="fab fa-linkedin" aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="team-member">
                            <div class="picture">
                                <img class="img-fluid" src="./assets/img/client1.png">
                            </div>
                            <div class="team-content">
                                <h3 class="name">Jane Doe</h3>
                                <h4 class="title">Cute Designer</h4>
                            </div>
                            <ul class="social">
                                <li><a href="#" class="fab fa-facebook" aria-hidden="true"></a></li>
                                <li><a href="#" class="fab fa-twitter" aria-hdiden="true"></a></li>
                                <li><a href="#" class="fab fa-google-plus" aria-hidden="true"></a></li>
                                <li><a href="#" class="fab fa-linkedin" aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="team-member">
                            <div class="picture">
                                <img class="img-fluid" src="./assets/img/client1.png">
                            </div>
                            <div class="team-content">
                                <h3 class="name">John Smith</h3>
                                <h4 class="title">Idea Machine</h4>
                            </div>
                            <ul class="social">
                                <li><a href="#" class="fab fa-facebook" aria-hidden="true"></a></li>
                                <li><a href="#" class="fab fa-twitter" aria-hdiden="true"></a></li>
                                <li><a href="#" class="fab fa-google-plus" aria-hidden="true"></a></li>
                                <li><a href="#" class="fab fa-linkedin" aria-hidden="true"></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end row -->
                <!-- end team member area -->
            </div><!-- end Container -->
        </section>
        <!-- end Our team Area -->
        <!-- start testimonial -->
        <section id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Testimonial</h2>
                        </div><!-- End Section Title -->
                    </div>
                </div>
            </div>
            <!-- Start testimonial slider -->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="testimonial-slider">
                            <figure class="testimonial">
                                <figcaption>
                                    <blockquote>
                                        <p>If you do the job badly enough, sometimes you don't get asked to do it
                                            again.</p>
                                    </blockquote>
                                    <h3>Wisteria Ravenclaw</h3>
                                    <h4>Google Inc.</h4>
                                </figcaption>
                            </figure>
                            <figure class="testimonial">
                                <figcaption>
                                    <blockquote>
                                        <p>If you do the job badly enough, sometimes you don't get asked to do it
                                            again.</p>
                                    </blockquote>
                                    <h3>Wisteria Ravenclaw</h3>
                                    <h4>Google Inc.</h4>
                                </figcaption>
                            </figure>
                            <figure class="testimonial">
                                <figcaption>
                                    <blockquote>
                                        <p>If you do the job badly enough, sometimes you don't get asked to do it
                                            again.</p>
                                    </blockquote>
                                    <h3>Wisteria Ravenclaw</h3>
                                    <h4>Google Inc.</h4>
                                </figcaption>
                            </figure>
                            <figure class="testimonial">
                                <figcaption>
                                    <blockquote>
                                        <p>If you do the job badly enough, sometimes you don't get asked to do it
                                            again.</p>
                                    </blockquote>
                                    <h3>Wisteria Ravenclaw</h3>
                                    <h4>Google Inc.</h4>
                                </figcaption>
                            </figure>
                            <figure class="testimonial">
                                <figcaption>
                                    <blockquote>
                                        <p>If you do the job badly enough, sometimes you don't get asked to do it
                                            again.</p>
                                    </blockquote>
                                    <h3>Wisteria Ravenclaw</h3>
                                    <h4>Google Inc.</h4>
                                </figcaption>
                            </figure>
                            <figure class="testimonial">
                                <figcaption>
                                    <blockquote>
                                        <p>If you do the job badly enough, sometimes you don't get asked to do it
                                            again.</p>
                                    </blockquote>
                                    <h3>Wisteria Ravenclaw</h3>
                                    <h4>Google Inc.</h4>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end testimonial slider -->

            <!-- client slider area -->
            <div class="container-fluid" id="client">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                            <div class="client-slider">
                                <div class="slide">
                                    <img class="img-fluid" src="./assets/img/brand/brand1.png" alt="">
                                </div>
                                <div class="slide">
                                    <img class="img-fluid" src="./assets/img/brand/brand2.png" alt="">
                                </div>
                                <div class="slide">
                                    <img class="img-fluid" src="./assets/img/brand/brand3.png" alt="">
                                </div>
                                <div class="slide">
                                    <img class="img-fluid" src="./assets/img/brand/brand4.png" alt="">
                                </div>
                                <div class="slide">
                                    <img class="img-fluid" src="./assets/img/brand/brand5.png" alt="">
                                </div>
                            </div><!-- end client slider -->
                        </div><!-- end Collumn -->
                    </div><!-- end Row -->
                </div><!-- end container -->
            </div><!-- end fluid cotainer -->
            <!-- end client slider srea -->
        </section>
        <!-- end testimonial Area -->

        <!-- start contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto text-center">
                        <h2>Contact us?</h2>
                        <div class="divider bg-primary mx-auto"></div>
                        <p class="text-muted lead">
                            We are looking forward to hear something from you?
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <form _lpchecked="1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Phone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Purposes">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea rows="5" class="form-control" placeholder="What are you looking for?"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-ami">Send your Messages</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contact Section -->