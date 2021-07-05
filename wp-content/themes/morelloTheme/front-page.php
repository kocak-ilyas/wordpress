<?php get_header(); ?>

<div class="rev_slider_wrapper">
  <div id="slider1" class="rev_slider" data-version="5.0">
    <ul>

      <li data-transition="fade">
        <img src="style/images/art/slider-bg1.jpg" alt="">
        <div class="tp-caption large" data-x="480" data-hoffset="" data-y="center" data-voffset="-55" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap;">Buraya Slider Resimleri gelecek
        </div>
        <div class="tp-caption medium" data-x="480" data-hoffset="" data-y="center" data-voffset="0" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 9; white-space: nowrap;">
          Make a <em>difference</em> using Morello.
        </div>
        <div class="tp-caption" data-x="482" data-hoffset="" data-y="center" data-voffset="['65','65','65','90']" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 30px; line-height: 30px;">
          <a href="#" class="btn btn-large">Purchase Now</a>
        </div>
      </li>

    </ul>
    <div class="tp-bannertimer tp-bottom"></div>
  </div>
</div>


<div class="light-wrapper">
  <div class="container inner">
    <div class="thin">
      <p class="lead text-center">Morello <em>mobil uyumlu</em> düzenli ve efektiftir. Şirketiniz için güzel <em>çözümler</em> sunar.</p>
    </div>
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
      <div class="col-sm-4 lp30 rp30 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="icon icon-m bm20"><img src="style/images/icons/concept2.svg" alt="" /></div>
        <h4>SEO-Uyumlu</h4>
        <p>Hertürlü Optimizasyona uygun tasarlanmıştır.</p>
      </div>
      <div class="col-sm-4 lp30 rp30 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
        <div class="icon icon-m bm20"><img src="style/images/icons/concept8.svg" alt="" /></div>
        <h4>SOLİD</h4>
        <p>Anlaşılabilir, yenilenebilir ve güncellemeye açık bir özelliğe sahip.</p>
      </div>
    </div>
  </div>

  <div class="light-wrapper">
    <div class="container inner">
      <div class="section-title">
        <h2>Blog Yazıları</h2>
      </div>
      <div class="carousel-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="owl-posts blog-carousel">
          <?php if (have_posts()) : while (have_posts()) : the_post() ?>
              <div class="grid-view">
                <div class="post m-3">
                  <?php if (has_post_thumbnail()) : ?>
                    <figure class="main"><img class="img-fluid p-5 m-5" src="<?php the_post_thumbnail_url("small") ?>" alt="logo" /></figure>
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
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>