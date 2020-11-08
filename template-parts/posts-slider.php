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


	<!-- Header -->
	<header id="homeBanner" class="py-2 mb-4" style="height: 436px; background-color: #77c4f2;">
		
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 col-12 order-md-1 order-1 single-post-banner">
          <?php
              $args = array( 'numberposts' => '1' );
              $recent_posts = wp_get_recent_posts( $args );
              foreach( $recent_posts as $recent ){
                echo the_title('<h4 class="banner-title">', '</h4>');
                echo '<p> ' . esc_html( wp_bootstrap_4_get_short_excerpt( 20 ) ) . '</p>';
                echo '<a href="' . esc_url( get_permalink() ) . '">Abrir artigo <small class="oi oi-chevron-right ml-1"></small></a>';
            }
          ?>
        </div>  
        <div class="col-md-5 col-12 order-md-2 order-2 pt-5 hidden-sm"><img src="<?php bloginfo('template_url'); ?>/assets/images/Frame.png" class="hidden-sm mx-auto img-responsive" alt="slide"></div>
      </div>
      
	</header>

<?php endif; ?>
