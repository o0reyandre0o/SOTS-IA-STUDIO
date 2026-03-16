<?php
/**
 * Template Name: Restaurant Security Cameras
 * The template for displaying the restaurant security cameras page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-restaurant-security-camera-installation.webp" alt="Restaurant Security" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Security Cameras for Miami Restaurants</h1>
                <p class="text-xl text-gray-300 mb-8">
                    Specialized surveillance for the hospitality industry. Monitor dining areas, kitchens, and bars to ensure safety and service quality.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="inline-block bg-brand-security hover:bg-brand-accent text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Secure My Restaurant
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Hospitality-Focused Surveillance</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Restaurants have unique security needs. We provide discreet camera installations that don't disrupt your atmosphere while providing the coverage you need to manage your staff and protect your patrons.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3 p-4 bg-brand-light rounded-xl">
                            <div class="text-brand-security">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            </div>
                            <span class="text-gray-700 font-semibold">POS Integration & Cash Drawer Monitoring</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-brand-light rounded-xl">
                            <div class="text-brand-security">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            </div>
                            <span class="text-gray-700 font-semibold">Kitchen Safety & Compliance Monitoring</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-brand-light rounded-xl">
                            <div class="text-brand-security">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            </div>
                            <span class="text-gray-700 font-semibold">Dining Area & Entrance Coverage</span>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-restaurant-security-camera-installation.webp" alt="Restaurant Monitoring" class="rounded-3xl shadow-xl">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
