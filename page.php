<?php get_header() ?>

<div class="hero" style="background-image: url('<?= (has_post_thumbnail()) ? get_the_post_thumbnail_url() : '' ?>')"> </div>

<!-- WordPress content -->
<?php if (have_posts()) : while (have_posts()) : the_post() ?>
                <?php the_content() ?>
<?php endwhile;
endif; ?>

<?php get_footer() ?>