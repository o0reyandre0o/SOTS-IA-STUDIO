<?php
/**
 * Template Name: Fire Systems Service
 * The template for displaying the fire systems service page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/fire-systems-white-wall-mounted-fire-alarm-strobes-scaled.jpg" alt="Fire Systems" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Fire Alarm & Life Safety Systems</h1>
                <p class="text-xl text-gray-300 mb-8">
                    Protecting lives and property with advanced fire detection and notification systems in Miami. Fully compliant and professionally installed.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="inline-block bg-brand-security hover:bg-brand-accent text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Request Inspection
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-brand-navy mb-8">Comprehensive Fire Protection</h2>
                <p class="text-lg text-gray-600 mb-12">
                    We provide end-to-end fire safety solutions for commercial and residential properties. Our systems are designed to meet all local Miami fire codes and NFPA standards.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
                    <div class="bg-brand-light p-8 rounded-2xl">
                        <h3 class="text-xl font-bold text-brand-navy mb-4">Detection</h3>
                        <p class="text-gray-600">Advanced smoke, heat, and carbon monoxide detectors that provide early warning to occupants and emergency services.</p>
                    </div>
                    <div class="bg-brand-light p-8 rounded-2xl">
                        <h3 class="text-xl font-bold text-brand-navy mb-4">Notification</h3>
                        <p class="text-gray-600">High-visibility strobes and clear audible alarms to ensure everyone is alerted in the event of an emergency.</p>
                    </div>
                    <div class="bg-brand-light p-8 rounded-2xl">
                        <h3 class="text-xl font-bold text-brand-navy mb-4">Monitoring</h3>
                        <p class="text-gray-600">24/7 professional monitoring that immediately dispatches fire departments when an alarm is triggered.</p>
                    </div>
                    <div class="bg-brand-light p-8 rounded-2xl">
                        <h3 class="text-xl font-bold text-brand-navy mb-4">Compliance</h3>
                        <p class="text-gray-600">Regular inspections and maintenance to ensure your system is always ready and compliant with local regulations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
