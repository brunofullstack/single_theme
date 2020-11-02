<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>
   <!-- Latest Posts -->
   <section class="latest-posts"> 
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="post-card card">
              <img class="card-img-top" height="150px" src="https://images.unsplash.com/photo-1421809313281-48f03fa45e9f?auto=format&fit=crop&w=1410&q=80" alt="Card image cap">
              <div class="">
                <div class="post-text">
                  <h3 class="post-title">Creating a Blog using Jekyll</h3>
                  <!-- <p class="post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta libero tincidunt mattis rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> -->
                </div>
              </div>
              <div class="row">
                <div class="col-2 offset-md-1">
                  <span>
                    <img width="45px" src="https://www.alanidental.com/wp-content/uploads/2016/01/default.png"/>
                  </span>
                </div>
                <div class="col-8">
                  <p>
                    por <a class="author-name" href="">Matheus Torrano</a>
                    <br />
                    10 de agosto de 2020
                  </p>
                </div>
              </div>
            </div>
          </div>
    </section>
	
<article id="post-<?php the_ID(); ?>" <?php post_class( 'card mt-3r' ); ?>>
	<div class="card-body">
		<?php if ( is_sticky() ) : ?>
			<span class="oi oi-bookmark wp-bp-sticky text-muted" title="<?php echo esc_attr__( 'Sticky Post', 'wp-bootstrap-4' ); ?>"></span>
		<?php endif; ?>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title card-title h2">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title card-title h3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta text-muted">
				<?php wp_bootstrap_4_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<?php wp_bootstrap_4_post_thumbnail(); ?>

		<?php if( is_singular() || get_theme_mod( 'default_blog_display', 'excerpt' ) === 'full' ) : ?>
			<div class="entry-content">
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-bootstrap-4' ),
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
					<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary btn-sm"><?php esc_html_e( 'Continue Reading', 'wp-bootstrap-4' ); ?> <small class="oi oi-chevron-right ml-1"></small></a>
				</div>
			</div><!-- .entry-summary -->
		<?php endif; ?>

	</div>
	<!-- /.card-body -->

	<?php if ( 'post' === get_post_type() ) : ?>
		<footer class="entry-footer card-footer text-muted">
			<?php wp_bootstrap_4_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
