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
				<form method="post" action="scripts/add-member.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-9">
							<div class="content-header">
								<h2 class="content-title">Add New Member</h2>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="card mb-4">
								<div class="card-header">
									<h4>Team Member</h4>
								</div>
								<div class="card-body">
									<div class="mb-4">
										<label for="member_name" class="form-label">Name</label>
										<input type="text" placeholder="Type here" required class="form-control"
											id="member_name" name="member_name">
									</div>
									<div class="mb-4">
										<label for="designation" class="form-label">Designation</label>
										<input type="text" placeholder="Type here" required class="form-control"
											id="designation" name="designation">
									</div>
									<div class="mb-4">
										<label for="facebook" class="form-label">Facebook Bio</label>
										<input type="text" placeholder="Facebook bio link" class="form-control"
											id="facebook" name="facebook">
									</div>
									<div class="mb-4">
										<label for="instagram" class="form-label">Instagram Bio</label>
										<input type="text" placeholder="Instagram bio link" class="form-control"
											id="instagram" name="instagram">
									</div>
									<div class="mb-4">
										<label for="twitter" class="form-label">X Bio</label>
										<input type="text" placeholder="X bio link" class="form-control" id="twitter"
											name="twitter">
									</div>
									<input class="btn btn-primary rounded font-sm hover-up" type="submit"
										value="Add Member">
								</div>
							</div> <!-- card end// -->
						</div>
						<div class="col-lg-3">
							<div class="card mb-4">
								<div class="card-header">
									<h4>Media</h4>
								</div>
								<div class="card-body">
									<div class="input-upload">
										<input class="form-control" type="file" name="image" required>
									</div>
								</div>
							</div> <!-- card end// -->
						</div>
					</div>
				</form>

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