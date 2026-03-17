<?php
/**
 * The front page template file
 * This is the template that displays the home page by default.
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative min-h-[600px] md:h-[800px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <video 
                autoplay 
                muted 
                loop 
                playsinline 
                preload="auto"
                class="w-full h-full object-cover"
            >
                <source src="https://anti2.workingtoctoc.com/wp/wp-content/uploads/2026/03/Flow_delpmaspu_.mp4" type="video/mp4">
            </video>
            <!-- Enhanced Overlay for Readability -->
            <div class="absolute inset-0 bg-gradient-to-r from-brand-navy/80 via-brand-navy/40 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl text-white">
                <div class="inline-flex items-center space-x-2 bg-brand-security/30 text-blue-300 px-4 py-1.5 rounded-full text-[10px] md:text-xs font-bold mb-6 border border-brand-security/40 backdrop-blur-sm">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 19.444a11.954 11.954 0 007.834-14.445 11.954 11.954 0 00-15.668 0zM10 17.5a9.454 9.454 0 01-6.166-11.444 9.454 9.454 0 0112.332 0A9.454 9.454 0 0110 17.5z" clip-rule="evenodd" /></svg>
                    <span>MIAMI'S #1 SECURITY CAMERA & SMART HOME EXPERTS</span>
                </div>
                <h1 class="text-4xl md:text-7xl font-extrabold mb-6 leading-tight">
                    Professional <br class="hidden md:block" />
                    <span class="text-brand-security">Security Camera Installation</span> in Miami
                </h1>
                <p class="text-base md:text-xl text-gray-300 mb-10 leading-relaxed max-w-2xl">
                    Protecting Miami's families and businesses with high-end, reliable security solutions for over 20 years. From <strong>CCTV systems</strong> to <strong>smart home integration</strong>, we are your local experts.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold text-lg transition shadow-xl shadow-brand-security/20 text-center active-scale">
                        Get a Free Quote — (786) 822-7868
                    </a>
                    <a href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot' ) ); ?>" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/20 px-8 py-4 rounded-full font-bold text-lg transition text-center active-scale">
                        Explore Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <section class="py-12 bg-white border-b border-gray-100">
        <div class="container mx-auto px-4">
            <p class="text-center text-gray-500 uppercase tracking-widest text-sm font-bold mb-8">Trusted by Leading Brands & Homeowners in Miami</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-500">
                <img alt="Partner Logo" class="h-8 hover:scale-110 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCd_iQqVslxsiDSq-_X8LrTSasRfkMp0rD3nZK0L4d6OhuHRinNFoKDPwnnb7jWBv92U7Qjffl-DFABdUGe8Ru7-Neo1t9KBQ6tgTdH_dUWbQ7_QbEG7p14CDfUYMd3QnBUmB9cSwem-x3Kt_H1mVjo24YfK3OaHsLfSVDf6ga2ZTyTE8IBCoV0DRoOUtWADQ-aGiG81UIx-pHPBSrh4OOvYuMorRtKeL8bW7gX9DHUvNtgODEKbhIzQzNsCxu1cbzWmEQGWyEGyD8x">
                <img alt="Partner Logo" class="h-8 hover:scale-110 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAexWnInQIk2--6wKSE7_9fnuqBZT-WzKAoeoHv0Mu9lpOyeJ2BiyAQtJ-gPrfwf9pGYs8kM6vgPbHC5z4J_ptt7E0RX_5HajgRvf74_kwJVGZsO47zq-HnYUcirikAaA3RAZ59wEPPSjeV87NSm02K7OWEtNgZHeYLMZU_SojcSjpuZVtafcI33CK1dTiWFZYD28chy9PsjEbJysyoy6vV5kZ0PL2B_QQqD055yzmamhlunDlHNflLyDZ-aAtmi7uM-OAjzZW6iYM_">
                <img alt="Partner Logo" class="h-8 hover:scale-110 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDuRe6AwXLBxpLgo5mhoDtfNRIDhHL4nCxTdT1pYQ169q9Euy9qAtp5iTPElKy9fxju75bkKYYOMh1r8AGQqNMYtiOdYrN9xCLhG5C7bw5jVLx-vphBGuapiE4hm25IBrfmhDj8s8OiyP3_eiNUt6JdsB5yRsXWrTr8AmWOWCLj0-YVCPnXyIjEednzsYSzSW0ybEgVBjo2zJ8yb4v1ZW5CiFKqQuI0OAzB8AMqqTTl-gwZcwMhdVPACVmWl4fmzMkXmW2txXOZERUb">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-brand-navy border-y border-white/10">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center group cursor-default">
                    <div class="text-3xl font-bold text-white mb-1 group-hover:scale-110 transition-transform">20+</div>
                    <div class="text-xs text-blue-400 font-bold uppercase tracking-wider group-hover:text-white transition-colors">Years Experience in Miami</div>
                </div>
                <div class="text-center group cursor-default">
                    <div class="text-3xl font-bold text-white mb-1 group-hover:scale-110 transition-transform">5k+</div>
                    <div class="text-xs text-blue-400 font-bold uppercase tracking-wider group-hover:text-white transition-colors">Satisfied Clients</div>
                </div>
                <div class="text-center group cursor-default">
                    <div class="text-3xl font-bold text-white mb-1 group-hover:scale-110 transition-transform">4.9/5</div>
                    <div class="text-xs text-blue-400 font-bold uppercase tracking-wider group-hover:text-white transition-colors">Google Rating</div>
                </div>
                <div class="text-center group cursor-default">
                    <div class="text-3xl font-bold text-white mb-1 group-hover:scale-110 transition-transform">24/7</div>
                    <div class="text-xs text-blue-400 font-bold uppercase tracking-wider group-hover:text-white transition-colors">Local Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div class="max-w-2xl">
                    <h2 class="text-4xl font-bold text-brand-navy mb-4">Miami’s Comprehensive Security & Technology Solutions</h2>
                    <p class="text-gray-600">We design, install, and maintain state-of-the-art security systems for every type of property. From <strong>restaurant CCTV</strong> to <strong>home theater installation in Miami</strong>.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <!-- Security Cameras -->
                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover-card group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-navy transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Security Camera Installation</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">High-definition UNV cameras with remote access and smart alerts. Best for homes and <strong>small businesses in Miami</strong>.</p>
                    <a href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot' ) ); ?>" class="text-brand-security font-bold flex items-center group-hover:translate-x-2 transition-transform">Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                </div>
                
                <!-- Home Automation -->
                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover-card group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-navy transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Home Automation Near Me</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">Fully integrated <strong>smart home systems</strong> for lighting, climate, and more. Control everything from your phone.</p>
                    <a href="<?php echo esc_url( home_url( '/home-automation-smart-homes-in-miami' ) ); ?>" class="text-brand-security font-bold flex items-center group-hover:translate-x-2 transition-transform">Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                </div>

                <!-- Access Control -->
                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover-card group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-navy transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Access Control Systems</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">Manage who enters your property with keyless entry, <strong>intercom installation in Miami</strong>, and mag-locks.</p>
                    <a href="<?php echo esc_url( home_url( '/access-control' ) ); ?>" class="text-brand-security font-bold flex items-center group-hover:translate-x-2 transition-transform">Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                </div>

                <!-- Fire Systems -->
                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover-card group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-navy transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.99 7.99 0 0120 13a7.99 7.99 0 01-2.343 5.657z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Commercial Fire Alarms</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">Certified <strong>commercial fire alarm installation in Miami</strong>. Professional monitoring and compliance.</p>
                    <a href="<?php echo esc_url( home_url( '/fire-systems' ) ); ?>" class="text-brand-security font-bold flex items-center group-hover:translate-x-2 transition-transform">Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                </div>

                <!-- Networking -->
                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover-card group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-navy transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a9.5 9.5 0 0113.436 0m-17.678-4.243a15.5 15.5 0 0121.92 0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Networking & Fiber</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">Structured cabling and robust Wi-Fi networks. High-speed connectivity for homes and businesses.</p>
                    <a href="<?php echo esc_url( home_url( '/networking-fiber-optics' ) ); ?>" class="text-brand-security font-bold flex items-center group-hover:translate-x-2 transition-transform">Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                </div>

                <!-- Audio Video -->
                <div class="p-8 bg-brand-light rounded-3xl border border-gray-100 hover-card group">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-navy transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Audio & Video Services</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed"><strong>Home theater installation in Miami</strong> and <strong>video walls in South Florida</strong>. Immersive entertainment.</p>
                    <a href="<?php echo esc_url( home_url( '/audio-video-services' ) ); ?>" class="text-brand-security font-bold flex items-center group-hover:translate-x-2 transition-transform">Learn More <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 hover-card">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="Security Experts Miami" class="rounded-3xl shadow-2xl">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-4xl font-bold text-brand-navy mb-6">Why Miami Trusts Security on the Spot</h2>
                    <p class="text-gray-600 mb-8 text-lg">With over two decades of experience, we have become the go-to provider for <strong>security cameras in Miami</strong> and <strong>smart home integration</strong>. Our commitment to quality and local expertise sets us apart.</p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 group">
                            <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-brand-security flex-shrink-0 group-hover:bg-brand-security group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy group-hover:text-brand-security transition-colors">Local Miami Experts</h4>
                                <p class="text-sm text-gray-500">We know Miami-Dade and the specific security needs of South Florida residents.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 group">
                            <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-brand-security flex-shrink-0 group-hover:bg-brand-security group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy group-hover:text-brand-security transition-colors">Fast, Professional Installation</h4>
                                <p class="text-sm text-gray-500">Our technicians are highly trained for clean, efficient, and robust setups.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 group">
                            <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-brand-security flex-shrink-0 group-hover:bg-brand-security group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy group-hover:text-brand-security transition-colors">3-Year Total Guarantee</h4>
                                <p class="text-sm text-gray-500">We stand behind our work with a comprehensive warranty on parts and labor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 bg-brand-navy relative overflow-hidden text-center">
        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">Ready to Secure Your Property?</h2>
            <p class="text-gray-300 text-xl mb-10 max-w-2xl mx-auto">Join thousands of satisfied customers in Miami. Get your free security consultation today.</p>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-12 py-6 rounded-full font-bold text-2xl transition shadow-xl active-scale inline-block">
                Call Now: (786) 822-7868
            </a>
        </div>
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-brand-security/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-96 h-96 bg-brand-security/20 rounded-full blur-3xl"></div>
    </section>
</main>

<?php
get_footer();
