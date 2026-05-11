<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_Why_Choose_Us_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_why_choose_us';
    }

    public function get_title() {
        return esc_html__( 'SOTS Why Choose Us', 'sots' );
    }

    public function get_icon() {
        return 'eicon-bullet-list';
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
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Miami\'s #1 Security Camera Installation Service', 'sots' ),
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => esc_html__( 'Choose Image', 'sots' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => 'https://securityonthespot.com/wp-content/uploads/2025/09/home-security-camera-installation-kit.webp',
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'reason_text',
            [
                'label' => esc_html__( 'Reason Text', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Why choose us reason', 'sots' ),
            ]
        );

        $this->add_control(
            'reasons',
            [
                'label' => esc_html__( 'Reasons List', 'sots' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [ 'reason_text' => esc_html__( '20+ years of experience in security systems', 'sots' ) ],
                    [ 'reason_text' => esc_html__( 'Fast, clean, and professional installations', 'sots' ) ],
                    [ 'reason_text' => esc_html__( 'Remote access from your phone or computer', 'sots' ) ],
                    [ 'reason_text' => esc_html__( 'Custom solutions for homes, restaurants, offices, and warehouses', 'sots' ) ],
                    [ 'reason_text' => esc_html__( 'Trusted by top Miami businesses and families', 'sots' ) ],
                ],
                'title_field' => '{{{ reason_text }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 md:px-8">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="lg:w-1/2 order-2 lg:order-1">
                        <?php if ( ! empty( $settings['title'] ) ) : ?>
                            <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-8"><?php echo wp_kses_post( $settings['title'] ); ?></h2>
                        <?php endif; ?>

                        <?php if ( $settings['reasons'] ) : ?>
                        <div class="space-y-6">
                            <?php foreach ( $settings['reasons'] as $item ) : ?>
                            <div class="flex items-center space-x-4 p-4 bg-brand-light rounded-2xl border border-gray-100">
                                <div class="bg-brand-security text-white p-2 rounded-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>
                                </div>
                                <span class="font-bold text-brand-navy"><?php echo wp_kses_post( $item['reason_text'] ); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="lg:w-1/2 order-1 lg:order-2">
                        <?php if ( ! empty( $settings['image']['url'] ) ) : ?>
                            <img src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="<?php echo esc_attr( $settings['title'] ); ?>" class="rounded-3xl shadow-2xl">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}
