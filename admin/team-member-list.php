<?php include "../helper/connection.php" ?>
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

					<div class="row">
						<div class="col-xl-12">
							<a href="add-team-member.php" class="btn btn-primary me-1">+ Add Team Member</a>
						</div>
						<div class="col-xl-12">
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="active-tab-pane" role="tabpanel"
									aria-labelledby="active-tab" tabindex="0">
									<div class="card mt-2">
										<div class="card-body p-0">
											<div
												class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
												<table id="empoloyees-tbl" class="table">
													<thead>
														<tr>
															<th>
																<div class="form-check custom-checkbox ms-0">
																	<input type="checkbox"
																		class="form-check-input checkAllInput"
																		id="checkAll2" required="">
																	<label class="form-check-label"
																		for="checkAll2"></label>
																</div>
															</th>
															<th>Name</th>
															<th>Designation</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$Query = "SELECT * FROM teammembers";
														$Result = mysqli_query($conn, $Query);
														if ($Result->num_rows > 0) {
															while ($DataRows = mysqli_fetch_array($Result)) {
																?>
																<tr>
																	<td>
																		<div class="form-check custom-checkbox">
																			<input type="checkbox" class="form-check-input"
																				id="customCheckBox100" required="">
																			<label class="form-check-label"
																				for="customCheckBox100"></label>
																		</div>
																	</td>
																	<td>
																		<div class="d-flex align-items-center">
																			<img src="<?php echo "../uploads/teammembers/" . $DataRows['image']; ?>"
																				class="avatar avatar-xxs rounded" alt="">
																			<p class="mb-0 ms-2">
																				<?php echo $DataRows['name']; ?></p>
																		</div>
																	</td>
																	<td><span><?php echo $DataRows['designation']; ?></span>
																	</td>

																	<td><span
																			class="badge badge-rounded badge-outline-primary badge-lg">Active</span>
																	</td>
																</tr>
																<?php
															}
														} else {
															echo "No Result Found";
														}
														?>
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