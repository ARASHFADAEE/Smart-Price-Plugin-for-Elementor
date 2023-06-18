<?php
class Elementor_parsyadak_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'قیمت اختصاصی';
    }

    public function get_title() {
        return esc_html__( 'قیمت اختصاصی پارس یدک', 'elementor-addon' );
    }

    public function get_icon() {
        return 'eicon-cart';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    public function get_keywords() {
        return [ 'قیمت', 'قیمت کالا' ];
    }

    protected function register_controls() {

        // Content Tab Start

        $this->start_controls_section(
            'section_title',
            [
                'label' => esc_html__( 'وارد کردن قیمت', 'elementor-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'قیمت را وارد کنید', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '230 هزار تومان', 'elementor-addon' ),
            ]
        );

        $this->add_control(
            'text_url',
            [
                'label' => esc_html__( 'متن نمایشی برای افرادی که وارد نشدند', 'elementor-addon' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'برای دیدن قیمت وارد شوید', 'elementor-addon' ),
            ]
        );

        $this->end_controls_section();

        // Content Tab End



    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>

        <p id="hidden">
            <?php
            if(is_user_logged_in()){
                echo 'قیمت:'.$settings['title'];
            }else{

                echo '<a href="https://parsyadaksepahan.com/my-account/">' . $settings['title'] . '</a>';

            }
            ?>

        </p>

        <?php
    }
}