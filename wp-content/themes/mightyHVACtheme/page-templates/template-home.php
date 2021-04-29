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
<div class="row no-gutters" id="father-row">
	<div class="col-lg-7 no-gutters">
		<div class="content">
			<p id="feel-good">Feel Good <span class="inside">inside.</span></p>
			<p id="air">Air minded. Not airheaded.</p>
			<div class="row nested-row">
				<div class="col-sm-6">
					<img id="gotyerback" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/gotyerback.png">
				</div>
				<div class="col-sm-6">
					<p id="block-text">
						No one in the Des Moines metro area is better equipped
						to take on challenging HVAC problems than Mighty Heating and Air.
						That’s because most companies sell systems, not solutions. Every
						home is different and so is our approach. Think of us as ‘airspace’
						engineers. We’re design experts who dig deeper and get all up in
						your space. Your home space, that is. Asking the right questions,
						using the latest diagnostic tools and technologies to design a plan
						perfectly suited for your home.
					</p>
					<div class="rectangle" id="schedule-service">
						<div class="text-icon-wrap">
							<i class="far fa-clock"></i>
							<p>SCHEDULE SERVICE</p>
						</div>
						<button type="button" class="btn">SCHEDULE SERVICE NOW</button>
					</div>
					<div class="rectangle" id="very-close">
						<p id="too-close">WE WON’T GET TOO CLOSE FOR COMFORT</p>
						<p id="safety">
							Safety is always a priority for us, so during the pandemic, we’re
							offering virtual diagnostic services.
						</p>
						<button type="button" class="btn">TRY IT NOW <span>JUST $29</span></button>
					</div>
				</div>
			</div>
			<div class="half-the-battle">
				<div class="heading-text">
					<p>
						Half the battle is
						understanding<br>
						the whole home.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-5 no-gutters">
		<div class="logo">
			<div class="background">
				<img id="mighty-logo" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/mighty-logo.png">
				<img id="overlay" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/overlay.png">
			</div>
		</div>
	</div>
</div>

<?php get_footer();
