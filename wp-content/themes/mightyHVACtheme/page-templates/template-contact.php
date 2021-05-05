<?php
/**
 * Template Name: Template Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="row no-gutters contact-content">
	<img src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/contact.png">
	<img id="logo" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/mighty-logo.png">
	<div class="row">
		<div class="col-6">
			<div class="heading-text">
				<h1>Let's get comfy</h1>
				<p>
					Looking to lower your costs and raise your comfort?
					Fill out the form below to schedule service, request a
					virtual diagnostic, or leave a comment.
				</p>
			</div>
		<?php
			echo do_shortcode(
				'[contact-form-7 id="21" title="Contact form"]'
			);
		?>
		</div>
		<div class="col-3">
			<div class="iwaver-stacked">
				<div class="row no-gutters">
					<div class="col-sm-8 no-gutters">
						<p id="price">$699</p>
						<p id="description">For an iWave-R</p>
						<p id="subtext">Get cleaner air with an iWave-R!</p>
					</div>
					<div class="col-sm-4 no-gutters">
						<div class="row">
							<div class="col-8">
								<p>GREAT DEALS</p>
							</div>
							<div class="col-4">
								<button type="button" class="btn">More</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-3"></div>
	</div>
</div>
<?php
get_footer();
