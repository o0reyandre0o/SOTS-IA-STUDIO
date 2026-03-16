<?php
/**
 * The footer for our theme
 */
?>
<footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <div>
                <img 
                    alt="Security on the Spot Logo" 
                    class="h-10 md:h-12 mb-6 object-contain" 
                    src="https://securityonthespot.com/wp-content/uploads/2025/08/security-on-the-spot-logo-6.webp"
                    referrerPolicy="no-referrer"
                >
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Security on the Spot: Providing Miami's families and businesses with high-end, reliable security solutions for over 20 years. 4.9-star rated.
                </p>
                <div class="flex space-x-4">
                    <a class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-security transition" href="#">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path></svg>
                    </a>
                    <a class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-security transition" href="#">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><rect height="20" rx="5" ry="5" width="20" x="2" y="2"></rect><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-6">Quick Links</h4>
                <ul class="space-y-4 text-gray-400">
                    <li><a class="hover:text-white transition" href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot' ) ); ?>">Security Cameras</a></li>
                    <li><a class="hover:text-white transition" href="<?php echo esc_url( home_url( '/home-automation-smart-homes-in-miami' ) ); ?>">Home Automation</a></li>
                    <li><a class="hover:text-white transition" href="<?php echo esc_url( home_url( '/access-control' ) ); ?>">Access Control</a></li>
                    <li><a class="hover:text-white transition" href="<?php echo esc_url( home_url( '/fire-systems' ) ); ?>">Fire Systems</a></li>
                    <li><a class="hover:text-white transition" href="<?php echo esc_url( home_url( '/networking-fiber-optics' ) ); ?>">Networking</a></li>
                    <li><a class="hover:text-white transition" href="<?php echo esc_url( home_url( '/audio-video-integration-miami' ) ); ?>">Audio & Video</a></li>
                    <li><a class="hover:text-white transition" href="<?php echo esc_url( home_url( '/video-wall-installation-miami' ) ); ?>">Video Walls</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-6">Service Areas</h4>
                <ul class="space-y-4 text-gray-400">
                    <li>Doral & Kendall</li>
                    <li>Brickell & Downtown</li>
                    <li>Coral Gables</li>
                    <li>Miami Beach</li>
                    <li>South Florida Region</li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-lg mb-6">Contact Us</h4>
                <ul class="space-y-4 text-gray-400">
                    <li class="flex items-start space-x-2">
                        <svg class="w-5 h-5 text-brand-security mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        <span>4861 NW 72nd Ave, Miami, FL 33166</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        <a class="hover:text-white transition" href="tel:7868227868">(786) 822-7868</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        <span>Mon-Fri: 8:00 AM – 6:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
            <p>© <?php echo date('Y'); ?> Security On The Spot • All Rights Reserved</p>
            <p class="mt-4 md:mt-0">Professional Security Solutions in Miami</p>
        </div>
    </div>

    <!-- Sticky Mobile CTA -->
    <div class="lg:hidden fixed bottom-6 left-0 right-0 z-40 px-6 pointer-events-none">
        <div class="flex space-x-3 pointer-events-auto glass-morphism p-2 rounded-[2rem] shadow-2xl">
            <a 
                href="tel:7868227868"
                class="flex-1 bg-brand-navy text-white py-4 rounded-2xl font-bold text-center shadow-lg flex items-center justify-center space-x-2 active-scale transition-transform"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                <span class="text-sm">Call Now</span>
            </a>
            <a 
                href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"
                class="flex-1 bg-brand-security text-white py-4 rounded-2xl font-bold text-center shadow-lg flex items-center justify-center space-x-2 active-scale transition-transform"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                <span class="text-sm">Quote</span>
            </a>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
