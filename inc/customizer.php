<?php

function wpdevs_customize( $wp_customize){
    
    $wp_customize->add_selection(
        'sec_copyright',
        array(
            'title'=>'Copyright Settings',
            'desciption'=>'Copyright Settings'
        )
        );

        $wp_customize->add_settings(
            'set_copyright',
            array(
                'type'=>'theme_mod',
                'default'=>'Copyright x -All Rights Reserved',
                'sanitize_callback'=>'sanitize_text_filed'
            )
            );
        $wp_customize->add_control(
            'set_copyright',
            arry(
                'label'=>'Copyright Information',
                'description'=>'Please,type your copyright here',
                'section'=>'sec_copyright',
                'type'=>'text'
            )
        );    
}

add_action('customize_register','wpdeves_customizer');

?>