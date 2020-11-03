<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>

	<!-- Header -->
	<header class="text-center py-5 mb-4" style="height: 300px; background-color: #77c4f2;">
		<div class="container">
			<div class="d-flex justify-content-end"><img src="<?php bloginfo('template_url'); ?>/assets/images/Frame.png" width="295px" alt=""></div>
		</div>
	</header>

	<div class="container">
		<div class="row">

			<div class="col-md-12 wp-bp-content-width">
				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation(array(
				            'prev_text' => esc_html__( '&laquo; Anterior', 'wp-bootstrap-4' ),
				            'next_text' => esc_html__( 'Próximo &raquo;', 'wp-bootstrap-4' ),
				        ) );

						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;

					endwhile; // End of the loop.
					?>
			</div>

			<hr style="border-top: 1px solid red">
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
get_footer();
