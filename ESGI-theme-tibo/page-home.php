<?php
/*
Template Name: Home
*/
get_header();
?>

<!-- Contenu spécifique en haut de la page d'accueil -->
<div class="home-intro">
    
    <div class="home-h1">
        <h1>A really professional structure</h1>
        <h1>for all your events!</h1>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/png/1.png" class="home-image">
</div>

<!-- Section About Us -->
<div class="home-about-us">
    <?php get_template_part('template-parts/about-us'); ?>
</div>

<!-- Section Services -->
<div class="home-services">
    <?php get_template_part('template-parts/services'); ?>
    <div class="corp-parties">
        <h2>Corp. Parties</h2>
        <p><?php echo esc_html(get_theme_mod('service_corp', 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. ')); ?></p>
        <img src="<?php echo esc_url(get_theme_mod("service_corp_image", get_template_directory_uri() . "/images/png/9.png")); ?>" alt="Corp">
    </div>
</div>

<!-- Section Partners -->
<div class="home-partners">
    <?php get_template_part('template-parts/partners'); ?>
</div>

<?php get_footer(); ?>
