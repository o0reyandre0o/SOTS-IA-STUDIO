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
            <div class="absolute inset-0 bg-gradient-to-r from-brand-navy/90 via-brand-navy/60 to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="max-w-3xl text-white">
                <div class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-md text-white px-4 py-1.5 rounded-full text-[10px] md:text-xs font-bold mb-6 border border-white/30">
                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                    <span>RATED 4.9 HAPPY CUSTOMERS</span>
                </div>
                <p class="text-blue-400 font-bold tracking-wider text-sm md:text-base mb-4">
                    24/7 PROTECTION FOR YOUR HOME OR BUSINESS <br class="hidden md:block"> WITH MIAMI’S MOST TRUSTED SECURITY EXPERTS.
                </p>
                <h1 class="text-4xl md:text-7xl font-extrabold mb-6 leading-tight drop-shadow-2xl">
                    Security Camera Installation & CCTV Systems in Miami
                </h1>
                <p class="text-base md:text-xl text-gray-200 mb-8 leading-relaxed">
                    Don’t settle for ‘basic’ security. Security On The Spot provides high-definition surveillance, remote mobile access, and professional installation. We are Miami’s #1 Rated Security Camera Installation Team in 2026.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold text-lg transition shadow-xl text-center active-scale">
                        Get My Free Security Quote Now – (786) 822-7868
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <img 
                        src="https://securityonthespot.com/wp-content/uploads/2025/11/home-sots-carrousel-1.png" 
                        alt="Home Security Package" 
                        class="rounded-3xl shadow-2xl w-full"
                    >
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6">Complete Home Security Package for $1,499</h2>
                    <p class="text-gray-600 text-lg mb-8">
                        We believe professional security should be transparent. Our Miami Home Security Package includes high-definition cameras, professional installation, and a 3-year total guarantee—all for one flat fee with no monthly contracts.
                    </p>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <span class="font-bold text-brand-navy">Complete Package for $1,499:</span> <span class="text-gray-600">Get your system professionally installed for one flat fee.</span>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <span class="font-bold text-brand-navy">100% Transparent Pricing:</span> <span class="text-gray-600">No hidden fees. No monthly contracts.</span>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <span class="font-bold text-brand-navy">Top-Rated in Miami:</span> <span class="text-gray-600">4.9 Stars on Google and Miami’s trusted installer.</span>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <span class="font-bold text-brand-navy">3-Year Total Guarantee:</span> <span class="text-gray-600">Includes a 2-Year Hardware Warranty + 1-Year Installation Warranty.</span>
                            </div>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full text-blue-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <span class="font-bold text-brand-navy">View From Anywhere:</span> <span class="text-gray-600">Get 24/7 remote access from your phone or computer.</span>
                            </div>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold transition shadow-lg active-scale inline-block">
                        Get This $1,499 Offer Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 md:py-24 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6">Miami’s Comprehensive Security & Technology Solutions</h2>
                <p class="text-gray-600 text-lg">We design, install, and maintain state-of-the-art security systems for every type of property.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group border border-gray-100">
                    <div class="h-48 overflow-hidden">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-hotel-lobby-security-camera-installation-scaled.jpg" alt="Residential Security" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-brand-navy mb-3">Residential Security</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Protect your home and family with 24/7 surveillance and remote monitoring.</p>
                    </div>
                </div>
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group border border-gray-100">
                    <div class="h-48 overflow-hidden">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-secure-modern-office-workspace.webp" alt="Small Businesses" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-brand-navy mb-3">Small Businesses</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Affordable security cameras miami solutions tailored for restaurants, shops, and offices.</p>
                    </div>
                </div>
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group border border-gray-100">
                    <div class="h-48 overflow-hidden">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-securing-modern-office-buildings-at-night-1.webp" alt="Commercial & Industrial" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-brand-navy mb-3">Commercial & Industrial</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Advanced CCTV cameras designed to secure warehouses, buildings, and large enterprises.</p>
                    </div>
                </div>
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group border border-gray-100">
                    <div class="h-48 overflow-hidden">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-restaurant-security-camera-installation.webp" alt="Restaurants & Hospitality" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-brand-navy mb-3">Restaurants & Hospitality</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Keep your staff, customers, and operations safe with reliable video surveillance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-orlando-security-camera-team.webp" alt="Security Team" class="rounded-3xl shadow-2xl">
                </div>
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6">About Security on the Spot</h2>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        At Security on the Spot, we are a family-owned company with over 20 years of experience in the security industry. Founded in Miami, our mission is simple: to protect what matters most—your home, your business, and your peace of mind.
                    </p>
                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        We believe in honest, reliable, and professional service, backed by cutting-edge technology and the trust of hundreds of satisfied clients across Miami-Dade.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold transition shadow-lg active-scale inline-block">
                        Get My Free Security Quote Now – (786) 822-7868
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Carousel -->
    <section class="py-12 bg-brand-light border-y border-gray-100">
        <div class="container mx-auto px-4">
            <h3 class="text-center text-gray-400 font-bold uppercase tracking-widest text-xs mb-10">Trusted by Leading Brands in Miami</h3>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition duration-500">
                <img src="https://securityonthespot.com/wp-content/uploads/2025/09/sonos-company-logo.webp" alt="Sonos" class="h-6 md:h-8">
                <img src="https://securityonthespot.com/wp-content/uploads/2025/09/ubiquiti-logo-corrupted-file-graphic.webp" alt="Ubiquiti" class="h-6 md:h-8">
                <img src="https://securityonthespot.com/wp-content/uploads/2025/09/uniview-logo-red-banner-variant.webp" alt="Uniview" class="h-6 md:h-8">
                <img src="https://securityonthespot.com/wp-content/uploads/2025/09/alhua-logo-red-and-black-silhouette.webp" alt="Alhua" class="h-6 md:h-8">
                <img src="https://securityonthespot.com/wp-content/uploads/2025/09/control4-logo-gray-and-red-gradient.webp" alt="Control4" class="h-6 md:h-8">
                <img src="https://securityonthespot.com/wp-content/uploads/2025/09/icr-real-time-blob-detection.webp" alt="ICR" class="h-6 md:h-8">
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2 order-2 lg:order-1">
                    <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-8">Miami's #1 Security Camera Installation Service</h2>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4 p-4 bg-brand-light rounded-2xl border border-gray-100">
                            <div class="bg-brand-security text-white p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <span class="font-bold text-brand-navy">20+ years of experience in security systems</span>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-brand-light rounded-2xl border border-gray-100">
                            <div class="bg-brand-security text-white p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <span class="font-bold text-brand-navy">Fast, clean, and professional installations</span>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-brand-light rounded-2xl border border-gray-100">
                            <div class="bg-brand-security text-white p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <span class="font-bold text-brand-navy">Remote access from your phone or computer</span>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-brand-light rounded-2xl border border-gray-100">
                            <div class="bg-brand-security text-white p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <span class="font-bold text-brand-navy">Custom solutions for homes, restaurants, offices, and warehouses</span>
                        </div>
                        <div class="flex items-center space-x-4 p-4 bg-brand-light rounded-2xl border border-gray-100">
                            <div class="bg-brand-security text-white p-2 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <span class="font-bold text-brand-navy">Trusted by top Miami businesses and families</span>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 order-1 lg:order-2">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/09/home-security-camera-installation-kit.webp" alt="Security Kit" class="rounded-3xl shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Review Widget -->
    <section class="py-16 md:py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6">What Our Customers Say</h2>
                <p class="text-gray-600 text-lg">Real reviews from families and businesses across Miami who trust Security on the Spot.</p>
            </div>
            <div class="rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 bg-white">
                <script type='text/javascript' src='https://reputationhub.site/reputation/assets/review-widget.js'></script>
                <iframe class='lc_reviews_widget' src='https://reputationhub.site/reputation/widgets/review_widget/nDZCF5gAPtvUgT4Nhki1' frameborder='0' scrolling='no' style='min-width: 100%; width: 100%; min-height: 600px;'></iframe>
            </div>
        </div>
    </section>

    <!-- Solutions Section -->
    <section class="py-16 md:py-24 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6">Comprehensive Security & Technology Solutions</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Security Camera Installation</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">High-definition CCTV systems for warehouses, restaurants, and luxury estates. Monitor your property from anywhere in the world.</p>
                    <a href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot' ) ); ?>" class="text-brand-security font-bold hover:underline">Learn More</a>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Smart Home Automation</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">Control your lights, locks, and temperature with a single app. We create intelligent living spaces in Miami.</p>
                    <a href="<?php echo esc_url( home_url( '/home-automation-smart-homes-in-miami' ) ); ?>" class="text-brand-security font-bold hover:underline">Learn More</a>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Access Control & Intercoms</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">Manage entry points with keyless systems, video intercoms, and magnetic locks for businesses and HOAs.</p>
                    <a href="<?php echo esc_url( home_url( '/access-control' ) ); ?>" class="text-brand-security font-bold hover:underline">Learn More</a>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a9.5 9.5 0 0113.436 0m-17.678-4.243a15.5 15.5 0 0121.92 0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Fiber Optics & Networking</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">The backbone of your security. We install high-speed structured cabling and robust Wi-Fi networks.</p>
                    <a href="<?php echo esc_url( home_url( '/networking-fiber-optics' ) ); ?>" class="text-brand-security font-bold hover:underline">Learn More</a>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">
                    <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.99 7.99 0 0120 13a7.99 7.99 0 01-2.343 5.657z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Fire Alarm & Detection Systems</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6">Protect what matters most. We design and install commercial-grade fire alarm and detection systems.</p>
                    <a href="<?php echo esc_url( home_url( '/fire-systems' ) ); ?>" class="text-brand-security font-bold hover:underline">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <h2 class="text-3xl md:text-5xl font-bold text-brand-navy text-center mb-16">Frequently Asked Questions</h2>
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-brand-navy mb-3">Where is Security on the Spot located?</h4>
                    <p class="text-gray-600 text-sm">Our headquarters are at 4861 NW 72nd Ave, Miami, FL 33166, serving Miami and all of South Florida.</p>
                </div>
                <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-brand-navy mb-3">What services do you offer?</h4>
                    <p class="text-gray-600 text-sm">We provide security camera installation, smart home automation, access control, fire alarms, and networking solutions.</p>
                </div>
                <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-brand-navy mb-3">How long have you been in business?</h4>
                    <p class="text-gray-600 text-sm">We have over 22 years of experience in the security industry and more than 10 years operating as a registered company in Miami.</p>
                </div>
                <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-brand-navy mb-3">Which areas do you serve?</h4>
                    <p class="text-gray-600 text-sm">Serving all of Miami-Dade including Doral, Kendall, Brickell, Coral Gables, and Miami Beach.</p>
                </div>
                <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-brand-navy mb-3">Do you offer free consultations?</h4>
                    <p class="text-gray-600 text-sm">Yes, we provide a free consultation to assess your security needs and offer a personalized solution.</p>
                </div>
                <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                    <h4 class="font-bold text-brand-navy mb-3">What payment methods do you accept?</h4>
                    <p class="text-gray-600 text-sm">We accept credit cards (Visa, MasterCard, American Express) and cash.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-16 md:py-24 bg-brand-navy text-center text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-6xl font-bold mb-6">Ready to Install Your <br>Security Cameras in Miami?</h2>
            <p class="text-gray-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto">Get your free consultation today and discover how Security on the Spot can protect what matters most.</p>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-security hover:bg-brand-accent text-white px-10 py-5 rounded-full font-bold text-xl md:text-2xl transition shadow-xl active-scale inline-block">
                Get My Free Security Quote Now – (786) 822-7868
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
