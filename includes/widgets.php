<?php

function ju_widgets(){
    register_sidebar(array(
        'name'   => __('The Sidebar', 'udemy'),
        'id'     => 'ju_sidebar',
        'description' => __('Sidebar for the theme udemy', 'udemy'),
    ));
}
