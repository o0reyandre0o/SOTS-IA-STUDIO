<?php
/**
 * Template Name: Networking Service
 * The template for displaying the networking and fiber optics service page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/networking-fiber-optics-high-density-fiber-optic-network-cabling-scaled.jpg" alt="Networking" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Networking & Fiber Optics</h1>
                <p class="text-xl text-gray-300 mb-8">
                    The backbone of your digital life. High-speed, reliable networking and fiber optic solutions for Miami's most demanding properties.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="inline-block bg-brand-security hover:bg-brand-accent text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Get Connected
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Reliable Infrastructure</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        In today's world, your security, entertainment, and business operations all depend on a stable network. We design and install robust networking infrastructures that eliminate dead zones and provide lightning-fast speeds.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-brand-security rounded-full"></div>
                            <span class="text-gray-700 font-semibold">Fiber Optic Cabling & Splicing</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-brand-security rounded-full"></div>
                            <span class="text-gray-700 font-semibold">Enterprise-Grade Wi-Fi 6 Solutions</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-brand-security rounded-full"></div>
                            <span class="text-gray-700 font-semibold">Structured Data Cabling (Cat6/Cat6a)</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-brand-security rounded-full"></div>
                            <span class="text-gray-700 font-semibold">Network Rack Organization & Cleanup</span>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/09/networking-fiber-optics-high-density-fiber-optic-network-cabling-scaled.jpg" alt="Network Cabling" class="rounded-3xl shadow-xl">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
