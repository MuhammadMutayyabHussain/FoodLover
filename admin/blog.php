<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from salero.dexignzone.com/xhtml/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 05:37:23 GMT -->

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
	<link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="../../cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

	<!-- tagify-css -->
	<link href="vendor/tagify/dist/tagify.css" rel="stylesheet">

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
			<!-- row -->
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-md-3 col-6">
						<div class="card  blog-card">
							<div class="card-body text-center">
								<img src="images/books.png" alt="">
								<h4>Education</h4>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-3 col-6">
						<div class="card  blog-card">
							<div class="card-body text-center">
								<img src="images/news.png" alt="">
								<h4>News</h4>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-3 col-6">
						<div class="card blog-card ">
							<div class="card-body text-center">
								<img src="images/heart.png" alt="">
								<h4>Ranking</h4>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-3 col-6">
						<div class="card  blog-card">
							<div class="card-body text-center">
								<img src="images/file.png" alt="">
								<h4>File Manager</h4>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<dov class="card">
							<div class="card-header border-0">
								<h4 class="h-title mb-0 blog-title">Active News</h4>
								<a href="javascript:void(0)" class="btn btn-primary btn-sm">More</a>
							</div>
							<div class="card-body pt-0">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="blog-img">
											<img src="images/blog/professional.jpg" alt="" class="blk-img">
											<div class="blog-text">
												<h2><a href="ecom-product-detail.html" class="text-white">This quote
														highlights the importance of writing clear.</a></h2>
												<img src="images/contacts/pic1.jpg" class="avatar rounded-circle  me-2"
													alt="">
												<span>Hary in February 05, 2023</span>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12">
										<div class="blog-post">
											<div class="post-1">
												<img src="images/profile/friends/f1.jpg"
													class="avatar rounded-circle me-2 custome-avatar" alt="">
												<div class="post-data">
													<span
														class="badge badge-secondary border-0 badge-sm">DESIGNER</span>
													<h4><a href="javascript:void(0)">Good programmers write code that
															humans can understand.</a></h4>
													<div>
														<img src="images/contacts/pic2.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Marry</b> in March 05, 2023</span>
													</div>
												</div>
											</div>
											<div class="post-1">
												<img src="images/profile/friends/f2.jpg"
													class="avatar rounded-circle me-2 custome-avatar" alt="">
												<div class="post-data">
													<span class="badge badge-primary border-0 badge-sm">SOFTWARE</span>
													<h4><a href="javascript:void(0)">rogramming isn't about what you
															know; it's about what you can figure out.</a></h4>
													<div>
														<img src="images/contacts/pic1.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Harry</b> in April 05, 2023</span>
													</div>
												</div>
											</div>
											<div class="post-1">
												<img src="images/profile/friends/f3.jpg"
													class="avatar rounded-circle me-2 custome-avatar" alt="">
												<div class="post-data">
													<span class="badge badge-warning border-0 badge-sm">MARKTING</span>
													<h4><a href="javascript:void(0)">Debugging is like being a detective
															in a crime movie where you're also the murderer.</a></h4>
													<div>
														<img src="images/contacts/pic1.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Honey</b> in April 05, 2023</span>
													</div>
												</div>
											</div>
											<div class="post-1">
												<img src="images/profile/friends/f4.jpg"
													class="avatar rounded-circle me-2 custome-avatar" alt="">
												<div class="post-data">
													<span class="badge badge-success border-0 badge-sm">SOFTWARE</span>
													<h4><a href="javascript:void(0)">The best way to predict the future
															is to invent it.</a></h4>
													<div>
														<img src="images/contacts/pic1.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Honey</b> in April 05, 2023</span>
													</div>
												</div>
											</div>
											<div class="post-1">
												<img src="images/profile/friends/f2.jpg"
													class="avatar rounded-circle me-2 custome-avatar" alt="">
												<div class="post-data">
													<span
														class="badge badge-secondary border-0 badge-sm">HARDWARE</span>
													<h4><a href="javascript:void(0)">The best way to predict the future
															is to invent it.</a></h4>
													<div>
														<img src="images/contacts/pic1.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Honey</b> in April 05, 2023</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</dov>
					</div>
					<div class="col-xl-9 col-lg-7">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="h-title mb-0 blog-title">Active users</h4>
										<a href="javascript:void(0)" class="btn btn-primary btn-sm">More</a>
									</div>
									<div class="card-body pt-0">
										<div class="blog-img">
											<img src="images/blog/professional2.jpg" alt="" class="blk-img2">
											<div class="blog-text">
												<h2>This quote highlights the importance of writing clear.</h2>
												<img src="images/contacts/pic1.jpg"
													class="avatar  rounded-circle me-1 small-post" alt="">
												<span>Hary in February 05, 2023</span>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6">
												<div class="seconday-post">
													<img src="images/blog/s1.jpg">
													<div class="post-1">
														<div class="post-data">
															<span
																class="badge badge-warning border-0 badge-sm">MARKTING</span>
															<h4>Debugging is like being a detective in a crime movie
																where you're also the murderer.</h4>
															<div>
																<img src="images/contacts/pic1.jpg"
																	class="avatar rounded-circle me-1 small-post"
																	alt="">
																<span><b class="text-primary">Honey</b> in April 05,
																	2023</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="seconday-post">
													<img src="images/blog/s2.jpg">
													<div class="post-1">
														<div class="post-data">
															<span
																class="badge badge-primary border-0 badge-sm">MARKTING</span>
															<h4>Debugging is like being a detective in a crime movie
																where you're also the murderer.</h4>
															<div>
																<img src="images/contacts/pic2.jpg"
																	class="avatar rounded-circle me-1 small-post"
																	alt="">
																<span><b class="text-primary">Honey</b> in April 05,
																	2023</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="seconday-post">
													<img src="images/blog/s3.jpg">
													<div class="post-1">
														<div class="post-data">
															<span
																class="badge badge-secondary border-0 badge-sm">SOFTWARE</span>
															<h4>Debugging is like being a detective in a crime movie
																where you're also the murderer.</h4>
															<div>
																<img src="images/contacts/pic1.jpg"
																	class="avatar rounded-circle me-1 small-post"
																	alt="">
																<span><b class="text-primary">Lisa</b> in April 05,
																	2023</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="seconday-post">
													<img src="images/blog/s2.jpg">
													<div class="post-1">
														<div class="post-data">
															<span
																class="badge badge-info border-0 badge-sm">DESIGNER</span>
															<h4>Debugging is like being a detective in a crime movie
																where you're also the murderer.</h4>
															<div>
																<img src="images/contacts/pic2.jpg"
																	class="avatar rounded-circle me-1 small-post"
																	alt="">
																<span><b class="text-primary">Mona</b> in April 05,
																	2023</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="h-title mb-0 blog-title">READ MORE</h4>
										<a href="javascript:void(0)" class="btn btn-primary btn-sm">More</a>
									</div>
									<div class="card-body pt-0">
										<div class="third-post">
											<img src="images/blog/s3.jpg">
											<div class="post-1">
												<div class="post-data">
													<span class="badge badge-secondary border-0 badge-sm">SEO
														Tools</span>
													<h4>Debugging is like being a detective movie where you're also the
														murderer.</h4>
													<div class="mb-2">
														<img src="images/contacts/pic1.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Lisa</b> in April 05, 2023</span>
													</div>
													<span>
														Lorem Ipsum is simply dummy text of the printing and typesetting
														industry. Lorem Ipsum the industry's standard dummy text ever
														since the 1500s, when an unknown printer took a galley of type
														and scrambled it to make a type specimen book.
													</span>

												</div>
											</div>
										</div>
										<div class="third-post">
											<img src="images/blog/s4.jpg">
											<div class="post-1">
												<div class="post-data">
													<span class="badge badge-info border-0 badge-sm">SEO Tools</span>
													<h4>There are many variations of passages of Lorem Ipsum available.
													</h4>
													<div class="mb-2">
														<img src="images/contacts/pic2.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Moni</b> in April 05, 2023</span>
													</div>
													<span>
														Lorem Ipsum is simply dummy text of the printing and typesetting
														industry. Lorem Ipsum the industry's standard dummy text ever
														since the 1500s, when an unknown printer took a galley of type
														and scrambled it to make a type specimen book.
													</span>
												</div>
											</div>
										</div>
										<div class="third-post">
											<img src="images/blog/s5.jpg">
											<div class="post-1">
												<div class="post-data">
													<span class="badge badge-primary border-0 badge-sm">SEO Tools</span>
													<h4>Debugging is like being a detective movie where you're also the
														murderer.</h4>
													<div class="mb-2">
														<img src="images/contacts/pic3.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Lisa</b> in April 05, 2023</span>
													</div>
													<span>
														Lorem Ipsum is simply dummy text of the printing and typesetting
														industry. Lorem Ipsum the industry's standard dummy text ever
														since the 1500s, when an unknown printer took a galley of type
														and scrambled it to make a type specimen book.
													</span>

												</div>
											</div>
										</div>
										<div class="third-post">
											<img src="images/blog/s6.jpg">
											<div class="post-1">
												<div class="post-data">
													<span class="badge badge-warning border-0 badge-sm">SEO Tools</span>
													<h4>Contrary to popular belief, Lorem Ipsum is not simply random
														text.</h4>
													<div class="mb-2">
														<img src="images/contacts/pic1.jpg"
															class="avatar rounded-circle me-1 small-post" alt="">
														<span><b class="text-primary">Moni</b> in April 05, 2023</span>
													</div>
													<span>
														Lorem Ipsum is simply dummy text of the printing and typesetting
														industry. Lorem Ipsum the industry's standard dummy text ever
														since the 1500s, when an unknown printer took a galley of type
														and scrambled it to make a type specimen book.
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-xl-3 col-lg-5">
						<div class="card-header border-0 pt-0 px-0">
							<h4 class="h-title mb-0 blog-title">POPULAR POSTS</h4>
						</div>
						<div class="recent-post">
							<div class="blog-img style-1">
								<img src="images/blog/professional.jpg" alt="" class="blk-img">
								<div class="blog-text">
									<span class="badge badge-info border-0 badge-sm mb-2">DESIGNER</span>
									<h2>This quote highlights the importance of writing clear.</h2>
									<img src="images/contacts/pic1.jpg" class="avatar avatar-sm rounded-circle me-2"
										alt="">
									<span>Hary in February 05, 2023</span>
								</div>
							</div>
							<div class="third-post style-1">
								<img src="images/blog/s3.jpg">
								<div class="post-1">
									<div class="post-data">
										<h4>Debugging is like being</h4>
										<div class="mb-2">
											<img src="images/contacts/pic1.jpg"
												class="avatar rounded-circle me-1 small-post" alt="">
											<span> April 05, 2023</span>
										</div>
									</div>
								</div>
							</div>
							<div class="third-post style-1">
								<img src="images/blog/s1.jpg">
								<div class="post-1">
									<div class="post-data">
										<h4>Debugging is like being</h4>
										<div class="mb-2">
											<img src="images/contacts/pic2.jpg"
												class="avatar rounded-circle me-1 small-post" alt="">
											<span> April 05, 2023</span>
										</div>
									</div>
								</div>
							</div>
							<div class="third-post style-1">
								<img src="images/blog/s3.jpg">
								<div class="post-1">
									<div class="post-data">
										<h4>It is a long established fact that a reader wil</h4>
										<div class="mb-2">
											<img src="images/contacts/pic2.jpg"
												class="avatar rounded-circle me-1 small-post" alt="">
											<span> April 05, 2023</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-header border-0 pt-0 px-0 pb-2">
							<h4 class="h-title mb-0 blog-title">SOCIAL PLUGIN</h4>
						</div>
						<div class="mb-4">
							<ul class="c-social">
								<li><a href="javascript:void(0);" class="bg-facebook"><i
											class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="javascript:void(0);" class="bg-whatsapp"><i
											class="fa-brands fa-whatsapp"></i></a></li>
								<li><a href="javascript:void(0);" class="bg-linkedin"><i
											class="fa-brands fa-linkedin-in"></i></a></li>
								<li><a href="javascript:void(0);" class="bg-skype"><i
											class="fa-brands fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="card h-auto notifiy">
							<div class="card-body">
								<div class="icon-box icon-box-sm bg-primary">
									<i class="fa-solid fa-bell text-white"></i>
								</div>
								<div class="notify-data">
									<h6>Follow by Email</h6>
									<span>Get Notified About Next Update Direct to Your inbox</span>
									<form>
										<div class="mt-3">
											<input type="email" class="form-control form-control-sm"
												id="exampleInputEmail1" aria-describedby="emailHelp"
												placeholder="Enter Email">
											<a href="javascript:void(0)"
												class="btn btn-primary btn-sm  d-block mt-3">subscribe</a>
										</div>
										<span class="text-start mt-2 d-block text-danger">* We promise that we don't
											spam !
										</span>
									</form>
								</div>
							</div>
						</div>
						<div class="recent-post">
							<div class="card-header border-0 pt-0 px-0 pb-2">
								<h4 class="h-title mb-0 blog-title">websites</h4>
							</div>
							<div class="third-post style-1">
								<img src="images/blog/s3.jpg">
								<div class="post-1">
									<div class="post-data">
										<h4>Debugging is like being</h4>
										<div class="mb-2">
											<span> April 05, 2023</span>
										</div>
									</div>
								</div>
							</div>
							<div class="third-post style-1">
								<img src="images/blog/s1.jpg">
								<div class="post-1">
									<div class="post-data">
										<h4>Debugging is like being</h4>
										<div class="mb-2">
											<span> April 05, 2023</span>
										</div>
									</div>
								</div>
							</div>
							<div class="third-post style-1">
								<img src="images/blog/s3.jpg">
								<div class="post-1">
									<div class="post-data">
										<h4>It is a established fact</h4>
										<div class="mb-2">
											<span> April 05, 2023</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="recent-post">
							<div class="card-header border-0 pt-0 px-0 pb-2">
								<h4 class="h-title mb-0 blog-title">Comments</h4>
							</div>
							<div class="third-post style-2">
								<img src="images/contacts/pic1.jpg" class="avatar  rounded-circle me-2 av-post" alt="">
								<div class="post-1">
									<div class="post-data">
										<h4 class="mb-0">James Marry</h4>
										<div class="">
											<span> This is Nice!!</span>
										</div>
									</div>
								</div>
							</div>
							<div class="third-post style-2">
								<img src="images/contacts/pic2.jpg" class="avatar  rounded-circle me-2 av-post" alt="">
								<div class="post-1">
									<div class="post-data">
										<h4 class="mb-0">Robert Patricia</h4>
										<div class="">
											<span> This is Coments!!</span>
										</div>
									</div>
								</div>
							</div>
							<div class="third-post style-2">
								<img src="images/contacts/pic3.jpg" class="avatar  rounded-circle me-2 av-post" alt="">
								<div class="post-1">
									<div class="post-data">
										<h4 class="mb-0">John Jennifer</h4>
										<div class="">
											<span> This is Coments!!</span>
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
			Footer start
		***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
			</div>
		</div>
		<!--**********************************
			Footer end
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

	<!-- Vectormap -->
	<script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>



</body>


</html>