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
					echo '<h1 class="post-title">Dicas da Provi: </h1>';
					the_title( '<h2 class="post-title">', '</h2>' );
				else :
					the_title( '<h3 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h3>' );
				endif;
				?>

                <div class="post-footer d-flex flex-column flex-sm-row justify-content-between">
					<div class="author d-flex align-items-center flex-wrap">

						<div class="avatar"><?php echo get_avatar( get_the_author_email(), '45' ); ?></div>
						<div class="title"><span style="color: #000B3C; font-size: large"><?php  echo get_the_author()  ?></span></div>
					<div class="time">
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
								'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" style="text-transform: lowercase;">' . $time_string . '</a>'
							);
						?>       
						<div class="date"><i class="icon-clock"></i> <?php echo $posted_on ?></div>
					</div>
					</div>
					<div class="d-flex justify-content-end">
							<ul class="social-network social-circle">
								<!-- <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li> -->
								<?php

									$twitter = get_the_author_meta( 'twitter', $post->post_author );
									$facebook = get_the_author_meta( 'facebook', $post->post_author );
									$instagram = get_the_author_meta( 'instagram', $post->post_author );
									$linkedin = get_the_author_meta( 'linkedin', $post->post_author );

									echo '<li><a href="' . $facebook . '" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>';
									echo '<li><a href="' . $twitter . '" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>';
									echo '<li><a href="' . $instagram . '" class="icoGoogle" title="Instagram"><i class="fa fa-instagram"></i></a></li>';
									echo '<li><a href="' . $linkedin . '" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>';
								?>
							</ul>
							
					</div>
                </div>

                <div class="post-body">
					
				<?php if( is_singular() || get_theme_mod( 'default_blog_display', 'excerpt' ) === 'full' ) : ?>
					<div class="entry-content">
						<?php
							the_content( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue lendo <span class="screen-reader-text"> "%s"</span>', 'wp-bootstrap-4' ),
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
	<?php if( is_singular() || get_theme_mod( 'default_blog_display', 'excerpt' ) === 'full' ) : ?>
		<div class="row">
			<div class="col-12">
				<div class="text-center m-t-30 mb-5" style="padding: 50px 0px; border-top: 1px solid #adad85; border-bottom: 1px solid #adad85">
					<h4 class="mb-5" style="color: #000B3C">Veja mais sobre o autor</h4>
					<img src="<?php echo get_avatar_url( get_the_author_email() ); ?>" class="rounded-circle mb-2" width="150">
					<h4 class="card-title m-t-10" style="color: #5CB5FE"><a <?php echo 'href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"' ?>><?php  echo get_the_author()  ?></a></h4>
					<h6 class="card-subtitle mt-3"><?php echo get_the_author_meta('description') ?></h6>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="m-t-30 mb-5">
					<h4 class="mb-5 text-center" style="color: #000B3C">Artigos relacionados</h4>
					<div class="row">

					<?php
						$args = array(
							'posts_per_page' => 3,
							'post_in' => get_the_tag_list()
						);
						$the_query = new WP_Query($args);
 
							while ( $the_query->have_posts() ) : $the_query->the_post();
							?> 
							<div class="col-md-4">
								
								<article id="post-<?php the_ID(); ?>" onclick="location.href='<?php echo get_permalink() ?>';" <?php post_class( 'post-card card my-3' ); ?> style="cursor: pointer;">

									<?php
										// Must be inside a loop.
										
										if ( has_post_thumbnail() ) {
											echo '<img class="card-img-top" src="' . get_the_post_thumbnail_url(get_the_ID(), 'full') . '" alt="">';
										}
										else {
											echo '<img class="card-img-top" src="' . get_bloginfo( 'stylesheet_directory' ) 
												. '/assets/images/default.png" />';
										}
									?>

									<div class="">
									<div class="post-text">
										<?php
											the_title( '<h5 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >', '</a></h5>' );
										?>
									<!-- <p class="post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta libero tincidunt mattis rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p> -->
									</div>
									</div>
									<div class="container ml-3 mb-3" style="position: absolute; bottom: 0;">
									<div class="row">
										
											<?php echo get_avatar( get_the_author_email(), '55' ); ?>

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
								</article>
							</div>
							<?php
							endwhile; 
							echo '<div class="clear"></div></section>'; 
							wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>		