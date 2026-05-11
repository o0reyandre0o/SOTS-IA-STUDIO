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
        add_action( 'plugins_loaded', [ $this, 'init' ] );
    }

    public function init() {
        // Check if Elementor installed and activated
        if ( ! did_action( 'elementor/loaded' ) ) {
            return;
        }

        // Check for required Elementor version
        if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
            return;
        }

        // Check for required PHP version
        if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
            return;
        }

        // Add Plugin actions
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
        require_once( __DIR__ . '/widgets/hero-widget.php' );
        $widgets_manager->register( new \SOTS_Hero_Widget() );
    }
}

SOTS_Elementor_Widgets_Extension::instance();
