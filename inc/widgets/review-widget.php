<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_Review_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_review';
    }

    public function get_title() {
        return esc_html__( 'SOTS Reviews', 'sots' );
    }

    public function get_icon() {
        return 'eicon-star';
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
                'default' => esc_html__( 'What Our Customers Say', 'sots' ),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Real reviews from families and businesses across Miami who trust Security on the Spot.', 'sots' ),
            ]
        );

        $this->add_control(
            'widget_code',
            [
                'label' => esc_html__( 'Widget HTML/Script', 'sots' ),
                'type' => \Elementor\Controls_Manager::CODE,
                'language' => 'html',
                'default' => "<script type='text/javascript' src='https://reputationhub.site/reputation/assets/review-widget.js'></script>\n<iframe class='lc_reviews_widget' src='https://reputationhub.site/reputation/widgets/review_widget/nDZCF5gAPtvUgT4Nhki1' frameborder='0' scrolling='no' style='min-width: 100%; width: 100%; min-height: 600px;'></iframe>",
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="py-16 md:py-24 bg-white overflow-hidden">
            <div class="container mx-auto px-4 md:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <?php if ( ! empty( $settings['title'] ) ) : ?>
                        <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6"><?php echo wp_kses_post( $settings['title'] ); ?></h2>
                    <?php endif; ?>
                    
                    <?php if ( ! empty( $settings['subtitle'] ) ) : ?>
                        <p class="text-gray-600 text-lg"><?php echo wp_kses_post( $settings['subtitle'] ); ?></p>
                    <?php endif; ?>
                </div>
                
                <?php if ( ! empty( $settings['widget_code'] ) ) : ?>
                <div class="rounded-[2.5rem] overflow-hidden shadow-2xl border border-gray-100 bg-white">
                    <?php echo $settings['widget_code']; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php
    }
}
