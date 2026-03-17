<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    // SEO Optimization
    $site_name = "Security on the Spot";
    $page_title = "";
    $meta_desc = "";
    $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/home-unv-security-camera-high-definition-outdoor-model.webp";
    $current_url = home_url( add_query_arg( array(), $wp->request ) );
    
    if ( is_front_page() ) {
        $page_title = "Security Camera Installation Miami & Home Automation | " . $site_name;
        $meta_desc = "Miami's #1 experts in security camera installation, CCTV systems, and smart home automation. 24/7 protection for your home or business with Miami’s most trusted security experts.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/home-unv-security-camera-high-definition-outdoor-model.webp";
    } elseif ( is_page('security-cameras-security-on-the-spot') ) {
        $page_title = "Best Security Camera Installation Miami | CCTV & Surveillance Experts";
        $meta_desc = "Expert security camera installation in Miami. High-definition UNV CCTV systems for restaurants, small businesses, and homes. Get your free quote today!";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/restaurants-restaurant-outdoor-security-camera-scaled.jpg";
    } elseif ( is_page('home-automation-smart-homes-in-miami') ) {
        $page_title = "Smart Home Automation Miami | Lighting & Integration Experts";
        $meta_desc = "Top-rated home automation installers near me in Miami. Smart lighting control, climate integration, and whole-home automation systems in South Florida.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/home-automation-smart-homes-in-miami-miami-smart-home-control-scaled.jpg";
    } elseif ( is_page('access-control') ) {
        $page_title = "Access Control Systems Miami | Intercom & Keyless Entry";
        $meta_desc = "Professional access control and intercom system installation in Miami. Secure your property with video intercoms and managed entry solutions.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/access-control-systems-miami-keyless-entry-installation-scaled.jpg";
    } elseif ( is_page('fire-systems') ) {
        $page_title = "Commercial Fire Alarm Installation Miami | Fire Safety Systems";
        $meta_desc = "Certified commercial fire alarm installation in Miami. Professional fire safety systems and monitoring for businesses in South Florida.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/fire-alarm-systems-miami-commercial-installation-scaled.jpg";
    } elseif ( is_page('networking-fiber-optics') ) {
        $page_title = "Networking & Fiber Optics Miami | Structured Cabling";
        $meta_desc = "Robust networking and fiber optic installation in Miami. Structured cabling and high-speed Wi-Fi solutions for homes and businesses.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/networking-services-miami-structured-cabling-scaled.jpg";
    } elseif ( is_page('audio-video-services') || is_page('audio-video-integration-miami') ) {
        $page_title = "Audio & Video Integration Miami | Home Theater Setup";
        $meta_desc = "Expert audio & video integration in Miami. High-end home theater installation and multi-room audio solutions for luxury homes and businesses.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/home-theater-installation-miami-surround-sound-setup-scaled.jpg";
    } elseif ( is_page('video-wall-installation-miami') ) {
        $page_title = "Professional Video Wall Installation Miami | South Florida";
        $meta_desc = "Top-rated video wall installation in Miami. Seamless LED & LCD displays for commercial spaces, sports bars, and high-end residential entertainment.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/08/image-2.jpg";
    } else {
        $page_title = wp_get_document_title();
        $meta_desc = "Security on the Spot provides professional security camera installation, home automation, and technology integration in Miami, FL.";
    }
    ?>

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <link rel="icon" type="image/webp" href="https://securityonthespot.com/wp-content/uploads/2025/08/security-on-the-spot-logo-6.webp">

    <!-- Social Graph (Open Graph) -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $meta_desc; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:site_name" content="<?php echo $site_name; ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $meta_desc; ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Security on the Spot",
      "image": "https://securityonthespot.com/wp-content/uploads/2025/08/security-on-the-spot-logo-6.webp",
      "@id": "https://securityonthespot.com",
      "url": "https://securityonthespot.com",
      "telephone": "+17868227868",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "4861 NW 72nd Ave",
        "addressLocality": "Miami",
        "addressRegion": "FL",
        "postalCode": "33166",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 25.8185,
        "longitude": -80.3125
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "08:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/securityonthespot",
        "https://www.instagram.com/securityonthespot"
      ]
    }
    </script>

    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            navy: '#0B2447',
                            security: '#2563eb',
                            accent: '#3E54AC',
                            light: '#F8FAFC'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body <?php body_class('bg-white text-slate-800 font-sans'); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 bg-white border-b border-gray-100 shadow-sm">
    <nav class="container mx-auto px-4 md:px-8 py-3 md:py-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="flex items-center">
                <img alt="Security on the Spot Logo" class="h-8 md:h-14 w-auto object-contain" src="https://securityonthespot.com/wp-content/uploads/2025/08/security-on-the-spot-logo-6.webp">
            </a>
        </div>

        <!-- Desktop Nav -->
        <div class="hidden lg:flex items-center space-x-6 text-sm font-semibold text-brand-navy">
            <div class="relative group">
                <a href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot/' ) ); ?>" class="flex items-center space-x-1 hover:text-brand-security transition py-4">
                    <span>Security Cameras</span>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div class="absolute top-full left-0 w-64 bg-white shadow-xl border border-gray-100 rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="<?php echo esc_url( home_url( '/commercial-warehouse/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Commercial & Warehouse Properties</a>
                    <a href="<?php echo esc_url( home_url( '/restaurants/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Restaurants</a>
                    <a href="<?php echo esc_url( home_url( '/small-businesses/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Small Businesses</a>
                    <a href="<?php echo esc_url( home_url( '/retail/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Retail</a>
                    <a href="<?php echo esc_url( home_url( '/families/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Families</a>
                    <a href="<?php echo esc_url( home_url( '/car-workshops/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Car Workshops</a>
                </div>
            </div>

            <div class="relative group">
                <a href="<?php echo esc_url( home_url( '/home-automation-smart-homes-in-miami/' ) ); ?>" class="flex items-center space-x-1 hover:text-brand-security transition py-4">
                    <span>Home Automation</span>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div class="absolute top-full left-0 w-64 bg-white shadow-xl border border-gray-100 rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="<?php echo esc_url( home_url( '/control-integration/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Control Integration</a>
                    <a href="<?php echo esc_url( home_url( '/lighting-control/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Lighting Control</a>
                    <a href="<?php echo esc_url( home_url( '/multi-zone-audio/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Multi-Zone Audio</a>
                    <a href="<?php echo esc_url( home_url( '/home-theater/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Home Theater</a>
                    <a href="<?php echo esc_url( home_url( '/video-wall-installation-miami/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Video-Wall Installation</a>
                </div>
            </div>

            <div class="relative group">
                <a href="<?php echo esc_url( home_url( '/access-control/' ) ); ?>" class="flex items-center space-x-1 hover:text-brand-security transition py-4">
                    <span>Access Control</span>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </a>
                <div class="absolute top-full left-0 w-64 bg-white shadow-xl border border-gray-100 rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="<?php echo esc_url( home_url( '/intercom-systems/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Intercom Systems</a>
                    <a href="<?php echo esc_url( home_url( '/entry-exit-systems/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Entry/Exit Systems</a>
                </div>
            </div>

            <a class="hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/networking-fiber-optics' ) ); ?>">Networking & Fiber Optics</a>
            <a class="hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/fire-systems' ) ); ?>">Fire Systems</a>

            <div class="relative group">
                <button class="flex items-center space-x-1 hover:text-brand-security transition py-4">
                    <span>Who we are?</span>
                    <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="absolute top-full left-0 w-64 bg-white shadow-xl border border-gray-100 rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                    <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-light hover:text-brand-security transition">Contact Us</a>
                </div>
            </div>
        </div>

        <div class="flex items-center space-x-2 md:space-x-4">
            <a class="hidden lg:block text-brand-navy font-bold text-sm" href="tel:7868227868">
                (786) 822-7868
            </a>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-navy hover:bg-brand-security text-white px-4 md:px-6 py-2.5 rounded-full text-[11px] md:text-sm font-bold transition whitespace-nowrap shadow-md active-scale">
                Free Quote
            </a>
            
            <!-- Mobile Menu Toggle -->
            <button id="menu-toggle" class="lg:hidden text-brand-navy p-2 bg-gray-50 rounded-xl flex-shrink-0 ml-1 hover:bg-blue-50 transition-colors border border-gray-100">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden invisible opacity-0 transition-all duration-300">
        <div id="menu-backdrop" class="absolute inset-0 bg-brand-navy/40 backdrop-blur-sm"></div>
        <div id="menu-content" class="absolute right-0 top-0 bottom-0 w-4/5 max-w-sm bg-white shadow-2xl p-8 translate-x-full transition-transform duration-300 ease-in-out">
            <div class="flex flex-col space-y-4 mt-12">
                <a class="text-xl font-bold text-brand-navy hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                
                <div class="flex flex-col">
                    <div class="flex items-center justify-between py-2">
                        <a href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot/' ) ); ?>" class="text-xl font-bold text-brand-navy hover:text-brand-security transition flex-1">Security Cameras</a>
                        <button class="mobile-submenu-toggle p-2 text-brand-navy">
                            <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                    <div class="mobile-submenu hidden flex-col pl-4 space-y-2 mt-2 border-l-2 border-blue-100">
                        <a href="<?php echo esc_url( home_url( '/commercial-warehouse/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Commercial & Warehouse Properties</a>
                        <a href="<?php echo esc_url( home_url( '/restaurants/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Restaurants</a>
                        <a href="<?php echo esc_url( home_url( '/small-businesses/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Small Businesses</a>
                        <a href="<?php echo esc_url( home_url( '/retail/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Retail</a>
                        <a href="<?php echo esc_url( home_url( '/families/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Families</a>
                        <a href="<?php echo esc_url( home_url( '/car-workshops/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Car Workshops</a>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center justify-between py-2">
                        <a href="<?php echo esc_url( home_url( '/home-automation-smart-homes-in-miami/' ) ); ?>" class="text-xl font-bold text-brand-navy hover:text-brand-security transition flex-1">Home Automation</a>
                        <button class="mobile-submenu-toggle p-2 text-brand-navy">
                            <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                    <div class="mobile-submenu hidden flex-col pl-4 space-y-2 mt-2 border-l-2 border-blue-100">
                        <a href="<?php echo esc_url( home_url( '/control-integration/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Control Integration</a>
                        <a href="<?php echo esc_url( home_url( '/lighting-control/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Lighting Control</a>
                        <a href="<?php echo esc_url( home_url( '/multi-zone-audio/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Multi-Zone Audio</a>
                        <a href="<?php echo esc_url( home_url( '/home-theater/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Home Theater</a>
                        <a href="<?php echo esc_url( home_url( '/video-wall-installation-miami/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Video-Wall Installation</a>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center justify-between py-2">
                        <a href="<?php echo esc_url( home_url( '/access-control/' ) ); ?>" class="text-xl font-bold text-brand-navy hover:text-brand-security transition flex-1">Access Control</a>
                        <button class="mobile-submenu-toggle p-2 text-brand-navy">
                            <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                    <div class="mobile-submenu hidden flex-col pl-4 space-y-2 mt-2 border-l-2 border-blue-100">
                        <a href="<?php echo esc_url( home_url( '/intercom-systems/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Intercom Systems</a>
                        <a href="<?php echo esc_url( home_url( '/entry-exit-systems/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Entry/Exit Systems</a>
                    </div>
                </div>

                <a class="text-xl font-bold text-brand-navy hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/networking-fiber-optics' ) ); ?>">Networking & Fiber Optics</a>
                <a class="text-xl font-bold text-brand-navy hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/fire-systems' ) ); ?>">Fire Systems</a>

                <div class="flex flex-col">
                    <button class="mobile-submenu-toggle flex items-center justify-between text-xl font-bold text-brand-navy hover:text-brand-security transition py-2">
                        <span>Who we are?</span>
                        <svg class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="mobile-submenu hidden flex-col pl-4 space-y-2 mt-2 border-l-2 border-blue-100">
                        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="py-2 text-gray-600 hover:text-brand-security transition text-sm font-medium">Contact Us</a>
                    </div>
                </div>
                <div class="pt-8 border-t border-gray-100">
                    <a href="tel:7868227868" class="flex items-center space-x-3 text-brand-navy font-bold mb-6">
                        <svg class="w-6 h-6 text-brand-security" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                        <span>(786) 822-7868</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="block w-full bg-brand-navy text-white text-center py-4 rounded-2xl font-bold shadow-lg active-scale">
                        Get a Free Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuContent = document.getElementById('menu-content');
    const menuBackdrop = document.getElementById('menu-backdrop');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    function openMenu() {
        mobileMenu.classList.remove('invisible');
        mobileMenu.classList.add('opacity-100');
        menuContent.classList.remove('translate-x-full');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        mobileMenu.classList.remove('opacity-100');
        menuContent.classList.add('translate-x-full');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        document.body.style.overflow = '';
        setTimeout(() => {
            if (!mobileMenu.classList.contains('opacity-100')) {
                mobileMenu.classList.add('invisible');
            }
        }, 300);
    }

    menuToggle.addEventListener('click', function() {
        const isOpen = mobileMenu.classList.contains('opacity-100');
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    menuBackdrop.addEventListener('click', closeMenu);

    // Mobile Submenu Logic
    const submenuToggles = document.querySelectorAll('.mobile-submenu-toggle');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const submenu = this.closest('.flex-col').querySelector('.mobile-submenu');
            const icon = this.querySelector('svg');
            
            // Close other submenus
            document.querySelectorAll('.mobile-submenu').forEach(other => {
                if (other !== submenu) {
                    other.classList.add('hidden');
                    other.previousElementSibling.querySelector('svg').classList.remove('rotate-180');
                }
            });
            
            submenu.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
});
</script>
