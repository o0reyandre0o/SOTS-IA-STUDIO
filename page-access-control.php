<?php
/**
 * Template Name: Access Control Service
 * The template for displaying the access control service page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-30">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-1.jpg" alt="Access Control" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Advanced Access Control Systems</h1>
                <p class="text-xl text-gray-300 mb-8">
                    Manage who enters your property with state-of-the-art keyless entry, intercoms, and biometric systems in Miami.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="inline-block bg-brand-security hover:bg-brand-accent text-white font-bold px-8 py-4 rounded-lg transition shadow-lg">
                    Request a Demo
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Secure Your Perimeter</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Access control is about more than just locking doors. It's about data, convenience, and total control over your environment. We provide integrated solutions that work seamlessly with your existing security infrastructure.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-security mt-1">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-brand-navy">Keyless Entry</h3>
                                <p class="text-gray-600">Eliminate the risk of lost keys with card readers, fobs, or mobile-based entry.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-security mt-1">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09a10.116 10.116 0 001.283-3.562V11c0-2.739-.693-5.319-1.913-7.576M12 11a10.07 10.07 0 011.572-5.424M12 11a10.07 10.07 0 00-1.572-5.424M12 11V3m0 8c0 2.739.693 5.319 1.913 7.576M12 11a10.116 10.116 0 00-1.283 3.562l-.054.09m4.723-4.131a8.959 8.959 0 01-1.913 7.576M12 11a8.959 8.959 0 011.913-7.576" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-brand-navy">Biometric Systems</h3>
                                <p class="text-gray-600">High-security fingerprint or facial recognition for sensitive areas.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-security mt-1">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-brand-navy">Video Intercoms</h3>
                                <p class="text-gray-600">See and speak with visitors before granting access from your smartphone.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/09/entry-exit-systems-aluminum-access-control-panel-with-keypad-scaled.jpg" alt="Keypad" class="rounded-2xl shadow-lg mt-8">
                    <img src="https://securityonthespot.com/wp-content/uploads/2026/03/intercom-systems-butterflymx-video-intercoms-560558.webp" alt="Intercom" class="rounded-2xl shadow-lg">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
