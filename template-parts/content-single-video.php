<?php
/**
 * Template Name: Contenido Video
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package streaming-theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="container">
<h2><?php echo get_the_title();?></h2>   
 <?php the_content(); ?> 
</section>
<section>
<div class="card tarjetas">
  <div class="card-header">
    Informacion
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Duración:<?php echo esc_html( get_field('duracion') ); ?></li>
    <li class="list-group-item">Fecha de estreno:<?php echo esc_html( get_field('fecha_de_estreno') ); ?></li>
    <li class="list-group-item">Álbum:<?php echo esc_html( get_field('album') ); ?></li>
    <li class="list-group-item">Compositor/es:<?php echo esc_html( get_field('compositor') ); ?></li>
    <li class="list-group-item">
    <?php

// Check rows exists.
if( have_rows('interpretes') ):

    // Loop through rows.
    while( have_rows('interpretes') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('instrumento');
        $sub_value2 = get_sub_field('persona');
        // Do something, but make sure you escape the value if outputting directly...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif; ?>
  <?php echo $sub_value;?>: <span><?php echo $sub_value2;?>
</span></li>
  </ul>
</div>
</section>
<section> 
<div class="mt-5 mb-3 text-center">
<h3>Letra Ingles</h3>
<?php echo nl2br( get_field('letra_ingles') ); ?>    
</div>   
</section>
</article>
