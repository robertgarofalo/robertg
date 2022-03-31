<?php

function robertg_theme_support(){

//add dynamic title tag support -- (must have wp_head() on front page)
add_theme_support('title-tag');

}

add_action( 'after_setup_theme', 'robertg_theme_support');


function robertg_register_styles(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('robertg-style', get_template_directory_uri() . "/style.css", array('robertg-bootstrap'), $version, 'all');
    wp_enqueue_style('robertg-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.1.1', 'all');
    wp_enqueue_style('robertg-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'robertg_register_styles');


function robertg_register_scripts(){
    $version = wp_get_theme()->get( 'Version' );

wp_enqueue_script( 'robertg-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
wp_enqueue_script( 'robertg-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
wp_enqueue_script( 'robertg-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
wp_enqueue_script( 'robertg-script', get_template_directory_uri() . "/assets/js/scripts.js", array(), $version, true);
}

add_action( 'wp_enqueue_scripts', 'robertg_register_scripts');

?>

