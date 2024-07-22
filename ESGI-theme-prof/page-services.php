<?php
/*
Template Name: Services
*/
get_header();
?>

<main id="site-content">
    <div class="container">
        <h1>Our Services</h1>
        <div class="content">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
