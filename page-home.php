<?php
/**
 * Template Name: Videos de Nico
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
?>

	<main id="primary" class="site-main">

<?php
$args = array(
    'post_type' => 'video',
    'posts_per_page' => 3
);
$query = new WP_Query($args);
echo 'Posts encontrados: ' . $query->found_posts;
?>
<div id="miCarrusel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
<?php 
$indice = 0;
while ($query->have_posts()) : $query->the_post();
$activo = ($indice === 0) ? 'active' : '';
$imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<div class="carousel-item <?php echo $activo; ?>">
<img src="<?php echo esc_url($imagen_destacada); ?>" class="d-block w-100" alt="<?php echo get_the_title(); ?>">
</div>
<?php
$indice++;
endwhile;
wp_reset_postdata(); 
?>    
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#miCarrusel" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Anterior</span>
</button>
    
<button class="carousel-control-next" type="button" data-bs-target="#miCarrusel" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Siguiente</span>
</button>
</div>

<div>
 <h3></h3> 
</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
