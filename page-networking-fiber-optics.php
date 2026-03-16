<?php
/**
 * Template Name: Networking Page
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative h-[500px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/networking-services-miami-structured-cabling-scaled.jpg" alt="Networking Services Miami" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-navy/80"></div>
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Professional Networking & Structured Cabling Miami</h1>
            <p class="text-xl text-gray-300 max-w-2xl mb-8">
                Reliable <strong>networking services in Miami</strong>. High-speed Wi-Fi, structured cabling, and secure network infrastructure.
            </p>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold transition shadow-lg inline-block">
                Optimize Your Network
            </a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">The Backbone of Your Smart Property</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        A great security or automation system is only as good as the network it runs on. Security on the Spot provides expert <strong>structured cabling in Miami</strong> and robust Wi-Fi solutions for homes and businesses.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        We eliminate dead zones, improve speeds, and ensure your network is secure from external threats. Our team specializes in Cat6 cabling, fiber optics, and enterprise-grade mesh Wi-Fi.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-center space-x-3 p-4 bg-brand-light rounded-xl">
                            <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.345 6.344c5.857-5.858 15.354-5.858 21.21 0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span class="font-bold text-brand-navy">Enterprise Wi-Fi</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-brand-light rounded-xl">
                            <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span class="font-bold text-brand-navy">Rack Management</span>
                        </div>
                    </div>
                </div>
                <div class="bg-brand-light p-12 rounded-3xl border border-gray-100">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/network-cables.jpg" alt="Structured Cabling Miami" class="rounded-2xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Structured Cabling</h3>
                    <p class="text-gray-600 text-sm">Professional Cat6 and Fiber Optic installation for reliable data transmission across your entire property.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Wi-Fi Optimization</h3>
                    <p class="text-gray-600 text-sm">Custom mesh network designs to ensure fast, reliable Wi-Fi in every room and outdoor area.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm">
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Network Security</h3>
                    <p class="text-gray-600 text-sm">Firewall setup and secure network configuration to protect your data and smart devices.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
