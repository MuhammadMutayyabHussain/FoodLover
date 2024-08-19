<?php
include ("helper/connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Egprojets">
	<meta name="description" content="" />
	<title>Food Lover HTML</title>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" />
	<!-- End Google Fonts -->

	<!-- Contribute CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/css/flaticon.css" />
	<!-- Contribute End CSS Files -->

	<!-- Custom CSS Files -->
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
	<!-- Custom CSS Files -->

</head>

<body>

	<!-- Loader Bloc -->
	<div class="site-loader">
		<div class="loading"></div>
	</div>
	<!-- End Loader Bloc -->

	<!-- Site Wrapper -->
	<div id="site-wrapper">
		<!-- Header -->
		<?php
		include ("components/header.php");
		?>
		<!-- End Header -->

		<!-- Slide -->
		<section id="main-slider" data-background="assets/img/demo/slides/01.jpg" class="parallax-window">
			<div class="section-slogan">
				<img src="assets/img/logo.png" alt="">
				<h2>Surprise Your Plate</h2>
				<h3>Fine Food + Drinks</h3>
			</div>
			<span class="scoll-down">Scroll Down</span>
		</section>
		<!-- End Slide -->

		<!-- Section Special Offers -->
		<section id="special-offers" class="padd-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="offer-left">
							<span class="section-suptitle">From The Menu</span>
							<h2 class="section-title">Special Offers</h2>
							<div class="offer-item">
								<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
								<div>
									<h3>Pring Veg & Pasta</h3>
									<p>
										Fresh veggies mixed with pasta for a vibrant, flavorful dish.
									</p>
								</div>
								<span class="offer-price">$10</span>
							</div>
							<div class="offer-item">
								<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
								<div>
									<h3>Cheese /Bacon,Coleslaw</h3>
									<p>
										Creamy coleslaw with a choice of savory bacon or rich cheese.
									</p>
								</div>
								<span class="offer-price">$14</span>
							</div>
							<div class="offer-item">
								<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
								<div>
									<h3>Croissant (Plain)</h3>
									<p>
										Classic, buttery croissant perfect for breakfast or snacks.
									</p>
								</div>
								<span class="offer-price">$12</span>
							</div>
						</div>
					</div>
					<div class="col-md-6 hidden-sm hidden-xs">
						<div class="offer-right">
							<img src="assets/img/demo/offers/01.jpg" alt="" class="img-responsive">
							<a href="menu.html">
								Explore
								<span>The menu</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Special Offers -->

		<!-- Section Reservation -->
		<?php
		include ("components/reservation-form.php");
		?>
		<!-- End Section Reservation -->

		<!-- Section Delas -->
		<section id="delas" class="padd-100">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<span class="section-suptitle text-center">Delas Today</span>
						<h2 class="section-title sep-type-2 text-center">
							Today Special Dish
						</h2>
						<div class="delas-carousel">
							<div class="delas-item">
								<img src="assets/img/demo/delas/01.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
								</p>
								<span>Only $25</span>
							</div>
							<div class="delas-item">
								<img src="assets/img/demo/delas/02.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
								</p>
								<span>Only $25</span>
							</div>
							<div class="delas-item">
								<img src="assets/img/demo/delas/03.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
								</p>
								<span>Only $25</span>
							</div>
							<div class="delas-item">
								<img src="assets/img/demo/delas/01.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
								</p>
								<span>Only $25</span>
							</div>
							<div class="delas-item">
								<img src="assets/img/demo/delas/03.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
								</p>
								<span>Only $25</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Delas -->

		<!-- Section Restaurant Menu -->
		<section id="restaurant-menu" class="padd-100">
			<span class="section-suptitle text-center">Food Lover</span>
			<h2 class="section-title sep-type-2 text-center">
				resturant menu
			</h2>

			<div class="container">
				<div class="row">
					<ul class="restaurant-filter">
						<li><a href="#" class="current" data-filter="">All dishes</a></li>
						<li><a href="#" data-filter="dinner">dinner</a></li>
						<li><a href="#" data-filter="lunch">lunch</a></li>
						<li><a href="#" data-filter="drinks">drinks</a></li>
						<li><a href="#" data-filter="starters">starters</a></li>
					</ul>
					<div class="restaurant-list">
						<div class="grid-sizer col-sm-6 col-md-4"></div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="drinks">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/01.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="drinks">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/02.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="dinner">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/03.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="lunch">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/04.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="lunch">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/05.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="drinks">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/06.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="lunch">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/07.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="starters">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/08.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="dinner">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/09.jpg"
										alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Restaurant Menu -->

		<!-- Section Testimonials -->
		<section id="testimonials" class="padd-100 parallax-window" data-background="assets/img/demo/bg/03.jpg">
			<span class="section-suptitle text-center">
				Food Lover
			</span>
			<h2 class="section-title white-font sep-type-2 text-center">
				customer feedback
			</h2>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 no-padd">
						<ul class="testimonial-list">
							<li>
								<div>
									<p>
										The menu layout is fantastic! It's easy to navigate and the images are
										mouthwatering.
									</p>
									<span>Aisha Khan</span>
								</div>
								<img src="assets/img/demo/testimonials/01.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<div>
									<p>
										I love the elegant design of the reservation page. It makes booking a table feel
										special.
									</p>
									<span>Rajesh Sharma</span>
								</div>
								<img src="assets/img/demo/testimonials/02.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<div>
									<p>
										The blog section is a great addition! It's informative and adds a personal touch
										to the restaurant's story.
									</p>
									<span>Priya Patel</span>
								</div>
								<img src="assets/img/demo/testimonials/03.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<div>
									<p>
										The gallery showcases the restaurant's ambiance perfectly. It's like taking a
										virtual tour!
									</p>
									<span>Gurpreet Singh</span>
								</div>
								<img src="assets/img/demo/testimonials/01.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<div>
									<p>
										The contact page is so user-friendly. I appreciate having multiple ways to get
										in touch.
									</p>
									<span>Sameer Malhotra</span>
								</div>
								<img src="assets/img/demo/testimonials/02.jpg" alt="" class="img-responsive">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Testimonials -->

		<!-- Section Event -->
		<section id="events" class="padd-100">
			<h2 class="section-title sep-type-2 text-center">
				upcoming events
			</h2>
			<div class="container">
				<div class="row">
					<div class="col-sm-12  no-padd">

						<ul class="event-carousel">
							<?php
							$Query = "SELECT * FROM events";
							$Result = mysqli_query($conn, $Query);
							if ($Result->num_rows > 0) {
								$count = 0;
								while ($DataRows = mysqli_fetch_array($Result)) {

									?>
									<li class="event-item">
										<img src="<?php echo "uploads/events/" . $DataRows['image']; ?>" alt=""
											class="img-responsive">
										<div>
											<h3><?php echo $DataRows['name']; ?></h3>
											<span><?php echo $DataRows['date']; ?></span>
											<p><?php echo $DataRows['shortdiscription']; ?></p>
										</div>
									</li>
									<?php
									$count++;
									if ($count == 4)
										break;
								}
							} else {
								echo "No Result Found";
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Events -->

		<!-- Section Teams -->
		<section id="team" class="padd-100">
			<span class="section-suptitle text-center">
				Chef Team
			</span>
			<h2 class="section-title sep-type-2 text-center">
				Best Chefs For You
			</h2>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 no-padd">
						<ul class="team-carousel">
							<?php
							$Query = "SELECT * FROM teammembers";
							$Result = mysqli_query($conn, $Query);
							if ($Result->num_rows > 0) {
								$count = 0;
								while ($DataRows = mysqli_fetch_array($Result)) {

									?>
									<li>
										<div>
											<img src="<?php echo "uploads/teammembers/" . $DataRows['image']; ?>" alt=""
												class="img-responsive">
											<div>
												<span><?php echo $DataRows['designation']; ?></span>
												<h3><?php echo $DataRows['name']; ?></h3>
												<div>
													<a href="<?php echo $DataRows['twitter']; ?>"><i
															class="fa fa-twitter"></i></a>
													<a href="<?php echo $DataRows['facebook']; ?>"><i
															class="fa fa-facebook"></i></a>
													<a href="<?php echo $DataRows['insta']; ?>"><i
															class="fa fa-instagram"></i></a>
												</div>
											</div>
										</div>
									</li>
									<?php
									$count++;
									if ($count == 4)
										break;
								}
							} else {
								echo "No Result Found";
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Teams -->

		<!-- Section Vision -->
		<section id="vision" data-background="assets/img/demo/bg/06.jpg" class="parallax-window padd-100">
			<h2 class="sr-only">Vision</h2>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="vision-item">
							<span class="count">291</span>
							<p>Best Dishes</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="vision-item">
							<span class="count">710</span>
							<p>Awwards Won</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="vision-item">
							<span class="count">163</span>
							<p>Our Chefs</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="vision-item last-item">
							<span class="count">212</span>
							<p>Daily Customers</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Vision -->

		<!-- Section From The Menu -->
		<section id="from-menu" class="padd-100">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="f-menu-list">
							<div class="f-menu-item">
								<div class="item-left">
									<img src="assets/img/demo/dishes/01.jpg" alt="">
								</div>
								<div class="item-right">
									<span class="section-suptitle">Food Lover</span>
									<h3 class="section-title">
										Offer Dishes
									</h3>
									<span class="price">Only $25 <samp>$45</samp></span>
									<h4>Chicken and Cashews</h4>
									<p>
									</p>
									<a href="#">About More</a>
								</div>
							</div>
							<div class="f-menu-item">
								<div class="item-left">
									<img src="assets/img/demo/dishes/02.jpg" alt="">
								</div>
								<div class="item-right">
									<span class="section-suptitle">Food Lover</span>
									<h3 class="section-title">
										Offer Dishes
									</h3>
									<span class="price">Only $30 <samp>$60</samp></span>
									<h4>Dishes and Wings</h4>
									<p>
									</p>
									<a href="#">About More</a>
								</div>
							</div>
							<div class="f-menu-item">
								<div class="item-left">
									<img src="assets/img/demo/dishes/03.jpg" alt="">
								</div>
								<div class="item-right">
									<span class="section-suptitle">Food Lover</span>
									<h3 class="section-title">
										Offer Crepes
									</h3>
									<span class="price">Only $10 <samp>$20</samp></span>
									<h4>Crepes and Crape</h4>
									<p>
									</p>
									<a href="#">About More</a>
								</div>
							</div>
							<div class="f-menu-item">
								<div class="item-left">
									<img src="assets/img/demo/dishes/04.jpg" alt="">
								</div>
								<div class="item-right">
									<span class="section-suptitle">Food Lover</span>
									<h3 class="section-title">
										Offer Dishes
									</h3>
									<span class="price">Only $25 <samp>$50</samp></span>
									<h4>Chicken and Dishes</h4>
									<p>
									</p>
									<a href="#">About More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section End From The Menu -->

		<!-- Section Contact -->
		<section id="contact">
			<div id="maps"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-4 col-sm-push-2 col-md-push-8">
						<div class="ctc-item">
							<span class="section-suptitle text-center">
								Contact Us
							</span>
							<h2 class="section-title sep-type-2 text-center">
								Get In Touch
							</h2>
							<p class="tel">+61 3 8376 6284</p>
							<div class="widget">
								<b>Address</b>
								<p>
									121 King Street, Melbourne<br />
									Victoria 3000 Australia<br />
									ABN 11 119 159 741
								</p>
							</div>
							<div class="widget">
								<b>Email</b>
								<a href="#">Order@foodlover.com</a>
								<a href="#">Sales@example.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Contact -->

		<!-- Footer -->
		<?php
		include ("components/footer.php");
		?>
		<!-- End Footer -->

	</div>
	<!-- End Site Wrapper -->

	<!-- Contribute JS Files -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="assets/js/egprojets.lib.js"></script>
	<!-- End Contribute JS Files -->

	<!-- Custom JS Files -->
	<script type="text/javascript" src="assets/js/egprojets.custom.js"></script>
	<!-- Custom JS Files -->
</body>

</html>