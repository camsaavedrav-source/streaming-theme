<?php

function js_functions()
{
    if (!is_admin()) {
    wp_register_script('estilos-js', get_template_directory_uri() .'/assets/librerias/js/custom.js', false);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', [], '5.3.0', true);



    wp_enqueue_script('estilos-js');
    wp_enqueue_script('bootstrap-js');
    }
}
add_action('wp_enqueue_scripts', 'js_functions', 999);