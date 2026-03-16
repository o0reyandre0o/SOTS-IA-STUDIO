<?php
/**
 * The template for displaying search results pages
 */
get_header();
?>

<main id="primary" class="site-main">
    <header class="bg-brand-navy text-white py-20 text-center">
        <div class="container mx-auto px-4 md:px-8">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'security-on-the-spot' ), '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
        </div>
    </header>

    <div class="container mx-auto px-4 md:px-8 py-16">
        <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition duration-300'); ?>>
                        <div class="p-8">
                            <h2 class="text-2xl font-bold text-brand-navy mb-4">
                                <a href="<?php the_permalink(); ?>" class="hover:text-brand-security transition"><?php the_title(); ?></a>
                            </h2>
                            <div class="text-gray-600 mb-6 line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="font-bold text-brand-security hover:underline">Read More →</a>
                        </div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>

            <div class="mt-16">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <div class="text-center py-20">
                <h2 class="text-2xl font-bold text-brand-navy mb-4">Nothing Found</h2>
                <p class="text-gray-600 mb-8">Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                <div class="max-w-md mx-auto">
                    <?php get_search_form(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
