<?php get_header(); ?>
<div class="light-wrapper">
  <div class="container inner">
    <div class="thin">
      <p class="lead text-center">Morello <em>mobil uyumlu</em> düzenli ve efektiftir. Şirketiniz için güzel <em>çözümler</em> sunar.</p>
    </div>
    <!-- /.thin -->
    <div class="divide20"></div>
    <div class="row">
      <div class="col-sm-4 lp30 rp30 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.0s">
        <div class="icon icon-m bm20"><img src="style/images/icons/concept1.svg" alt="" /></div>
        <h4 class="mb-5">Professional Satış</h4>
        <div>
          <span>Yenilikçi çözümler.</span>
          <p>Etkileyici tasırımlar.</p>
        </div>
      </div>
      <!--/column -->
      <div class="col-sm-4 lp30 rp30 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="icon icon-m bm20"><img src="style/images/icons/concept2.svg" alt="" /></div>
        <h4>SEO-Uyumlu</h4>
        <p>Hertürlü Optimizasyona uygun tasarlanmıştır.</p>
      </div>
      <!--/column -->
      <div class="col-sm-4 lp30 rp30 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
        <div class="icon icon-m bm20"><img src="style/images/icons/concept8.svg" alt="" /></div>
        <h4>SOLİD</h4>
        <p>Anlaşılabilir, yenilenebilir ve güncellemeye açık bir özelliğe sahip.</p>
      </div>
      <!--/column -->

    </div>
    <!--/.row -->
  </div>

  <div class="light-wrapper">
    <div class="container inner">
      <div class="section-title">
        <h2>Blog Yazıları</h2>
      </div>
      <!-- /.section-title -->
      <div class="carousel-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="owl-posts blog-carousel">
          <?php if (have_posts()) : while (have_posts()) : the_post() ?>
          <div class="col-sm-6 col-md-4 grid-view"">
                <div class="post m-5">
                  <?php if (has_post_thumbnail()) : ?>
                    <figure class="main"><img src="<?php the_post_thumbnail_url() ?>" alt="logo" /></figure>
                  <?php
                  endif; ?>
                  <div class="box">
                    <div class="meta">
                      <?php if (the_date()) : ?>
                        <span class="date"><?php the_date(); ?> tarihinde </span>
                      <?php endif; ?>
                      <span class="comments"><a href="#"><?php get_comments_number() ?> 4 adet yorum var.</a></span>
                    </div>
                    <div class="post p-3" style="text-overflow: ellipsis; overflow:hidden; line-height: 1.3; height: 50px; font-size: 10px;">
                      <?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="more">Devamını oku...</a>
                  </div>
                </div>
                </div>
                <?php endwhile;
          endif; ?>
        </div>
        <!--/.carousel -->
      </div>
      <!--/.carousel-wrapper -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->

</div>
<!-- /.content-wrapper -->


<?php get_footer(); ?>