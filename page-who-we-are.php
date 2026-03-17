<?php
/**
 * Template Name: About Us Page
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative h-[400px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="About Security on the Spot Miami" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-navy/80"></div>
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-white text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">About Security on the Spot</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Miami's trusted experts in security, automation, and technology integration. Protecting what matters most with precision and care.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-brand-navy mb-8">Your Local Technology Partner in Miami</h2>
                <p class="text-lg text-gray-600 mb-12 leading-relaxed">
                    At Security on the Spot, we believe that technology should make your life safer and simpler. With years of experience serving the Miami community, we have built a reputation for excellence in <strong>security camera installation</strong>, <strong>smart home automation</strong>, and <strong>commercial technology solutions</strong>.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="p-6 rounded-2xl hover:bg-blue-50 transition-colors group cursor-default">
                        <div class="text-4xl font-bold text-brand-security mb-2 group-hover:scale-110 transition-transform">10+</div>
                        <div class="text-gray-500 uppercase text-xs font-bold tracking-widest group-hover:text-brand-security transition-colors">Years Experience</div>
                    </div>
                    <div class="p-6 rounded-2xl hover:bg-blue-50 transition-colors group cursor-default">
                        <div class="text-4xl font-bold text-brand-security mb-2 group-hover:scale-110 transition-transform">500+</div>
                        <div class="text-gray-500 uppercase text-xs font-bold tracking-widest group-hover:text-brand-security transition-colors">Projects Completed</div>
                    </div>
                    <div class="p-6 rounded-2xl hover:bg-blue-50 transition-colors group cursor-default">
                        <div class="text-4xl font-bold text-brand-security mb-2 group-hover:scale-110 transition-transform">100%</div>
                        <div class="text-gray-500 uppercase text-xs font-bold tracking-widest group-hover:text-brand-security transition-colors">Local Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us -->
    <section class="py-20 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Why Choose Security on the Spot?</h2>
                    <div class="space-y-8">
                        <div class="flex space-x-4 p-4 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm group-hover:bg-brand-security group-hover:text-white transition-colors">
                                <span class="text-brand-security font-bold group-hover:text-white">01</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy mb-2 group-hover:text-brand-security transition-colors">Expert Installation</h4>
                                <p class="text-gray-600 text-sm">Our technicians are highly trained and certified to ensure every system is installed to the highest standards.</p>
                            </div>
                        </div>
                        <div class="flex space-x-4 p-4 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm group-hover:bg-brand-security group-hover:text-white transition-colors">
                                <span class="text-brand-security font-bold group-hover:text-white">02</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy mb-2 group-hover:text-brand-security transition-colors">Premium Technology</h4>
                                <p class="text-gray-600 text-sm">We only use the best equipment from trusted brands like UNV, ensuring reliability and performance.</p>
                            </div>
                        </div>
                        <div class="flex space-x-4 p-4 rounded-2xl hover:bg-white hover:shadow-lg transition-all duration-300 group">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm group-hover:bg-brand-security group-hover:text-white transition-colors">
                                <span class="text-brand-security font-bold group-hover:text-white">03</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy mb-2 group-hover:text-brand-security transition-colors">Personalized Service</h4>
                                <p class="text-gray-600 text-sm">Every property is unique. We design custom solutions that address your specific needs and budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hover-card">
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="Security on the Spot Team" class="rounded-3xl shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <h2 class="text-3xl font-bold text-brand-navy text-center mb-16">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 rounded-3xl bg-brand-light hover-card group">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-brand-security group-hover:text-white transition-colors">
                        <svg class="w-8 h-8 text-brand-security group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Integrity</h3>
                    <p class="text-gray-600">We believe in honest advice and transparent pricing. No hidden fees, no unnecessary upsells.</p>
                </div>
                <div class="text-center p-8 rounded-3xl bg-brand-light hover-card group">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-brand-security group-hover:text-white transition-colors">
                        <svg class="w-8 h-8 text-brand-security group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Innovation</h3>
                    <p class="text-gray-600">We stay at the forefront of security and automation technology to bring you the best solutions.</p>
                </div>
                <div class="text-center p-8 rounded-3xl bg-brand-light hover-card group">
                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm group-hover:bg-brand-security group-hover:text-white transition-colors">
                        <svg class="w-8 h-8 text-brand-security group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-brand-navy mb-4 group-hover:text-brand-security transition-colors">Community</h3>
                    <p class="text-gray-600">As a local Miami business, we are committed to making our community safer and more connected.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 bg-brand-navy text-white text-center">
        <div class="container mx-auto px-4 md:px-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-8">Experience the Security on the Spot Difference</h2>
            <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">Join hundreds of satisfied customers who trust us with their technology needs.</p>
            <a href="tel:7868227868" class="bg-brand-security hover:bg-brand-accent text-white px-10 py-4 rounded-full font-bold text-lg transition shadow-xl active-scale inline-block">
                Get Your Free Consultation Today – (786) 822-7868
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
