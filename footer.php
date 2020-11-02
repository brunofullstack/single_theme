<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
    <!-- Page Footer-->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <img src="img/logo.png" width="202px" alt="">
            </div>
            <div class="contact-details">
              <p>53 Broadway, Broklyn, NY 11249</p>
              <p>Phone: (020) 123 456 789</p>
              <p>Email: <a href="mailto:info@company.com">Info@Company.com</a></p>
            </div>
          </div>
          
          <div class="col-md-2">
            <h5>Institucional</h5>
            <!--headin5_amrc-->
            <ul class="list-unstyled">
              <li><a href="#">Quem somos</a></li>
              <li><a href="#">Como funciona</a></li>
              <li><a href="#">Parcerias</a></li>
              <li><a href="#">Dúvidas</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
          </div>
          
          <div class="col-md-2">
            <h5>Atendimento</h5>
            <!--headin5_amrc-->
            <ul class="list-unstyled">
              <li><a href="#">+55 (11) 95771-2414</a></li>
              <li><a href="#">papo@provi.com.br</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
          </div>

          <div class="col-md-3">
            <h5>Explore</h5>
            <!--headin5_amrc-->
            <ul class="list-unstyled">
              <li><a href="#">Transforme sua carreira</a></li>
              <li><a href="#">Sana UP</a></li>
              <li><a href="#">Income Share Agreement</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
          </div>

          <div class="col-md-1">
            <ul class="social_footer_ul">
              <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
              <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin"></i></a></li>
              <li><a href=""><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a href="#" class="pr-3">
                Termos de uso
              </a>
              <a href="">Política de privacidade</a>
            </div>
            <div class="col-md-6 text-right">
              <p>Copyrights &copy; 2020. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
	<footer id="colophon" class="site-footer text-center bg-white mt-4 text-muted">

		<section class="footer-widgets text-left">
			<div class="container">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-1-area mb-2">
								<?php dynamic_sidebar( 'footer-1' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-2-area mb-2">
								<?php dynamic_sidebar( 'footer-2' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-3-area mb-2">
								<?php dynamic_sidebar( 'footer-3' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-4-area mb-2">
								<?php dynamic_sidebar( 'footer-4' ); ?>
							</aside>
						</div>
					<?php endif; ?>
				</div>
				<!-- /.row -->
			</div>
		</section>

		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( 'https://bootstrap-wp.com/' ); ?>"><?php esc_html_e( 'Bootstrap 4 WordPress Theme', 'wp-bootstrap-4' ); ?></a>
				<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name. */
					printf( esc_html__( 'Theme Name: %1$s.', 'wp-bootstrap-4' ), 'WP Bootstrap 4' );
				?>
			</div><!-- .site-info -->
		</div>
		<!-- /.container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>