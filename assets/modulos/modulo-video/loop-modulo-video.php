        <!-- Custom loop video -->
        <?php 
        /**$temp = $wp_query; */
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; 
        
        $args = array( 
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'orderby'        => 'date', 
            'order'          => 'ASC', 
            'paged'          => $paged, 
            'posts_per_page' => 1, 

            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'     => 'slug',
                    'terms'     => 'video',
                ),
            ),
        );

        $loop_post = new WP_Query( $args );
        /**$wp_query = new WP_Query($args);*/

        if ($loop_post->have_posts() ) : 
        while ($loop_post->have_posts() ) : 
        $loop_post->the_post(); 
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


<?php
    endwhile;
else :
    ?>

<p>No hay noticias disponibles en esta taxonimía.</p>

<?php
endif;

wp_reset_postdata();
?>