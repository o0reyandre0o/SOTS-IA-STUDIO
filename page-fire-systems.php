<?php
/**
 * Template Name: Fire Alarm Systems Page
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative h-[500px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/fire-alarm-systems-miami-commercial-fire-alarm-scaled.jpg" alt="Fire Alarm Systems Miami" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-navy/80"></div>
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Commercial Fire Alarm Systems Miami</h1>
            <p class="text-xl text-gray-300 max-w-2xl mb-8">
                Professional <strong>fire alarm installation in Miami</strong>. Protect your business and stay compliant with local fire codes.
            </p>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold transition shadow-lg inline-block">
                Get a Safety Audit
            </a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Life Safety & Fire Protection</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Security on the Spot is a licensed provider of <strong>commercial fire alarm installation in Miami</strong>. We handle everything from system design and permitting to installation and monitoring.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our systems are designed to meet the strictest NFPA standards and local Miami-Dade fire codes, ensuring your property is protected and your business remains compliant.
                    </p>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-brand-security" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                            <span class="text-gray-700">Code Compliance</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-brand-security" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                            <span class="text-gray-700">24/7 Monitoring</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-brand-security" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                            <span class="text-gray-700">Smoke Detection</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-5 h-5 text-brand-security" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path></svg>
                            <span class="text-gray-700">Heat Sensors</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/fire-alarm-system.jpg" alt="Fire Alarm Panel Miami" class="rounded-3xl shadow-2xl">
                    <div class="absolute top-4 right-4 bg-brand-security text-white px-4 py-2 rounded-full text-xs font-bold uppercase">UL Listed</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold text-brand-navy mb-4">System Design</h3>
                    <p class="text-gray-600 text-sm">Custom fire alarm blueprints tailored to your building's specific layout and requirements.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Installation</h3>
                    <p class="text-gray-600 text-sm">Professional installation by certified technicians ensuring every sensor and alarm works perfectly.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Maintenance</h3>
                    <p class="text-gray-600 text-sm">Regular testing and maintenance to ensure your system is always ready when it matters most.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
