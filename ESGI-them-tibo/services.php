<?php
/*
Template Name: Services
*/
get_header();
get_template_part('template-parts/services');
?>
    <div class="corp-parties">
        <h2>Corp. Parties</h2>
        <p><?php echo get_theme_mod('service_corp', 'Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution. '); ?></p>
        <img src="<?php echo get_theme_mod("service_corp_image", get_template_directory_uri() . "/images/png/9.png"); ?>" alt="Corp">
    </div>
</div>

<?php get_footer(); ?>