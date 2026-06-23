<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package streaming-theme
 */

?>
<div class="card" style="width: 18rem;">
  <div><?php the_content();?></div>
  <div class="card-body">
    <p class="card-title"><?php echo get_the_title(); ?></p>
  </div>
</div>

<div>
<h4><?php echo esc_html( get_field('titulo_del_video') ); ?></h4>
<p><?php echo wp_kses_post ( get_field('descripcion_del_video') ); ?></p>
<a href="<?php echo esc_attr( get_field('url_del_video') ); ?>"><?php echo esc_attr( get_field('') ); ?></a>
<?php 
$image = get_field('imagen_destacada');
$size = 'thumbnail'; 
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
} ?>
<a href="<?php the_field('categoria'); ?>">Categoria: </a>
<p><?php echo esc_html( get_field('duracion') ); ?></p>
</div>