<?php


function ju_customize_register($wp_customize){
    $wp_customize->add_setting('ju_facebook_handle', array(
        'default'     =>'',
        // 'transport'   =>'refresh'
    ));

    $wp_customize->add_section('ju_social_section', array(
        'title'      => __('Udemy social settings', 'udemy'),
        'priority'   => 30,
    ));

    $wp_customize->add_control(new WP_Customize_control(
        $wp_customize,
        'ju_social_facebook_input',
        array(
            'label' => __('Facebook handle', 'udemy'),
            'section' => 'ju_social_section',
            'settings' => 'ju_facebook_handle',
            'type' => 'text',

        )
    ));
}
