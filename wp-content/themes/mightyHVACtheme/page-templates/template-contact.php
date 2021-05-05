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
	<img class="header-image" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/contact.png">
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
							<div class="col-9">
								<p>GREAT DEALS</p>
							</div>
							<div class="col-3">
								<button type="button" class="btn">More</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="great-folks" class="rectangle">
		<p>Folks we made feel good</p>
	</div>
	<div class="bottom-folks">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-5">
							<img class="d-block w-30" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/Kelly.png">
						</div>
						<div class="col-7">
							<img class="quote" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/quote.png">
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore
								magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
							</p>
							<p class="name">
								Kelly T.
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-5">
							<img class="d-block w-30" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/Andrew.png">
						</div>
						<div class="col-7">
						<img class="quote" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/quote.png">
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore
								magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
							</p>
							<p class="name">
								Andrew J.
							</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-5">
							<img class="d-block w-30" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/Samantha.png">
						</div>
						<div class="col-7">
						<img class="quote" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/quote.png">
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
								sed diam nonummy nibh euismod tincidunt ut laoreet dolore
								magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
							</p>
							<p class="name">
								Samantha R.
							</p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<i class="fas fa-chevron-left fa-3x"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<i class="fas fa-chevron-right fa-3x"></i>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
<?php
get_footer();
