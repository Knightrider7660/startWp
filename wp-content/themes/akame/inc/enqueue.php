<?php

    function akame_css_js(){
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all' );

        // js
        wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js', array(), '1.0.0', true);
        wp_enqueue_script( 'proper-js', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'bundle-js', get_template_directory_uri().'/js/akame.bundle.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'active-js', get_template_directory_uri().'/js/default-assets/active.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts','akame_css_js');