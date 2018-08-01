<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css"> -->
	<!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->

	<!-- Modernizr & Prefix Free (All other JS in footer) -->
<!--     <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/components/prefix-free/prefixfree.min.js"></script> -->

	<!-- Typekit -->
	<!-- <link rel="stylesheet" href="https://use.typekit.net/gxt1pgz.css"> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<header class="header" id="header">
		<?php
			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => 'menu',
				'theme_location' => 'main_menu',
				'link_before'    => '',
				'link_after'     => '',
			) );
		?>
 <!--  <a class="logo" href="#" title="Wildcoast" alt="Wildcoast">
    <img src="assets/images/logo-red.png">
  </a> -->
  <nav id="nav">
    <div class="logo__container">
        <a class="logo" href="#" title="Wildcoast" alt="Wildcoast">
        </a>
    </div>
    <ul id="menu-primary">
      <li class="translate">
        <a class="large" href="#">Español</a>
      </li>
      <li>
        <a class="large" href="#">About us</a>
      </li>
      <li>
        <a class="large" href="#">What we do</a>
      </li>
      <li>
        <a class="large" href="#">where we work</a>
      </li>
      <li>
        <a class="large" href="#">Join Us</a>
      </li>
      <li>
        <a class="large" href="#">Resources</a>
      </li>
      <li>
        <a class="large" href="#">Blog</a>
      </li>
      <li class="donate">
        <a class="large" href="#">Donate</a>
      </li>
    </ul>
  </nav>
	</header>


	<div id="app" class="site-content">
