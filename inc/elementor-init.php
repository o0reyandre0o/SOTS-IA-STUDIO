<?php
/**
 * Elementor Custom Widgets Init
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

final class SOTS_Elementor_Widgets_Extension {

    const VERSION = '1.0.0';
    const MINIMUM_ELEMENTOR_VERSION = '3.0.0';
    const MINIMUM_PHP_VERSION = '7.0';

    private static $_instance = null;

    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct() {
        // En los Themes, plugins_loaded ya pasó. Enganchamos directo a init o Elementor.
        add_action( 'elementor/widgets/register', [ $this, 'init_widgets' ] );
        add_action( 'elementor/elements/categories_registered', [ $this, 'add_widget_categories' ] );
    }

    public function add_widget_categories( $elements_manager ) {
        $elements_manager->add_category(
            'sots-widgets',
            [
                'title' => 'SOTS Widgets',
                'icon' => 'fa fa-plug',
            ]
        );
    }

    public function init_widgets( $widgets_manager ) {
        // Check for required PHP version
        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            return;
        }

        require_once( __DIR__ . '/widgets/hero-widget.php' );
        require_once( __DIR__ . '/widgets/offer-widget.php' );
        require_once( __DIR__ . '/widgets/services-grid-widget.php' );
        require_once( __DIR__ . '/widgets/about-widget.php' );
        require_once( __DIR__ . '/widgets/brands-widget.php' );
        require_once( __DIR__ . '/widgets/why-choose-us-widget.php' );
        require_once( __DIR__ . '/widgets/review-widget.php' );
        require_once( __DIR__ . '/widgets/solutions-widget.php' );
        require_once( __DIR__ . '/widgets/faq-widget.php' );
        require_once( __DIR__ . '/widgets/final-cta-widget.php' );
        
        $widgets_manager->register( new \SOTS_Hero_Widget() );
        $widgets_manager->register( new \SOTS_Offer_Widget() );
        $widgets_manager->register( new \SOTS_Services_Grid_Widget() );
        $widgets_manager->register( new \SOTS_About_Widget() );
        $widgets_manager->register( new \SOTS_Brands_Widget() );
        $widgets_manager->register( new \SOTS_Why_Choose_Us_Widget() );
        $widgets_manager->register( new \SOTS_Review_Widget() );
        $widgets_manager->register( new \SOTS_Solutions_Widget() );
        $widgets_manager->register( new \SOTS_FAQ_Widget() );
        $widgets_manager->register( new \SOTS_Final_CTA_Widget() );
    }
}

SOTS_Elementor_Widgets_Extension::instance();
