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

		<!-- Section Main -->
		<section id="breadcrumb" data-background="assets/img/demo/slides/02.jpg" class="parallax-window">
			<div>
				<span class="section-suptitle text-center">Food Lover</span>
				<h1 class="section-title white-font text-center">Menu</h1>
				<ul>
					<li><a href="#">Home</a></li>
					<li>Menu</li>
				</ul>
			</div>
		</section>
		<!-- End Section Main -->

		<!-- Section Lunch Menu -->
		<section id="lunch-menu" class="padd-100">
			<span class="section-suptitle text-center">Food Lover</span>
			<h2 class="section-title sep-type-2 text-center">Lunch Menu</h2>
			<p class="section-resume">
			</p>
			<div class="container">
				<div class="row">
					<div class="menu-carousel vertical-carousel">
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/08.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/09.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/08.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/09.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta </h3>
										<p>
											.
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/11.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/12.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/13.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/14.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/15.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Lunch Menu -->

		<!-- Section Appetizer -->
		<section id="appetizer" class="padd-100 dark-bg">
			<span class="section-suptitle text-center">Food Lover</span>
			<h2 class="section-title sep-type-2 text-center">Appetizer</h2>
			<p class="section-resume">
			</p>
			<div class="container">
				<div class="row">
					<div class="menu-carousel vertical-carousel">
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pecho (Breast)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/11.jpg" alt="" class="img-responsive">
									<div>
										<h3>Atay (Liver)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/12.jpg" alt="" class="img-responsive">
									<div>
										<h3>Spicy Wings</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/14.jpg" alt="" class="img-responsive">
									<div>
										<h3>Beef Barbeque</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/15.jpg" alt="" class="img-responsive">
									<div>
										<h3>Ensaladang Talong</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/16.jpg" alt="" class="img-responsive">
									<div>
										<h3>Mangga Ensalada</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/08.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/09.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
											.
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/11.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/12.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/13.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/14.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/15.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Appetizer -->

		<!-- Section Main Course -->
		<section id="main-course" class="padd-100">
			<span class="section-suptitle text-center">Food Lover</span>
			<h2 class="section-title sep-type-2 text-center">Main course</h2>
			<p class="section-resume">
			</p>
			<div class="container">
				<div class="row">
					<div class="menu-carousel vertical-carousel">
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/14.jpg" alt="" class="img-responsive">
									<div>
										<h3>Kapeng Barako</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/15.jpg" alt="" class="img-responsive">
									<div>
										<h3>Espresso</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/16.jpg" alt="" class="img-responsive">
									<div>
										<h3>Caramel Machiatto</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/17.jpg" alt="" class="img-responsive">
									<div>
										<h3>Iced Mocha Amaretto</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/18.jpg" alt="" class="img-responsive">
									<div>
										<h3>Cappuccino</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/19.jpg" alt="" class="img-responsive">
									<div>
										<h3>Iced Mocha Butterscoth</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/08.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/09.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/11.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/12.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/13.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/14.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/15.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Main Course -->

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
							<form action="#" method="post">
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

		<!-- Section Dessert -->
		<section id="deserts" class="padd-100 gray-bg">
			<span class="section-suptitle text-center">Food Lover</span>
			<h2 class="section-title sep-type-2 text-center">Deserts</h2>
			<p class="section-resume">
			</p>
			<div class="container">
				<div class="row">
					<div class="menu-carousel vertical-carousel">
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/20.jpg" alt="" class="img-responsive">
									<div>
										<h3>Canned Soda</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/21.jpg" alt="" class="img-responsive">
									<div>
										<h3>Ensayamada Ube</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/22.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bottled Water</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Iced Mocha Amaretto</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/11.jpg" alt="" class="img-responsive">
									<div>
										<h3>Sola Iced Tea</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/12.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pan De Pork</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/08.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/09.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/02.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/03.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/04.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/05.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/06.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/07.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon </h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
						<div class="menu-item">
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/10.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pring Veg & Pasta</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/11.jpg" alt="" class="img-responsive">
									<div>
										<h3>Bacon/Ham/Chorizo</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/12.jpg" alt="" class="img-responsive">
									<div>
										<h3>Pork & Chicken</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$12</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="offer-item">
									<img src="assets/img/demo/offers/13.jpg" alt="" class="img-responsive">
									<div>
										<h3>2-pc Pork BBQ ( 1 Side)</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/14.jpg" alt="" class="img-responsive">
									<div>
										<h3>Very Bacon</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$14</span>
								</div>
								<div class="offer-item">
									<img src="assets/img/demo/offers/15.jpg" alt="" class="img-responsive">
									<div>
										<h3>Plenty o Pepperoni</h3>
										<p>
										</p>
									</div>
									<span class="offer-price">$10</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Dessert -->

		<!-- Section Drink -->
		<section id="drink" class="padd-100">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span class="section-suptitle">Drink Menu</span>
						<h4 class="section-title">
							Tasty Soda (500 ml)
						</h4>
						<div class="drink-item">
							<span>Coca Bottle</span>
							<p>$10</p>
						</div>
						<div class="drink-item">
							<span>Gold light</span>
							<p>$13</p>
						</div>
						<div class="drink-item">
							<span>Realy Good</span>
							<p>$10</p>
						</div>
						<div class="drink-item">
							<span>Costomapo</span>
							<p>$20</p>
						</div>
						<div class="drink-item">
							<span>Stick Bottle</span>
							<p>$16</p>
						</div>
						<div class="drink-item">
							<span>Atay</span>
							<p>$20</p>
						</div>
					</div>
					<div class="col-md-6">
						<span class="section-suptitle">Drink Menu</span>
						<h4 class="section-title">
							Atay Bottle (300 ml)
						</h4>
						<div class="drink-item">
							<span>Coca Bottle</span>
							<p>$10</p>
						</div>
						<div class="drink-item">
							<span>Gold light</span>
							<p>$13</p>
						</div>
						<div class="drink-item">
							<span>Realy Good</span>
							<p>$10</p>
						</div>
						<div class="drink-item">
							<span>Costomapo</span>
							<p>$20</p>
						</div>
						<div class="drink-item">
							<span>Stick Bottle</span>
							<p>$16</p>
						</div>
						<div class="drink-item">
							<span>Atay</span>
							<p>$20</p>
						</div>
					</div>
					<div class="col-md-6">
						<span class="section-suptitle">Drink Menu</span>
						<h4 class="section-title">
							Bio Jus (500 ml)
						</h4>
						<div class="drink-item">
							<span>Coca Bottle</span>
							<p>$10</p>
						</div>
						<div class="drink-item">
							<span>Gold light</span>
							<p>$13</p>
						</div>
						<div class="drink-item">
							<span>Realy Good</span>
							<p>$10</p>
						</div>
						<div class="drink-item">
							<span>Costomapo</span>
							<p>$20</p>
						</div>
						<div class="drink-item">
							<span>Stick Bottle</span>
							<p>$16</p>
						</div>
						<div class="drink-item">
							<span>Atay</span>
							<p>$20</p>
						</div>
					</div>
					<div class="col-md-6">
						<span class="section-suptitle">Drink Menu</span>
						<h4 class="section-title">
							Little Drink (300 ml)
						</h4>
						<div class="drink-item">
							<span>Coca Bottle</span>
							<p>$10</p>
						</div>
						<div class="drink-item">
							<span>Gold light</span>
							<p>$13</p>
						</div>
						<div class="drink-item">
							<span>Realy Good</span>
							<p>$10</p>
						</div>
						<div class="drink-item">
							<span>Costomapo</span>
							<p>$20</p>
						</div>
						<div class="drink-item">
							<span>Stick Bottle</span>
							<p>$16</p>
						</div>
						<div class="drink-item">
							<span>Atay</span>
							<p>$20</p>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="btn-food">Download Menu</a>
		</section>
		<!-- End Section Drink -->

		<!-- Section From The Menu -->
		<section id="from-menu" class="padd-100 no-padd-top">
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