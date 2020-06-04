<footer id="footer">
    <div class="disclaimer"> Paid for by Candidate for President </div>

    <!-- Footer Menu -->
    <?php if (has_nav_menu('footer')) : ?>
        <?php wp_nav_menu(array(
            'theme_location' => 'footer',
            'container_class' => 'footer-menu-container',
            'menu_class' => 'footer-menu'
        )) ?>
    <?php endif; ?>
    <!--  -->

    <span class="copyright"> © Copyright 2020. All rights reserved. </span>
</footer>