<?php
/**
 * Template Name: Commercial & Warehouse Properties
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-brand-navy overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&q=80" alt="Warehouse" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Commercial & Warehouse Security Systems</h1>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Protect your inventory, equipment, and personnel with enterprise-grade surveillance solutions tailored for large-scale operations.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="tel:7868227868" class="bg-brand-security text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg flex items-center space-x-2">
                        <span>Get a Free Quote</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Comprehensive Protection for Large Facilities</h2>
                    <p class="text-gray-600 mb-6 text-lg">
                        Warehouses and commercial properties face unique security challenges, from internal theft to perimeter breaches. Our systems are designed to provide 100% coverage of your facility, ensuring no blind spots.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">High-definition 4K cameras for crystal clear evidence.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">Night vision and thermal imaging for 24/7 monitoring.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">Remote access from any device, anywhere in the world.</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&q=80" alt="Commercial Security" class="rounded-3xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-brand-security text-white p-8 rounded-2xl shadow-xl hidden md:block">
                        <p class="text-4xl font-bold mb-1">24/7</p>
                        <p class="text-sm font-medium opacity-90 uppercase tracking-wider">Remote Access</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <h2 class="text-3xl font-bold text-brand-navy mb-12 text-center">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-lg font-bold text-brand-navy mb-2">How many cameras do I need for my warehouse?</h3>
                    <p class="text-gray-600">The number of cameras depends on the size and layout of your facility. We provide a free on-site consultation to design a custom layout that ensures full coverage.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-lg font-bold text-brand-navy mb-2">Can I monitor multiple locations from one app?</h3>
                    <p class="text-gray-600">Yes, our advanced NVR systems allow you to integrate multiple locations into a single dashboard for easy management.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
