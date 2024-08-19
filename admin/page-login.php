<?php
include ("scripts/config.php");

if (isset($_POST['submit'])) {
	$Email = $_POST['email'];
	$Password = $_POST['password'];

	if ($conn) {
		$Query = "SELECT * FROM register WHERE email='$Email' AND password='$Password'";

		$Result = mysqli_query($conn, $Query);

		if (mysqli_num_rows($Result) > 0) {
			$userData = mysqli_fetch_assoc($Result);

			session_start();
			$_SESSION['USER_ID'] = $userData['id'];
			header("Location: index.php");
			exit();
		} else {
			header("Location: login.php?error=1");
			exit();
		}
	} else {
		echo "Error: Database connection failed.";
	}
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">


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
	<link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
	<div class="page-wraper">

		<!-- Content -->
		<div class="browse-job login-style3">
			<!-- Coming Soon -->
			<div class="bg-img-fix overflow-hidden"
				style="background:#fff url(images/background/bg6.jpg); height: 100vh;">
				<div class="row gx-0">
					<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 vh-100 bg-login ">
						<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside"
							style="max-height: 653px;" tabindex="0">
							<div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;"
								dir="ltr">
								<div class="login-form style-2">


									<div class="card-body">
										<div class="logo-header">
											<a href="index.html" class="logo"><img src="images/logo/logo-full.png"
													alt="" class="width-230 light-logo"></a>
											<a href="index.html" class="logo"><img src="images/logo/logofull-white.png"
													alt="" class="width-230 dark-logo"></a>
										</div>

										<nav>
											<div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">

												<div class="tab-content w-100" id="nav-tabContent">
													<div class="tab-pane fade show active" id="nav-personal"
														role="tabpanel" aria-labelledby="nav-personal-tab">
														<form action="#" method="post">
															<h3 class="form-title m-t0">Login Information</h3>
															<div class="dz-separator-outer m-b5">
																<div class="dz-separator bg-primary style-liner"></div>
															</div>
															<p>Enter your e-mail address and your password.</p>
															<div class="form-group mb-3">
																<input type="email" class="form-control" name="email"
																	placeholder="Email">
															</div>
															<div class="form-group mb-3">
																<input type="password" class="form-control"
																	name="password" placeholder="Password">
															</div>
															<div class="form-group text-left mb-5 forget-main">
																<div class="text-center bottom">
																	<button type="submit" name="submit"
																		class="btn btn-primary">Log in</button>
																	<button
																		class="nav-link m-auto btn tp-btn-light btn-primary forget-tab"
																		id="nav-forget-tab" data-bs-toggle="tab"
																		data-bs-target="#nav-forget" type="button"
																		role="tab" aria-controls="nav-forget"
																		aria-selected="false">Forget Password ?</button>
																</div>
															</div>
														</form>
													</div>
													<div class="tab-pane fade" id="nav-forget" role="tabpanel"
														aria-labelledby="nav-forget-tab">
														<form class="dz-form">
															<h3 class="form-title m-t0">Forget Password ?</h3>
															<div class="dz-separator-outer m-b5">
																<div class="dz-separator bg-primary style-liner"></div>
															</div>
															<p>Enter your e-mail address below to reset your password.
															</p>
															<div class="form-group mb-4">
																<input name="dzName" required="" class="form-control"
																	placeholder="Email Address" type="text">
															</div>
															<div class="form-group clearfix text-left">
																<button class=" active btn btn-primary"
																	id="nav-personal-tab" data-bs-toggle="tab"
																	data-bs-target="#nav-personal" type="button"
																	role="tab" aria-controls="nav-personal"
																	aria-selected="true">Back</button>
																<button
																	class="btn btn-primary float-end">Submit</button>
															</div>
														</form>
													</div>
													<div class="tab-pane fade" id="nav-sign" role="tabpanel"
														aria-labelledby="nav-sign-tab">
														<form class="dz-form py-2">
															<h3 class="form-title">Sign Up</h3>
															<div class="dz-separator-outer m-b5">
																<div class="dz-separator bg-primary style-liner"></div>
															</div>
															<p>Enter your personal details below: </p>
															<div class="form-group mt-3">
																<input name="dzName" required="" class="form-control"
																	placeholder="Full Name" type="text">
															</div>
															<div class="form-group mt-3">
																<input name="dzName" required="" class="form-control"
																	placeholder="User Name" type="text">
															</div>
															<div class="form-group mt-3">
																<input name="dzName" required="" class="form-control"
																	placeholder="Email Address" type="text">
															</div>

															<div class="form-group mt-3">
																<input name="dzName" required="" class="form-control"
																	placeholder="Password" type="password">
															</div>
															<div class="form-group mt-3 mb-3">
																<input name="dzName" required="" class="form-control"
																	placeholder="Re-type Your Password" type="password">
															</div>
															<div class="mb-3">
																<span class="form-check float-start me-2 ">
																	<input type="checkbox" class="form-check-input"
																		id="check2" name="example1">
																	<label class="form-check-label d-unset"
																		for="check2">I agree to the</label>
																</span>
																<label><a href="#">Terms of Service </a>&amp; <a
																		href="#">Privacy Policy</a></label>
															</div>
															<div class="form-group clearfix text-left">
																<button class="btn btn-primary outline gray"
																	data-bs-toggle="tab" data-bs-target="#nav-personal"
																	type="button" role="tab"
																	aria-controls="nav-personal"
																	aria-selected="true">Back</button>
																<button
																	class="btn btn-primary float-end">Submit</button>
															</div>
														</form>

													</div>
												</div>

											</div>
										</nav>
									</div>

								</div>
							</div>
							<div id="mCSB_1_scrollbar_vertical"
								class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical"
								style="display: block;">
								<div class="mCSB_draggercontainer">
									<div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
										style="position: absolute; min-height: 0px; display: block; height: 652px; max-height: 643px; top: 0px;">
										<div class="mCSB_dragger_bar" style="line-height: 0px;"></div>
										<div class="mCSB_draggerRail"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Full Blog Page Contant -->
		</div>
		<!-- Content END-->
	</div>

	<!--**********************************
	Scripts
***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
</body>

</html>