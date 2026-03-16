<?php
/**
 * The template for displaying archive pages
 */
get_header();
?>

<main id="primary" class="site-main">
    <header class="bg-brand-navy text-white py-20">
        <div class="container mx-auto px-4 md:px-8">
            <?php
            the_archive_title( '<h1 class="text-4xl md:text-5xl font-bold mb-4">', '</h1>' );
            the_archive_description( '<div class="text-xl text-gray-300 max-w-2xl">', '</div>' );
            ?>
        </div>
    </header>

    <div class="container mx-auto px-4 md:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition duration-300'); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="block h-56 overflow-hidden">
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover hover:scale-110 transition duration-500')); ?>
                            </a>
                        <?php endif; ?>
                        <div class="p-8">
                            <div class="text-xs font-bold text-brand-security uppercase tracking-wider mb-3">
                                <?php the_category(', '); ?>
                            </div>
                            <h2 class="text-2xl font-bold text-brand-navy mb-4">
                                <a href="<?php the_permalink(); ?>" class="hover:text-brand-security transition"><?php the_title(); ?></a>
                            </h2>
                            <div class="text-gray-600 mb-6 line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center font-bold text-brand-navy hover:text-brand-security transition">
                                Read More
                                <svg class="ml-2 w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>

        <div class="mt-16">
            <?php
            the_posts_pagination( array(
                'prev_text' => 'Previous',
                'next_text' => 'Next',
                'class'     => 'flex justify-center space-x-4',
            ) );
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
