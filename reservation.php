
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
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
				<h1 class="section-title white-font text-center">reservation</h1>
				<ul>
					<li><a href="#">Home</a></li>
					<li>reservation</li>
				</ul>
			</div>
		</section>
		<!-- End Section Main -->

		<!-- Section Select Table -->
		<section id="select-table" class="padd-100">
			<span class="section-suptitle text-center"></span>
			<h2 class="section-title sep-type-2 text-center">Select Your Table</h2>
			<p class="section-resume">
			</p>
		</section>
		<!-- End Section Select Table -->

		<!-- Section Reservation -->
<?php
include("components/reservation-form.php");
?>
		<!-- End Section Reservation -->

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
										Lorem ipsum dolor sit amet, consectetur adipiscinit. Vestibulum vel sum
										ullamcorper, suscipit eros quis, pellentesqsapien. Sed ventis nisl a auris
										laoreet, at tincidunt lectus volutpat. Etiam semper ligula sollicitudi ante
										vehicula pellentesqsapien.
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
										Lorem ipsum dolor sit amet, consectetur adipiscinit. Vestibulum vel sum
										ullamcorper, suscipit eros quis, pellentesqsapien. Sed ventis nisl a auris
										laoreet, at tincidunt lectus volutpat. Etiam semper ligula sollicitudi ante
										vehicula pellentesqsapien.
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
										Lorem ipsum dolor sit amet, consectetur adipiscinit. Vestibulum vel sum
										ullamcorper, suscipit eros quis, pellentesqsapien. Sed ventis nisl a auris
										laoreet, at tincidunt lectus volutpat. Etiam semper ligula sollicitudi ante
										vehicula pellentesqsapien.
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
										Lorem ipsum dolor sit amet, consectetur adipiscinit. Vestibulum vel sum
										ullamcorper, suscipit eros quis, pellentesqsapien. Sed ventis nisl a auris
										laoreet, at tincidunt lectus volutpat. Etiam semper ligula sollicitudi ante
										vehicula pellentesqsapien.
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