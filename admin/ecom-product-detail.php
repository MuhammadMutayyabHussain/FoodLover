<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Salero:Restaurant Admin Bootstrap 5 Template">
	<meta property="og:title" content="Salero:Restaurant Admin Bootstrap 5 Template">
	<meta property="og:description" content="Salero:Restaurant Admin Bootstrap 5 Template">
	<meta property="og:image" content="page-error-404.html">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Salero Restaurant Admin Bootstrap 5 Template</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/star-rating/star-rating-svg.css">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<!--*******************
		Preloader start
	********************-->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-box">
				<div class="icon">
					<i class="fas fa-utensils"></i>
				</div>
			</div>
		</div>
	</div>
	<!--*******************
		Preloader end
	********************-->


	<!--**********************************
		Main wrapper start
	***********************************-->
	<div id="main-wrapper">

		<!--**********************************
			Header start
		***********************************-->
		<?php
		include ("components/header.php");
		?>
		<!--**********************************
			Header end ti-comment-alt
		***********************************-->

		<!--**********************************
			Sidebar start
		***********************************-->
		<?php
		include ("components/sidebar.php");
		?>
		<!--**********************************
			Sidebar end
		***********************************-->

		<!--**********************************
			Content body start
		***********************************-->
		<div class="content-body">
			<div class="container mh-auto">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-xl-3 col-lg-6 col-md-6">
										<!-- Tab panes -->
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
												aria-labelledby="home-tab" tabindex="0">
												<img class="img-fluid rounded  " src="images/product/1.jpg" alt="">
											</div>
											<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
												aria-labelledby="profile-tab" tabindex="0">
												<img class="img-fluid rounded " src="images/product/2.jpg" alt="">
											</div>
											<div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
												aria-labelledby="contact-tab" tabindex="0">
												<img class="img-fluid rounded" src="images/product/3.jpg" alt="">
											</div>
											<div class="tab-pane fade" id="end-tab-pane" role="tabpanel"
												aria-labelledby="end-tab" tabindex="0">
												<img class="img-fluid rounded" src="images/product/3.jpg" alt="">
											</div>

										</div>
										<div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
											<!-- Nav tabs -->
											<ul class="nav nav-tabs slide-item-list mt-3" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<a href="#first" class="nav-link active" id="home-tab"
														data-bs-toggle="tab" data-bs-target="#home-tab-pane" role="tab"
														aria-controls="home-tab-pane" aria-selected="true"><img
															class="img-fluid me-2 rounded" src="images/tab/1.jpg" alt=""
															width="80"></a>
												</li>
												<li class="nav-item" role="presentation">
													<a href="#second" class="nav-link" id="profile-tab"
														data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
														role="tab" aria-controls="profile-tab-pane"
														aria-selected="false"><img class="img-fluid me-2 rounded"
															src="images/tab/2.jpg" alt="" width="80"></a>
												</li>
												<li class="nav-item" role="presentation">
													<a href="#third" class="nav-link" id="contact-tab"
														data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
														role="tab" aria-controls="contact-tab-pane"
														aria-selected="false"><img class="img-fluid me-2 rounded"
															src="images/tab/3.jpg" alt="" width="80"></a>
												</li>
												<li class="nav-item" role="presentation">
													<a href="#for" class="nav-link" id="end-tab" data-bs-toggle="tab"
														data-bs-target="#end-tab-pane" role="tab"
														aria-controls="end-tab-pane" aria-selected="false"><img
															class="img-fluid  rounded" src="images/tab/4.jpg" alt=""
															width="80"></a>
												</li>

											</ul>
										</div>
									</div>
									<!--Tab slider End-->
									<div class="col-xl-9 col-lg-6 col-md-6 col-sm-12">
										<div class="product-detail-content">
											<!--Product details-->
											<div class="new-arrival-content pr">
												<h4>Toong Gyen Yung (Golden Bag)</h4>
												<div class="comment-review star-rating d-flex">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
													</ul>
													<span class="review-text ms-3">(34 reviews) / </span><a
														class="product-review" href="#" data-bs-toggle="modal"
														data-bs-target="#reviewModal">Write a review?</a>
												</div>
												<div class="d-table mb-2">
													<p class="price float-start d-block">$325.00</p>
												</div>
												<p>Availability: <span class="item"> In stock <i
															class="fa fa-shopping-basket"></i></span>
												</p>
												<p>Product code: <span class="item">0405689</span> </p>
												<p>Brand: <span class="item">Lee</span></p>
												<p>Product tags:&nbsp;&nbsp;
													<span class="badge badge-success light">tasty</span>
													<span class="badge badge-success light">foodpics</span>
													<span class="badge badge-success light">love</span>
													<span class="badge badge-success light">foodies</span>
												</p>
												<p class="text-content">
													Explore our latest blog post on tantalizing food trends. From exotic
													flavors to culinary adventures, dive into a world of gastronomic
													delights. Join us as we uncover the secrets behind mouth-watering
													dishes and share our passion for exceptional dining experiences.
												</p>
												<div class="d-flex align-items-end flex-wrap mt-4">
													<div class="filtaring-area me-3">
														<div class="size-filter">
															<h4 class="m-b-15">Select size</h4>
															<div class="d-flex select-size mb-1" role="group"
																aria-label="Basic radio toggle button group">
																<input type="radio" class="btn-check" name="btnradio"
																	id="btnradio1" checked>
																<label class="btn btn-outline-primary sharp sharp-lg"
																	for="btnradio1">XS</label>

																<input type="radio" class="btn-check" name="btnradio"
																	id="btnradio2">
																<label class="btn btn-outline-primary sharp sharp-lg"
																	for="btnradio2">SM</label>

																<input type="radio" class="btn-check" name="btnradio"
																	id="btnradio3">
																<label class="btn btn-outline-primary sharp sharp-lg"
																	for="btnradio3">MD</label>

																<input type="radio" class="btn-check" name="btnradio"
																	id="btnradio4">
																<label class="btn btn-outline-primary sharp sharp-lg"
																	for="btnradio4">LG</label>

																<input type="radio" class="btn-check" name="btnradio"
																	id="btnradio5">
																<label class="btn btn-outline-primary sharp sharp-lg"
																	for="btnradio5">XL</label>
															</div>

														</div>
													</div>
													<!--Quantity start-->
													<div class="col-2 px-0  mb-1 me-3">
														<input type="number" name="num"
															class="form-control input-btn input-number" value="1">
													</div>
													<!--Quanatity End-->
													<div class="shopping-cart  mb-1 me-3">
														<a class="btn btn-primary" href="javascript:void(0);;"><i
																class="fa fa-shopping-basket me-2"></i>Add
															to cart</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- review -->
					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog modal-dialog-center" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Review</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal">
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="text-center mb-4">
											<img class="img-fluid rounded" width="78" src="images/avatar/1.jpg"
												alt="DexignZone">
										</div>
										<div class="mb-3">
											<div class="rating-widget mb-4 text-center">
												<!-- Rating Stars Box -->
												<div class="rating-stars">
													<ul id="stars">
														<li class="star" title="Poor" data-value="1">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Fair" data-value="2">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Good" data-value="3">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Excellent" data-value="4">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="WOW!!!" data-value="5">
															<i class="fa fa-star fa-fw"></i>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
										</div>
										<button class="btn btn-success btn-block">RATE</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
			Content body end
		***********************************-->
		
	</div>
	<!--**********************************
		Main wrapper end
	***********************************-->

	<!--**********************************
		Scripts
	***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<!-- Rating -->
	<script src="vendor/star-rating/jquery.star-rating-svg.js"></script>

	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

	<script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
</body>

</html>