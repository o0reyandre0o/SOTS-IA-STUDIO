<?php
/**
 * The front page template file
 * This is the template that displays the home page by default.
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative h-[600px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-unv-security-camera-high-definition-outdoor-model.webp" alt="Security Camera" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-navy via-brand-navy/80 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-2xl text-white">
                <div class="inline-flex items-center space-x-2 bg-brand-security/20 text-blue-400 px-4 py-1 rounded-full text-xs font-bold mb-6 border border-brand-security/30">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 19.444a11.954 11.954 0 007.834-14.445 11.954 11.954 0 00-15.668 0zM10 17.5a9.454 9.454 0 01-6.166-11.444 9.454 9.454 0 0112.332 0A9.454 9.454 0 0110 17.5z" clip-rule="evenodd" /></svg>
                    <span>MIAMI'S #1 SECURITY EXPERTS</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">
                    Security <br />
                    <span class="text-brand-security">on the Spot</span>
                </h1>
                <p class="text-xl text-gray-300 mb-10 leading-relaxed">
                    Protecting Miami's families and businesses with high-end, reliable security solutions for over 20 years.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold text-lg transition shadow-lg shadow-brand-security/20 text-center">
                        Get a Free Quote
                    </a>
                    <a href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot' ) ); ?>" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/20 px-8 py-4 rounded-full font-bold text-lg transition text-center">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-brand-navy border-y border-white/10">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">20+</div>
                    <div class="text-xs text-blue-400 font-bold uppercase tracking-wider">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">5k+</div>
                    <div class="text-xs text-blue-400 font-bold uppercase tracking-wider">Satisfied Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">4.9/5</div>
                    <div class="text-xs text-blue-400 font-bold uppercase tracking-wider">Google Rating</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white mb-1">24/7</div>
                    <div class="text-xs text-blue-400 font-bold uppercase tracking-wider">Emergency Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div className="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div className="max-w-2xl">
                    <h2 className="text-4xl font-bold text-brand-navy mb-4">Comprehensive Security Solutions</h2>
                    <p className="text-gray-600">We design, install, and maintain state-of-the-art security systems for every type of property.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300 group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Security Cameras</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">High-definition UNV cameras with remote access and smart alerts.</p>
                    <a href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot' ) ); ?>" class="text-brand-security font-bold flex items-center">Learn More</a>
                </div>
                
                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300 group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Home Automation</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">Fully integrated smart home systems for lighting, climate, and more.</p>
                    <a href="<?php echo esc_url( home_url( '/home-automation-smart-homes-in-miami' ) ); ?>" class="text-brand-security font-bold flex items-center">Learn More</a>
                </div>

                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover:shadow-xl transition duration-300 group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Access Control</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">Manage who enters your property with keyless entry and intercoms.</p>
                    <a href="<?php echo esc_url( home_url( '/access-control' ) ); ?>" class="text-brand-security font-bold flex items-center">Learn More</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
