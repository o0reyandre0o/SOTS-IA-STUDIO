<?php
/**
 * Template Name: Security Cameras Page
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative min-h-[400px] md:h-[600px] flex items-center py-12 md:py-0 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/restaurants-restaurant-outdoor-security-camera-scaled.jpg" alt="Security Camera Installation Miami" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-navy/85"></div>
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-white">
            <h1 class="text-4xl md:text-7xl font-bold mb-4 md:mb-6 leading-tight max-w-4xl">Security Cameras Miami: Professional CCTV Installation</h1>
            <p class="text-lg md:text-2xl text-gray-300 max-w-2xl mb-10">
                Protect your property with high-definition surveillance and 24/7 remote access.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-5 rounded-full font-bold transition shadow-lg inline-block text-lg text-center">
                    Get Your Free Consultation Today
                </a>
                <a href="tel:7868227868" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white px-8 py-5 rounded-full font-bold transition border border-white/20 inline-flex items-center justify-center text-lg">
                    <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    (786) 822-7868
                </a>
            </div>
        </div>
    </section>

    <!-- Advanced CCTV Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-brand-navy mb-8">Advanced CCTV Installation in Miami for Homes & Businesses</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        At <strong>Security on the Spot</strong>, we specialize in <strong>miami cctv cameras</strong> designed to deter crime and provide crystal-clear evidence.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        From high-traffic restaurants in <strong>Wynwood</strong> to warehouses in <strong>Doral</strong>, our <strong>security cameras miami</strong> systems give you total control from your phone.
                    </p>
                    <div class="bg-blue-50 p-6 rounded-2xl border border-blue-100 mb-8">
                        <p class="text-brand-navy font-bold text-xl flex items-center">
                            <svg class="mr-3 text-brand-security w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            Get Your Free Consultation Today – (786) 822-7868
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-brand-security/5 rounded-[40px] blur-2xl"></div>
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/surveillance-camera-isolated-on-white-background-2021-08-26-18-17-38-utc.png" alt="CCTV Camera Miami" class="relative z-10 mx-auto max-h-[400px] object-contain drop-shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Solutions Section -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6">Custom Surveillance Solutions for Every Need</h2>
                <p class="text-gray-600 text-lg">Tailored security systems designed for the specific challenges of your property.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $solutions = [
                    ['title' => 'Small Businesses', 'desc' => 'Affordable CCTV installation in Miami with remote monitoring to protect your livelihood.'],
                    ['title' => 'Restaurants', 'desc' => 'Monitor kitchens, staff, and customer areas to ensure safety and operational efficiency.'],
                    ['title' => 'Workshops & Automotive Shops', 'desc' => 'Protect valuable tools, equipment, and customer property with 24/7 surveillance.'],
                    ['title' => 'Retail Stores', 'desc' => 'Reduce theft, prevent shoplifting, and keep track of foot traffic patterns.'],
                    ['title' => 'Warehouses', 'desc' => 'Full coverage for large industrial spaces without disrupting your daily operations.'],
                    ['title' => 'Families & Homes', 'desc' => 'Protect your loved ones with high-end cameras integrated into smart home systems.'],
                ];
                foreach ($solutions as $item) : ?>
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover-card group">
                        <div class="w-12 h-12 bg-blue-100 text-brand-security rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-security group-hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-brand-navy mb-4"><?php echo $item['title']; ?></h3>
                        <p class="text-gray-600 leading-relaxed"><?php echo $item['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-brand-navy text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-security/10 blur-3xl -translate-y-1/2 translate-x-1/2 rounded-full"></div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold mb-8">Why Security on the Spot is Miami’s Top Choice</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <?php
                        $features = [
                            'Remote Viewing',
                            'HD Resolution',
                            'Motion Alerts',
                            'Health monitoring',
                            'Expert installation',
                            'Ongoing maintenance'
                        ];
                        foreach ($features as $feature) : ?>
                            <div class="flex items-center space-x-3 bg-white/5 p-4 rounded-2xl border border-white/10">
                                <svg class="text-brand-accent h-6 w-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                <span class="font-medium"><?php echo $feature; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-lg p-8 md:p-12 rounded-[40px] border border-white/10">
                    <h3 class="text-2xl md:text-3xl font-bold mb-6 text-brand-accent">Miami Security Experts You Can Trust</h3>
                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                        We understand the unique challenges of securing properties in Miami and South Florida. From high-traffic businesses in <strong>Downtown Miami</strong> to luxury homes in <strong>Coral Gables</strong> or warehouses in <strong>Doral</strong>, our systems are designed to deter theft, provide evidence when needed, and give you complete peace of mind.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="w-full bg-brand-security hover:bg-brand-accent text-white py-5 rounded-2xl font-bold text-xl transition shadow-xl flex items-center justify-center text-center">
                        Get Your Free Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-8">Ready to Install Your Security Cameras in Miami?</h2>
                <p class="text-xl text-gray-600 mb-12">
                    Contact <strong>Security on the Spot</strong> today for a free consultation and discover how our CCTV systems can protect your business or home.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-brand-light p-8 rounded-3xl border border-slate-100 flex flex-col items-center">
                        <div class="w-16 h-16 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-navy mb-2">Call Us</h4>
                        <a href="tel:7868227868" class="text-2xl font-bold text-brand-security hover:underline">(786) 822-7868</a>
                    </div>
                    <div class="bg-brand-light p-8 rounded-3xl border border-slate-100 flex flex-col items-center">
                        <div class="w-16 h-16 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        </div>
                        <h4 class="text-xl font-bold text-brand-navy mb-2">Service Area</h4>
                        <p class="text-gray-600 text-lg">Miami, Doral, Kendall, Coral Gables & all South Florida</p>
                    </div>
                </div>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-navy hover:bg-slate-800 text-white px-12 py-5 rounded-full font-bold text-xl transition shadow-2xl inline-block">
                    Get Your Free Consultation Today
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
