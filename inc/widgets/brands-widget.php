<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_Brands_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_brands';
    }

    public function get_title() {
        return esc_html__( 'SOTS Brands Carousel', 'sots' );
    }

    public function get_icon() {
        return 'eicon-gallery-grid';
    }

    public function get_categories() {
        return [ 'sots-widgets' ];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__( 'Content', 'sots' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'AUTHORIZED BY:', 'sots' ),
            ]
        );

        $this->add_control(
            'gallery',
            [
                'label' => esc_html__( 'Add Images', 'sots' ),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'default' => [],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="py-12 bg-brand-light border-y border-gray-100">
            <div class="container mx-auto px-4">
                <?php if ( ! empty( $settings['title'] ) ) : ?>
                    <h3 class="text-center text-gray-400 font-bold uppercase tracking-widest text-xs mb-10"><?php echo esc_html( $settings['title'] ); ?></h3>
                <?php endif; ?>
                
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-50 grayscale hover:grayscale-0 transition duration-500">
                    <?php if ( ! empty( $settings['gallery'] ) ) : ?>
                        <?php foreach ( $settings['gallery'] as $image ) : ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="Brand Logo" class="h-6 md:h-8">
                        <?php endforeach; ?>
                    <?php else : ?>
                        <!-- Default placeholders if empty -->
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/sonos-company-logo.webp" alt="Sonos" class="h-6 md:h-8">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/ubiquiti-logo-corrupted-file-graphic.webp" alt="Ubiquiti" class="h-6 md:h-8">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/uniview-logo-red-banner-variant.webp" alt="Uniview" class="h-6 md:h-8">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/alhua-logo-red-and-black-silhouette.webp" alt="Alhua" class="h-6 md:h-8">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/control4-logo-gray-and-red-gradient.webp" alt="Control4" class="h-6 md:h-8">
                        <img src="https://securityonthespot.com/wp-content/uploads/2025/09/icr-real-time-blob-detection.webp" alt="ICR" class="h-6 md:h-8">
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
