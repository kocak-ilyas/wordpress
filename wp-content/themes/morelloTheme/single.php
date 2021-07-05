<?php get_header(); ?>
<div class="light-wrapper">
    <div class="container inner">
        <div class="blog classic-view row">
            <div class="col-sm-8 blog-content">
                <div class="blog-posts">
                    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                            <div class="post">
                                <div class="post-content">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <figure class="main"><img src="<?php the_post_thumbnail_url() ?>" alt="" /></figure>
                                    <?php endif; ?>
                                    <?php if (the_date()): ?>
                                    <div class="meta">
                                        <span class="date"><?php the_date(); ?><a href="#"><?php get_comments_number() ?> Yorum</a></span>
                                    </div>
                                    <?php endif; ?>
                                    <h3 class="post-title"><a href="blog-post.html"><?php the_title()  ?></a></h3>
                                    <p><?php the_content(); ?></p>
                                    <div class="divide20"></div>
                                    <div class="clearfix"></div>
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