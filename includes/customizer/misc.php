<?php

function ju_misc_costomizer_section($wp_customize){
    $wp_customize->add_setting('ju_header_show_search_setting', array(
        'default'     => 'yes',
        'transport'   => 'postMessage'
        // 'transport'   =>'refresh'
    ));

    $wp_customize->add_section('ju_header_show_search_section', array(
        'title'      => __('Show search', 'udemy'),
        'priority'   => 35,
        'panel' => 'udemy'
    ));

    $wp_customize->add_control(new WP_Customize_control(
        $wp_customize,
        'ju_header_show_search_control',
        array(
            'label' => __('Search handle', 'udemy'),
            'section' => 'ju_header_show_search_section',
            'settings' => 'ju_header_show_search_setting',
            'type' => 'checkbox',
            'choices' => array(
                'yes' => __('Yes', 'udemy')
            )

        )
    ));
}


 ?>
