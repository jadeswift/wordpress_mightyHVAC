<?php
/**
 * Template Name: Template About
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div id="about" class="row no-gutters interior-content">
	<img class="header-image" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/about.png">
	<img id="logo" src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/mighty-logo.png">
	<div class="row">
		<div class="col-6">
			<div class="heading-text">
				<h1>Savvy about comfy</h1>
				<p>
					For the better part of the last decade,
					Mighty Heating and Air has been gaining a
					reputation for being savvier about making
					homes comfier. Owner Jacob Stone’s approach
					is all about finding ways to improve air
					comfort and reduce overall HVAC costs. The
					old way of doing things was selling systems.
					The Mighty way is finding solutions that improve
					efficiencies that make you feel good inside.
				</p>
				<h2>Some install a box. We think outside it.</h2>
				<p>
					While most HVAC companies focus on repairing or
					installing units, we take a more unconventional
					approach by looking at your home’s unique configuration
					to find a solution you’ll literally be comfortable with
					for years to come. Think of us as airflow pros. We
					have space-age tools for measuring home spaces that help
					us determine the right solution every time, increasing
					your comfort and reducing your utility costs.
				</p>
				<img src="/wordpress-site/wp-content/themes/mightyHVACtheme/sass/assets/images/pupper.png">
			</div>
		</div>
		<div class="col-3">
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
