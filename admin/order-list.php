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
	<link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


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
				<div class="d-flex justify-content-between mb-4 flex-wrap">
					<ul class="revnue-tab nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="status-tab" data-bs-toggle="tab"
								data-bs-target="#status-tab-pane" type="button" role="tab"
								aria-controls="status-tab-pane" aria-selected="true">All Status</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="delivery-tab" data-bs-toggle="tab"
								data-bs-target="#delivery-tab-pane" type="button" role="tab"
								aria-controls="delivery-tab-pane" aria-selected="false">On Delivery</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="delivered-tab" data-bs-toggle="tab"
								data-bs-target="#delivered-tab-pane" type="button" role="tab"
								aria-controls="delivered-tab-pane" aria-selected="false">Delivered</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="canceled-tab" data-bs-toggle="tab"
								data-bs-target="#canceled-tab-pane" type="button" role="tab"
								aria-controls="canceled-tab-pane" aria-selected="false">Canceled</button>
						</li>
					</ul>
					<div>
						<a href="javascript:void(0)" class="btn btn-primary me-1">+ New Order</a>
						<select class="default-select h-select ms-1" aria-label="Default select example">
							<option selected>Week</option>
							<option value="1">Month</option>
							<option value="2">Daily</option>

						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="status-tab-pane" role="tabpanel"
								aria-labelledby="status-tab" tabindex="0">
								<div class="card mt-2">
									<div class="card-body p-0">
										<div
											class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
											<table id="empoloyees-tbl" class="table">
												<thead>
													<tr>
														<th class="d-flex align-items-center">
															<div class="form-check custom-checkbox ms-0">
																<input type="checkbox"
																	class="form-check-input checkAllInput"
																	id="checkAll2" required="">
																<label class="form-check-label" for="checkAll2"></label>
															</div>
														</th>
														<th>Order ID</th>
														<th>Date</th>
														<th>Customer</th>
														<th>Location</th>
														<th>Amount</th>
														<th>Status</th>
														<th>Action</th>
														<th></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>James Sitepu</span></td>
														<td><span>Corner One St<br> Park London</span></td>
														<td><span>$ 21,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123545</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Marquez Silaban</span></td>
														<td><span>Park, Orange St</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123583</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Joseph David</span></td>
														<td><span>Center Park St</span></td>
														<td><span>$ 88,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123553</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>James John</span></td>
														<td><span>USA</span></td>
														<td><span>$ 85,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>James Sitepu</span></td>
														<td><span>Corner One St<br> Park London</span></td>
														<td><span>$ 21,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123545</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Marquez Silaban</span></td>
														<td><span>Park, Orange St</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123583</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Joseph David</span></td>
														<td><span>Center Park St</span></td>
														<td><span>$ 88,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123553</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>James John</span></td>
														<td><span>USA</span></td>
														<td><span>$ 85,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123583</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Joseph David</span></td>
														<td><span>Center Park St</span></td>
														<td><span>$ 88,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123553</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>James John</span></td>
														<td><span>USA</span></td>
														<td><span>$ 85,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade show" id="delivery-tab-pane" role="tabpanel"
								aria-labelledby="delivery-tab" tabindex="0">
								<div class="card mt-2">
									<div class="card-body p-0">
										<div
											class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
											<table id="empoloyees-tblA" class="table">
												<thead>
													<tr>
														<th>
															<div class="form-check custom-checkbox ms-0">
																<input type="checkbox"
																	class="form-check-input checkAllInput"
																	id="checkAll2" required="">
																<label class="form-check-label" for="checkAll2"></label>
															</div>
														</th>
														<th>Order ID</th>
														<th>Date</th>
														<th>Customer</th>
														<th>Location</th>
														<th>Amount</th>
														<th>Status</th>
														<th>Action</th>
														<th></th>
													</tr>
												</thead>
												<tbody>

													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123553</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>James John</span></td>
														<td><span>USA</span></td>
														<td><span>$ 85,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>James Sitepu</span></td>
														<td><span>Corner One St<br> Park London</span></td>
														<td><span>$ 21,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123545</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Marquez Silaban</span></td>
														<td><span>Park, Orange St</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123583</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Joseph David</span></td>
														<td><span>Center Park St</span></td>
														<td><span>$ 88,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade show" id="delivered-tab-pane" role="tabpanel"
								aria-labelledby="delivered-tab" tabindex="0">
								<div class="card mt-2">
									<div class="card-body p-0">
										<div
											class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
											<table id="empoloyees-tblB" class="table">
												<thead>
													<tr>
														<th>
															<div class="form-check custom-checkbox ms-0">
																<input type="checkbox"
																	class="form-check-input checkAllInput"
																	id="checkAll2" required="">
																<label class="form-check-label" for="checkAll2"></label>
															</div>
														</th>
														<th>Order ID</th>
														<th>Date</th>
														<th>Customer</th>
														<th>Location</th>
														<th>Amount</th>
														<th>Status</th>
														<th>Action</th>
														<th></th>
													</tr>
												</thead>
												<tbody>

													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123553</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>James John</span></td>
														<td><span>USA</span></td>
														<td><span>$ 85,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>James Sitepu</span></td>
														<td><span>Corner One St<br> Park London</span></td>
														<td><span>$ 21,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123545</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Marquez Silaban</span></td>
														<td><span>Park, Orange St</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123583</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Joseph David</span></td>
														<td><span>Center Park St</span></td>
														<td><span>$ 88,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>

							</div>
							<div class="tab-pane fade show" id="canceled-tab-pane" role="tabpanel"
								aria-labelledby="canceled-tab" tabindex="0">
								<div class="card mt-2">
									<div class="card-body p-0">
										<div
											class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
											<table id="empoloyees-tblC" class="table">
												<thead>
													<tr>
														<th>
															<div class="form-check custom-checkbox ms-0">
																<input type="checkbox"
																	class="form-check-input checkAllInput"
																	id="checkAll2" required="">
																<label class="form-check-label" for="checkAll2"></label>
															</div>
														</th>
														<th>Order ID</th>
														<th>Date</th>
														<th>Customer</th>
														<th>Location</th>
														<th>Amount</th>
														<th>Status</th>
														<th>Action</th>
														<th></th>
													</tr>
												</thead>
												<tbody>

													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123553</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>James John</span></td>
														<td><span>USA</span></td>
														<td><span>$ 85,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>James Sitepu</span></td>
														<td><span>Corner One St<br> Park London</span></td>
														<td><span>$ 21,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123545</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Marquez Silaban</span></td>
														<td><span>Park, Orange St</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000123583</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Joseph David</span></td>
														<td><span>Center Park St</span></td>
														<td><span>$ 88,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-success badge-lg">Delivered</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#002123456</span></td>
														<td><span>Nov 21th 2020 09:21 AM</span></td>
														<td><span>Richard Elijah</span></td>
														<td><span>NA</span></td>
														<td><span>$ 87,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-primary badge-lg">On
																Delivery</span></td>
														<td>
															<div>
																<a href="javascript:void(0)"
																	class="btn-link me-1">Track</a>
																<a href="javascript:void(0)"
																	class="btn-link text-dark ms-1">Cancel</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input"
																	id="customCheckBox100" required="">
																<label class="form-check-label"
																	for="customCheckBox100"></label>
															</div>
														</td>
														<td><span>#000223543</span></td>
														<td><span>Nov 22th 2023 09:21 AM</span></td>
														<td><span>Robert Silaban</span></td>
														<td><span>CA</span></td>
														<td><span>$ 58,4</span></td>
														<td><span
																class="badge badge-rounded badge-outline-danger badge-lg">Canceled</span>
														</td>
														<td>
															<div>
																<a href="javascript:void(0)" class="btn-link me-1">View
																	details</a>
															</div>
														</td>
														<td>
															<div class="dropdown">
																<div class="btn-link" data-bs-toggle="dropdown">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																		<path
																			d="M4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12Z"
																			stroke="#737B8B" stroke-width="2"
																			stroke-linecap="round"
																			stroke-linejoin="round"></path>
																	</svg>
																</div>
																<div class="dropdown-menu dropdown-menu-right" style="">
																	<a class="dropdown-item"
																		href="javascript:void(0);">Edit</a>
																	<a class="dropdown-item"
																		href="javascript:void(0);">Delete</a>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
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
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/plugins-init/datatables.init.js"></script>


	<!-- JS for dotted map -->




	<!-- Apex Chart -->



	<!-- Vectormap -->

	<script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>

</body>

</html>