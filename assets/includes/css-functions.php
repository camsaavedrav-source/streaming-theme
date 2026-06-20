<?php

function css_functions(){

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', 'all');
    wp_register_style('bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', 'all');


    wp_register_style('mis-estilos', get_template_directory_uri() .'/assets/librerias/css/styles.css', 'all');



    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-icon');
    wp_enqueue_style('mis-estilos');


}
add_action('wp_enqueue_scripts', 'css_functions');
