<?php
/**
 * Template Name: Audio & Video Services Page
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative h-[500px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/audio-video-services-miami-audio-video-integration-scaled.jpg" alt="Home Theater Installation Miami" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-navy/80"></div>
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Home Theater Installation & Video Walls</h1>
            <p class="text-xl text-gray-300 max-w-2xl mb-8">
                Premium <strong>home theater installation in Miami</strong> and professional <strong>video walls in South Florida</strong>. Elevate your entertainment experience.
            </p>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold transition shadow-lg inline-block">
                Start Your Project
            </a>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">High-End Audio & Video Integration</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Security on the Spot is Miami's expert in <strong>home theater design and installation</strong>. Whether you want a dedicated cinema room or a multi-room audio system, we deliver professional results.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        We also specialize in <strong>video wall installation in Florida</strong> for commercial spaces, sports bars, and luxury homes. Our <strong>video walls in South Florida</strong> are designed for maximum impact and reliability.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span class="text-gray-700 font-medium">Custom Home Theater Design & Setup</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span class="text-gray-700 font-medium">Commercial & Residential Video Walls</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span class="text-gray-700 font-medium">Multi-Room Speaker Systems</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            <span class="text-gray-700 font-medium">Outdoor Audio & Entertainment Setup</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-brand-light p-8 rounded-3xl border border-gray-100">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="Video Wall Installation Florida" class="rounded-2xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Services -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white p-10 rounded-3xl shadow-sm">
                    <h3 class="text-2xl font-bold text-brand-navy mb-4">Home Theater Installation Miami</h3>
                    <p class="text-gray-600 mb-6">From 4K projectors to Dolby Atmos surround sound, we provide complete <strong>home theater setup in Miami</strong>. Our designs are tailored to your room's acoustics and your personal style.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>• Custom Seating & Lighting</li>
                        <li>• Acoustic Treatment</li>
                        <li>• Projector & Screen Calibration</li>
                    </ul>
                </div>
                <div class="bg-white p-10 rounded-3xl shadow-sm">
                    <h3 class="text-2xl font-bold text-brand-navy mb-4">Video Walls South Florida</h3>
                    <p class="text-gray-600 mb-6">Make a statement with a professional <strong>video wall installation in Florida</strong>. Perfect for digital signage, control rooms, or high-end residential entertainment.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>• Seamless LED & LCD Displays</li>
                        <li>• Commercial Grade Controllers</li>
                        <li>• 24/7 Reliable Performance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
