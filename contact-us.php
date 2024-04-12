<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

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
		
		<!-- Section Main -->
		<section id="breadcrumb" data-background="assets/img/demo/slides/02.jpg" class="parallax-window">
			<div>
				<span class="section-suptitle text-center">Food Lover</span>
				<h1 class="section-title white-font text-center">Contact us</h1>
				<ul>
					<li><a href="#">Home</a></li>
					<li>Contact us</li>
				</ul>
			</div>
		</section>
		<!-- End Section Main -->

		<!-- Section Contact -->
		<section id="contact-detail" class=" padd-100">
			<h2 class="section-title sep-type-2 text-center">Contact Details</h2>
			<p class="section-resume">
				We accept reservations for parties of up to 8 people. for parties of 10 or more. please call at <br />
				<span>(00) 14525 5688</span> or email us at <a href="#">info@foodlover.com</a>.
			</p>
			<div id="maps"></div>
			<div class="container padd-bottom-100 padd-top-120">
				<div class="row">
					<div class="col-sm-4">
						<div class="item-contact">
							<i class="fa fa-phone"></i>
							<b>Phone</b>
							<p>+61 3 8376 6284</p>
							<p>+50 4 2458 2465</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="item-contact">
							<i class="fa fa-map-marker"></i>
							<b>Address</b>
							<p>
								121 King Street, Melbourne <br />
								Victoria 3000 Australia <br />
								ABN 11 119 159 741
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="item-contact">
							<i class="fa fa-envelope"></i>
							<b>Email</b>
							<p>
								<a href="#">Oder@foodlover.com</a>
							</p>
							<p>
								<a href="#">Sales@example.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<span class="section-suptitle text-center">Fill Enquiry</span>
			<h2 class="section-title sep-type-2 text-center">any questions?</h2>
			<p class="section-resume">
				This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
			</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-reservation" id="form-contact">
							<form action="https://template-html.egprojets.com/food-lover/php/mail.php" method="post">
								<div class="column">
									<span>
										<input type="text" name="name" placeholder="Name" class="required-field">
									</span>
									<span>
										<input type="text" name="email" placeholder="Email Adress" class="required-field">
									</span>
								</div>
								<div class="column">
									<span>
										<input type="text" name="sujet" placeholder="Subject" class="required-field">
									</span>
									<span>
										<input type="text" name="phone" placeholder="Your Phone" class="required-field">
									</span>
								</div>
								<div class="column">
									<textarea name="message" placeholder="Message" class="required-field"></textarea>
								</div>
								<p class="text-center padd-top-30">
									<button type="submit" class="btn-food">Send</button>
								</p>								
							</form>
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