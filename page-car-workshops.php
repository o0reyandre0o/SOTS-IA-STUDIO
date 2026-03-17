<?php
/**
 * Template Name: Car Workshops Security
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-brand-navy overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&q=80" alt="Car Workshop" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Security for Car Workshops & Automotive Shops</h1>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Protect valuable tools, equipment, and customer vehicles with our specialized automotive surveillance solutions.
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
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">Secure Your Assets and Customer Property</h2>
                    <p class="text-gray-600 mb-6 text-lg">
                        Automotive shops are targets for theft and vandalism. Our security systems provide the protection you need to ensure your tools and customer vehicles are safe.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">Monitor service bays, tool storage, and customer vehicle areas.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">High-resolution cameras for clear evidence in case of theft.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">Remote monitoring for 24/7 peace of mind.</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1530046339160-ce3e5b0c7a2f?auto=format&fit=crop&q=80" alt="Car Workshop Security" class="rounded-3xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-brand-security text-white p-8 rounded-2xl shadow-xl hidden md:block">
                        <p class="text-4xl font-bold mb-1">HD</p>
                        <p class="text-sm font-medium opacity-90 uppercase tracking-wider">Video Quality</p>
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
                    <h3 class="text-lg font-bold text-brand-navy mb-2">Can the cameras see inside the vehicles?</h3>
                    <p class="text-gray-600">Depending on the placement and lighting, our high-resolution cameras can provide clear views of the interior and exterior of vehicles.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-lg font-bold text-brand-navy mb-2">Are the cameras resistant to grease and oil?</h3>
                    <p class="text-gray-600">We use specialized cameras designed to withstand the harsh environment of an automotive shop, including exposure to grease and oil.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
