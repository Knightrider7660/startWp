<?php

    function akame_css_js(){
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'gfonts', akame_fonts_url(), array(), '1.0.0', null);

        // js
        wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery.min.js', array(), '1.0.0', true);
        wp_enqueue_script( 'proper-js', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'bundle-js', get_template_directory_uri().'/js/akame.bundle.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'active-js', get_template_directory_uri().'/js/default-assets/active.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts','akame_css_js');


function akame_fonts_url() {
    $fonts_url = '';

    $dokdo = _x( 'on', 'Dokdo font: on or off', 'theme-slug' );
    $merriweather = _x( 'on', 'Merriweather font: on or off', 'theme-slug' );
    $oswald = _x( 'on', 'Oswald font: on or off', 'theme-slug' );

    if ( 'off' !== $dokdo || 'off' !== $merriweather || 'off' !=  $oswald) {
        $font_families = array();

        if ( 'off' !== $dokdo ) {
            $font_families[] = 'Dokdo:400,700,400italic';
        }

        if ( 'off' !== $merriweather ) {
            $font_families[] = 'Merriweather:700italic,400,800,600';
        }

        if ( 'off' !== $oswald ) {
            $font_families[] = 'Oswald:700italic,400,800,600';
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'cyrillic-ext'),
        );
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }


    return esc_url_raw($fonts_url);
}