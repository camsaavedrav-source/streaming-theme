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





<?php
    endwhile;
else :
    ?>

<p>No hay noticias disponibles en esta taxonimía.</p>

<?php
endif;

wp_reset_postdata();
?>