<?php


function ju_customize_register($wp_customize){

    $wp_customize->get_section('title_tagline')->title = 'General';

    $wp_customize->add_panel('udemy', array(
        'title'   =>__('Udemy', 'udemy'),
        'description' => '<p>Udemy Theme Settings</p>',
        'priority'    => 160
    ));

    ju_social_costomizer_section($wp_customize);
    ju_misc_costomizer_section($wp_customize);
}
