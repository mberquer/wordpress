<div class="our-services">
    <h1>Our Services</h1>
    <div class="services-container">
        <?php for ($i = 1; $i <= 4; $i++): ?>
            <div class="service-item">
                <img src="<?php echo get_theme_mod("service_image_$i", get_template_directory_uri() . "/images/png/service$i.png"); ?>">
            </div>
        <?php endfor; ?>
    </div>
</div>
