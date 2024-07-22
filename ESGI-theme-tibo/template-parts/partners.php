<div class="partners-content">
    <h1>Our Partners.</h1>
    <div class="partners-images">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="partner-item">
                <img src="<?php echo get_theme_mod("partner_logo_$i", get_template_directory_uri() . "/images/png/partner$i.png"); ?>" alt="Partner <?php echo $i; ?>">
            </div>
        <?php endfor; ?>
    </div>
</div>
