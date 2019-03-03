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
                            <img class="img-fluid" src="<?php echo esc_html__(get_theme_mod('team_left_images'), 'amitasker') ?>">
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
                                                <li class="seo"><?php echo esc_html__(get_theme_mod('skill_1_name'), 'amitasker') ?></li>
                                                <li class="smm"><?php echo esc_html__(get_theme_mod('skill_2_name'), 'amitasker') ?></li>
                                                <li class="web"><?php echo esc_html__(get_theme_mod('skill_3_name'), 'amitasker') ?></li>
                                                <li class="gfx"><?php echo esc_html__(get_theme_mod('skill_4_name'), 'amitasker') ?></li>
                                            </ul>
                                        </div>
                                    </div><!-- end legend area -->

                                    <div id="diagram">
                                        <div class="get">
                                            <div class="arc">
                                                <span class="text"><?php echo esc_html__(get_theme_mod('skill_1_name'), 'amitasker') ?></span>
                                                <input class="percent" type="hidden" value="<?php echo esc_html__(get_theme_mod('skill_1_value'), 'amitasker') ?>" />
                                                <input class="color" type="hidden" value="#0097aa" />
                                            </div>
                                            <div class="arc">
                                                <span class="text"><?php echo esc_html__(get_theme_mod('skill_2_name'), 'amitasker') ?></span>
                                                <input class="percent" type="hidden" value="<?php echo esc_html__(get_theme_mod('skill_2_value'), 'amitasker') ?>" />
                                                <input class="color" type="hidden" value="#f58d00" />
                                            </div>
                                            <div class="arc">
                                                <span class="text"><?php echo esc_html__(get_theme_mod('skill_3_name'), 'amitasker') ?></span>
                                                <input class="percent" type="hidden" value="<?php echo esc_html__(get_theme_mod('skill_3_value'), 'amitasker') ?>" />
                                                <input class="color" type="hidden" value="#00a9ec" />
                                            </div>
                                            <div class="arc">
                                                <span class="text"><?php echo esc_html__(get_theme_mod('skill_4_name'), 'amitasker') ?></span>
                                                <input class="percent" type="hidden" value="<?php echo esc_html__(get_theme_mod('skill_4_value'), 'amitasker') ?>" />
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
                    <?php 
                    $args = array(
                        'post_type' => array('team'),
                        'post_status' => array('publish'),
                        'nopaging' => true,
                        'order' => 'ASC',
                        'orderby' => 'menu_order',
                        'posts_per_page' => 4,
                    );
                        $member = new WP_Query($args);
                        if ($member->have_posts()) {
                            while ($member->have_posts()) {
                                $member->the_post();
                    ?>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                        <div class="team-member">
                            <div class="picture">
                                <img class="img-fluid" src="<?php echo get_field('image')['url'] ?>">
                            </div>
                            <div class="team-content">
                                <h3 class="name"><?php echo get_field('members_name') ?></h3>
                                <h4 class="title"><?php echo get_field('position') ?></h4>
                            </div>
                            <ul class="social">
                                <li><a href="<?php echo get_field('facebook_url') ?>" class="fab fa-facebook" aria-hidden="true"></a></li>
                                <li><a href="<?php echo get_field('twitter_url') ?>" class="fab fa-twitter" aria-hdiden="true"></a></li>
                                <li><a href="<?php echo get_field('github_profile') ?>" class="fab fa-github" aria-hidden="true"></a></li>
                                <li><a href="<?php echo get_field('linked_in') ?>" class="fab fa-linkedin" aria-hidden="true"></a></li>
                            </ul>
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
                </div><!-- end row -->
                <!-- end team member area -->
            </div><!-- end Container -->
        </section>
        <!-- end Our team Area -->