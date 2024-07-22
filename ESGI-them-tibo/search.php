<?php
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <header class="page-header">
            <h1 class="page-title">
                <?php printf( esc_html__( 'Search results for: %s', 'esgi-theme' ), '<span class="result-span">' . get_search_query() . '</span>' ); ?>
            </h1>
        </header><!-- .page-header -->

        <?php if ( have_posts() ) : ?>

            <div class="search-results-grid">
                <?php
                while ( have_posts() ) :
                    the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                            </h2>
                            <div class="entry-meta">
                                <span class="cat-links"><?php the_category(', '); ?></span>
                                <span class="posted-on"><?php the_time('F j, Y'); ?></span>
                            </div><!-- .entry-meta -->
                        </header><!-- .entry-header -->

                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-summary -->
                    </article><!-- #post-## -->

                <?php endwhile; ?>
            </div><!-- .search-results-grid -->

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <section class="no-results not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'esgi-theme' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'esgi-theme' ); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </section><!-- .no-results -->

        <?php endif; ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>