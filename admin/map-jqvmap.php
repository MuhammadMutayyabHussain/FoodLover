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
    <!-- Vectormap -->
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
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
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Plugins</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Jqv Map</a></li>
                </ol>
            </div>
            <div class="container">


                <!-- row -->

                <!-- Vectormap -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">World Map</h4>
                            </div>
                            <div class="card-body">
                                <div id="world-map"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">USA</h4>
                            </div>
                            <div class="card-body">
                                <div id="usa" style="height: 450px;"></div>
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

    <!-- Vectormap -->
    <script src="vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.world.js"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <!-- All init script -->
    <script src="js/plugins-init/jqvmap-init.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

</html>