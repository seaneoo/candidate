<nav id="nav" class="navbar" role="navigation">
    <a class="navbar-brand" href="<?= get_site_url() ?>">
        <img src="<?= get_logo_src() ?>" />
    </a>
    <div class="navbar-sm">
        <a class="nav-btn-donate" href="<?= get_donation_url() ?>" target="_blank" rel="noopener noreferrer">Donate</a>
        <button class="navbar-toggler" type="button" onclick="toggleNav()">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="navbar-nav-wrapper collapsed">
        <span class="navbar-sm-close" onclick="toggleNav()"> <i class="fas fa-times"></i> </span>
        <?php if (has_nav_menu('header')) : ?>
            <?php wp_nav_menu(array(
                'theme_location' => 'header',
                'container' => 'ul',
                'menu_class' => 'navbar-nav',
                'item_class' => 'nav-item'
            )) ?>
        <?php endif; ?>
        <?php if (has_nav_menu('socials')) : ?>
            <?= get_social_media_html() ?>
        <?php endif; ?>
    </div>
</nav>