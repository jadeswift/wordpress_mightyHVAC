<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
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
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->

	<div id="top-bar">
		<div id="wrapper-navbar">
		<nav class="navbar navbar-expand-sm">
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <i class="fas fa-bars"></i>
			  <i class="fas fa-times"></i>
  			</button>
			  					<!-- The WordPress Menu goes here -->
			<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNav',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'top-bar',
						'depth'           => 2,
						'aria-labelledby' => 'navbarDropdown',
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
			?>
			<!-- <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
					  <a class="nav-link" href="/wordpress-site">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Services
							<i class="fas fa-chevron-down"></i>
							<i class="fas fa-chevron-up"></i>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<div class="arrow-up"></div>
          					<a class="dropdown-item" href="#">Air Conditioning</a>
          					<a class="dropdown-item" href="#">Heating</a>
          					<a class="dropdown-item" href="#">Home Performance</a>
							<a class="dropdown-item" href="#">Indoor Air Quality</a>
							<a class="dropdown-item" href="#">Water Heaters</a>
							<a class="dropdown-item" href="#">Light Commercial</a>
							<a class="dropdown-item" href="#">Geothermal</a>
							<a class="dropdown-item" href="#">Maintenance Plan</a>
        				</div>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#">Careers</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#">Deals</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="about/">About</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="contact-us/">Contact</a>
					</li>
				</ul>
			</div> -->
		</nav>


			</nav><!-- .site-navigation -->

		</div><!-- #wrapper-navbar end -->

	</div>
