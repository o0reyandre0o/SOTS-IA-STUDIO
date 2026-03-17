<?php
/**
 * Template Name: Home Theater
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-brand-navy overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <img src="https://images.unsplash.com/photo-1593784991095-a205069470b6?auto=format&fit=crop&q=80" alt="Home Theater Miami" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Custom Home Theater Design & Installation in Miami</h1>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    Bring the cinema experience home. High-performance home theater solutions for luxury residences in Miami. Stunning visuals and immersive sound tailored to your space.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="tel:7868227868" class="bg-brand-security text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-700 transition shadow-lg flex items-center space-x-2">
                        <span>Get Your Free Consultation Today – (786) 822-7868</span>
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
                    <h2 class="text-3xl font-bold text-brand-navy mb-6">The Ultimate Cinema Experience</h2>
                    <p class="text-gray-600 mb-6 text-lg">
                        Our home theater systems are designed to provide the ultimate cinema experience in the comfort of your own home, with high-definition visuals and immersive surround sound.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">4K/8K Projection: Crystal-clear visuals on professional-grade screens.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">Dolby Atmos Sound: Immersive 3D audio that puts you in the center of the action.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">Acoustic Treatment: Professional soundproofing and calibration.</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <div class="mt-1 bg-blue-100 p-1 rounded-full">
                                <svg class="w-4 h-4 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-gray-700 font-medium">Luxury Seating: Ergonomic, motorized theater chairs for ultimate comfort.</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1593784991095-a205069470b6?auto=format&fit=crop&q=80" alt="Home Theater Miami" class="rounded-3xl shadow-2xl">
                    <div class="absolute -bottom-6 -right-6 bg-brand-security text-white p-8 rounded-2xl shadow-xl hidden md:block">
                        <p class="text-4xl font-bold mb-1">4K</p>
                        <p class="text-sm font-medium opacity-90 uppercase tracking-wider">Ultra HD</p>
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
                    <h3 class="text-lg font-bold text-brand-navy mb-2">Can I use my existing speakers?</h3>
                    <p class="text-gray-600">We can often integrate existing high-quality equipment into a new system.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm">
                    <h3 class="text-lg font-bold text-brand-navy mb-2">How long does installation take?</h3>
                    <p class="text-gray-600">Most installations are completed within a few days, depending on complexity.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
