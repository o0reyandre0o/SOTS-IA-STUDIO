<?php
/**
 * Template Name: Audio & Video Services
 * The template for displaying audio and video installation services
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/multi-zone-audio-modern-office-multi-zone-audio-setup-scaled.jpg" alt="Audio Video" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Audio & Video Installation Solutions</h1>
                <p class="text-xl text-gray-300 mb-8">
                    From immersive home theaters to massive commercial video walls. We provide high-end AV solutions for Miami's premier properties.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="inline-block bg-brand-security hover:bg-brand-accent text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Request AV Consultation
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Home Theater -->
                <div class="text-center">
                    <div class="mb-6 overflow-hidden rounded-2xl h-64">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-theater-minimalist-home-theater-setup-scaled.jpg" alt="Home Theater" class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-2xl font-bold text-brand-navy mb-4">Home Theater Systems</h2>
                    <p class="text-gray-600 mb-6">Experience the cinema at home with custom-designed surround sound and 4K projection systems.</p>
                    <a href="<?php echo esc_url( home_url( '/home-theater-systems-in-miami-south-florida' ) ); ?>" class="text-brand-security font-bold hover:underline">Learn More</a>
                </div>
                <!-- Video Walls -->
                <div class="text-center">
                    <div class="mb-6 overflow-hidden rounded-2xl h-64">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/video-wall-installation-modern-boardroom-video-wall-installation-scaled.jpg" alt="Video Wall" class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-2xl font-bold text-brand-navy mb-4">Video Wall Installation</h2>
                    <p class="text-gray-600 mb-6">High-impact visual displays for boardrooms, lobbies, and digital signage applications.</p>
                    <a href="<?php echo esc_url( home_url( '/video-wall-installation-in-miami-south-florida' ) ); ?>" class="text-brand-security font-bold hover:underline">Learn More</a>
                </div>
                <!-- Multi-Zone Audio -->
                <div class="text-center">
                    <div class="mb-6 overflow-hidden rounded-2xl h-64">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/multi-zone-audio-modern-office-multi-zone-audio-setup-scaled.jpg" alt="Multi-Zone Audio" class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-2xl font-bold text-brand-navy mb-4">Multi-Zone Audio</h2>
                    <p class="text-gray-600 mb-6">Stream high-quality audio throughout your entire property with seamless zone control.</p>
                    <a href="<?php echo esc_url( home_url( '/multi-zone-audio-installation-in-miami-south-florida' ) ); ?>" class="text-brand-security font-bold hover:underline">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
