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

	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<!-- tagify-css -->

	<!-- Style css -->
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
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-end border-0 pb-0">
								<div class="dropdown">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right" style="">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-xl-4">
										<div class="d-flex align-items-center">
											<img src="images/profile/pic1.jpg" alt="" class="avatar avatar-md">
											<div class="ms-3">
												<h6 class="mb-0"><a href="app-profile-2.html" class="text-primary">James
														Sukardi</a></h6>
												<h6>USA</h6>
												<span>45 Followers, 68 Reviews</span>
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="d-flex">
											<ul class="star-rating s-rieview me-3">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
											</ul>
											<span>25/05/2023</span>
										</div>
										<p class="review">We recently had dinner with friends at Dimas Can Zheng and we
											all walked away with a great experience. Good food, pleasant environment,
											personal attention through all the evening. Thanks to the team and we will
											be back!</p>
										<div class="d-flex justify-content-between flex-wrap align-items-center">
											<div class="sm-mb-0 mb-2">
												<a href="javascript:void(0)" class="btn btn-primary light me-1">PUBLIC
													COMMENT</a>
												<a href="javascript:void(0)" class="btn btn-primary light ms-1">DIRECT
													MESSAGE</a>
											</div>
											<a href="javascript:void(0)" class="btn btn-primary ms-1">REPLY</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-end border-0 pb-0">
								<div class="dropdown">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right" style="">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-xl-4">
										<div class="d-flex align-items-center">
											<img src="images/profile/25.jpg" alt="" class="avatar avatar-md">
											<div class="ms-3">
												<h6 class="mb-0"><a href="app-profile-2.html" class="text-primary">James
														Sitepu</a></h6>
												<h6>USA</h6>
												<span>45 Followers, 68 Reviews</span>
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="d-flex">
											<ul class="star-rating s-rieview me-3">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
											</ul>
											<span>25/05/2023</span>
										</div>
										<p class="review">We recently had dinner with friends at Dimas Can Zheng and we
											all walked away with a great experience. Good food, pleasant environment,
											personal attention through all the evening. Thanks to the team and we will
											be back!</p>
										<div class="d-flex justify-content-between flex-wrap align-items-center">
											<div class="sm-mb-0 mb-2">
												<a href="javascript:void(0)" class="btn btn-primary light me-1">PUBLIC
													COMMENT</a>
												<a href="javascript:void(0)" class="btn btn-primary light ms-1">DIRECT
													MESSAGE</a>
											</div>
											<a href="javascript:void(0)" class="btn btn-primary ms-1">REPLY</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-end border-0 pb-0">
								<div class="dropdown">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right" style="">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-xl-4">
										<div class="d-flex align-items-center">
											<img src="images/profile/17.jpg" alt="" class="avatar avatar-md">
											<div class="ms-3">
												<h6 class="mb-0"><a href="app-profile-2.html"
														class="text-primary">Elijah James</a></h6>
												<h6>Australia</h6>
												<span>55 Followers, 39 Reviews</span>
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="d-flex">
											<ul class="star-rating s-rieview me-3">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
											</ul>
											<span>25/05/2023</span>
										</div>
										<p class="review">We recently had dinner with friends at Dimas Can Zheng and we
											all walked away with a great experience. Good food, pleasant environment,
											personal attention through all the evening. Thanks to the team and we will
											be back!</p>
										<div class="d-flex justify-content-between flex-wrap align-items-center">
											<div class="sm-mb-0 mb-2">
												<a href="javascript:void(0)" class="btn btn-primary light me-1">PUBLIC
													COMMENT</a>
												<a href="javascript:void(0)" class="btn btn-primary light ms-1">DIRECT
													MESSAGE</a>
											</div>
											<a href="javascript:void(0)" class="btn btn-primary ms-1">REPLY</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-end border-0 pb-0">
								<div class="dropdown">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right" style="">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-xl-4">
										<div class="d-flex align-items-center">
											<img src="images/profile/pic1.jpg" alt="" class="avatar avatar-md">
											<div class="ms-3">
												<h6 class="mb-0"><a href="app-profile-2.html" class="text-primary">James
														Sukardi</a></h6>
												<h6>USA</h6>
												<span>45 Followers, 68 Reviews</span>
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="d-flex">
											<ul class="star-rating s-rieview me-3">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
											</ul>
											<span>25/05/2023</span>
										</div>
										<p class="review">We recently had dinner with friends at Dimas Can Zheng and we
											all walked away with a great experience. Good food, pleasant environment,
											personal attention through all the evening. Thanks to the team and we will
											be back!</p>
										<div class="d-flex justify-content-between flex-wrap align-items-center">
											<div class="sm-mb-0 mb-2">
												<a href="javascript:void(0)" class="btn btn-primary light me-1">PUBLIC
													COMMENT</a>
												<a href="javascript:void(0)" class="btn btn-primary light ms-1">DIRECT
													MESSAGE</a>
											</div>
											<a href="javascript:void(0)" class="btn btn-primary ms-1">REPLY</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-end border-0 pb-0">
								<div class="dropdown">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right" style="">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-xl-4">
										<div class="d-flex align-items-center">
											<img src="images/profile/25.jpg" alt="" class="avatar avatar-md">
											<div class="ms-3">
												<h6 class="mb-0"><a href="app-profile-2.html" class="text-primary">James
														Sitepu</a></h6>
												<h6>USA</h6>
												<span>45 Followers, 68 Reviews</span>
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="d-flex">
											<ul class="star-rating s-rieview me-3">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
											</ul>
											<span>25/05/2023</span>
										</div>
										<p class="review">We recently had dinner with friends at Dimas Can Zheng and we
											all walked away with a great experience. Good food, pleasant environment,
											personal attention through all the evening. Thanks to the team and we will
											be back!</p>
										<div class="d-flex justify-content-between flex-wrap align-items-center">
											<div class="sm-mb-0 mb-2">
												<a href="javascript:void(0)" class="btn btn-primary light me-1">PUBLIC
													COMMENT</a>
												<a href="javascript:void(0)" class="btn btn-primary light ms-1">DIRECT
													MESSAGE</a>
											</div>
											<a href="javascript:void(0)" class="btn btn-primary ms-1">REPLY</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header justify-content-end border-0 pb-0">
								<div class="dropdown">
									<div class="btn-link" data-bs-toggle="dropdown">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
											<path
												d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
												stroke="#737B8B" stroke-width="2" stroke-linecap="round"
												stroke-linejoin="round"></path>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right" style="">
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-xl-4">
										<div class="d-flex align-items-center">
											<img src="images/profile/17.jpg" alt="" class="avatar avatar-md">
											<div class="ms-3">
												<h6 class="mb-0"><a href="app-profile-2.html"
														class="text-primary">Elijah James</a></h6>
												<h6>Australia</h6>
												<span>55 Followers, 39 Reviews</span>
											</div>
										</div>
									</div>
									<div class="col-xl-8">
										<div class="d-flex">
											<ul class="star-rating s-rieview me-3">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
												<li><i class="fa-solid fa-star-half-stroke"></i></li>
											</ul>
											<span>25/05/2023</span>
										</div>
										<p class="review">We recently had dinner with friends at Dimas Can Zheng and we
											all walked away with a great experience. Good food, pleasant environment,
											personal attention through all the evening. Thanks to the team and we will
											be back!</p>
										<div class="d-flex justify-content-between flex-wrap align-items-center">
											<div class="sm-mb-0 mb-2">
												<a href="javascript:void(0)" class="btn btn-primary light me-1">PUBLIC
													COMMENT</a>
												<a href="javascript:void(0)" class="btn btn-primary light ms-1">DIRECT
													MESSAGE</a>
											</div>
											<a href="javascript:void(0)" class="btn btn-primary ms-1">REPLY</a>
										</div>
									</div>
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

		<!--**********************************
		   Support ticket button start
		***********************************-->

		<!--**********************************
		   Support ticket button end
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
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<!-- Dashboard 1 -->




	<!-- JS for dotted map -->




	<!-- Apex Chart -->



	<!-- Vectormap -->

	<script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>

</body>

</html>