<?php get_header() ?>

<div class="hero fp-jumbo" style="background-image: url('<?= (get_jumbo_img()) ? get_jumbo_img() : '' ?>')">
    <!-- Donate Bar -->
    <div class="donate-bar">
        <div class="donate-bar__btns">
            <a class="btn btn--red" href="">$5</a>
            <a class="btn btn--red" href="">$20.20</a>
            <a class="btn btn--red" href="">$50</a>
            <a class="btn btn--red" href="">$100</a>
            <a class="btn btn--red" href="">$250</a>
            <a class="btn btn--red" href="">$500</a>
            <a class="btn btn--red" href="">Other</a>
        </div>
    </div>
</div>

<!-- WordPress content -->
<?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <?php the_content() ?>
<?php endwhile;
endif; ?>

<?php get_footer() ?>