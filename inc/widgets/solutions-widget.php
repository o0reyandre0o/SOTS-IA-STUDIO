<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_Solutions_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_solutions';
    }

    public function get_title() {
        return esc_html__( 'SOTS Solutions Grid', 'sots' );
    }

    public function get_icon() {
        return 'eicon-apps';
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
                'label' => esc_html__( 'Section Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Comprehensive Security & Technology Solutions', 'sots' ),
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon_svg',
            [
                'label' => esc_html__( 'Icon SVG', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'description' => esc_html__( 'Paste the SVG code here. Leave <svg> tag intact.', 'sots' ),
                'default' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>',
            ]
        );

        $repeater->add_control(
            'solution_title',
            [
                'label' => esc_html__( 'Solution Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Security Camera Installation', 'sots' ),
            ]
        );

        $repeater->add_control(
            'solution_desc',
            [
                'label' => esc_html__( 'Solution Description', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'High-definition CCTV systems for warehouses, restaurants, and luxury estates. Monitor your property from anywhere in the world.', 'sots' ),
            ]
        );

        $repeater->add_control(
            'link_text',
            [
                'label' => esc_html__( 'Link Text', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Learn More', 'sots' ),
            ]
        );

        $repeater->add_control(
            'link_url',
            [
                'label' => esc_html__( 'Link URL', 'sots' ),
                'type' => \Elementor\Controls_Manager::URL,
                'default' => [
                    'url' => home_url( '/security-cameras-security-on-the-spot' ),
                ],
            ]
        );

        $this->add_control(
            'solutions',
            [
                'label' => esc_html__( 'Solutions List', 'sots' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'solution_title' => esc_html__( 'Security Camera Installation', 'sots' ),
                    ],
                    [
                        'solution_title' => esc_html__( 'Smart Home Automation', 'sots' ),
                        'icon_svg' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>',
                    ],
                    [
                        'solution_title' => esc_html__( 'Access Control & Intercoms', 'sots' ),
                        'icon_svg' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path></svg>',
                    ],
                ],
                'title_field' => '{{{ solution_title }}}',
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
                </div>
                
                <?php if ( $settings['solutions'] ) : ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php foreach ( $settings['solutions'] as $item ) : ?>
                        <?php 
                            $target = $item['link_url']['is_external'] ? ' target="_blank"' : '';
                            $nofollow = $item['link_url']['nofollow'] ? ' rel="nofollow"' : '';
                        ?>
                    <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-xl transition duration-300">
                        <div class="w-14 h-14 bg-brand-security text-white rounded-2xl flex items-center justify-center mb-6">
                            <?php echo $item['icon_svg']; ?>
                        </div>
                        <h3 class="text-xl font-bold text-brand-navy mb-4"><?php echo wp_kses_post( $item['solution_title'] ); ?></h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-6"><?php echo wp_kses_post( $item['solution_desc'] ); ?></p>
                        
                        <?php if ( ! empty( $item['link_text'] ) && ! empty( $item['link_url']['url'] ) ) : ?>
                        <a href="<?php echo esc_url( $item['link_url']['url'] ); ?>" <?php echo $target; ?> <?php echo $nofollow; ?> class="text-brand-security font-bold hover:underline">
                            <?php echo esc_html( $item['link_text'] ); ?>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <?php
    }
}
