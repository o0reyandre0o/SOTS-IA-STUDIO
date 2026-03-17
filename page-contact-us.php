<?php
/**
 * Template Name: Contact Us Page
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="py-20 bg-brand-navy text-white">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Contact Us</h1>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Ready to secure your property or automate your home? Get in touch with Miami's experts today.
            </p>
        </div>
    </section>

    <!-- Contact Info & Form -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Info -->
                <div class="lg:col-span-1 space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold text-brand-navy mb-6">Get in Touch</h3>
                        <p class="text-gray-600 mb-8">We are available 24/7 for emergency support and consultations.</p>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-security">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy">Office Address</h4>
                                <p class="text-gray-500 text-sm">123 Miami Tech Way, Suite 100<br>Miami, FL 33101</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-security">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1.01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy">Phone Number</h4>
                                <p class="text-gray-500 text-sm">(786) 822-7868</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="text-brand-security">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-brand-navy">Email Address</h4>
                                <p class="text-gray-500 text-sm">info@securityonthespot.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <div class="lg:col-span-2 bg-brand-light p-10 rounded-3xl border border-gray-100">
                    <h3 class="text-2xl font-bold text-brand-navy mb-8">Send a Message</h3>
                    <form action="#" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-brand-navy uppercase tracking-wider">Full Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-security focus:ring-0 transition" placeholder="John Doe">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-brand-navy uppercase tracking-wider">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-security focus:ring-0 transition" placeholder="john@example.com">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-brand-navy uppercase tracking-wider">Phone Number</label>
                            <input type="tel" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-security focus:ring-0 transition" placeholder="(305) 000-0000">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-brand-navy uppercase tracking-wider">Service Needed</label>
                            <select class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-security focus:ring-0 transition">
                                <option>Security Cameras</option>
                                <option>Home Automation</option>
                                <option>Access Control</option>
                                <option>Fire Alarms</option>
                                <option>Networking</option>
                                <option>Audio/Video</option>
                            </select>
                        </div>
                        <div class="md:col-span-2 space-y-2">
                            <label class="text-sm font-bold text-brand-navy uppercase tracking-wider">Your Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-security focus:ring-0 transition" placeholder="How can we help you?"></textarea>
                        </div>
                        <div class="md:col-span-2">
                            <button type="submit" class="w-full bg-brand-security hover:bg-brand-accent text-white font-bold py-4 rounded-xl transition shadow-lg">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Placeholder -->
    <section class="h-[400px] bg-gray-200 relative">
        <div class="absolute inset-0 flex items-center justify-center">
            <p class="text-gray-500 font-bold">Google Map Integration Placeholder</p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
