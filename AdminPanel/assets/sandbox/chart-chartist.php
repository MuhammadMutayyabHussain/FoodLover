<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from salero.dexignzone.com/xhtml/chart-chartist.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 05:38:05 GMT -->
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
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
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
		include("components/header.php");
		?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		<?php
		include("components/sidebar.php");
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
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Advanced Smil Animation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="smil-animations" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Simple line chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="simple-line-chart" class="ct-chart ct-golden-section chartlist-chart" ></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Line Scatter Diagram</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="scatter-diagram" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Line chart with tooltips</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="line-chart-tooltips" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Line chart with area</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-with-area" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bi-polar Line chart with area only</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="bi-polar-line" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">SVG Path animation</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="svg-animation" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Line Interpolation / Smoothing</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="line-smoothing" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Different configuration for different series</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="different-series" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">SVG Animations chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="svg-dot-animation" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bi-polar bar chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="bi-polar-bar" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Overlapping bars on mobile</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="overlapping-bars" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Multi-line labels</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="multi-line-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Stacked bar chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="stacked-bar-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Horizontal bar chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="horizontal-bar-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Extreme responsive configuration</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="extreme-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Label placement</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="label-placement-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Animating a Donut with Svg.animate</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="animating-donut" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Simple pie chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Pie chart with custom labels</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="pie-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Gauge chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="gauge-chart" class="ct-chart ct-golden-section chartlist-chart"></div>
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
        <div class="footer out-footer">
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
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
    
    <!-- Chart Chartist plugin files -->
    <script src="vendor/chartist/js/chartist.min.js"></script>
    <script src="vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/plugins-init/chartist-init.js"></script>

	<script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from salero.dexignzone.com/xhtml/chart-chartist.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 05:38:06 GMT -->
</html>