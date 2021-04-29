<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="row flex-column-reverse no-gutters">
	<div class="col-lg-7 no-gutters">
		<div class="leftside">
		</div>
	</div>
	<div class="col-lg-5 no-gutters">
		<div class="rightside">
			<div class="background">
				<img id="mighty-logo" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/mighty-logo.png">
				<img id="overlay" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/overlay.png">
			</div>
		</div>
	</div>
</div>

<?php get_footer();
