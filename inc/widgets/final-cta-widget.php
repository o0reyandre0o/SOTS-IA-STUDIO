<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_Final_CTA_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_final_cta';
    }

    public function get_title() {
        return esc_html__( 'SOTS Final CTA', 'sots' );
    }

    public function get_icon() {
        return 'eicon-button';
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
                'default' => esc_html__( 'Ready to Install Your <br>Security Cameras in Miami?', 'sots' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Get your free consultation today and discover how Security on the Spot can protect what matters most.', 'sots' ),
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => esc_html__( 'Button Text', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get My Free Security Quote Now – (786) 822-7868', 'sots' ),
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
        <section class="py-16 md:py-24 bg-brand-navy text-center text-white">
            <div class="container mx-auto px-4">
                <?php if ( ! empty( $settings['title'] ) ) : ?>
                    <h2 class="text-3xl md:text-6xl font-bold mb-6"><?php echo wp_kses_post( $settings['title'] ); ?></h2>
                <?php endif; ?>
                
                <?php if ( ! empty( $settings['description'] ) ) : ?>
                    <p class="text-gray-300 text-lg md:text-xl mb-10 max-w-2xl mx-auto"><?php echo wp_kses_post( $settings['description'] ); ?></p>
                <?php endif; ?>

                <?php if ( ! empty( $settings['button_text'] ) && ! empty( $link ) ) : ?>
                    <a href="<?php echo esc_url( $link ); ?>" <?php echo $target; ?> <?php echo $nofollow; ?> class="bg-brand-security hover:bg-brand-accent text-white px-10 py-5 rounded-full font-bold text-xl md:text-2xl transition shadow-xl active-scale inline-block">
                        <?php echo esc_html( $settings['button_text'] ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </section>
        <?php
    }
}
