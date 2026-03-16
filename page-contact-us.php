<?php
/**
 * Template Name: Contact Page
 * The template for displaying the contact page
 */
get_header();
?>

<main id="primary" class="site-main">
    <section class="bg-brand-navy text-white py-20">
        <div class="container mx-auto px-4 md:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Contact Us</h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Ready to secure your property? Get in touch with Miami's security experts today.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Info -->
                <div>
                    <h2 class="text-3xl font-bold text-brand-navy mb-8">Get in Touch</h2>
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="bg-brand-light p-3 rounded-lg text-brand-security">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-brand-navy">Phone</h3>
                                <p class="text-gray-600">(786) 822-7868</p>
                                <p class="text-sm text-gray-500">Available 24/7 for emergencies</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-brand-light p-3 rounded-lg text-brand-security">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-brand-navy">Email</h3>
                                <p class="text-gray-600">info@securityonthespot.com</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="bg-brand-light p-3 rounded-lg text-brand-security">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-brand-navy">Service Area</h3>
                                <p class="text-gray-600">Miami, FL and surrounding South Florida areas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 p-8 bg-brand-light rounded-2xl border border-gray-100">
                        <h3 class="font-bold text-xl text-brand-navy mb-4">Business Hours</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex justify-between"><span>Monday - Friday:</span> <span class="font-semibold">8:00 AM - 6:00 PM</span></li>
                            <li class="flex justify-between"><span>Saturday:</span> <span class="font-semibold">9:00 AM - 4:00 PM</span></li>
                            <li class="flex justify-between"><span>Sunday:</span> <span class="font-semibold text-brand-security">Emergency Only</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form Placeholder -->
                <div class="bg-slate-50 p-8 md:p-12 rounded-3xl border border-gray-100 shadow-sm">
                    <h2 class="text-2xl font-bold text-brand-navy mb-6">Send us a Message</h2>
                    <?php
                    // In a real WP site, we'd use a shortcode like [contact-form-7 id="..."]
                    // For now, we'll build a styled HTML form
                    ?>
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-brand-security focus:border-transparent outline-none transition" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-brand-security focus:border-transparent outline-none transition" placeholder="(786) 000-0000">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-brand-security focus:border-transparent outline-none transition" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Service Needed</label>
                            <select class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-brand-security focus:border-transparent outline-none transition">
                                <option>Security Cameras</option>
                                <option>Access Control</option>
                                <option>Home Automation</option>
                                <option>Fire Systems</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:ring-2 focus:ring-brand-security focus:border-transparent outline-none transition" placeholder="Tell us about your project..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-brand-navy hover:bg-brand-security text-white font-bold py-4 rounded-lg transition shadow-lg">
                            Request Free Quote
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
