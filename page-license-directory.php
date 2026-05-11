<?php
/**
 * Template Name: License Directory
 * Description: Página para el buscador de licencias comerciales.
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <header class="page-header" style="text-align: center; padding: 60px 20px; background: #000; color: #fff;">
            <h1 class="page-title" style="color: #ff9900; font-size: 3rem; margin-bottom: 10px;">Directorio de Licencias TBL</h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto; opacity: 0.8;">
                Busca y verifica licencias comerciales de las Islas Caimán en tiempo real. 
                Información actualizada mensualmente.
            </p>
        </header>

        <section class="search-section" style="padding: 40px 20px; background: #111; min-height: 400px;">
            <div class="container" style="max-width: 1200px; margin: 0 auto;">
                <?php echo do_shortcode('[sots_license_search]'); ?>
            </div>
        </section>

    </main>
</div>

<?php get_footer(); ?>
