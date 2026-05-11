<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_Services_Grid_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_services_grid';
    }

    public function get_title() {
        return esc_html__( 'SOTS Services Grid', 'sots' );
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
                'label' => esc_html__( 'Header', 'sots' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Section Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Miami’s Comprehensive Security & Technology Solutions', 'sots' ),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'We design, install, and maintain state-of-the-art security systems for every type of property.', 'sots' ),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'services_section',
            [
                'label' => esc_html__( 'Services', 'sots' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'service_image',
            [
                'label' => esc_html__( 'Service Image', 'sots' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );

        $repeater->add_control(
            'service_title',
            [
                'label' => esc_html__( 'Service Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Service Title', 'sots' ),
            ]
        );

        $repeater->add_control(
            'service_desc',
            [
                'label' => esc_html__( 'Service Description', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Service description goes here.', 'sots' ),
            ]
        );

        $this->add_control(
            'services',
            [
                'label' => esc_html__( 'Services List', 'sots' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_title' => esc_html__( 'Residential Security', 'sots' ),
                        'service_desc' => esc_html__( 'Protect your home and family with 24/7 surveillance and remote monitoring.', 'sots' ),
                        'service_image' => [ 'url' => 'https://securityonthespot.com/wp-content/uploads/2025/09/home-hotel-lobby-security-camera-installation-scaled.jpg' ],
                    ],
                    [
                        'service_title' => esc_html__( 'Small Businesses', 'sots' ),
                        'service_desc' => esc_html__( 'Affordable security cameras miami solutions tailored for restaurants, shops, and offices.', 'sots' ),
                        'service_image' => [ 'url' => 'https://securityonthespot.com/wp-content/uploads/2025/09/home-secure-modern-office-workspace.webp' ],
                    ],
                    [
                        'service_title' => esc_html__( 'Commercial & Industrial', 'sots' ),
                        'service_desc' => esc_html__( 'Advanced CCTV cameras designed to secure warehouses, buildings, and large enterprises.', 'sots' ),
                        'service_image' => [ 'url' => 'https://securityonthespot.com/wp-content/uploads/2025/09/home-securing-modern-office-buildings-at-night-1.webp' ],
                    ],
                    [
                        'service_title' => esc_html__( 'Restaurants & Hospitality', 'sots' ),
                        'service_desc' => esc_html__( 'Keep your staff, customers, and operations safe with reliable video surveillance.', 'sots' ),
                        'service_image' => [ 'url' => 'https://securityonthespot.com/wp-content/uploads/2025/09/home-restaurant-security-camera-installation.webp' ],
                    ],
                ],
                'title_field' => '{{{ service_title }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="py-16 md:py-24 bg-brand-light">
            <div class="container mx-auto px-4 md:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <?php if ( ! empty( $settings['title'] ) ) : ?>
                        <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6"><?php echo wp_kses_post( $settings['title'] ); ?></h2>
                    <?php endif; ?>
                    <?php if ( ! empty( $settings['subtitle'] ) ) : ?>
                        <p class="text-gray-600 text-lg"><?php echo wp_kses_post( $settings['subtitle'] ); ?></p>
                    <?php endif; ?>
                </div>

                <?php if ( $settings['services'] ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php foreach ( $settings['services'] as $item ) : ?>
                    <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 group border border-gray-100">
                        <div class="h-48 overflow-hidden">
                            <?php if ( ! empty( $item['service_image']['url'] ) ) : ?>
                                <img src="<?php echo esc_url( $item['service_image']['url'] ); ?>" alt="<?php echo esc_attr( $item['service_title'] ); ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <?php endif; ?>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-brand-navy mb-3"><?php echo wp_kses_post( $item['service_title'] ); ?></h3>
                            <p class="text-gray-500 text-sm leading-relaxed"><?php echo wp_kses_post( $item['service_desc'] ); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php
    }
}
