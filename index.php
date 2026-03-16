<?php
/**
 * The main template file
 */
get_header(); ?>

<div class="container mx-auto px-4 py-20">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
