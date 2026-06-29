<?php
/**
 * Template Name: Categorias/artistas
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plataforma
 */

get_header();

$page = get_queried_object();
$term = get_term_by('slug', $page->post_name, 'artista-musical');
?>


	<main id="primary" class="site-main">
	<div>
	<h2><?php echo get_the_title();?></h2>
	<?php if ( isset($term->description) && $term->description ) : ?>
    <p><?php echo esc_html( $term->description ); ?></p>
    <?php endif; ?>
	<div>
	   <?php
        $args = array(
            'post_type'      => 'video',
            'post_status'    => 'publish',
			'orderby'        => 'date', 
            'order'          => 'ASC', 
            'paged'          => $paged, 
            'posts_per_page' => 10,
            'tax_query'      => array(
                array(
                    'taxonomy' => 'artista-musical',
                    'field'    => 'slug',
                    'terms'    => $term->slug ?? '',
                ),
            ),
        );

        $query = new WP_Query( $args );

		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
	?>
	<div class="card">
  <?php 
  $image = get_field('imagen_destacada');
  $size = 'thumbnail'; 
  if( $image ) {
    echo wp_get_attachment_image( $image, $size );} ?>
  <div class="card-body">
  <h5 class="card-title"><?php echo get_the_title(); ?></h5>
  </div>
  </div>

<?php
    endwhile;
else :
    ?>

<p>No hay noticias disponibles en esta taxonimía.</p>

<?php
endif;

wp_reset_postdata();
?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();