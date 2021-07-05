<footer class="footer inverse-wrapper">
    <div class="container inner">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h3><span style="color: white; font-family:Fira Code Retina; font-size:25px">morello</span></h3>
                    <div class="divide20"></div>
                    <p>temiz ve profesyonel bir tasarıma sahip duyarlı bir site şablonudur.</p>
                    <p>© 2021 Morello. Tüm Hakları saklıdır.</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Öne Çıkan Yazılar</h4>
                    <div class="divide20"></div>
                    <div style="text-overflow: ellipsis; overflow:hidden; height: 140px; ">
                        <ul class="post-list">
                            <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                                    <li>
                                        <div class="meta"><span class="date"><?php the_date(); ?></span> </div>
                                        <p> <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a> </p>
                                    </li>
                            <?php endwhile;
                            endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Bize Ulaşın</h4>
                    <div class="divide20"></div>
                    <ul class="info">
                        <li><i class="ion-ios-location"></i>
                            <p>Karanfil Sokak <br>
                                Kızılay, Ankara 06000<br>
                            </p>
                        </li>
                        <li><i class="ion-android-mail"></i>
                            <p><a href="mailto:hello@email.com" class="email-link">hello@morello.com</a></p>
                        </li>
                        <li><i class="ion-headphone"></i>
                            <p>90 (532) 000 00 00</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Hakkımızda</h4>
                    <div class="divide20"></div>
                    <ul class="list-unstyled">
                        <li> <a href="#">İletişim</a> </li>
                        <li> <a href="#">Gizlilik Politikası</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>