<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>
<div class="container-fluid">
<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>


<?php if ( get_theme_mod( 'blog_display_cover_section', 1 ) ) : ?>
	<?php if( get_theme_mod( 'blog_cover_title' ) || get_theme_mod( 'blog_cover_lead' ) || get_theme_mod( 'blog_cover_btn_text' ) ) : ?>


		<div class="row">
			<div class="col-12 p-0">
				<section class="jumbotron bg-white text-center m-0 wp-bs-4-jumbotron border-bottom">
					<h1 class="jumbotron-heading"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_title' ) ); ?></h1>
					<p class="lead text-muted"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_lead' ) ); ?></p>
					<?php if( get_theme_mod( 'blog_cover_btn_text' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'blog_cover_btn_link' ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'blog_cover_btn_text' ) ); ?></a><?php endif; ?>
					<!-- /.container -->
				</section>
				<!-- /.jumbotron text-center -->
			</div>
		</div>

	<?php endif; ?>
<?php endif; ?>

		<div class="row">

			<div class="col-md-12 wp-bp-content-width">
				<div id="primary" class="content-area">
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						if( get_theme_mod( 'blog_display_posts_slider', '1' ) && is_home() && !is_paged() ) {
							get_template_part( 'template-parts/posts-slider' );
						}
						?>
						
				
						<div class="container my-3">
							<div id="post-article" class="row">
								<?php if ( have_posts() ) : ?>
								<?php while ( have_posts() ) : the_post(); ?>
								<div class="single-post col-sm-12 col-md-6 col-lg-4">	
									<article 
										id="post-<?php the_ID(); ?>"
										<?php post_class( 'post-card card my-3' ); ?>
										onclick="location.href='<?php echo get_permalink() ?>';"
												style="cursor: pointer"
									>
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
											if ( is_singular() ) :
												the_title( '<h1 class="post-title">', '</h1>' );
											else :
												echo '<h5 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" >Dica da Provi: ' . substr(get_the_title(), 0, 70) . '</a></h5>';
											endif;

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
								<?php endwhile; ?>
							</div>
								<div class="d-flex justify-content-center">
												
								<?php
									the_posts_navigation( array(
										'next_text' => esc_html__( 'Avançar >>', 'wp-bootstrap-4' ),
										'prev_text' => esc_html__( '<< Voltar', 'wp-bootstrap-4' ),
									) );
								?>
								</div>
								<?php wp_reset_postdata(); ?>
								<?php else : ?>
								<p>
								<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
								</p>
								<?php endif; ?>
						</div> <!-- .container -->
						
					<?php else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

				</div><!-- #primary -->
			</div>
			<!-- /.col-md-8 -->

			<?php if ( $default_sidebar_position != 'no' ) : ?>
				<?php if ( $default_sidebar_position === 'right' ) : ?>
					<div class="col-md-4 wp-bp-sidebar-width">
				<?php elseif ( $default_sidebar_position === 'left' ) : ?>
					<div class="col-md-4 order-md-first wp-bp-sidebar-width">
				<?php endif; ?>
					</div>
					<!-- /.col-md-4 -->
			<?php endif; ?>
		</div>
		<!-- /.row -->
	</div>
<!-- /.container -->


<?php
get_footer();
?>
