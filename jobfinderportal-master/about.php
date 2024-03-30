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
                                            session_start();
                                            if (isset($_SESSION['user'])) {
                                                if ($_SESSION['user'] == 'admin') {
                                                    $html = '<li id="login"><a href="#"><img width=30px height=30px src="Doc\img\group.png" alt="User Information"></a>
                                                                <ul class="submenu">
                                                                    <li><a href="manageaccount.php"><b>Manage User</b></a></li>
                                                                    <li id="login"><a href="logout.php">Logout</a></li>
                                                                </ul>
                                                            </li>';
                                                    echo $html;
                                                } else {
                                                    $html = '<li id="login"><a href="#"><img width=30px height=30px src="Doc\img\user (1).png" alt="User Information"></a>
                                                                <ul class="submenu">
                                                                    <li><a href="#">Manage Profile</a></li>
                                                                    <li id="login"><a href="logout.php">Logout</a></li>
                                                                </ul>
                                                            </li>';
                                                    echo $html;
                                                }
                                            } else {
                                                echo '<li id="login"><a href="loginform.php">Login / Register</a></li>';
                                            }
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
    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center"
                data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>About us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Support Company Start-->
        <div class="support-company-area fix section-padding2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span class="What_we_are_doing">What we are doing</span>
                                <script>

                                    const class_of_What_we_are_doing = document.querySelector('.What_we_are_doing');

                                    const checkWhat = () => {
                                        const triggerBottom = window.innerHeight / 5 * 4;
                                        const position_of_What_we_are_doing = class_of_What_we_are_doing.getBoundingClientRect().top;
                                        if (position_of_What_we_are_doing < triggerBottom) {
                                            class_of_What_we_are_doing.classList.add('show');
                                        } if (position_of_What_we_are_doing > triggerBottom) {
                                            class_of_What_we_are_doing.classList.remove('show');
                                        }
                                    }

                                    window.addEventListener('scroll', checkWhat);
                                    checkWhat();

                                </script>
                                <h2 class="Talented_people_are_getting_Jobs">24k Talented people are getting Jobs</h2>
                                <script>
                                    const class_of_Talented_people_are_getting_Jobs = document.querySelector('.Talented_people_are_getting_Jobs');
                                    const checkTalented = () => {
                                        const triggerBottom = window.innerHeight / 5 * 4;
                                        const position_of_Talented_people_are_getting_Jobs = class_of_Talented_people_are_getting_Jobs.getBoundingClientRect().top;
                                        if (position_of_Talented_people_are_getting_Jobs < triggerBottom) {
                                            class_of_Talented_people_are_getting_Jobs.classList.add('show');
                                        } if (position_of_Talented_people_are_getting_Jobs > triggerBottom) {
                                            class_of_Talented_people_are_getting_Jobs.classList.remove('show');
                                        }
                                    }
                                    window.addEventListener('scroll', checkTalented);
                                    checkTalented();
                               </script>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top longpara">We are a job search platform committed to creating limitless opportunities for both job seekers and employers. We pledge to connect job seekers with reputable companies and provide career development opportunities</p>
                                    <script>
                                        const class_of_longpara = document.querySelector('.longpara');
                                        const checkLongpara = () => {
                                            const triggerBottom = window.innerHeight / 5 * 4;
                                            const position_of_longpara = class_of_longpara.getBoundingClientRect().top;
                                            if (position_of_longpara < triggerBottom) {
                                                class_of_longpara.classList.add('show');
                                            } if (position_of_longpara > triggerBottom) {
                                                class_of_longpara.classList.remove('show');
                                            }
                                        }
                                        window.addEventListener('scroll', checkLongpara);
                                        checkLongpara();
                                   </script>
                                <p class="shortpara">With a diverse range of industries and job positions, we continuously strive to deliver the best recruitment experience for everyone. Utilizing advanced technology and intelligent algorithms, we promise that the process of job search and recruitment will become quick, convenient, and effective. With a team of passionate and professional staff, we are ready to support and advise you in every step of your job search or recruitment journey. Let's together build a bright future for both you and the surrounding community.</p>
                                    <script>
                                        const class_of_shortpara = document.querySelector('.shortpara');
                                        const checkShortpara = () => {
                                            const triggerBottom = window.innerHeight / 5 * 4;
                                            const position_of_shortpara = class_of_shortpara.getBoundingClientRect().top;
                                            if (position_of_shortpara < triggerBottom) {
                                                class_of_shortpara.classList.add('show');
                                            } if (position_of_shortpara > triggerBottom) {
                                                class_of_shortpara.classList.remove('show');
                                            }
                                        }
                                        window.addEventListener('scroll', checkShortpara);
                                        checkShortpara();
                                   </script>
                                <a href="formpostajob.php" class="btn post-btn button">Post a job</a>
                                <script>
                                    const class_of_button = document.querySelector('.button');
                                    const checkButton = () => {
                                        const triggerBottom = window.innerHeight / 5 * 4;
                                        const position_of_button = class_of_button.getBoundingClientRect().top;
                                        if (position_of_button < triggerBottom) {
                                            class_of_button.classList.add('show');
                                        } if (position_of_button > triggerBottom) {
                                            class_of_button.classList.remove('show');
                                        }
                                    }
                                    window.addEventListener('scroll', checkButton);
                                    checkButton();
                               </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img class="spimg" src="assets/img/service/support-img.jpg" alt="">
                            <script>

                                const class_of_spimg = document.querySelector('.spimg');

                                const checkSpimg = () => {
                                    const triggerBottom = window.innerHeight / 5 * 4;
                                    const position_of_spimg = class_of_spimg.getBoundingClientRect().top;
                                    if (position_of_spimg < triggerBottom) {
                                        class_of_spimg.classList.add('show');
                                    } if (position_of_spimg > triggerBottom) {
                                        class_of_spimg.classList.remove('show');
                                    }
                                }

                                window.addEventListener('scroll', checkSpimg);
                                checkSpimg();

                            </script>
                            <div class="support-img-cap text-center since">
                                <p>Since</p>
                                <span >1994</span>
                                <script>

                                    const class_of_since = document.querySelector('.since');
    
                                    const checkSince = () => {
                                        const triggerBottom = window.innerHeight / 5 * 4;
                                        const position_of_since = class_of_since.getBoundingClientRect().top;
                                        if (position_of_since < triggerBottom) {
                                            class_of_since.classList.add('show');
                                        } else {
                                            class_of_since.classList.remove('show');
                                        }
                                    }
    
                                    window.addEventListener('scroll', checkSince);
                                    checkSince();
    
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply process</span>
                            <h2> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                                <h5>1. Search a job</h5>
                                <p>Finding the right job is like finding a puzzle piece to complete your career. Let's search together.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                                <h5>2. Apply for job</h5>
                                <p>Ready to take the next step in your career? Apply now and let your journey begin.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                                <h5>3. Get your job</h5>
                                <p>Your dream job won't come knocking on your door. You have to go out and get it. Start by sending in your CV.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- How  Apply Process End-->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“Don't wait for the perfect opportunity. Create it by submitting your CV today.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“Every CV submitted is a step closer to your dream job. Take that step today.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                            responsibility! So start caring for your body and it will care for you. Eat
                                            clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <!-- Online CV Area Start -->
        <div class="online-cv cv-bg section-overly pt-90 pb-120" data-background="assets/img/gallery/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">FEATURED TOURS Packages</p>
                            <p class="pera2"> Make a Difference with Your Online Resume!</p>
                            <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->

        <!-- Blog Area Start -->
        <div class="home-blog-area blog-h-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span class="Our_latest_blog">Our latest blog</span>
                            <script>

                                const class_of_Our_latest_blog = document.querySelector('.Our_latest_blog');

                                const checkOur_latest_blog = () => {
                                    const triggerBottom = window.innerHeight / 5 * 4;
                                    const position_of_Our_latest_blog= class_of_Our_latest_blog.getBoundingClientRect().top;
                                    if (position_of_Our_latest_blog < triggerBottom) {
                                        class_of_Our_latest_blog.classList.add('show');
                                    } else {
                                        class_of_Our_latest_blog.classList.remove('show');
                                    }
                                }

                                window.addEventListener('scroll', checkOur_latest_blog);
                                checkOur_latest_blog();

                            </script>
                            <h2 class="Our_recent_news">Our recent news</h2>
                            <script>

                                const class_of_Our_recent_news = document.querySelector('.Our_recent_news');

                                const checkOur_recent_news = () => {
                                    const triggerBottom = window.innerHeight / 5 * 4;
                                    const position_of_Our_recent_news= class_of_Our_recent_news.getBoundingClientRect().top;
                                    if (position_of_Our_recent_news < triggerBottom) {
                                        class_of_Our_recent_news.classList.add('show');
                                    } else {
                                        class_of_Our_recent_news.classList.remove('show');
                                    }
                                }

                                window.addEventListener('scroll', checkOur_recent_news);
                                checkOur_recent_news();

                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap blog1">
                                <div class="blog-img">
                                    <img src="assets/img/blog/home-blog1.jpg" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Properties</p>
                                    <h3><a href="single-blog.php">Footprints in Time is perfect House in Kurashiki</a>
                                    </h3>
                                    <a href="#" class="more-btn">Read more »</a>
                                    <script>

                                        const class_of_blog1 = document.querySelector('.blog1');
        
                                        const checkBlog1 = () => {
                                            const triggerBottom = window.innerHeight / 5 * 4;
                                            const position_of_blog1= class_of_blog1.getBoundingClientRect().top;
                                            if (position_of_blog1 < triggerBottom) {
                                                class_of_blog1.classList.add('show');
                                            } else {
                                                class_of_blog1.classList.remove('show');
                                            }
                                        }
        
                                        window.addEventListener('scroll', checkBlog1);
                                        checkBlog1();
        
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap blog2">
                                <div class="blog-img">
                                    <img src="assets/img/blog/home-blog2.jpg" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <p>| Properties</p>
                                    <h3><a href="single-blog.php">Footprints in Time is perfect House in Kurashiki</a>
                                    </h3>
                                    <a href="#" class="more-btn">Read more »</a>
                                </div>
                                <script>

                                    const class_of_blog2 = document.querySelector('.blog2');
    
                                    const checkBlog2 = () => {
                                        const triggerBottom = window.innerHeight / 5 * 4;
                                        const position_of_blog2= class_of_blog2.getBoundingClientRect().top;
                                        if (position_of_blog2 < triggerBottom) {
                                            class_of_blog2.classList.add('show');
                                        } else {
                                            class_of_blog2.classList.remove('show');
                                        }
                                    }
    
                                    window.addEventListener('scroll', checkBlog2);
                                    checkBlog2();
    
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

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
                                        <p>We are a job search platform committed to creating limitless opportunities for both job seekers and employers.</p>
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
                                        <p>Address :TDTU</p>
                                    </li>
                                    <li> Phone : 0903614098</li>
                                    <li> Email:522H0078@student.tdtu.edu.vn</li>
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
                                
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <h4>Company</h4>    
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

</body>

</html>