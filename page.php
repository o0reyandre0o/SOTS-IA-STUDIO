<?php
/**
 * The template for displaying all pages
 */
get_header();
?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="bg-brand-navy text-white py-16 md:py-24">
                <div class="container mx-auto px-4 md:px-8">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4"><?php the_title(); ?></h1>
                    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs" class="text-sm text-gray-300">','</p>'); } ?>
                </div>
            </header>

            <div class="container mx-auto px-4 md:px-8 py-12 md:py-20">
                <div class="prose prose-lg max-w-none prose-slate prose-headings:text-brand-navy prose-a:text-brand-security">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'security-on-the-spot' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
