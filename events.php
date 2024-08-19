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
				<h1 class="section-title white-font text-center">Events</h1>
				<ul>
					<li><a href="#">Home</a></li>
					<li>Events</li>
				</ul>
			</div>
		</section>
		<!-- End Section Main -->

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
											<p><?php echo $DataRows['longdiscription']; ?></p>
										</div>
									</li>
									<?php
									$count++;
									if ($count == 6)
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