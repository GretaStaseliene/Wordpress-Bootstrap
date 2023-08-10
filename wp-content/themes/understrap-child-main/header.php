<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site container" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar" class="d-flex flex-wrap justify-content-center py-3 px-3 mb-4">

		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>

		<a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        	<span class="fs-4 text-dark fw-bold"><?php echo bloginfo('name'); ?></span>
      	</a>

		<!-- <?php
			wp_nav_menu(
				array(
					'menu' => 'main_menu',
					'container' => '',
					'theme_location' => 'main_menu',
					'items_wrap' => '<ul id="" class="nav nav-pills">%3$s</ul>'
				)
			);  
		?> -->

		<input type="checkbox" id="nav-check">
		<label for="nav-check" class="nav-toggler">
			<span></span>
		</label>

		<ul class="nav navbar navbar-expand-md nav-pills">
			<li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link text-dark fw-semibold text-uppercase" aria-current="page">Home</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/about'); ?>" class="nav-link text-dark fw-semibold text-uppercase">About Us</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/products'); ?>" class="nav-link text-dark fw-semibold text-uppercase">Products</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/categories'); ?>" class="nav-link text-dark fw-semibold text-uppercase">Categories</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/blog'); ?>" class="nav-link text-dark fw-semibold text-uppercase">Blog</a></li>
			<li class="nav-item"><a href="<?php echo site_url('/contact'); ?>" class="nav-link text-dark fw-semibold text-uppercase">Contact</a></li>
			<li class="nav-item search"><a href="#" class="nav-link text-dark fw-semibold border border-warning rounded-circle me-3"><i class="fa-solid fa-magnifying-glass"></i></a></li>
			<li class="nav-item"><a href="<?php echo site_url('/products'); ?>" id="orange-btn" class="btn btn-warning text-white rounded-0 fw-semibold text-uppercase">Shop now</a></li>
		</ul>

	</header><!-- #wrapper-navbar -->
