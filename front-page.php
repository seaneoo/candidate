<?php get_header() ?>

<div class="hero fp-jumbo" style="background-image: url('<?= (get_jumbo_img()) ? get_jumbo_img() : '' ?>')">
    <!-- Donate Bar -->
    <?php if (has_nav_menu('donate')) : ?>
        <?php wp_nav_menu(array(
            'theme_location' => 'donate',
            'container_class' => 'donate-bar',
            'menu_class' => 'donate-bar__btns'
        )) ?>
    <?php endif; ?>
</div>

<!-- WordPress content -->
<?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <?php the_content() ?>
<?php endwhile;
endif; ?>

<?php get_footer() ?>