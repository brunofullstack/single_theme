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

<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
      <?php $post_counter = 0; ?>
      <?php while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
          <li data-target="#wp-bp-posts-slider" data-slide-to="<?php echo esc_attr( $post_counter ); ?>" class="<?php if ( $post_counter === 0 ) : echo "active"; endif; ?>"></li>
          <?php $post_counter++; ?>
      <?php endwhile; ?>
  </ol>
  <div class="carousel-inner">

    <?php $post_counter = 0; ?>
    <?php while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
        <?php
            $feat_image = get_template_directory_uri() . '/assets/images/default.jpg';
            $feat_img_alt = '';
            if( has_post_thumbnail() ) {
                $get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $feat_image = $get_feat_image[0];
                $feat_img_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );
            }
            if ( $feat_img_alt === '' ) {
                $feat_img_alt = get_the_title();
            }
        ?>
        <div class="carousel-item mx-5 <?php if ( $post_counter === 0 ) : echo "active"; endif; ?>">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 col-12 order-md-1 order-2">
                  <h4><?php the_title(); ?></h4>
                  <p><?php echo esc_html( wp_bootstrap_4_get_short_excerpt( 20 ) ); ?></p>
                  <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary btn-sm"><?php esc_html_e( 'Continue Reading', 'wp-bootstrap-4' ); ?> <small class="oi oi-chevron-right ml-1"></small></a> </div>
                <div class="col-md-5 col-12 order-md-2 order-1"><img src="<?php echo esc_url( $feat_image ); ?>" class="mx-auto" alt="slide"></div>
              </div>
            </div>
          </div>
        </div>
        <?php $post_counter++; ?>
    <?php endwhile; ?>


    <div class="carousel-item mx-5">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="<?php echo get_site_url(); ?>/assets/images/Frame.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!--slide end-->
<?php endif; ?>
