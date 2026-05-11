<?php
/**
 * Template Name: Home Page
 * The front page template file
 * This is the template that displays the home page by default.
 */
get_header();
?>

<main id="primary" class="site-main">

    <?php 
    // Elementor Content Area
    // All static HTML has been moved to Elementor custom widgets
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile; 
    ?>

</main>

<?php
get_footer();
