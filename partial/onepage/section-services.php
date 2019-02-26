        <!-- Services Area -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Our Services</h2>
                        </div><!-- End Section Title -->
                    </div>
                    <div class="col-12 col-sm-5 col-md-5 col lg-5">
                        <div class="service-top-left">
                            <img src="./assets/img/virtual-assistant.png" alt="virtual assistant" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-md-7 col-lg-7">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="single-service">
                                        <i class="fas fa-share-alt hvr-ripple-out"></i>
                                        <h4 class="service-title">Social Media management</h4>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="single-service">
                                        <i class="fas fa-search hvr-ripple-out"></i>
                                        <h4 class="service-title">Market Research</h4>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="single-service">
                                        <i class="fas fa-object-ungroup hvr-ripple-out"></i>
                                        <h4 class="service-title">Event Banner Design</h4>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="single-service">
                                        <i class="fab fa-wordpress hvr-ripple-out"></i>
                                        <h4 class="service-title">Blog Management</h4>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="single-service">
                                        <i class="fab fa-internet-explorer hvr-ripple-out"></i>
                                        <h4 class="service-title">Website Management</h4>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="single-service">
                                        <i class="fas fa-search-plus hvr-ripple-out"></i>
                                        <h4 class="service-title">SEO</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end Row -->
            </div><!-- end Container -->





            
            <div class="container-fluid" id="services-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center">
                                <h2>Social Media Services</h2>
                            </div><!-- End Section Title -->
                        </div>

                        <?php
                            // WP_Query arguments
                            $args = array(
                                'post_type' => array('service'),
                                'post_status' => array('publish'),
                                'nopaging' => true,
                                'order' => 'ASC',
                                'orderby' => 'menu_order',
                                'posts_per_page' => 6,
                            );
                            // The Query
                            $services = new WP_Query($args);

                            // The Loop
                            if ($services->have_posts()) {

                                while ($services->have_posts()) {
                                    $services->the_post();
                                    ?>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                            <div class="single-service-details">
                                                <span class="<?php echo get_field('services_icon')  ?>"></span>
                                                <h4><?php the_title() ?></h4>
                                                <p><?php the_excerpt() ?></p>
                                            </div>
                                        </div>

                                    <?php
                                }
                            } else {
                                echo '<p>' . esc_html_e('No Services Found', 'amitasker') . '</p>';
                            }

                            // Restore original Post Data
                            wp_reset_postdata();
                            ?>

                        <!-- <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="single-service-details">
                                <span class="lnr lnr-select"></span>
                                <h4>Social Media Strategy Development</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique commodi
                                    provident nisi voluptatum iure? Ducimus.</p>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Area -->