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
                        <?php 
                            $args = array(
                                'post_type' => array('Testimonial'),
                                'post_status' => array('publish'),
                                'nopaging' => true,
                                'order' => 'ASC',
                                'orderby' => 'menu_order',
                                'posts_per_page' => 9
                            );
                            $testimonial = new WP_Query($args);
                        ?>
                        <?php
                            if ($testimonial->have_posts()) {
                                while ($testimonial->have_posts()) {
                                    $testimonial->the_post();
                        ?>
                            <figure class="testimonial">
                                <figcaption>
                                    <blockquote>
                                        <p><?php echo get_field('feedback_messages')  ?></p>
                                    </blockquote>
                                    <h3><?php echo get_field('feedback_given_by')  ?></h3>
                                    <h4><?php echo get_field('comapny_name')  ?></h4>
                                </figcaption>
                            </figure>
                            <?php
                                }
                            } else {
                                echo '<p>' . esc_html_e('No Testimonial Found', 'amitasker') . '</p>';
                            }

                            // Restore original Post Data
                            wp_reset_postdata();
                            ?>
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