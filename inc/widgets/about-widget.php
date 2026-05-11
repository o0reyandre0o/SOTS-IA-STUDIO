<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_About_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_about';
    }

    public function get_title() {
        return esc_html__( 'SOTS About Section', 'sots' );
    }

    public function get_icon() {
        return 'eicon-info-box';
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
                    'url' => 'https://securityonthespot.com/wp-content/uploads/2025/09/home-orlando-security-camera-team.webp',
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'About Security on the Spot', 'sots' ),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => esc_html__( 'Content', 'sots' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( '<p class="text-gray-600 text-lg mb-6 leading-relaxed">At Security on the Spot, we are a family-owned company with over 20 years of experience in the security industry. Founded in Miami, our mission is simple: to protect what matters most—your home, your business, and your peace of mind.</p><p class="text-gray-600 text-lg mb-8 leading-relaxed">We believe in honest, reliable, and professional service, backed by cutting-edge technology and the trust of hundreds of satisfied clients across Miami-Dade.</p>', 'sots' ),
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

        // --------------------------------------------------
        // TAB: STYLE
        // --------------------------------------------------
        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__( 'Text Style', 'sots' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'content_color',
            [
                'label' => esc_html__( 'Text Color', 'sots' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .sots-about-content p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => esc_html__( 'Typography', 'sots' ),
                'selector' => '{{WRAPPER}} .sots-about-content p',
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
                            <img src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="<?php echo esc_attr( $settings['title'] ); ?>" class="rounded-3xl shadow-2xl">
                        <?php endif; ?>
                    </div>
                    <div class="lg:w-1/2">
                        <?php if ( ! empty( $settings['title'] ) ) : ?>
                            <h2 class="text-3xl md:text-5xl font-bold text-brand-navy mb-6"><?php echo wp_kses_post( $settings['title'] ); ?></h2>
                        <?php endif; ?>

                        <?php if ( ! empty( $settings['content'] ) ) : ?>
                            <div class="sots-about-content text-gray-600 text-lg space-y-6 mb-8 leading-relaxed">
                                <?php echo $settings['content']; ?>
                            </div>
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
