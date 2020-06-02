<?php if (true == get_theme_mod('alert_toggle')) : ?>
    <div id="top-alert" class="alert">
        <span id="top-alert__text" class="alert__text">
            <?= get_alert_text() ?>
        </span>
    </div>
<?php endif; ?>