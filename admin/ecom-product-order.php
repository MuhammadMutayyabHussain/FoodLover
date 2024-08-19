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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-sm mb-0">
                                        <thead class="text-white bg-primary">
                                            <tr>
                                                <th class="align-middle">
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th class="align-middle">Order</th>
                                                <th class="align-middle pe-7">Date</th>
                                                <th class="align-middle" style="min-width: 12.5rem;">Ship To</th>
                                                <th class="align-middle text-end">Status</th>
                                                <th class="align-middle text-end">Amount</th>
                                                <th class="no-sort"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="orders">
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-success">
                                                        <input type="checkbox" class="form-check-input" id="checkbox">
                                                        <label class="form-check-label" for="checkbox"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#181</span></a> by <span class="">Ricky
                                                        Antony</span><br><a
                                                        href="mailto:ricky@example.com">ricky@example.com</a>
                                                </td>
                                                <td class="py-2">20/04/2020</td>
                                                <td class="py-2">Ricky Antony, 2392 Main Avenue, Penasauka, New Jersey
                                                    02149
                                                    <p class="mb-0 text-500">Via Flat Rate</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-success badge-sm">Completed<span
                                                            class="ms-1 fa fa-check"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$99
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-0" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-0">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox ">
                                                        <input type="checkbox" class="form-check-input" id="checkbox1">
                                                        <label class="form-check-label" for="checkbox1"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#182</span></a> by <span class="order">Kin
                                                        Rossow</span><br><a
                                                        href="mailto:kin@example.com">kin@example.com</a>
                                                </td>
                                                <td class="py-2">20/04/2020</td>
                                                <td class="py-2">Kin Rossow, 1 Hollywood Blvd,Beverly Hills, California
                                                    90210
                                                    <p class="mb-0 text-500">Via Free Shipping
                                                    </p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-primary badge-sm">Processing<span
                                                            class="ms-1 fa fa-redo"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$120
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-1" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-1">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-secondary">
                                                        <input type="checkbox" class="form-check-input" id="checkbox2">
                                                        <label class="form-check-label" for="checkbox2"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#183</span></a> by <span class="order">Merry
                                                        Diana</span><br><a
                                                        href="mailto:merry@example.com">merry@example.com</a>
                                                </td>
                                                <td class="py-2">30/04/2020</td>
                                                <td class="py-2">Merry Diana, 1 Infinite Loop, Cupertino, California
                                                    90210
                                                    <p class="mb-0 text-500">Via Link Road</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-secondary  badge-sm">On
                                                        Hold<span class="ms-1 fa fa-ban"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$70
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-2" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-2">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox  checkbox-warning">
                                                        <input type="checkbox" class="form-check-input" id="checkbox3">
                                                        <label class="form-check-label" for="checkbox3"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#184</span></a> by <span class="order">Bucky
                                                        Robert</span><br><a
                                                        href="mailto:bucky@example.com">bucky@example.com</a>
                                                </td>
                                                <td class="py-2">30/04/2020</td>
                                                <td class="py-2">Bucky Robert, 1 Infinite Loop, Cupertino, California
                                                    90210
                                                    <p class="mb-0 text-500">Via Free Shipping</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-warning badge-sm">Pending<span
                                                            class="ms-1 fas fa-stream"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$92
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-3" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-3">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-secondary">
                                                        <input type="checkbox" class="form-check-input" id="checkbox4">
                                                        <label class="form-check-label" for="checkbox4"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#185</span></a> by <span class="order">Rocky
                                                        Zampa</span><br><a
                                                        href="mailto:rocky@example.com">rocky@example.com</a>
                                                </td>
                                                <td class="py-2">30/04/2020</td>
                                                <td class="py-2">Rocky Zampa, 1 Infinite Loop, Cupertino, California
                                                    90210
                                                    <p class="mb-0 text-500">Via Free Road</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-secondary badge-sm">On
                                                        Hold<span class="ms-1 fa fa-ban"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$120
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-4" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-4">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox ">
                                                        <input type="checkbox" class="form-check-input" id="checkbox5">
                                                        <label class="form-check-label" for="checkbox5"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#186</span></a> by <span class="order">Ricky
                                                        John</span><br><a
                                                        href="mailto:ricky@example.com">ricky@example.com</a>
                                                </td>
                                                <td class="py-2">30/04/2020</td>
                                                <td class="py-2">Ricky John, 1 Infinite Loop, Cupertino, California
                                                    90210
                                                    <p class="mb-0 text-500">Via Free Shipping</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-primary badge-sm">Processing<span
                                                            class="ms-1 fa fa-redo"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$145
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-5" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-5">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-success">
                                                        <input type="checkbox" class="form-check-input" id="checkbox6">
                                                        <label class="form-check-label" for="checkbox6"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#187</span></a> by <span
                                                        class="order">Cristofer
                                                        Henric</span><br><a
                                                        href="mailto:cristofer@example.com">cristofer@example.com</a>
                                                </td>
                                                <td class="py-2">30/04/2020</td>
                                                <td class="py-2">Cristofer Henric, 1 Infinite Loop, Cupertino,
                                                    California 90210
                                                    <p class="mb-0 text-500">Via Flat Rate
                                                    </p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-success badge-sm">Completed<span
                                                            class="ms-1 fa fa-check"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$55
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-6" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-6">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-secondary">
                                                        <input type="checkbox" class="form-check-input" id="checkbox7">
                                                        <label class="form-check-label" for="checkbox7"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#188</span></a> by <span class="order">Brate
                                                        Lee</span><br><a
                                                        href="mailto:lee@example.com">lee@example.com</a>
                                                </td>
                                                <td class="py-2">29/04/2020</td>
                                                <td class="py-2">Brate Lee, 1 Infinite Loop, Cupertino, California 90210
                                                    <p class="mb-0 text-500">Via Link Road</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-secondary badge-sm">On
                                                        Hold<span class="ms-1 fa fa-ban"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$90
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-7" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-7">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox ">
                                                        <input type="checkbox" class="form-check-input" id="checkbox8">
                                                        <label class="form-check-label" for="checkbox8"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#189</span></a> by <span
                                                        class="order">Thomas
                                                        Stephenson</span><br><a
                                                        href="mailto:Stephenson@example.com">Stephenson@example.com</a>
                                                </td>
                                                <td class="py-2">29/04/2020</td>
                                                <td class="py-2">Thomas Stephenson, 116 Ballifeary Road, Bamff
                                                    <p class="mb-0 text-500">Via Flat Rate</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-primary badge-sm">Processing<span
                                                            class="ms-1 fa fa-redo"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$52
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-8" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-8">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-success">
                                                        <input type="checkbox" class="form-check-input" id="checkbox9">
                                                        <label class="form-check-label" for="checkbox9"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#190</span></a> by <span class="order">Evie
                                                        Singh</span><br><a
                                                        href="mailto:eviewsing@example.com">eviewsing@example.com</a>
                                                </td>
                                                <td class="py-2">29/04/2020</td>
                                                <td class="py-2">Evie Singh, 54 Castledore Road, Tunstead
                                                    <p class="mb-0 text-500">Via Flat Rate</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-success badge-sm">Completed<span
                                                            class="ms-1 fa fa-check"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$90
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-9" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-9">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-success">
                                                        <input type="checkbox" class="form-check-input" id="checkbox10">
                                                        <label class="form-check-label" for="checkbox10"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#191</span></a> by <span class="order">David
                                                        Peters</span><br><a
                                                        href="mailto:peter@example.com">peter@example.com</a>
                                                </td>
                                                <td class="py-2">29/04/2020</td>
                                                <td class="py-2">David Peters, Rhyd Y Groes, Rhosgoch, LL66 0AT
                                                    <p class="mb-0 text-500">Via Link Road</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-success badge-sm">Completed<span
                                                            class="ms-1 fa fa-check"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$69
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-10" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-10">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox ">
                                                        <input type="checkbox" class="form-check-input" id="checkbox11">
                                                        <label class="form-check-label" for="checkbox11"></label>
                                                    </div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <span class="order">#192</span></a> by <span>Jennifer
                                                        Johnson</span><br><a
                                                        href="mailto:jennifer@example.com">jennifer@example.com</a>
                                                </td>
                                                <td class="py-2">28/04/2020</td>
                                                <td class="py-2">Jennifer Johnson, Rhyd Y Groes, Rhosgoch, LL66 0AT
                                                    <p class="mb-0 text-500">Via Flat Rate</p>
                                                </td>
                                                <td class="py-2 text-end"><span
                                                        class="badge badge-primary badge-sm">Processing<span
                                                            class="ms-1 fa fa-redo"></span></span>
                                                </td>
                                                <td class="py-2 text-end font-w600">$112
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button
                                                            class="btn btn-primary tp-btn-light sharp" type="button"
                                                            id="order-dropdown-11" data-bs-toggle="dropdown"
                                                            data-boundary="viewport" aria-haspopup="true"
                                                            aria-expanded="false"><span><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="18px" height="18px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <circle fill="#000000" cx="12" cy="5" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                                        </circle>
                                                                        <circle fill="#000000" cx="12" cy="19" r="2">
                                                                        </circle>
                                                                    </g>
                                                                </svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0"
                                                            aria-labelledby="order-dropdown-11">
                                                            <div class="py-2"><a class="dropdown-item"
                                                                    href="javascript:void(0);">Completed</a><a
                                                                    class="dropdown-item"
                                                                    href="javascript:void(0);">Processing</a><a
                                                                    class="dropdown-item" href="javascript:void(0);">On
                                                                    Hold</a><a class="dropdown-item"
                                                                    href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="javascript:void(0);">Delete</a>
                                                            </div>
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
    <script src="js/custom.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>

</html>