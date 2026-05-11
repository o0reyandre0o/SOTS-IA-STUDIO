<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_FAQ_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_faq';
    }

    public function get_title() {
        return esc_html__( 'SOTS FAQ', 'sots' );
    }

    public function get_icon() {
        return 'eicon-help-o';
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
                'default' => esc_html__( 'Frequently Asked Questions', 'sots' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'question',
            [
                'label' => esc_html__( 'Question', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Where is Security on the Spot located?', 'sots' ),
            ]
        );

        $repeater->add_control(
            'answer',
            [
                'label' => esc_html__( 'Answer', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Our headquarters are at 4861 NW 72nd Ave, Miami, FL 33166, serving Miami and all of South Florida.', 'sots' ),
            ]
        );

        $this->add_control(
            'faqs',
            [
                'label' => esc_html__( 'FAQs', 'sots' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'question' => esc_html__( 'Where is Security on the Spot located?', 'sots' ),
                        'answer' => esc_html__( 'Our headquarters are at 4861 NW 72nd Ave, Miami, FL 33166, serving Miami and all of South Florida.', 'sots' ),
                    ],
                    [
                        'question' => esc_html__( 'What services do you offer?', 'sots' ),
                        'answer' => esc_html__( 'We provide security camera installation, smart home automation, access control, fire alarms, and networking solutions.', 'sots' ),
                    ],
                    [
                        'question' => esc_html__( 'How long have you been in business?', 'sots' ),
                        'answer' => esc_html__( 'We have over 22 years of experience in the security industry and more than 10 years operating as a registered company in Miami.', 'sots' ),
                    ],
                ],
                'title_field' => '{{{ question }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="py-16 md:py-24 bg-white">
            <div class="container mx-auto px-4 md:px-8">
                <?php if ( ! empty( $settings['title'] ) ) : ?>
                    <h2 class="text-3xl md:text-5xl font-bold text-brand-navy text-center mb-16"><?php echo wp_kses_post( $settings['title'] ); ?></h2>
                <?php endif; ?>
                
                <?php if ( $settings['faqs'] ) : ?>
                <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                    <?php foreach ( $settings['faqs'] as $item ) : ?>
                    <div class="p-6 bg-brand-light rounded-2xl border border-gray-100">
                        <h4 class="font-bold text-brand-navy mb-3"><?php echo wp_kses_post( $item['question'] ); ?></h4>
                        <p class="text-gray-600 text-sm"><?php echo wp_kses_post( $item['answer'] ); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php
    }
}
