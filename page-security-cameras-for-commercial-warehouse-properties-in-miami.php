<?php
/**
 * Template Name: Commercial Security Cameras
 * The template for displaying the commercial security cameras page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-hotel-lobby-security-camera-installation-scaled.jpg" alt="Commercial Security" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Commercial & Warehouse Security Systems</h1>
                <p class="text-xl text-gray-300 mb-8">
                    Scalable surveillance solutions for Miami's businesses. Protect your assets, monitor operations, and ensure workplace safety.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="inline-block bg-brand-security hover:bg-brand-accent text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Secure My Business
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-secure-modern-office-workspace.webp" alt="Office Security" class="rounded-3xl shadow-2xl">
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Enterprise-Grade Protection</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        We understand the unique challenges of commercial security. From high-traffic retail environments to expansive warehouse facilities, we design systems that provide 100% coverage and actionable intelligence.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                            <h3 class="font-bold text-brand-navy mb-2">Loss Prevention</h3>
                            <p class="text-sm text-gray-600">Reduce theft and shrinkage with high-definition monitoring of POS and inventory.</p>
                        </div>
                        <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                            <h3 class="font-bold text-brand-navy mb-2">Liability Protection</h3>
                            <p class="text-sm text-gray-600">Protect your business from false claims with clear video evidence of incidents.</p>
                        </div>
                        <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                            <h3 class="font-bold text-brand-navy mb-2">Remote Management</h3>
                            <p class="text-sm text-gray-600">Manage multiple locations from a single centralized dashboard.</p>
                        </div>
                        <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                            <h3 class="font-bold text-brand-navy mb-2">AI Analytics</h3>
                            <p class="text-sm text-gray-600">Use heat mapping and people counting to optimize your business operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
