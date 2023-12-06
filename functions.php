<?php
/* My Theme Function */

// Theme Title

add_theme_support('title-tag');


/**
 * Enqueue scripts and styles.
 */
function goldenDuck_theme_scripts()
{
    wp_enqueue_style('output', get_template_directory_uri() . '/dist/output.css', array());
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/src/app.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'goldenDuck_theme_scripts');

//Theme Logo Func

function goldenDuck_customizer_register($wp_customize)
{
    //Custom logo Func Theme Customizer
    $wp_customize->add_section(
        'goldenDuck_header_area',
        array(
            'title' => __('Header Area', 'goldenDuck'),
            'descricption' => 'Logo Customize From Here',
            '' => '',
        )
    );

    $wp_customize->add_setting('goldenDuck_logo', [
        'default' => get_bloginfo('template_directory') . '/src/img/logo.png',

    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'goldenDuck_logo', [
        'label' => __('Logo Upload', 'goldenDuck'),
        'settings' => 'goldenDuck_logo', // Change 'setting' to 'settings'
        'section' => 'goldenDuck_header_area',
    ]));
    //Footer  Func Theme Customizer
    $wp_customize->add_section(
        'goldenDuck_footer_area',
        array(
            'title' => __('Footer Area', 'goldenDuck'),
            'descricption' => 'Footer Customize From Here',

        )
    );
    $wp_customize->add_setting('goldenDuck_setting_footer_area', [
        'default' => '&Copy; Copyright 2024',
    ]);
    $wp_customize->add_control('goldenDuck_footer_area', [
        'label' => __('Copyright Text', 'goldenDuck'),
        'settings' => 'goldenDuck_setting_footer_area',
        'section' => 'goldenDuck_footer_area',
        'description' => "Add here From Copy Right",
        "type" => "textarea",
    ]);

}

add_action('customize_register', 'goldenDuck_customizer_register');


// Menu Register

register_nav_menu('main_menu', __('Main Menu', 'goldenDuck'));