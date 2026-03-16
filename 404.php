<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="py-24 md:py-32 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h1 class="text-9xl font-black text-brand-navy opacity-10 mb-4">404</h1>
            <h2 class="text-4xl font-bold text-brand-navy mb-6">Page Not Found</h2>
            <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="bg-brand-navy hover:bg-brand-security text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Back to Home
                </a>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-white hover:bg-gray-50 text-brand-navy border border-gray-200 font-bold px-8 py-4 rounded-lg transition shadow-sm">
                    Contact Support
                </a>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
