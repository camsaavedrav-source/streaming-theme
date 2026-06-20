<?php /*widget assets*/ 
// deshabilitar el editor de widgets
add_filter( 'use_widgets_block_editor', '__return_false' );


function zona_widget()
{
/*zona de widget 1*/
register_sidebar(
    array(
    'name' => 'Footer columna 1',
    'id' => 'footer_1',//le damos ID y nombre al footer
    'before_widget' => '<div id="%1$s" class="col-md-6 col-lg-4 mb-4 mb-lg-0 footer-theme">',//añadimos clases y contenedores
    'after_widget' => '</div>',//cerramos los contenedores
    'before_title' => '<h3 class="mb-3">', //añadimos contenedores para titulo
    'after_title' => '</h3>' //cerramos los contenedores de titulo
));
/*zona de widget 1*/

}
add_action('widgets_init', 'zona_widget');
/*widget assets*/ 