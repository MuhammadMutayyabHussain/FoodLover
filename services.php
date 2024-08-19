<?php
include ('helper/connection.php')
	?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="author" content="Egprojets">
	<meta name="description" content="" />
	<title>Food Lover</title>

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
				<h1 class="section-title white-font text-center">Services</h1>
				<ul>
					<li><a href="#">Home</a></li>
					<li>Services</li>
				</ul>
			</div>
		</section>
		<!-- End Section Main -->

		<!-- Section Services -->
		<section id="services" class="padd-100 gray-bg">
			<span class="section-suptitle text-center">Food Lover</span>
			<h2 class="section-title sep-type-2 text-center">Best Services</h2>
			<p class="section-resume">
				Experience top-tier excellence with our impeccable services, tailored to exceed your expectations. From
				attentive staff to meticulous attention to detail, we ensure a seamless and unforgettable experience.
				Elevate your visit with our commitment to unparalleled hospitality.
			</p>
			<div class="container">
				<div class="row">
					<?php
					$Query = "SELECT * FROM services";
					$Result = mysqli_query($conn, $Query);
					if ($Result->num_rows > 0) {
						$count = 0;
						while ($DataRows = mysqli_fetch_array($Result)) {

							?>
							<div class="col-sm-6 col-md-4 service-item">
								<i class="<?php echo $DataRows['icon']; ?>"></i>
								<div>
									<h4><?php echo $DataRows['name']; ?></h4>
									<p><?php echo $DataRows['discription']; ?></p>
								</div>
							</div>
							<?php
							$count++;
							if ($count == 6)
								break;
						}
					} else {
						echo "No Result Found";
					}
					?>
				</div>
			</div>
		</section>
		<!-- End Section Services -->


		<!-- Section apps -->
		<section id="apps" class="padd-bottom-100">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="desc-apps">
							<span class="section-suptitle">For You</span>
							<h2 class="section-title">App Easy to Use</h2>
							<p>
								Simplify your dining with our user-friendly app: effortless navigation, seamless
								ordering, diverse menu, doorstep delivery or pickup. Say goodbye to waiting, hello to
								culinary delight. Download now for unparalleled convenience.
							</p>
							<b class="big-title">Download App’s</b>
							<p>
								Get Free Mobile App’s for <span>Food Lover</span> Available on :
							</p>
							<div class="link">
								<a href="#">
									<img src="assets/img/btn_apps.png" alt="">
								</a>
								<a href="#">
									<img src="assets/img/btn_google.png" alt="">
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<img src="assets/img/demo/apps/02.png" alt="" class="img-responsive">
					</div>
				</div>
			</div>
		</section>
		<!-- End Section apps -->


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