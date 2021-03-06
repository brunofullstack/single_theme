<?php

$featured_post_ids = get_theme_mod( 'featured_ids' );
$featured_count = get_theme_mod( 'featured_count', 5 );

if( $featured_post_ids && $featured_post_ids[0]!= '' ) {
  $args = array( 'post_type' => array('post'), 'post__in' => $featured_post_ids, 'showposts' => $featured_count, 'orderby' => 'post__in', 'ignore_sticky_posts' => true );
} else {
  $args = array( 'post_type' => array('post'), 'showposts' => $featured_count, 'ignore_sticky_posts' => true );
}

$featured_query = new WP_Query( $args );

?>

<?php if ( $featured_query->have_posts() ) : ?>

  <div class="row">
        <div class="col-12 p-0">
            <!-- Header -->
            <header id="homeBanner" class="py-2 mb-4" style="background-color: #77c4f2;">
              
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-7 col-12 order-md-1 order-1 single-post-banner py-5">
                    <?php
                        $args = array( 'numberposts' => '1' );
                        $recent_posts = wp_get_recent_posts( $args );
                        foreach( $recent_posts as $recent ){
                          echo '<h4 class="banner-title">' . get_the_title() . '</h4>';
                          echo '<p> ' . esc_html( wp_bootstrap_4_get_short_excerpt( 20 ) ) . '</p>';
                          echo '<a href="' . esc_url( get_permalink() ) . '">Leia agora <small class="oi oi-chevron-right ml-1"></small></a>';
                      }
                    ?>
                  </div>  
                  <div class="col-md-5 col-12 order-md-2 order-2 pt-5 hidden-sm">
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <img src="<?php echo $image[0]; ?>" class="hidden-sm mx-auto img-responsive" alt="slide" width="445px">
                    <?php else: ?>
                      <img src="<?php bloginfo('template_url'); ?>/assets/images/Frame.png" class="hidden-sm mx-auto img-responsive" alt="slide" width="445px">
                    <?php endif; ?>

                  </div>
                </div>
                
            </header>
        </div>
    </div>

<?php endif; ?>
