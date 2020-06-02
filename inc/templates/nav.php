<nav id="top-nav" class="nav" role="navigation">
    <div class="navbar">
        <a class="site-brand" href="<?= get_site_url() ?>">
            <img class="site-logo" src="<?= get_logo_src() ?>" />
        </a>

        <div class="nav-items">
            <!-- Primary Menu -->
            <?php wp_nav_menu(array(
                'theme_location' => 'header',
                'container_class' => 'menu-container'
            )) ?>

            <!-- Social Media -->
            <?= social_media() ?>

            <!-- Donate (only show on scroll down) -->
            <a class="donate" href="<?= get_donation_url() ?>" target="_blank" rel="noopener noreferrer">Donate</a>
        </div>
    </div>
</nav>