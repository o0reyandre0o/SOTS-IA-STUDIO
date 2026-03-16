<?php
/**
 * Template Name: Access Control Page
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative h-[500px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/access-control-systems-miami-intercom-installation-scaled.jpg" alt="Access Control Miami" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-navy/80"></div>
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Access Control & Intercom Installation Miami</h1>
            <p class="text-xl text-gray-300 max-w-2xl mb-8">
                Secure your property with advanced <strong>access control systems in Miami</strong>. Manage entry points with ease and precision.
            </p>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold transition shadow-lg inline-block">
                Secure Your Property
            </a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Modern Entry Management Solutions</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Security on the Spot provides comprehensive <strong>intercom installation in Miami</strong> and sophisticated <strong>access control for businesses</strong>. From keyless entry to biometric scanners, we have you covered.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our systems integrate seamlessly with your existing security infrastructure, allowing you to monitor and control access from your smartphone or computer.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-brand-light p-3 rounded-lg">
                                <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy">Keyless Entry Systems</h4>
                                <p class="text-gray-500 text-sm">Eliminate the need for physical keys with secure card readers and PIN pads.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-brand-light p-3 rounded-lg">
                                <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy">Video Intercom Installation</h4>
                                <p class="text-gray-500 text-sm">See and speak with visitors before granting access with high-definition video intercoms.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-brand-light p-12 rounded-3xl border border-gray-100">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/access-control-reader-on-wall.png" alt="Access Control Reader Miami" class="mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Commercial Focus -->
    <section class="py-20 bg-brand-navy text-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h2 class="text-3xl font-bold mb-8">Commercial Access Control Specialists</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-12">
                We design and install <strong>commercial access control systems</strong> for offices, warehouses, and gated communities across South Florida.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="border border-white/10 p-8 rounded-2xl">
                    <h3 class="text-xl font-bold mb-4">Multi-Tenant Buildings</h3>
                    <p class="text-gray-400 text-sm">Cloud-based intercoms for apartment complexes and office buildings.</p>
                </div>
                <div class="border border-white/10 p-8 rounded-2xl">
                    <h3 class="text-xl font-bold mb-4">Industrial Facilities</h3>
                    <p class="text-gray-400 text-sm">Heavy-duty gate operators and long-range card readers.</p>
                </div>
                <div class="border border-white/10 p-8 rounded-2xl">
                    <h3 class="text-xl font-bold mb-4">Retail & SMB</h3>
                    <p class="text-gray-400 text-sm">Simple yet effective door controllers for small businesses.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
