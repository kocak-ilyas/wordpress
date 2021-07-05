<?php get_header(); ?>
<div class="light-wrapper">
    <div class="container inner">
        <div class="blog grid-view col3">
            <div class="blog-posts">
                <div class="isotope row">
                    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                            <div class="col-sm-6 col-md-4 grid-view-post">
                                <div class="post">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <figure class="main"><img src="<?php the_post_thumbnail_url() ?>" alt="" /></figure>
                                    <?php
                                    endif; ?>
                                    <div class="box ">
                                        <div class="meta"><span class="date"><?php the_date(); ?></span><span class="comments"><a href="#"><?php get_comments_number() ?> Comments</a></span></div>
                                        <h3 class="post-title"><a href="blog-post.html"><?php the_excerpt(); ?> </a></h3>
                                        <a href="<?php the_permalink(); ?>" class="more">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- get_template_part("template-parts/content", "archive"); -->
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>