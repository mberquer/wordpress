<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="site-header" class="<?php echo is_404() ? 'blue-header' : ''; ?>">
        <div class="logo">
            <?php if (is_404()) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/svg/logo2.svg" alt="ESGI">
                <span class="square"></span>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/svg/logo.svg" alt="ESGI">
                <span class="square"></span>
            <?php endif ?>

        </div>
        <div class="burger-menu" id="burger-menu">
            <?php if (is_404()) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/svg/menu-white.svg" alt="ESGI">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/svg/menu.svg" alt="ESGI">
            <?php endif ?>
        </div>
    </header>
    <nav class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-content">
            <div class="mobile-menu-top-bar">
                <div class="mobile-menu-top-bar-left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/png/logowhite.png" alt="ESGI" class="logo-white">
                    <p>Or try Search</p>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/svg/close.svg" class="close-menu" id="close-menu">
            </div>
            
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary_menu',
                        'container' => false,
                        'menu_class' => 'mobile-menu-list',
                    )
                );
            ?>
        </div>
    </nav>