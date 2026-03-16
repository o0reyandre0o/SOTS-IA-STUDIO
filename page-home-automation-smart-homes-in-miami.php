<?php
/**
 * Template Name: Home Automation Service
 * The template for displaying the home automation service page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-automation-smart-homes-in-miami-miami-smart-home-control-scaled.jpg" alt="Smart Home" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Smart Home Automation & Integration</h1>
                <p class="text-xl text-gray-300 mb-8">
                    Transform your Miami residence into a fully integrated smart home. Control lighting, climate, security, and entertainment with a single touch.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="inline-block bg-brand-security hover:bg-brand-accent text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Schedule a Consultation
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-brand-navy mb-4">The Future of Living</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">We bring together the world's best smart technologies into one cohesive, easy-to-use system.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="p-8 bg-brand-light rounded-3xl text-center">
                    <div class="text-brand-security mb-4 flex justify-center">
                        <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                    </div>
                    <h3 class="font-bold text-brand-navy mb-2">Lighting Control</h3>
                    <p class="text-sm text-gray-600">Set the perfect mood and save energy with automated lighting scenes.</p>
                </div>
                <div class="p-8 bg-brand-light rounded-3xl text-center">
                    <div class="text-brand-security mb-4 flex justify-center">
                        <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </div>
                    <h3 class="font-bold text-brand-navy mb-2">Climate Control</h3>
                    <p class="text-sm text-gray-600">Smart thermostats that learn your preferences and keep you comfortable.</p>
                </div>
                <div class="p-8 bg-brand-light rounded-3xl text-center">
                    <div class="text-brand-security mb-4 flex justify-center">
                        <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                    </div>
                    <h3 class="font-bold text-brand-navy mb-2">Home Theater</h3>
                    <p class="text-sm text-gray-600">Immersive audio and video experiences tailored to your space.</p>
                </div>
                <div class="p-8 bg-brand-light rounded-3xl text-center">
                    <div class="text-brand-security mb-4 flex justify-center">
                        <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                    </div>
                    <h3 class="font-bold text-brand-navy mb-2">Smart Security</h3>
                    <p class="text-sm text-gray-600">Integrated locks, cameras, and alarms that talk to each other.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
