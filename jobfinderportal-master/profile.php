<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <style>
        body {
            background-color: white;
            /* Màu nền mong muốn */
        }

        .duong_vien {
            border: none;
            /* Xóa đường viền hiện có */
            height: 2px;
            /* Đặt chiều cao của đường viền */
            background-color: #28395a;
            /* Đặt màu nền cho đường viền */
        }
        a:hover
        {   color: black;
            font-weight: bold !important;
        }
    </style>
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-body">


            <header>
                <!-- Header Start -->
                <div class="header-area header-transparrent">
                    <div class="headder-top header-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-2">
                                    <!-- Logo -->
                                    <div class="logo">
                                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="menu-wrapper">
                                        <!-- Main-menu -->
                                        <div class="main-menu">
                                            <nav class="d-none d-lg-block">
                                                <ul id="navigation">
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="job_listing.php">Find a Jobs </a></li>
                                                    <li><a href="about.php">About</a></li>
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                    <?php
                                                    include("connection/checksession.php");
                                                    ?>
                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- Header-btn -->

                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header End -->
            </header>
            <hr class="duong_vien">
            <main>

                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>John Doe</h4>
                                        <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">

                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-lock2" viewBox="0 0 16 16">
                                            <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1m2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224" />
                                            <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1" />
                                        </svg><a id="changepassword" href="index.php">Change password</a></h6>

                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg style="margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg><a href="Editprofile.php">Edit your profile</a></h6>
                                    </h6>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <?php
                        include("connection/connect_profile.php");
                        ?>

                        <div class="card mb-3">
                            <div class="card-body">

                                <div class="row justify-content-center">
                                    <div class="col-xl-10">
                                        <div class="col-sm-3">
                                            <h6 class="d-flex align-items-center mb-3" style="margin-left: -20px;">
                                                <i class="material-icons text-info mr-2">Work History</i>
                                            </h6>

                                        </div>
                                        <!-- single-job-content -->
                                        <div class="single-job-items mb-30">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a href="job_details.php"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                                </div>
                                                <div class="job-tittle">

                                                    <a href="job_details.php">
                                                        <h4 style="margin-bottom: 30px; margin-top:30px">Digital Marketer</h4>
                                                    </a>
                                                    <ul>
                                                        <li>Creative Agency</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                        <li>$3500 - $4000</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <hr>
                                        </div>
                                        <!-- single-job-content -->
                                        <hr>
                                        <div class="single-job-items mb-30">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a href="job_details.php"><img src="assets/img/icon/job-list2.png" alt=""></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="job_details.php">
                                                        <h4 style="margin-bottom: 30px; margin-top:30px">Digital Marketer</h4>
                                                    </a>
                                                    <ul>
                                                        <li>Creative Agency</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                        <li>$3500 - $4000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link f-right">
                                                
                                                <span>7 hours ago</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- single-job-content -->
                                        <div class="single-job-items mb-30">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a href="job_details.php"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="job_details.php">
                                                        <h4 style="margin-bottom: 30px; margin-top:30px">Digital Marketer</h4>
                                                    </a>
                                                    <ul>
                                                        <li>Creative Agency</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                        <li>$3500 - $4000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link f-right">
                                                
                                                <span>7 hours ago</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- single-job-content -->
                                        <div class="single-job-items mb-30">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a href="job_details.php"><img src="assets/img/icon/job-list4.png" alt=""></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="job_details.php">
                                                        <h4 style="margin-bottom: 30px; margin-top:30px">Digital Marketer</h4>
                                                    </a>
                                                    <ul>
                                                        <li>Creative Agency</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                        <li>$3500 - $4000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link f-right">
                                                
                                                <span>7 hours ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/price_rangs.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    </main>
</body>

</html>