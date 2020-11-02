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


<?php wp_footer(); ?>

</body>
</html>
