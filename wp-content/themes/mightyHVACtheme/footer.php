<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="row" id="top-footer">
		<div class="col-sm-5">
			<img id="foot-logo" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/foot-logo.png">
			<address>
				<span>Mighty Heating and Air</span><br>
				321 NE 50th Place<br>
				Des Moines, IA 50313<br>
				515.635.2323<br>
			</address>
		</div>
		<div class="line"></div>
		<div id="left-foot" class="col-sm-7">
			<h1>Get to know us</h1>
			<img id="socials" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/socials.png">
			<h1>Service Locations</h1>
			<div id="locations" class="row no-stack">
				<div class="col-xs-6">
					<ul>
						<li>Altoona</li>
						<li>Ankeny</li>
						<li>Bondurant</li>
						<li>Clive</li>
						<li>Des Moines</li>
						<li>Grimes</li>
					</ul>
				</div>
				<div class="col-xs-6">
					<ul>
						<li>Johnston</li>
						<li>Polk City</li>
						<li>Urbandale</li>
						<li>Waukee</li>
						<li>West Des Moines</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row" id="bottom-footer">
		<div class="col-sm-6">
			<div class="row no-stack">
				<div class="col-xs-5">
					<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'depth'           => 1,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
					?>
				</div>
				<div class="col-xs-7">
					<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'menu'			  => '3',
								'depth'           => 1,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<p id="private">
				Accessibility Statement<br>
				Privacy Policy
			</p>
			<p id="copyright">
				© 2020–2021 Mighty Heating and
				Air Conditioning. All rights reserved.
			</p>
		</div>
	</div>


</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

