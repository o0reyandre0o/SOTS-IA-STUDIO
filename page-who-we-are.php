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
            <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="About Security on the Spot" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-brand-navy/80"></div>
        </div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-white text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">About Security on the Spot</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Miami's trusted experts in security, automation, and technology integration.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-brand-navy mb-8">Your Local Technology Partner</h2>
                <p class="text-lg text-gray-600 mb-12 leading-relaxed">
                    At Security on the Spot, we believe that technology should make your life safer and simpler. With years of experience serving the Miami community, we have built a reputation for excellence in <strong>security camera installation</strong>, <strong>smart home automation</strong>, and <strong>commercial technology solutions</strong>.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div>
                        <div class="text-4xl font-bold text-brand-security mb-2">10+</div>
                        <div class="text-gray-500 uppercase text-xs font-bold tracking-widest">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-brand-security mb-2">500+</div>
                        <div class="text-gray-500 uppercase text-xs font-bold tracking-widest">Projects Completed</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-brand-security mb-2">100%</div>
                        <div class="text-gray-500 uppercase text-xs font-bold tracking-widest">Local Support</div>
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
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm">
                                <span class="text-brand-security font-bold">01</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy mb-2">Expert Installation</h4>
                                <p class="text-gray-600 text-sm">Our technicians are highly trained and certified to ensure every system is installed to the highest standards.</p>
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm">
                                <span class="text-brand-security font-bold">02</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy mb-2">Premium Technology</h4>
                                <p class="text-gray-600 text-sm">We only use the best equipment from trusted brands like UNV, ensuring reliability and performance.</p>
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm">
                                <span class="text-brand-security font-bold">03</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy mb-2">Personalized Service</h4>
                                <p class="text-gray-600 text-sm">Every property is unique. We design custom solutions that address your specific needs and budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg" alt="Security on the Spot Team" class="rounded-3xl shadow-xl">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
