<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.css" type="text/css" media="screen" />
</head>

<body <?php body_class(); ?>>
<header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand -->
            <a href="<?php echo get_site_url(); ?>" class="navbar-brand">
              <!-- <img src="img/logo.png" alt="" width="202px"> -->
              <img width="202px" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" >

            </a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
			<?php
				wp_nav_menu( array(
					'theme_location'  => 'menu-1',
					'menu_id'         => 'primary-menu',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'primary-menu-wrap',
					'menu_class'      => 'navbar-nav ml-auto',
			           'fallback_cb'     => '__return_false',
			           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			           'depth'           => 2,
			           'walker'          => new WP_bootstrap_4_walker_nav_menu()
				) );
			?>
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.html" class="nav-link active ">Home</a>
              </li>
              <li class="nav-item"><a href="blog.html" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="post.html" class="nav-link ">Post</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link ">Contact</a>
              </li>
            </ul>
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
            <!-- <ul class="langs navbar-text"><a href="#" class="active">EN</a><span>           </span><a href="#">ES</a></ul> -->
          </div>
        </div>
      </nav>
    </header>