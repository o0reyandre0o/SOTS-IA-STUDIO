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
        $meta_desc = "Miami's #1 experts in security camera installation, CCTV systems, and smart home automation. Professional UNV surveillance for homes & businesses in Miami-Dade.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/home-unv-security-camera-high-definition-outdoor-model.webp";
    } elseif ( is_page('security-cameras-security-on-the-spot') ) {
        $page_title = "Best Security Camera Installation Miami | CCTV & Surveillance";
        $meta_desc = "Expert security camera installation in Miami. High-definition UNV CCTV systems for restaurants, small businesses, and homes. Get a free quote today!";
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
    } elseif ( is_page('audio-video-services') ) {
        $page_title = "Home Theater Installation Miami & Video Walls South Florida";
        $meta_desc = "Expert home theater installation in Miami and professional video wall integration in South Florida. High-end audio/video solutions for every space.";
        $og_image = "https://securityonthespot.com/wp-content/uploads/2025/09/home-theater-installation-miami-surround-sound-setup-scaled.jpg";
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
    <nav class="container mx-auto px-4 md:px-8 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img alt="Security on the Spot Logo" class="h-10 md:h-14 w-auto object-contain" src="https://securityonthespot.com/wp-content/uploads/2025/08/security-on-the-spot-logo-6.webp">
            </a>
        </div>
        <div class="hidden lg:flex items-center space-x-8 text-sm font-semibold text-brand-navy">
            <a class="hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/security-cameras-security-on-the-spot' ) ); ?>">Security Cameras</a>
            <a class="hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/home-automation-smart-homes-in-miami' ) ); ?>">Home Automation</a>
            <a class="hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/access-control' ) ); ?>">Access Control</a>
            <a class="hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/fire-systems' ) ); ?>">Fire Systems</a>
            <a class="hover:text-brand-security transition" href="<?php echo esc_url( home_url( '/networking-fiber-optics' ) ); ?>">Networking</a>
        </div>
        <div class="flex items-center space-x-4">
            <a class="hidden sm:block text-brand-navy font-bold text-sm" href="tel:7868227868">
                (786) 822-7868
            </a>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="bg-brand-navy hover:bg-brand-security text-white px-6 py-2 rounded-full text-sm font-bold transition">
                Free Quote
            </a>
        </div>
    </nav>
</header>
