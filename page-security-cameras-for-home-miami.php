<?php
/**
 * Template Name: Residential Security Cameras
 * The template for displaying the residential security cameras page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/landing-page-security-camera-home-family-home-security-camera-system-2.webp" alt="Home Security" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Home Security Cameras for Miami Families</h1>
                <p class="text-xl text-gray-300 mb-8">
                    Protect your loved ones and your property with Miami's most reliable home surveillance systems. Smart, simple, and secure.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="inline-block bg-brand-security hover:bg-brand-accent text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Protect My Home
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Peace of Mind, Anywhere</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Our residential security systems are designed with families in mind. We provide high-definition cameras that blend into your home's aesthetic while providing powerful protection.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-brand-light p-2 rounded-lg text-brand-security">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-brand-navy">Mobile App Integration</h3>
                                <p class="text-gray-600 text-sm">Check on your kids, pets, or deliveries from your phone at any time.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-brand-light p-2 rounded-lg text-brand-security">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4l4-4m0 0l-4-4m4 4H3" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-brand-navy">Two-Way Audio</h3>
                                <p class="text-gray-600 text-sm">Speak with visitors at your front door through your camera system.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="bg-brand-light p-2 rounded-lg text-brand-security">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-brand-navy">Superior Night Vision</h3>
                                <p class="text-gray-600 text-sm">Crystal clear images even in total darkness with advanced IR technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/09/landing-page-security-camera-home-family-home-security-system.webp" alt="Family Security" class="rounded-3xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
