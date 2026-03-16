<?php
/**
 * The template for displaying all single posts
 */
get_header();
?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="bg-brand-navy text-white py-20">
                <div class="container mx-auto px-4 md:px-8">
                    <div class="max-w-4xl">
                        <div class="flex items-center space-x-4 mb-6 text-sm text-gray-300">
                            <span><?php echo get_the_date(); ?></span>
                            <span>•</span>
                            <span><?php the_category(', '); ?></span>
                        </div>
                        <h1 class="text-4xl md:text-5xl font-bold mb-6"><?php the_title(); ?></h1>
                        <div class="flex items-center space-x-3">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 40, '', '', array('class' => 'rounded-full') ); ?>
                            <span class="font-semibold"><?php the_author(); ?></span>
                        </div>
                    </div>
                </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="container mx-auto px-4 md:px-8 -mt-12">
                    <div class="rounded-3xl overflow-hidden shadow-2xl h-[400px] md:h-[600px]">
                        <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="container mx-auto px-4 md:px-8 py-12 md:py-20">
                <div class="max-w-4xl mx-auto">
                    <div class="prose prose-lg max-w-none prose-slate prose-headings:text-brand-navy prose-a:text-brand-security">
                        <?php the_content(); ?>
                    </div>
                    
                    <div class="mt-16 pt-8 border-t border-gray-100">
                        <?php the_tags('<div class="flex flex-wrap gap-2"><span class="font-bold mr-2">Tags:</span>', '', '</div>'); ?>
                    </div>

                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
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
