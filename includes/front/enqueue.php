<?php

function ju_enqueue(){

    // Enqueue styles
    wp_register_style('ju_gogle_fonts','https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300');
    wp_register_style('ju_animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_register_style('ju_icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
    wp_register_style('ju_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_register_style('ju_superfish', get_template_directory_uri() . '/assets/css/superfish.css');
    wp_register_style('ju_flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
    wp_register_style('ju_bootstrap_datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.min.css');
    wp_register_style('ju_cs_select', get_template_directory_uri() . '/assets/css/cs-select.css');
    wp_register_style('ju_cs_skin_border', get_template_directory_uri() . '/assets/css/cs-skin-border.css');
    wp_register_style('ju_style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('ju_gogle_fonts');
    wp_enqueue_style('ju_animate');
    wp_enqueue_style('ju_icomoon');
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_superfish');
    wp_enqueue_style('ju_flexslider');
    wp_enqueue_style('ju_bootstrap_datepicker');
    wp_enqueue_style('ju_cs_select');
    wp_enqueue_style('ju_cs_skin_border');
    wp_enqueue_style('ju_style');

    // Enqueue scripts

    wp_register_script('ju_modernizr_js', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js',array(), false, true);
    wp_register_script('ju_easing_js', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js',array(), false, true);
    wp_register_script('ju_bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array(), false, true);
    wp_register_script('ju_waypoints_js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js',array(), false, true);
    wp_register_script('ju_sticky_js', get_template_directory_uri() . '/assets/js/sticky.js',array(), false, true);
    wp_register_script('ju_hoverIntent_js', get_template_directory_uri() . '/assets/js/hoverIntent.js',array(), false, true);
    wp_register_script('ju_superfish_js', get_template_directory_uri() . '/assets/js/superfish.js',array(), false, true);
    wp_register_script('ju_flexslider_js', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js',array(), false, true);
    wp_register_script('ju_bootstrap_datepicker_js', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.min.js',array(), false, true);
    wp_register_script('ju_classie_js', get_template_directory_uri() . '/assets/js/classie.js',array(), false, true);
    wp_register_script('ju_selectFx_js', get_template_directory_uri() . '/assets/js/selectFx.js',array(), false, true);
    wp_register_script('ju_main_js', get_template_directory_uri() . '/assets/js/main.js',array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_modernizr_js');
    wp_enqueue_script('ju_easing_js');
    wp_enqueue_script('ju_waypoints_js');
    wp_enqueue_script('ju_sticky_js');
    wp_enqueue_script('ju_hoverIntent_js');
    wp_enqueue_script('ju_superfish_js');
    wp_enqueue_script('ju_flexslider_js');
    wp_enqueue_script('ju_bootstrap_datepicker_js');
    wp_enqueue_script('ju_classie_js');
    wp_enqueue_script('ju_selectFx_js');
    wp_enqueue_script('ju_main_js');




}
