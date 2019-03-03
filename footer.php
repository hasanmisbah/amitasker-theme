    </main>

    <footer id="footer-area">
        <div class="container">
            <div class="row">
                <?php 
                    $amiSidebars = ['footer-1', 'footer-2', 'footer-3', 'footer-4'];
                    foreach($amiSidebars as $amiSidebar) :
                        if (is_active_sidebar($amiSidebar)):
                            echo '<div class="col-12 col-sm-3 col-md-3 col-lg-3" role="complementary">';
                                dynamic_sidebar($amiSidebar);
                            echo '</div>';
                        endif;
                    endforeach;
                ?>
            </div><!-- end row -->

            <div class="footer-bottom">
                <div class="row">
                    <div class="col-12 col-md-8 col-sm-8 col-lg-8">
                        <div class="copyright">
                            <p>Copyright &copy; <?php bloginfo('name')?>, <?php bloginfo('description')?>. allright Reserved</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-sm-4 col-lg-4">
                        <div class="social">
                            <ul class="social-nav">
                                <li><a href="https://facebook.com<?php echo esc_html__(get_theme_mod('facebook_icon'), 'amitasker') ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com<?php echo esc_html__(get_theme_mod('twitter_icon'), 'amitasker') ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://instagram.com<?php echo esc_html__(get_theme_mod('instagram_icon'), 'amitasker') ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end container -->
    </footer>

    <?php wp_footer(); ?>
</body>
</html>