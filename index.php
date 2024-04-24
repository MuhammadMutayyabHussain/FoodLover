<?php

include("helper/connection.php");
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

	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<div class="bg-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

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
		include("components/header.php");
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
										Lorem ipsum dolor sit amet, consectetur Vesti bulum vel ipsum ullamcorper.
									</p>
								</div>
								<span class="offer-price">$10</span>
							</div>
							<div class="offer-item">
								<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
								<div>
									<h3>Cheese /Bacon,Coleslaw</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur Vesti bulum vel ipsum ullamcorper.
									</p>
								</div>
								<span class="offer-price">$14</span>
							</div>
							<div class="offer-item">
								<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
								<div>
									<h3>Croissant (Plain)</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur Vesti bulum vel ipsum ullamcorper.
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
		<section id="reservation" data-background="assets/img/demo/bg/01.jpg" class="parallax-window">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="form-reservation padd-100">
							<span class="section-suptitle">
								Your Table
							</span>
							<h2 class="section-title white-font">
								Reservation Now!
							</h2>
							<form action="scripts/reservation-script.php" method="post">
								<div class="column">
									<span>
										<input type="text" name="name" placeholder="Name">
									</span>
									<span>
										<input type="text" name="contact_number" placeholder="Contact Number">
									</span>
								</div>
								<div class="column">
									<span>
										<input type="text" name="email" placeholder="Email Adress">
									</span>
									<span>
										<input type="text" name="num_person" placeholder="Number of Person">
									</span>
								</div>
								<div class="column">
									<span>
										<input type="text" name="book_date" placeholder="Booke Date">
										<i class="fa fa-calendar" aria-hidden="true"></i>
									</span>
									<span>
										<input type="text" name="your_time" placeholder="Your Time ">
										<i class="fa fa-clock-o" aria-hidden="true"></i>
									</span>
								</div>
								<div class="column">
									<textarea name="message" placeholder="Message of Request"></textarea>
								</div>
								<div class="submit-btn">
									<button type="submit">Book Now</button>
									<input type="hidden" class="num_table" value="">
								</div>								
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
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
									Lorem ipsum dolor sit amet, consectetur Vesti bulum vel ipsum ullamcorper.
								</p>
								<span>Only $25</span>
							</div>
							<div class="delas-item">
								<img src="assets/img/demo/delas/02.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur Vesti bulum vel ipsum ullamcorper.
								</p>
								<span>Only $25</span>
							</div>
							<div class="delas-item">
								<img src="assets/img/demo/delas/03.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur Vesti bulum vel ipsum ullamcorper.
								</p>
								<span>Only $25</span>
							</div>
							<div class="delas-item">
								<img src="assets/img/demo/delas/01.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur Vesti bulum vel ipsum ullamcorper.
								</p>
								<span>Only $25</span>
							</div>
							<div class="delas-item">
								<img src="assets/img/demo/delas/03.jpg" alt="" class="img-responsive">
								<h4>Pring Veg & Pasta</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur Vesti bulum vel ipsum ullamcorper.
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
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/01.jpg" alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="drinks">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/02.jpg" alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="dinner">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/03.jpg" alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="lunch">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/04.jpg" alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="lunch">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/05.jpg" alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="drinks">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/06.jpg" alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="lunch">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/07.jpg" alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="starters">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/08.jpg" alt=""></a>
								<span>Only $25</span>
								<h3>Chicken and Cashews</h3>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 grid-item" data-filter="dinner">
							<div>
								<a href="menu.html" target="_blank"><img src="assets/img/demo/restaurant_menu/09.jpg" alt=""></a>
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
										Nunc ullamcorper augue nec accumsan
										porta. Ut lacinia fgiat viverra. Ut dictum
										turpis in ipsum sagittis finibus.
									</p>
									<span>Anna Van</span>
								</div>
								<img src="assets/img/demo/testimonials/01.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<div>
									<p>
										Nunc ullamcorper augue nec accumsan
										porta. Ut lacinia fgiat viverra. Ut dictum
										turpis in ipsum sagittis finibus.
									</p>
									<span>Frinton Van</span>
								</div>
								<img src="assets/img/demo/testimonials/02.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<div>
									<p>
										Nunc ullamcorper augue nec accumsan
										porta. Ut lacinia fgiat viverra. Ut dictum
										turpis in ipsum sagittis finibus.
									</p>
									<span>Filipe Van</span>
								</div>
								<img src="assets/img/demo/testimonials/03.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<div>
									<p>
										Nunc ullamcorper augue nec accumsan
										porta. Ut lacinia fgiat viverra. Ut dictum
										turpis in ipsum sagittis finibus.
									</p>
									<span>Frinton Van</span>
								</div>
								<img src="assets/img/demo/testimonials/01.jpg" alt="" class="img-responsive">
							</li>
							<li>
								<div>
									<p>
										Nunc ullamcorper augue nec accumsan
										porta. Ut lacinia fgiat viverra. Ut dictum
										turpis in ipsum sagittis finibus.
									</p>
									<span>Frinton Van</span>
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
			<span class="section-suptitle text-center">
				Month of March
			</span>
			<h2 class="section-title sep-type-2 text-center">
				upcoming event
			</h2>
			<div class="container">
				<div class="row">
					<div class="col-sm-12  no-padd">
						
						<ul class="event-carousel">
							<li class="event-item">
								<img src="assets/img/demo/events/01.png" alt="" class="img-responsive">
								<div>
									<h3>Chicken and Cashews</h3>
									<span>18 Mar 2016</span>
									<p>
										Lorem ipsum dolor sit amet, consectetur piscing elit. Vestibulum dapibus vehiculdum. estibulum a felis ac sem hendrerit mattis...
									</p>
									<a href="#">Read More</a>
								</div>
							</li>
							<li class="event-item">
								<img src="assets/img/demo/events/02.png" alt="" class="img-responsive">
								<div>
									<h3>Chicken and Cashews</h3>
									<span>18 Mar 2016</span>
									<p>
										Lorem ipsum dolor sit amet, consectetur piscing elit. Vestibulum dapibus vehiculdum. estibulum a felis ac sem hendrerit mattis...
									</p>
									<a href="#">Read More</a>
								</div>
							</li>
							<li class="event-item">
								<img src="assets/img/demo/events/03.png" alt="" class="img-responsive">
								<div>
									<h3>Chicken and Cashews</h3>
									<span>18 Mar 2016</span>
									<p>
										Lorem ipsum dolor sit amet, consectetur piscing elit. Vestibulum dapibus vehiculdum. estibulum a felis ac sem hendrerit mattis...
									</p>
									<a href="#">Read More</a>
								</div>
							</li>
							<li class="event-item">
								<img src="assets/img/demo/events/01.png" alt="" class="img-responsive">
								<div>
									<h3>Chicken and Cashews</h3>
									<span>18 Mar 2016</span>
									<p>
										Lorem ipsum dolor sit amet, consectetur piscing elit. Vestibulum dapibus vehiculdum. estibulum a felis ac sem hendrerit mattis...
									</p>
									<a href="#">Read More</a>
								</div>
							</li>
							<li class="event-item">
								<img src="assets/img/demo/events/02.png" alt="" class="img-responsive">
								<div>
									<h3>Chicken and Cashews</h3>
									<span>18 Mar 2016</span>
									<p>
										Lorem ipsum dolor sit amet, consectetur piscing elit. Vestibulum dapibus vehiculdum. estibulum a felis ac sem hendrerit mattis...
									</p>
									<a href="#">Read More</a>
								</div>
							</li>
							<li class="event-item">
								<img src="assets/img/demo/events/03.png" alt="" class="img-responsive">
								<div>
									<h3>Chicken and Cashews</h3>
									<span>18 Mar 2016</span>
									<p>
										Lorem ipsum dolor sit amet, consectetur piscing elit. Vestibulum dapibus vehiculdum. estibulum a felis ac sem hendrerit mattis...
									</p>
									<a href="#">Read More</a>
								</div>
							</li>
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
							<li>
								<div>
									<img src="assets/img/demo/team/01.png" alt="" class="img-responsive">
									<div>
										<span>Senior Chef</span>
										<h3>Remeno Fentos</h3>
										<div>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div>
									<img src="assets/img/demo/team/02.png" alt="" class="img-responsive">
									<div>
										<span>Adjoint Chef</span>
										<h3>Remeno Fentos</h3>
										<div>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div>
									<img src="assets/img/demo/team/03.png" alt="" class="img-responsive">
									<div>
										<span>Junior Chef</span>
										<h3>Remeno Fentos</h3>
										<div>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div>
									<img src="assets/img/demo/team/04.png" alt="" class="img-responsive">
									<div>
										<span>Adapter</span>
										<h3>Remeno Fentos</h3>
										<div>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div>
									<img src="assets/img/demo/team/01.png" alt="" class="img-responsive">
									<div>
										<span>Senior Chef</span>
										<h3>Remeno Fentos</h3>
										<div>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div>
									<img src="assets/img/demo/team/02.png" alt="" class="img-responsive">
									<div>
										<span>Adjoint Chef</span>
										<h3>Remeno Fentos</h3>
										<div>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</li>
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
										Lorem ipsum dolor sit amet, consectetur adipiscinit. Vestibulum vel sum ullamcorper, suscipit eros quis, pellentesqsapien. Sed ventis nisl a auris laoreet, at tincidunt lectus volutpat. Etiam semper ligula sollicitudi ante vehicula pellentesqsapien.
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
										Lorem ipsum dolor sit amet, consectetur adipiscinit. Vestibulum vel sum ullamcorper, suscipit eros quis, pellentesqsapien. Sed ventis nisl a auris laoreet, at tincidunt lectus volutpat. Etiam semper ligula sollicitudi ante vehicula pellentesqsapien.
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
										Lorem ipsum dolor sit amet, consectetur adipiscinit. Vestibulum vel sum ullamcorper, suscipit eros quis, pellentesqsapien. Sed ventis nisl a auris laoreet, at tincidunt lectus volutpat. Etiam semper ligula sollicitudi ante vehicula pellentesqsapien.
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
										Lorem ipsum dolor sit amet, consectetur adipiscinit. Vestibulum vel sum ullamcorper, suscipit eros quis, pellentesqsapien. Sed ventis nisl a auris laoreet, at tincidunt lectus volutpat. Etiam semper ligula sollicitudi ante vehicula pellentesqsapien.
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
		
		<!-- Section Newsletter -->
		<section id="newsletter" class="padd-100">
			<form action="#" method="post">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h3>Subscribe Newsletter</h3>
						</div>
						<div class="col-sm-6">
							<input type="text" placeholder="Email Address">
						</div>
						<div class="col-sm-2">
							<button type="submit">submit</button>
						</div>
					</div>
				</div>
			</form>
		</section>
		<!-- End Section Newsletter -->

		<!-- Footer -->
		<?php
		include("components/footer.php");
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