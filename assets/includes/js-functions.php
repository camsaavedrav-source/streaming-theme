<?php

function js_functions()
{
    if (!is_admin()) {
    wp_register_script('estilos-js', get_template_directory_uri() .'/assets/librerias/js/custom.js', false);




    wp_enqueue_script('estilos-js');
    }
}
add_action('wp_enqueue_scripts', 'js_functions', 999);