<?php 

function danvatwo_theme_gsap_script(){

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////// CHANGE LINKS BEFOR SEND TO PRODUCTION -- NOT ALLOWED CDN OR EXTERIOR LINKS!!! //////////////////////// 
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    wp_enqueue_script( 'gsapscript-js', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap1-st', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array('gsapscript-js'), false, true );
    wp_enqueue_script( 'gsap1-js', get_stylesheet_directory_uri() . '/assets/js/effect.js', array('gsapscript-js'), false, true );
    }

add_action( 'wp_enqueue_scripts', 'danvatwo_theme_gsap_script' );



/**
 * Loads the child theme textdomain.
 */
function wpdocs_child_theme_setup() {
    load_child_theme_textdomain( 'danvatwo', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'wpdocs_child_theme_setup' );

?>