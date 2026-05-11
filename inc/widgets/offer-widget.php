<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_Offer_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_offer';
    }

    public function get_title() {
        return esc_html__( 'SOTS Offer Section', 'sots' );
    }

    public function get_icon() {
        return 'eicon-image-box';
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
            'image',
            [
                'label' => esc_html__( 'Choose Image', 'sots' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'https://securityonthespot.com/wp-content/uploads/2025/11/home-sots-carrousel-1.png',
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Complete Home Security Package for $1,499', 'sots' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'We believe professional security should be transparent. Our Miami Home Security Package includes high-definition cameras, professional installation, and a 3-year total guarantee—all for one flat fee with no monthly contracts.', 'sots' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'feature_title',
            [
                'label' => esc_html__( 'Feature Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Complete Package for $1,499:', 'sots' ),
            ]
        );

        $repeater->add_control(
            'feature_desc',
            [
                'label' => esc_html__( 'Feature Description', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get your system professionally installed for one flat fee.', 'sots' ),
            ]
        );

        $this->add_control(
            'features',
            [
                'label' => esc_html__( 'Features List', 'sots' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'feature_title' => esc_html__( 'Complete Package for $1,499:', 'sots' ),
                        'feature_desc' => esc_html__( 'Get your system professionally installed for one flat fee.', 'sots' ),
                    ],
                    [
                        'feature_title' => esc_html__( '100% Transparent Pricing:', 'sots' ),
                        'feature_desc' => esc_html__( 'No hidden fees. No monthly contracts.', 'sots' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'Top-Rated in Miami:', 'sots' ),
                        'feature_desc' => esc_html__( '4.9 Stars on Google and Miami’s trusted installer.', 'sots' ),
                    ],
                    [
                        'feature_title' => esc_html__( '3-Year Total Guarantee:', 'sots' ),
                        'feature_desc' => esc_html__( 'Includes a 2-Year Hardware Warranty + 1-Year Installation Warranty.', 'sots' ),
                    ],
                    [
                        'feature_title' => esc_html__( 'View From Anywhere:', 'sots' ),
                        'feature_desc' => esc_html__( 'Get 24/7 remote access from your phone or computer.', 'sots' ),
                    ],
                ],
                'title_field' => '{{{ feature_title }}}',
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => esc_html__( 'Button Text', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get This $1,499 Offer Now', 'sots' ),
            ]
        );

        $this->add_control(
            'button_link',
            [
                'label' => esc_html__( 'Button Link', 'sots' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'sots' ),
                'default' => [
                    'url' => home_url( '/contact-us' ),
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        
        $target = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : '';
        $link = $settings['button_link']['url'];
        ?>
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 md:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-1/2">
                        <?php if ( ! empty( $settings['image']['url'] ) ) : ?>
                            <img 
                                src="<?php echo esc_url( $settings['image']['url'] ); ?>" 
                                alt="<?php echo esc_attr( $settings['title'] ); ?>" 
                                class="rounded-3xl shadow-2xl w-full"
                            >
                        <?php endif; ?>
                    </div>
                    <div class="lg:w-1/2">
                        <?php if ( ! empty( $settings['title'] ) ) : ?>
                            <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6"><?php echo wp_kses_post( $settings['title'] ); ?></h2>
                        <?php endif; ?>

                        <?php if ( ! empty( $settings['description'] ) ) : ?>
                            <p class="text-gray-600 text-lg mb-8">
                                <?php echo wp_kses_post( $settings['description'] ); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ( $settings['features'] ) : ?>
                            <ul class="space-y-4 mb-10">
                                <?php foreach ( $settings['features'] as $item ) : ?>
                                    <li class="flex items-start space-x-3">
                                        <div class="mt-1 bg-blue-100 p-1 rounded-full text-blue-600">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                        </div>
                                        <div>
                                            <span class="font-bold text-brand-navy"><?php echo wp_kses_post( $item['feature_title'] ); ?></span> 
                                            <span class="text-gray-600"><?php echo wp_kses_post( $item['feature_desc'] ); ?></span>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <?php if ( ! empty( $settings['button_text'] ) && ! empty( $link ) ) : ?>
                            <a href="<?php echo esc_url( $link ); ?>" <?php echo $target; ?> <?php echo $nofollow; ?> class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold transition shadow-lg active-scale inline-block">
                                <?php echo esc_html( $settings['button_text'] ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
