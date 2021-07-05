<footer class="footer inverse-wrapper">
    <div class="container inner">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">

                    <img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="" />

                    <div class="divide20"></div>
                    <p>is a responsive site template with a clean and professional design. A great solution for your business, portfolio, blog or any other purpose website.</p>
                    <p>© 2016 Morello. All rights reserved. Theme by <a href="http://elemisfreebies.com">elemis</a>.</p>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Popular Posts</h4>
                    <ul class="post-list">
                        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                                <li>
                                    <div class="meta"><span class="date"><?php the_date(); ?></span> </div>
                                    <p> <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a> </p>
                                </li>
                        <?php endwhile;
                        endif; ?>
                    </ul>
                    <!-- /.post-list -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Get in Touch</h4>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam.</p>
                    <ul class="info">
                        <li><i class="ion-ios-location"></i>
                            <p>Moon Street Light Avenue, 14/05 <br> Jupiter, JP 80630<br>
                            </p>
                        </li>
                        <li><i class="ion-android-mail"></i>
                            <p><a href="mailto:hello@email.com" class="email-link">hello@email.com</a></p>
                        </li>
                        <li><i class="ion-headphone"></i>
                            <p>00 (123) 456 78 90</p>
                        </li>
                    </ul>
                    <!-- /.info -->

                </div>
                <!-- /.widget -->

            </div>
            <!-- /column -->

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">About Us</h4>
                    <ul class="list-unstyled">
                        <li> <a href="#">Contact Us</a> </li>
                        <li> <a href="#">Terms of Use</a> </li>
                        <li> <a href="#">Privacy Policy</a> </li>
                    </ul>
                </div>
                <!-- /.widget -->
                <?php dynamic_sidebar() ?>

                <div class="widget">
                    <h4 class="widget-title">Elsewhere</h4>
                    <ul class="social">
                        <?php wp_nav_menu(
                            array(
                                "theme_location" => "footer-menu",
                                "menu_class" => "navigation",
                            )
                        ) ?>
                        <!-- <li> <a href="#"><i class="ion-social-rss"></i></a> </li> -->
                    </ul>
                </div>
                <!-- /.widget -->

            </div>
            <!-- /column -->

        </div>
        <!-- /.row -->

    </div>
    <!-- .container -->

</footer>
<!-- /footer -->
<?php wp_footer(); ?>
</body>

</html>