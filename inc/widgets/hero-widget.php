<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class SOTS_Hero_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'sots_hero';
    }

    public function get_title() {
        return esc_html__( 'SOTS Hero Section', 'sots' );
    }

    public function get_icon() {
        return 'eicon-hero';
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
            'video_url',
            [
                'label' => esc_html__( 'Video URL', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'https://anti2.workingtoctoc.com/wp/wp-content/uploads/2026/03/Flow_202603171648.mp4',
                'placeholder' => esc_html__( 'Enter your video URL', 'sots' ),
            ]
        );

        $this->add_control(
            'badge_text',
            [
                'label' => esc_html__( 'Badge Text', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'RATED 4.9 HAPPY CUSTOMERS', 'sots' ),
            ]
        );

        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__( 'Subtitle', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '24/7 PROTECTION FOR YOUR HOME OR BUSINESS <br class="hidden md:block"> WITH MIAMI’S MOST TRUSTED SECURITY EXPERTS.', 'sots' ),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Security Camera Installation & CCTV Systems in Miami', 'sots' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => esc_html__( 'Description', 'sots' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Don’t settle for ‘basic’ security. Security On The Spot provides high-definition surveillance, remote mobile access, and professional installation. We are Miami’s #1 Rated Security Camera Installation Team in 2026.', 'sots' ),
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
        <section class="relative min-h-[600px] md:h-[800px] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <?php if ( ! empty( $settings['video_url'] ) ) : ?>
                <video 
                    autoplay 
                    muted 
                    loop 
                    playsinline 
                    preload="auto"
                    class="w-full h-full object-cover"
                >
                    <source src="<?php echo esc_url( $settings['video_url'] ); ?>" type="video/mp4">
                </video>
                <?php endif; ?>
                <div class="absolute inset-0 bg-gradient-to-r from-brand-navy/95 via-brand-navy/85 to-brand-navy/40"></div>
            </div>
            
            <div class="container mx-auto px-4 md:px-8 relative z-10">
                <div class="max-w-3xl text-white">
                    <?php if ( ! empty( $settings['badge_text'] ) ) : ?>
                    <div class="inline-flex items-center space-x-2 bg-white/20 backdrop-blur-md text-white px-4 py-1.5 rounded-full text-[10px] md:text-xs font-bold mb-6 border border-white/30">
                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <span><?php echo esc_html( $settings['badge_text'] ); ?></span>
                    </div>
                    <?php endif; ?>

                    <?php if ( ! empty( $settings['subtitle'] ) ) : ?>
                    <p class="text-blue-400 font-bold tracking-wider text-sm md:text-base mb-4">
                        <?php echo wp_kses_post( $settings['subtitle'] ); ?>
                    </p>
                    <?php endif; ?>

                    <?php if ( ! empty( $settings['title'] ) ) : ?>
                    <h1 class="text-4xl md:text-7xl font-extrabold mb-6 leading-tight drop-shadow-2xl">
                        <?php echo wp_kses_post( $settings['title'] ); ?>
                    </h1>
                    <?php endif; ?>

                    <?php if ( ! empty( $settings['description'] ) ) : ?>
                    <p class="text-base md:text-xl text-gray-200 mb-8 leading-relaxed">
                        <?php echo wp_kses_post( $settings['description'] ); ?>
                    </p>
                    <?php endif; ?>

                    <?php if ( ! empty( $settings['button_text'] ) && ! empty( $link ) ) : ?>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="<?php echo esc_url( $link ); ?>" <?php echo $target; ?> <?php echo $nofollow; ?> class="bg-brand-security hover:bg-brand-accent text-white px-8 py-4 rounded-full font-bold text-lg transition shadow-xl text-center active-scale">
                            <?php echo esc_html( $settings['button_text'] ); ?>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
    }
}
