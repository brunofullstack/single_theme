<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>


<div class="container">
      <div class="row">
        <!-- Latest Posts -->
        <main class="col post blog-post"> 
          <div class="container">
            <div class="post-single">
              <!-- <div class="post-thumbnail"><img src="img/blog-post-3.jpeg" alt="..." class="img-fluid"></div> -->
              <div class="post-details">
                <!-- <div class="post-meta d-flex justify-content-between">
                  <div class="category"><a href="#">Business</a><a href="#">Financial</a></div>
                </div> -->
                
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="post-title">', '</h1>' );
				else :
					the_title( '<h3 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h3>' );
				endif;
				?>

                <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span><?php  echo get_the_author()  ?></span></div></a>
                  <div class="d-flex align-items-center flex-wrap">
				  	<?php 
						$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
						if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
							$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
						}
						$time_string = sprintf( $time_string,
							esc_attr( get_the_date( 'c' ) ),
							esc_html( get_the_date() ),
							esc_attr( get_the_modified_date( 'c' ) ),
							esc_html( get_the_modified_date() )
						); 

						$posted_on = sprintf(
							/* translators: %s: post date. */
							esc_html_x( '%s', 'post date', 'wp-bootstrap-4' ),
							'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
						);
					?>       
                    <div class="date"><i class="icon-clock"></i> <?php echo $posted_on ?></div>

                  </div>
                </div>
                <div class="post-body">
					
				<?php if( is_singular() || get_theme_mod( 'default_blog_display', 'excerpt' ) === 'full' ) : ?>
					<div class="entry-content">
						<?php
							the_content( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue lendo<span class="screen-reader-text"> "%s"</span>', 'wp-bootstrap-4' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-4' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
				<?php else : ?>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
						<div class="">
							<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn-rounded"><?php esc_html_e( 'Continue lendo', 'wp-bootstrap-4' ); ?> <small class="oi oi-chevron-right ml-1"></small></a>
						</div>
					</div><!-- .entry-summary -->
				<?php endif; ?>

                </div>
		</main>
	</div>
</div>