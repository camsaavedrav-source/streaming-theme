        <!-- Custom loop video -->
        <?php 
        /**$temp = $wp_query; */
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; 
        
        $args = array( 
            'post_type'      => 'video',
            'post_status'    => 'publish',
            'orderby'        => 'date', 
            'order'          => 'ASC', 
            'paged'          => $paged, 
            'posts_per_page' => 4, 

            'tax_query' => array(
                array(
                    'taxonomy' => 'artista-musical',
                    'field'     => 'slug',
                    'terms'     => 'lady-gaga',
                ),
            ),
        );

        $loop_post = new WP_Query( $args );
        /**$wp_query = new WP_Query($args);*/

        if ($loop_post->have_posts() ) : 
        while ($loop_post->have_posts() ) : 
        $loop_post->the_post(); 
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