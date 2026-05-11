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
        $widgets_manager->register( new \SOTS_Hero_Widget() );
    }
}

SOTS_Elementor_Widgets_Extension::instance();
