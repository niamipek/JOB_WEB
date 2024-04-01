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
                                                    <li><a href="#">Page</a>
                                                        <ul class="submenu">
                                                            <li><a href="blog.php">Blog</a></li>
                                                            <li><a href="single-blog.php">Blog Details</a></li>
                                                            <li><a href="elements.php">Elements</a></li>
                                                            <li><a href="job_details.php">job Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.php">Contact</a></li>
                                                    <?php
                                                    include ("connection/checksession.php");
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
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">
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
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-github mr-2 icon-inline">
                                            <path
                                                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                            </path>
                                        </svg><a class="changePass" href="index.php">Change password</a></h6>

                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-twitter mr-2 icon-inline text-info">
                                            <path
                                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg><a href="Editprofile.php">Edit your profile</a></h6>
                                    </h6>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <?php
                        include ("connection/connect_profile.php");
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
                                                    <a href="job_details.php"><img src="assets/img/icon/job-list1.png"
                                                            alt=""></a>
                                                </div>
                                                <div class="job-tittle">

                                                    <a href="job_details.php">
                                                        <h4>Digital Marketer</h4>
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
                                                    <a href="job_details.php"><img src="assets/img/icon/job-list2.png"
                                                            alt=""></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="job_details.php">
                                                        <h4>Digital Marketer</h4>
                                                    </a>
                                                    <ul>
                                                        <li>Creative Agency</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                        <li>$3500 - $4000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link f-right">
                                                <a href="job_details.php">Full Time</a>
                                                <span>7 hours ago</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- single-job-content -->
                                        <div class="single-job-items mb-30">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a href="job_details.php"><img src="assets/img/icon/job-list3.png"
                                                            alt=""></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="job_details.php">
                                                        <h4>Digital Marketer</h4>
                                                    </a>
                                                    <ul>
                                                        <li>Creative Agency</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                        <li>$3500 - $4000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link f-right">
                                                <a href="job_details.php">Full Time</a>
                                                <span>7 hours ago</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- single-job-content -->
                                        <div class="single-job-items mb-30">
                                            <div class="job-items">
                                                <div class="company-img">
                                                    <a href="job_details.php"><img src="assets/img/icon/job-list4.png"
                                                            alt=""></a>
                                                </div>
                                                <div class="job-tittle">
                                                    <a href="job_details.php">
                                                        <h4>Digital Marketer</h4>
                                                    </a>
                                                    <ul>
                                                        <li>Creative Agency</li>
                                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                                        <li>$3500 - $4000</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="items-link f-right">
                                                <a href="job_details.php">Full Time</a>
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