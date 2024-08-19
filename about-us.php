<?php
include ('helper/connection.php')
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
				<h1 class="section-title white-font text-center">About us</h1>
				<ul>
					<li><a href="#">Home</a></li>
					<li>About us</li>
				</ul>
			</div>
		</section>
		<!-- End Section Main -->

		<!-- Section Story -->
		<section id="our-story">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="story-description">
							<span class="section-suptitle">Our Story</span>
							<h2 class="section-title">Who We are & history</h2>
							<p>
								At our core, we are more than just a restaurant; we are a culmination of traditions,
								flavors, and heartfelt stories passed down through generations. Our journey began with a
								vision to redefine culinary experiences, blending heritage with innovation. Each dish
								tells a tale of craftsmanship and dedication, rooted in the rich tapestry of our
								cultural heritage. From the bustling streets of Lucknow to the cozy kitchens of Parsi
								households, our history is woven with threads of passion and authenticity. We invite you
								to embark on this gastronomic adventure with us, where every bite is a tribute to the
								legacy of flavor and tradition.
							</p>
							<a href="reservation.php" class="btn-food">book now</a>
						</div>
					</div>
					<div class="col-sm-6">
						<img src="assets/img/demo/story/01.jpg" alt="" class="img-responsive img-story">
					</div>
				</div>
			</div>
		</section>
		<!-- End Section Story -->

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

		<!-- Section Gallery -->
		<section id="gallery" class="padd-100 ">
			<span class="section-suptitle text-center">Food Lover</span>
			<h2 class="section-title sep-type-2 text-center">Restaurant Gallery</h2>
			<p class="section-resume">
				Discover our restaurant through captivating visuals in our gallery, showcasing the ambiance, cuisine,
				and moments of delight. Immerse yourself in an array of images that capture the essence of our dining
				experience. Let our gallery paint a picture of the memorable moments awaiting you.
			</p>
			<div class="container">
				<div class="row">
					<div class="restaurant-list">
						<div class="grid-sizer col-sm-6 col-md-4"></div>
						<div class="col-sm-6 col-md-4 grid-item">
							<a href="assets/img/demo/story/02_large.jpg" data-fancybox-group="gallery"
								class="fancybox"><img src="assets/img/demo/story/02.jpg" alt=""></a>
						</div>
						<div class="col-sm-6 col-md-4 grid-item">
							<a href="assets/img/demo/story/04_large.jpg" data-fancybox-group="gallery"
								class="fancybox"><img src="assets/img/demo/story/04.jpg" alt=""></a>
						</div>
						<div class="col-sm-6 col-md-4 grid-item">
							<a href="assets/img/demo/story/03_large.jpg" data-fancybox-group="gallery"
								class="fancybox"><img src="assets/img/demo/story/03.jpg" alt=""></a>
						</div>
						<div class="col-sm-6 col-md-4 grid-item">
							<a href="assets/img/demo/story/05_large.jpg" data-fancybox-group="gallery"
								class="fancybox"><img src="assets/img/demo/story/05.jpg" alt=""></a>
						</div>
						<div class="col-sm-6 col-md-4 grid-item">
							<a href="assets/img/demo/story/06_large.jpg" data-fancybox-group="gallery"
								class="fancybox"><img src="assets/img/demo/story/06.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<p class="text-center btn-load"><a href="blog.php" class="btn-food">Load more</a></p>
		</section>
		<!-- End Section Gallery -->

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