<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job board HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/stylechotextbox.css">
</head>

<body>
    <!-- Preloader Start -->
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
    <!-- Preloader Start -->
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
                                            include ("connection/checksession.php");
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
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
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center"
                data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Get your job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="col-12">
                    <div class="job-category-listing mb-50">
                        <div class="single-listing">
                            <div class="small-section-tittle2">
                                <h4>Job Name</h4>
                                <input type="text" name="jname" id="jname" placeholder="Enter job name">
                            </div>
                            <div class="small-section-tittle2">
                                <h4 style="margin-top: 10px;">Job Company</h4>
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'job_web');
                                $jcompany = '';
                                $query = "SELECT jcompany FROM job GROUP BY jcompany ORDER BY jcompany ASC";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                    $jcompany .= '<option value="' . $row["jcompany"] . '">' . $row["jcompany"] . '</option>';
                                }
                                ?>
                                <div class="select-job-items2">
                                    <select name="jcompany" id="jcompany">
                                        <option value="">--Select Company--</option>
                                        <?php echo $jcompany ?>
                                    </select>
                                </div>
                            </div>
                            <div class="single-listing">
                                <div class="small-section-tittle2">
                                    <h4 style="margin-top: 10px;">Job Location</h4>
                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'job_web');
                                    $jlocation = '';
                                    $query = "SELECT jlocation FROM job GROUP BY jlocation ORDER BY jlocation ASC";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $jlocation .= '<option value="' . $row["jlocation"] . '">' . $row["jlocation"] . '</option>';
                                    }
                                    ?>
                                    <div class="select-job-items2">
                                        <select name="jlocation" id="jlocation">
                                            <option value="">--Select Location--</option>
                                            <?php echo $jlocation ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form id="jobSearchForm">
                            <div class="form-group"> <button id="submitBtn" style="margin-top:20px;width:100%;"
                                    type="submit" class="btn btn-danger btn-block">Search</button>
                            </div>
                        </form>
                        <script>
                            $(document).ready(function () {
                                $('#submitBtn').click(function () {
                                    var company = $('#jcompany').val();
                                    var location = $('#jlocation').val();
                                    var jobName = $('#jname').val();

                                    if (jobName === '') {
                                        if (company === '') {
                                            $.ajax({
                                                url: 'filter/emptyCompany.php',
                                                type: 'POST',
                                                data: {
                                                    location: location
                                                },
                                                success: function (response) {
                                                    $('#jobList').html(response);
                                                }
                                            });
                                        } else if (location === '') {
                                            $.ajax({
                                                url: 'filter/emptyLocation.php',
                                                type: 'POST',
                                                data: {
                                                    company: company
                                                },
                                                success: function (response) {
                                                    $('#jobList').html(response);
                                                }
                                            });
                                        } else {
                                            $.ajax({
                                                url: 'filter/process.php',
                                                type: 'POST',
                                                data: {
                                                    company: company,
                                                    location: location
                                                },
                                                success: function (response) {
                                                    $('#jobList').html(response);
                                                }
                                            });
                                        }
                                    } else {
                                        if ($.trim(company) !== '' && $.trim(location) !== '') {
                                            $.ajax({
                                                url: 'filter/fulldata.php',
                                                type: 'POST',
                                                data: {
                                                    company: company,
                                                    location: location,
                                                    jobName: jobName
                                                },
                                                success: function (response) {
                                                    $('#jobList').html(response);
                                                }
                                            });
                                        } else if ($.trim(location) !== '') {
                                            $.ajax({
                                                url: 'filter/haveJnameandJlocation.php',
                                                type: 'POST',
                                                data: {
                                                    location: location,
                                                    jobName: jobName
                                                },
                                                success: function (response) {
                                                    $('#jobList').html(response);
                                                }
                                            });
                                        } else if ($.trim(company) !== '') {
                                            $.ajax({
                                                url: 'filter/haveJnameandJcompany.php',
                                                type: 'POST',
                                                data: {
                                                    company: company,
                                                    jobName: jobName
                                                },
                                                success: function (response) {
                                                    $('#jobList').html(response);
                                                }
                                            });
                                        }
                                    }
                                    if (jobName !== '' && $.trim(company) === '' && $.trim(location) === '') {
                                        $.ajax({
                                            url: 'filter/onlyJname.php',
                                            type: 'POST',
                                            data: {
                                                jobName: jobName
                                            },
                                            success: function (response) {
                                                $('#jobList').html(response);
                                            }
                                        });
                                    }
                                });
                            });
                        </script>
                    </div>

                </div>

                <div>
                    <!-- Right content -->
                    <div>
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <div id="jobList"></div>
                            </div>
                    </div>
                </div>

                <div>
                    <!-- Right content -->
                    <div>
                        <!-- Featured_job_start -->
                        <section class="featuredJob" class="featured-job-area">
                            <div class="container">
                                <?php
                                include ('connection/connection_job.php');
                                ?>
                            </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function () {
                        $('#jobSearchForm').submit(function (event) {
                            event.preventDefault(); // Ngăn chặn việc gửi biểu mẫu
                            $('.featuredJob').css('display', 'none'); // Thêm thuộc tính style vào phần có class là featuredJob
                        });
                    });
                </script>
            </div>
        </div>
    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <div class="footer-pera">
                                        <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so
                                            behold.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                        <p>Address :Your address goes
                                            here, your demo address.</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="assets/img/icon/form.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                            <a href="index.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>5000+</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <!-- Footer Bottom Tittle -->
                        <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-10 col-lg-10 ">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                    This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Range -->
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

</body>

</html>