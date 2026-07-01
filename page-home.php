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

	<main id="primary" class="container">

<?php
$args = array(
    'post_type' => 'video',
    'posts_per_page' => 5
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
<img src="<?php echo esc_url($imagen_destacada); ?>" class="d-block img-fluida" alt="<?php echo get_the_title(); ?>">
<div class="carousel-caption d-none d-md-block">
  <h5><?php echo get_the_title(); ?></h5>
  <p><?php echo get_the_excerpt(); ?></p>
   <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary">
    <i class="bi bi-caret-right-fill"></i>Ver más</a>
  <button type="button" class="btn"><i class="bi bi-plus-circle"></i></button>
  <button type="button" class="btn"><i class="bi bi-info-circle"></i></button>
</div>  
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

<section>
<div class="row d-flex justify-content-center">  
<h4>My Chemical Romance</h4>
<a href=""><i class="bi bi-arrow-right-circle-fill"></i></a>
<div class="row row-cols-4 pb-5 ps-5">
<?php include get_template_directory() . '/assets/modulos/modulo-video/loop-modulo-mcr.php'; ?>
</div>
</div>

<div class="row d-flex justify-content-center">
<h4>Melanie Martinez</h4>
<a href=""><i class="bi bi-arrow-right-circle-fill"></i></a>
<div class="row row-cols-4 pb-5 ps-5">
<?php include get_template_directory() . '/assets/modulos/modulo-video/loop-modulo-mm.php'; ?>
</div>
</div>

<div class="row d-flex justify-content-center">
<h4>Imagine Dragons</h4>
<a href=""><i class="bi bi-arrow-right-circle-fill"></i></a>
<div class="row row-cols-4 pb-5 ps-5">
<?php include get_template_directory() . '/assets/modulos/modulo-video/loop-modulo-im.php'; ?>
</div>
</div>

<div class="row d-flex justify-content-center">
<h4>Lady Gaga</h4>
<a href=""><i class="bi bi-arrow-right-circle-fill"></i></a>
<div class="row row-cols-4 pb-5 ps-5">
<?php include get_template_directory() . '/assets/modulos/modulo-video/loop-modulo-lg.php'; ?>
</div>
</div>

<div class="row d-flex justify-content-center">
<h4>Otros</h4>
<a href=""><i class="bi bi-arrow-right-circle-fill"></i></a>
<div class="row row-cols-4 pb-5 ps-5">
<?php include get_template_directory() . '/assets/modulos/modulo-video/loop-modulo-otros.php'; ?>
</div>
</div>
</section>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
