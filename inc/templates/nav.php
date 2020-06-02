<nav id="top-nav" class="nav" role="navigation">
    <div class="navbar">
        <a class="site-brand" href="<?= get_site_url() ?>">
            <img class="site-logo" src="<?= get_logo_src() ?>" />
        </a>

        <div class="nav-items">
            <!-- Primary Menu -->
            <?php if (has_nav_menu('header')) : ?>
                <?php wp_nav_menu(array(
                    'theme_location' => 'header',
                    'container_class' => 'header-menu-container',
                    'menu_class' => 'header-menu'
                )) ?>
            <?php endif; ?>

            <!-- Social Media -->
            <?php if (has_nav_menu('socials')) : ?>
                <?= get_social_media_html() ?>
            <?php endif; ?>

            <!-- Donate (only show on scroll down) -->
            <a class="donate" href="<?= get_donation_url() ?>" target="_blank" rel="noopener noreferrer">Donate</a>
        </div>
    </div>
</nav>