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
                <img alt="Security on the Spot Logo" class="h-10 md:h-12" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_gyCMySe6rBDd9YcgtSHL4hJ_7SLpT6waVlVB3Fl7IZLNM7-qBKJqGLFoompc_sfl1MdBQ-sgaP7cMTcydJo4vX_n6Ix_AKB9U8hehpxhJ-Zz9qdZt6-3OlOHENhVdeEkSgSq4Xfgs78cQOnfwDcrutTTKtz5IWlJd8mZsHvk-fAO-r7WrdC_QIlO6WVM-b6TYCrzMWb_q1qZdyDqprKMnz7mDVSOtOh9DY56mc0ve3dnazXZFp-sJa6lrwb9WZOf3Qme_b-rjBWR">
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
