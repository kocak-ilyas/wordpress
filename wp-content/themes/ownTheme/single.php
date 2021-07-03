<?php get_header(); ?>

<div class="container pt-5 pb-5">
    <h1><?php the_title(); // sayfanın başlığı 
        ?></h1>

    <?php if (has_post_thumbnail()) : ?>
        <img class="img-fluid pt-5 pb-5" src=" <?php the_post_thumbnail_url(); ?>">
    <?php endif; ?>


    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <?php the_content(); // içerik 
            ?>
    <?php endwhile;
    endif ?>
<?php comments_template(); // yorumlar için 
        ?>

</div>
<?php get_footer(); ?>