<div class="about-us-content">
    <h1>About Us.</h1>
    <div class="intro-section">
        <img src="<?php echo esc_url(get_theme_mod('intro_image', get_template_directory_uri() . '/images/png/public.png')); ?>" class="intro-image"/>
        <div class="intro-text">
            <h2><?php echo esc_html(get_theme_mod('intro_title', 'Sky’s the limit')); ?></h2>
            <p class="description">
                <?php echo esc_html(get_theme_mod('intro_description', 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.')); ?>
            </p>
        </div>
    </div>
    <div class="sections">
        <div class="about-us-image">
            <img src="<?php echo esc_url(get_theme_mod('about_us_image', get_template_directory_uri() . '/images/png/photo.png')); ?>"/>
        </div>
        <div class="sections-text">
            <div class="section">
                <h3>Who are we?</h3>
                <p><?php echo esc_html(get_theme_mod('about_us_who_we_are', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.')); ?></p>
            </div>
            <div class="section">
                <h3>Our vision</h3>
                <p><?php echo esc_html(get_theme_mod('about_us_vision', 'Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.')); ?></p>
            </div>
            <div class="section">
                <h3>Our mission</h3>
                <p><?php echo esc_html(get_theme_mod('about_us_mission', 'Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas. ')); ?></p>
            </div>
        </div>
    </div>
</div>
