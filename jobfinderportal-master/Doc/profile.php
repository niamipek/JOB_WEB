<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">






    <link rel="stylesheet" href="css/fontawesome-all.min.css">



    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-body">

            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>

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
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Kenneth Valdez
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    binhquyen296@gmail.com
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    (239) 816-9029
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">

                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <div class="col-sm-3">
                                        <h6 class="d-flex align-items-center mb-3"><i
                                                class="material-icons text-info mr-2">
                                                Work History</i></h6>
                                    </div>
                                    <!-- single-job-content -->
                                    <div class="single-job-items mb-30">
                                        <div class="job-items">
                                            <div class="company-img">
                                                <a href="job_details.php"><img src="assets/img/icon/job-list1.png"
                                                        alt=""></a>
                                            </div>
                                            <div class="job-tittle">
                                                <hr>
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
</body>

</html>