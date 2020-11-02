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
	 <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card card' ); ?>>
           <img class="card-img-top" height="150px" src="https://images.unsplash.com/photo-1421809313281-48f03fa45e9f?auto=format&fit=crop&w=1410&q=80" alt="Card image cap">
           <div class="">
             <div class="post-text">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="post-title">', '</h1>' );
				else :
					the_title( '<h3 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h3>' );
				endif;
				?>
               <!-- <p class="post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta libero tincidunt mattis rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> -->
             </div>
			 <div class="post-text">
			 
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
           </div>
           <div class="post-text">
             <div>
               <span class="pr-3">
                 <img width="45px" src="https://www.alanidental.com/wp-content/uploads/2016/01/default.png"/>
               </span>
				<?php
				if ( 'post' === get_post_type() ) : ?>
				
				<?php wp_bootstrap_4_posted_on(); ?>
					<!-- por <a class="author-name" href="">Matheus Torrano</a>
					<br />
					10 de agosto de 2020 -->
				<?php
				endif; ?>
             </div>
           </div>
	<?php if ( 'post' === get_post_type() ) : ?>
		<footer class="entry-footer card-footer text-muted">
			<?php wp_bootstrap_4_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article>
<!-- #post-<?php the_ID(); ?> -->

    </div>
</section>