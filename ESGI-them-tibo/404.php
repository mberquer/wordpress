<?php
get_header();
?>

<main id="error-content">
    <section class="error-section">
        <h1><?php esc_html_e('404 Error.', 'esgi-theme'); ?></h1>
    
        <article>
            <p><?php esc_html_e("The page you were looking for couldn't be found. Maybe try a search?", 'esgi-theme'); ?></p>
            <?php get_search_form(); ?>
        </article>
    </section>
</main>

<?php
get_footer();
?>