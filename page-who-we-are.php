<?php
/**
 * Template Name: Who We Are
 * The template for displaying the about page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Who We Are</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Miami's premier security installation experts, dedicated to protecting what matters most to you.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-brand-navy mb-6">Our Mission</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        At Security on the Spot, we believe that safety is a fundamental right. Our mission is to provide high-quality, reliable, and innovative security solutions to the Miami community and beyond.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        With years of experience in the industry, we have built a reputation for excellence, professionalism, and unparalleled customer service. We don't just install cameras; we design comprehensive security ecosystems tailored to your specific needs.
                    </p>
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <div class="text-4xl font-bold text-brand-security mb-2">10+</div>
                            <div class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Years Experience</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-brand-security mb-2">500+</div>
                            <div class="text-sm font-semibold text-gray-500 uppercase tracking-wider">Projects Completed</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="Our Team" class="rounded-3xl shadow-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-brand-security text-white p-8 rounded-2xl hidden md:block">
                        <p class="text-2xl font-bold italic">"Your safety is our priority."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-navy mb-12">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                    <div class="w-16 h-16 bg-brand-light rounded-full flex items-center justify-center mx-auto mb-6 text-brand-security">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Certified Experts</h3>
                    <p class="text-gray-600">Our technicians are fully licensed, insured, and trained on the latest security technologies.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                    <div class="w-16 h-16 bg-brand-light rounded-full flex items-center justify-center mx-auto mb-6 text-brand-security">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">24/7 Support</h3>
                    <p class="text-gray-600">We provide round-the-clock monitoring and technical support for your peace of mind.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                    <div class="w-16 h-16 bg-brand-light rounded-full flex items-center justify-center mx-auto mb-6 text-brand-security">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4">Cutting-Edge Tech</h3>
                    <p class="text-gray-600">We use high-definition UNV cameras and smart integration for modern security.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
